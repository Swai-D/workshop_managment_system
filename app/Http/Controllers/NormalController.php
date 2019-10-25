<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Store;
use Image;

class NormalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('normal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function auth_user()
    {

        if(Auth::user()->usertype == 'admin'){

            return redirect ('admin.admin_index');
        }
        else
        {
            return view('auth_user.auth_user');
        }
    }


    public function profile()

    {

     return view('auth_user.profile');
    } 


    public function item_status()
    {

     return view('auth_user.item_status');
    }

    public function profile_image(Request $request)

    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . ',' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300 ,300)->save(public_path('/uploads/avatar/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user ->save();
        }

        return back();

    }


    public function auth_user_search()
    {

                $q = Input::get ( 'q' );
                 if ($q != '')
                  {
                    $data =Store::where('serial_number','=',$q)-> get();

                     if(count($data) > 0)

                     return view('auth_user.item_live_search',compact('data'))->withDetails($data)->withQuery($q);
         
                  }

                 return view ('auth_user.item_live_search',compact('data'))->withMessage("No Details found. Try to search again !");
    }
}
