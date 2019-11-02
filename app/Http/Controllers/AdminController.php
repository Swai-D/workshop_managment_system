<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeNewUserMail;
use App\Mail\ReleaseMail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Exports\StoresExport;
use Maatwebsite\Excel\Facades\Excel;

use App\User;
use App\NewField;
use App\Store;
use App\Asset;

use  PDF;
use  DB;
use Image;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
          //Acces Point
        $acces_points_in_store = DB::table('assets')->where([['product','=','Acces Point'],['machine_condition','=','In Store']])
              ->count();

        $acces_points_in_repair = DB::table('assets')->where([['product','=','Acces Point'],['machine_condition','=','In Repair']])
              ->count();

        $acces_points_in_use = DB::table('assets')->where([['product','=','Acces Point'],['machine_condition','=','In Use']])
              ->count();

        //Printers
        $printers_in_use = DB::table('assets')->where([['product','=','Printers'],['machine_condition','=','In Use']])
              ->count();

        $printers_in_repair = DB::table('assets')->where([['product','=','Printers'],['machine_condition','=','In Repair']])
              ->count();

        $printers_in_store = DB::table('assets')->where([['product','=','Printers'],['machine_condition','=','In Store']])
              ->count();

        //Routers
         $routers_in_use = DB::table('assets')->where([['product','=','Routers'],['machine_condition','=','In Use']])
              ->count();

        $routers_in_repair = DB::table('assets')->where([['product','=','Routers'],['machine_condition','=','In Repair']])
              ->count();

        $routers_in_store = DB::table('assets')->where([['product','=','Routers'],['machine_condition','=','In Store']])
              ->count();

        //Servers
        $servers_in_use = DB::table('assets')->where([['product','=','Server'],['machine_condition','=','In Use']])
              ->count();

        $servers_in_repair = DB::table('assets')->where([['product','=','Server'],['machine_condition','=','In Repair']])
              ->count();

        $servers_in_store = DB::table('assets')->where([['product','=','Server'],['machine_condition','=','In Store']])
              ->count();

        //switches
        $switches_in_use = DB::table('assets')->where([['product','=','Switches'],['machine_condition','=','In Use']])
              ->count();

        $switches_in_repair = DB::table('assets')->where([['product','=','Switches'],['machine_condition','=','In Repair']])
              ->count();

        $switches_in_store = DB::table('assets')->where([['product','=','Switches'],['machine_condition','=','In Store']])
              ->count();


         //workstation
        $workstations_in_use = DB::table('assets')->where([['product','=','Workstations'],['machine_condition','=','In Use']])
              ->count();

        $workstations_in_repair = DB::table('assets')->where([['product','=','Workstations'],['machine_condition','=','In Repair']])
              ->count();

        $workstations_in_store = DB::table('assets')->where([['product','=','Workstations'],['machine_condition','=','In Store']])
              ->count();
 

         $total_in_store = $acces_points_in_store + $printers_in_store +  $routers_in_store 
                           + $servers_in_store +  $workstations_in_store +  $switches_in_store;

         $total_in_use = $acces_points_in_use + $printers_in_use + $routers_in_use + $servers_in_use
                         + $switches_in_use + $workstations_in_use;

         $total_in_repair = $acces_points_in_repair + $printers_in_repair + $routers_in_repair 
                          + $servers_in_repair +  $switches_in_repair + $workstations_in_repair;

        $store = Store::count();
        $repair = Store::where('date_out','In progress')->count();
        $release = Store::where('date_out','!=','In progress')->count();


            if(($store  == 0 || $repair == 0)){
             $percentage = 0;
             
            }

            else
                $percentage = ($repair/ $store)*100;
              

           if(($total_in_store == 0 || $total_in_repair)){
                 $percentage_asset = 0;
            }

             else
               
                $percentage_asset = ($total_in_repair/ $total_in_store)*100;

            
           
        //dd($percentage);
        return view('admin.admin_index', compact('store','repair','release','percentage','percentage_asset','total_in_store','total_in_use','total_in_repair'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {  $id = Store::all();

        $new_field = NewField::all();
        return view('admin.admin_input',compact('new_field','id'));
    }


    public function store(Request $request)

    { 
        $rand = rand(1000,3000);

            $data = new Store();
            $data ->date_in = request('date_in');
            $data ->type_of_machine = request('type_of_machine');
            $data ->serial_number = request('serial_number');
            $data ->bar_code = request('bar_code');
            $data ->location = request('location');
            $data ->department = request('department');
            $data ->user_email = request('user_email');
            $data ->phone = request('phone');
            $data ->office_phone = request('office_phone');
            $data ->ticket_number = $rand;
            $data->save();

             Mail::to($data->user_email)->send(new WelcomeNewUserMail($data));//sending email

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




        public function output(Request $request)

            {   
               if ( $data = Store::where('ticket_number', $request->ticket_number)->first()) 
               {  
               
                   
                    DB::table('stores')->where('ticket_number', $request->ticket_number)
                                      ->update([
                                                'date_out' => $request->date_out,
                                                'collected_by' => $request->collected_by,
                                                'remark' => $request->remark,
                        
                                               ]);
                                      
                   
                   Mail::to($data->user_email)->send(new ReleaseMail($data));//sending email
                  return back()->with('message','Submission successifully');
                    
               }


                else {
                    return back()->with('message','Ticket Number doesnot match our records');
                 } 


            }


            public function search()

            {
                    if (view()->exists("package.view_name")) {
                                // do some cool stuffs
                            } 
                                        
                $data = Store::paginate(10);
                $q = Input::get ( 'q' );
                 if ($q != '')
                  {
                    $data =Store::where('id','LIKE','%'.$q.'%')
                    ->orWhere('date_in', 'like', '%' . $q . '%')
                    ->orWhere('type_of_machine', 'like', '%' . $q. '%')
                    ->orWhere('serial_number', 'like', '%' . $q . '%')
                    ->orWhere('bar_code', 'like', '%' . $q . '%')
                    ->orWhere('location', 'like', '%' . $q . '%')
                    ->orWhere('department', 'like', '%' . $q . '%')
                    ->orWhere('department', 'like', '%' . $q . '%')
                    ->orWhere('user_email', 'like', '%' . $q . '%')
                    ->orWhere('phone', 'like', '%' . $q . '%')
                    ->orWhere('ticket_number', 'like', '%' . $q . '%')
                    ->orWhere('user_email', 'like', '%' . $q . '%')
                    ->orWhere('office_phone', 'like', '%' . $q . '%')
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
            

                 $table = Store::all();
                 
                $new_field = NewField::all();
                
              return view('admin.edit_input',compact('id','new_field','table'));
            }



            public function update_input(Store $id)
            {
               $id -> update($this->validateRequestInput());

               return redirect('/basic_table');
            }


            public function delete_input(Store $id)
            {
                $id->delete();
                return redirect('/basic_table');

            }




            public function update_profile()
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
                

                return back();
            }


            public function new_fields()
            {

               NewField::create($this->validateRequest());

               return back()->with('message','Submission successifully');
            }



            private function validateRequest()
                {

                    return request()->validate([

                        'new_machine' => '',
                        'new_location' => '',
                        'new_department' =>'',
                    ]);


                }



                private function validateRequestInput()
                {

                    return request()->validate([

                        'date_in' => ['required','string','max:255'],
                        'type_of_machine' => ['required','string','max:255'],
                        'serial_number' => ['required','string','max:255'],
                        'bar_code' => ['required','string','max:255'],
                        'location' => ['required','string','max:255'],
                        'department' => ['required','string','max:255'],
                        'serial_number' => ['required','string','max:255'],
                        'user_email' => ['required','string','max:255'],
                        'phone' => ['required','string','max:255'],
                        'office_phone' => ['required','string','max:255'],
                    ]);
                }


       public function get_customer_data()

        {
             $customer_data = DB::table('stores')
                ->limit(10)
                 ->get();
                   return $customer_data;
        }





        public function convert_customer_data_to_html()
        {
            $customer_data = $this->get_customer_data();
            $output = '     <h3 align ="center">Workshop Report of  '. date('M D Y').'</h3>
                              <br>
                                <table width="100%" style="border-collapse: collapse; border: 0px;">

                                        <tr>
                                            <th style="border: 1px solid; padding:5px;" width="5%" align ="center">ID#</th>
                                            <th style="border: 1px solid; padding:5px;" width="5%" align ="center">Date in</th>
                                            <th style="border: 1px solid; padding:5px;" width="5%" align ="center">Serial#</th>
                                            <th style="border: 1px solid; padding:5px;" width="5%" align ="center">Ticket#</th>
                                            <th style="border: 1px solid; padding:12px;" width="5%" align ="center">Machine Type</th>
                                            <th style="border: 1px solid; padding:5px;" width="5%" align ="center">Location</th>
                                            <th style="border: 1px solid; padding:5px;" width="5%" align ="center">Department</th>
                                            <th style="border: 1px solid; padding:5px;" width="5%" align ="center">Email</th>

                                        </tr>
                                 
                                     '; 
                                     foreach($customer_data as $t)
                                     {
                                        $output .='
                                        <tr>
                                            <td style="border: 1px solid; padding:5px;">'.$t->id.'</td>
                                            <td style="border: 1px solid; padding:5px;" >'.$t->date_in.'</td>
                                            <td style="border: 1px solid; padding:5px;">'.$t->serial_number.'</td>
                                            <td style="border: 1px solid; padding:5px;">'.$t->ticket_number.'</td>
                                            <td style="border: 1px solid; padding:5px;">'.$t->type_of_machine.'</td>
                                            <td style="border: 1px solid; padding:5px;">'.$t->location.'</td>
                                            <td style="border: 1px solid; padding:5px;">'.$t->department.'</td>
                                            <td style="border: 1px solid; padding:5px;">'.$t->user_email.'</td>    
                                        </tr>
                                     ' ;
                                 }


                                  $output .= ' </table > 
                                  ';    
                                
                                //dd($output);
                                 return $output;


        }



        public function pdf()
        {   

             $pdf = \App::make('dompdf');
             $pdf->loadHTML($this->convert_customer_data_to_html());
             $pdf->setPaper('A4', 'landscape');
             $pdf->render();
             $report = $pdf ->output();
             $pdf->stream('report of ' .date('M D Y'));
        }



    public function export() 
    {

        return Excel::download(new StoresExport, 'stores.xlsx');
    }



    public function assets()
    {
        $acces_points = DB::table('assets')->where('product','Acces Point')->count();
        $printers = DB::table('assets')->where('product','Printers')->count();
        $routes = DB::table('assets')->where('product','Routers')->count();
        $servers = DB::table('assets')->where('product','Server')->count();
        $switches = DB::table('assets')->where('product','Switches')->count();
        $workstations = DB::table('assets')->where('product','Workstations')->count();

        //dd($workstations);

        //Acces Point
        $acces_points_in_store = DB::table('assets')->where([['product','=','Acces Point'],['machine_condition','=','In Store']])
              ->count();

        $acces_points_in_repair = DB::table('assets')->where([['product','=','Acces Point'],['machine_condition','=','In Repair']])
              ->count();

        $acces_points_in_use = DB::table('assets')->where([['product','=','Acces Point'],['machine_condition','=','In Use']])
              ->count();

        //Printers
        $printers_in_use = DB::table('assets')->where([['product','=','Printers'],['machine_condition','=','In Use']])
              ->count();

        $printers_in_repair = DB::table('assets')->where([['product','=','Printers'],['machine_condition','=','In Repair']])
              ->count();

        $printers_in_store = DB::table('assets')->where([['product','=','Printers'],['machine_condition','=','In Store']])
              ->count();

        //Routers
         $routers_in_use = DB::table('assets')->where([['product','=','Routers'],['machine_condition','=','In Use']])
              ->count();

        $routers_in_repair = DB::table('assets')->where([['product','=','Routers'],['machine_condition','=','In Repair']])
              ->count();

        $routers_in_store = DB::table('assets')->where([['product','=','Routers'],['machine_condition','=','In Store']])
              ->count();

        //Servers
        $servers_in_use = DB::table('assets')->where([['product','=','Server'],['machine_condition','=','In Use']])
              ->count();

        $servers_in_repair = DB::table('assets')->where([['product','=','Server'],['machine_condition','=','In Repair']])
              ->count();

        $servers_in_store = DB::table('assets')->where([['product','=','Server'],['machine_condition','=','In Store']])
              ->count();

        //switches
        $switches_in_use = DB::table('assets')->where([['product','=','Switches'],['machine_condition','=','In Use']])
              ->count();

        $switches_in_repair = DB::table('assets')->where([['product','=','Switches'],['machine_condition','=','In Repair']])
              ->count();

        $switches_in_store = DB::table('assets')->where([['product','=','Switches'],['machine_condition','=','In Store']])
              ->count();


         //workstation
        $workstations_in_use = DB::table('assets')->where([['product','=','Workstations'],['machine_condition','=','In Use']])
              ->count();

        $workstations_in_repair = DB::table('assets')->where([['product','=','Workstations'],['machine_condition','=','In Repair']])
              ->count();

        $workstations_in_store = DB::table('assets')->where([['product','=','Workstations'],['machine_condition','=','In Store']])
              ->count();
 

        return view('admin.admin_assets_table', compact('acces_points','printers','routes','servers','switches','workstations','acces_points_in_use','acces_points_in_repair','acces_points_in_store','printers_in_use','printers_in_repair','printers_in_store','routers_in_use','routers_in_repair','routers_in_store','servers_in_use','servers_in_repair','servers_in_store','switches_in_use','switches_in_repair','switches_in_store','workstations_in_use','workstations_in_repair','workstations_in_store'));
    }



   public function asset_blade(Request $request)
   {

     return view('admin.asset_form');
   }





    private function validateAssetInput()
                {

                    return request()->validate([

                        'device_name' => ['required','string','max:255'],
                        'vendor' => '',
                        'product' => ['required','string','max:255'],
                        'cost' => '',
                        'serial_number' => ['required','string','max:255'],
                        'date_aquired' => ['required','string','max:255'],
                        'barcode' => '',
                        'warranty' => '',
                        'location' => ['required','string','max:255'],
                        'machine_condition' => ['required','string','max:255'],
                        'comment' => '',
                    ]);
                }



   public function asset_input()
   {
     
      $asset = Asset::create($this->validateAssetInput());

      //dd($asset);

     return redirect('/admin_assets_table');

   }



    
}
