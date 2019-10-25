<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $store = Store::count();
        $repair = Store::where('date_out','In progress')->count();
        $release = Store::where('date_out','!=','In progress')->count();
        $percentage = ($repair/$store)*100;
        //dd($percentage);
        return view('admin.admin_index', compact('store','repair','release','percentage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('admin.admin_input');
    }


    public function store(Request $request)

    {
        Store::create($this->validateRequest());

        return back()->with('message','Submission successifully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function report()

    {
        return view('admin.admin_report');
    }


    public function table()

    {
        $table = Store::paginate(10);
        return view('admin.basic_table',compact('table'));
    }

   public function admin_profile()
    {
        $data = User::all();
        return view('admin.admin_profile',compact('data'));
    }


      private function validateRequest()
        {
            return request()->validate([

                'date_in' => ['required','string','max:255'],
                'type_of_machine' => ['required','string','max:255'],
                'serial_number' => ['required','string','max:255'],
                'location' => ['required', 'string', 'max:255'],
                'brought_by' => ['required', 'string', 'max:255'],
                
            ]);


        }


        public function output(Request $request)

            {
               if (Store::where('id', '=', $request->item_id)) 
               {

                  DB::table('stores')->where('id', $request->item_id)->update([

                        'item_id' => $request->item_id,
                        'date_out' => $request->date_out,
                        'collected_by' => $request->collected_by,
                        'remark' => $request->remark,
                        
                    ]);

                   

                  return back()->with('message','Submission successifully');
                    
               }


                else {
                    return back()->with('message','id doesnot match our records');
                 } 


            }


            public function search()

            {
            
                $data = Store::paginate(10);
                $q = Input::get ( 'q' );
                 if ($q != '')
                  {
                    $data =Store::where('id','LIKE','%'.$q.'%')
                    ->orWhere('date_in', 'like', '%' . $q . '%')
                    ->orWhere('type_of_machine', 'like', '%' . $q. '%')
                    ->orWhere('serial_number', 'like', '%' . $q . '%')
                    ->orWhere('location', 'like', '%' . $q . '%')
                    ->orWhere('brought_by', 'like', '%' . $q . '%')
                    ->orWhere('item_id', 'like', '%' . $q . '%')
                    ->orWhere('date_out', 'like', '%' . $q . '%')
                    ->orWhere('collected_by', 'like', '%' . $q . '%')
                    ->orWhere('remark', 'like', '%' . $q . '%')
                    -> get();


                     if(count($data) > 0)
                     return view('admin.live_search',compact('data'))->withDetails($data)->withQuery($q);
         
                }

                 return view ('admin.live_search',compact('data'))->withMessage("No Details found. Try to search again !");
            }



            public function edit_input(Store $id)
            {

                
              return view('admin.edit_input',compact('id'));
            }



            public function update_input(Store $id)
            {
               $id -> update($this->validateRequest());

               return redirect('/basic_table');
            }


            public function delete_input(Store $id)
            {
                $id->delete();
                return redirect('/basic_table');

            }



            public function output_edit(Request $request)

            {
               if (Store::where('id', '=', $request->item_id)) 
               {

                  DB::table('stores')->where('id', $request->item_id)->update([

                        'item_id' => $request->item_id,
                        'date_out' => $request->date_out,
                        'collected_by' => $request->collected_by,
                        'remark' => $request->remark,
                        
                    ]);

                   

                  return redirect('/basic_table')->with('message','Submission successifully');
                    
               }


                else {
                    return redirect('/basic_table')->with('message','id doesnot match our records');
                 } 


            }



            private function ValidateProfile()

            {
               return tap( DB::table('users')->update([

                        'name' => Input::get('name'),
                        'email' => Input::get('email'),
                        'password' => Input::get('password'),
                        
                      ]), 

                       function()
                       {

                            if(request()->hasFile('avatar'))

                                {
                                    $avatar = request()->file('avatar');
                                    $filename = time() . ',' .$avatar->getClientOriginalExtension();
                                    Image::make($avatar)->resize(300 ,300)->save(public_path('/uploads/avatar/'.$filename));
                                    $user = Auth::user();
                                    $user->avatar = $filename;
                                    $user ->save();
                                }

                       }
                    );
            
            }


            public function update_profile()
            {
                Auth::user()-> update($this->ValidateProfile());

                return back();
            }


    
}
