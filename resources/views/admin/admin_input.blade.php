@extends('layout.admin_layout')
@section('content')

   <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
             <h4 class="page-title">Input page</h4>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
           <ol class="breadcrumb">

               <li><a href="#">Dashboard</a></li>
               <li class="active">Input Page</li>
           </ol>
        </div>
    </div>

 <div class="row">
  @if(session()->has('message'))
    <div class="alert alert" role = "alert">
      <p class="lead" style="color: #f33155">
        {{session()->get('message')}}
      </p>
    </div>
@endif
                    <!-- .col -->
<div class="col-md-12 col-lg-8 col-sm-12">
    <div class="white-box">
        <h3 class="box-title text-center">Input Form</h3>
    <div class="comment-center p-t-10">
    <div class="comment-body">
     <div class="mail-contnet">

<form class="form-horizontal form-material" action="/input" method="POST">

        <div class="form-group">
            <label class="col-md-12 col-xs-6">Date In</label>

            <div class="col-md-12">
                <input type="date" class="form-control form-control-line" name="date_in" value="{{ old('date_in') }}" required autocomplete="date_in" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('date_in')}}</div>
        </div>


        <div class="form-group">
            <label class="col-md-12">Type of Machine</label>

            <div class="col-md-12">
                <input type="text" class="form-control form-control-line" placeholder="eg.Monitor" name="type_of_machine" value="{{ old('type_of_machine') }}" required autocomplete="type_of_machine" autofocus />
            </div>
             <div class="text-danger">{{$errors->first('type_of_machine')}}</div>
        </div>

        <div class="form-group">
            <label for="example-email" class="col-md-12">Serial #</label>

            <div class="col-md-12">
               <input type="number" placeholder="Serial No. 4CE0460D0G."class="form-control form-control-line" name="serial_number" value="{{ old('serial_number') }}" required autocomplete="serial_number" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('serial_number')}}</div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Location</label>

            <div class="col-md-12">
                <input type="text" placeholder="eg.Kinondoni"class="form-control form-control-line" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('location')}}</div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Brought By</label>

            <div class="col-md-12">
                <input type="text" placeholder="eg.Mr.Davis"class="form-control form-control-line" name="brought_by" value="{{ old('brought_by') }}" required autocomplete="brought_by" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('brought_by')}}</div>
        </div>

    
                         
         <div class="form-group">
                <div class="col-sm-12">
                   <button class="btn btn-danger btn-sm waves-effect waves-light">submit</button>
                </div>
        </div>
 @csrf
  </form> 
 </div>
 </div>
                               
                               
</div>
</div>
</div>


    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="panel">
            <div class="sk-chat-widgets">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         RELEASE FORM
                    </div>
                <div class="panel-body">
                                       
    <form class="form-horizontal form-material" action="/output" method="POST">

        <div class="form-group">
            <label class="col-md-12">Item ID</label>
            <div class="col-md-12">
                <input type="number" class="form-control form-control-line" name="item_id" value="{{ old('item_id') }}" required autocomplete="item_id" autofocus />
            </div>
             <div class="text-danger">{{$errors->first('item_id')}}</div>
        </div>

         <div class="form-group">
            <label class="col-md-12">Date Out</label>

            <div class="col-md-12">
                <input type="date" class="form-control form-control-line" name="date_out" value="{{ old('date_out') }}" required autocomplete="date_out" autofocus />
            </div>
             <div class="text-danger">{{$errors->first('date_out')}}</div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Collected by</label>

            <div class="col-md-12">
                <input type="text" placeholder=" eg.Mr.Hendry" class="form-control form-control-line" name="collected_by" value="{{ old('collected_by') }}" required autocomplete="collected_by" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('collected_by')}}</div>
        </div>

      <div class="form-group">
          <label class="col-md-12">Remark</label>

            <div class="col-md-12">
                <textarea rows="5" class="form-control form-control-line" name="remark"></textarea>
            </div>
            <div class="text-danger">{{$errors->first('remark')}}</div>
        </div>

         <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-danger btn-sm waves-effect waves-light">submit</button>
            </div>
        </div>
      @csrf
    </form>
</div>
 </div>
</div>
</div>
</div>
<!-- /.col -->
</div>
 @endsection