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
        <h3 class="box-title text-center" style="color: #f33155">Input Form</h3>
    <div class="comment-center p-t-10">
    <div class="comment-body">
     <div class="mail-contnet">

<form class="form-horizontal form-material" action="/input" method="POST">
       <p>Device Details</p>
       <br>
        <div class="form-group">
            <label class="col-md-12 col-xs-6">Date In <i class="fa fa-calendar"></i></label>

            <div class="col-md-12">
                <input type="date" class="form-control form-control-line" name="date_in" value="{{ old('date_in') }}" required autocomplete="date_in" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('date_in')}}</div>
        </div>


        <div class="form-group">
            <label class="col-md-12">Type of Machine</label>

            <div class="col-md-12">
                <select class="form-control form-control-line" value="{{ old('type_of_machine') }}" required autocomplete="type_of_machine" autofocus name="type_of_machine">
                  
                 <option value="DELL OPTIPLEX 7010">DELL OPTIPLEX 7010</option>
                  <option  value="DELL OPTIPLEX 7020">DELL OPTIPLEX 7020</option>
                  <option  value="DELL OPTIPLEX 9010" >DELL OPTIPLEX 9010</option>
                  <option  value="DELL OPTIPLEX 3020">DELL OPTIPLEX 3020</option>
                  <option  value="DELL OPTIPLEX 7090">DELL OPTIPLEX 7090</option>
                  <option  value="DELL OPTIPLEX 5050">DELL OPTIPLEX 5050</option>
                  <option  value="DELL OPTIPLEX 780">DELL OPTIPLEX 780</option>
                  <option  value="DELL OPTIPLEX 745">DELL OPTIPLEX 745</option>
                  <option  value="DELL VOSTO 220">DELL VOSTO 220</option>
                  <option  value="DELL VOSTO 1520">DELL VOSTO 1520</option>
                  <option  value="DELL LATITUDE E6440">DELL LATITUDE E6440</option>
                  <option  value="DELL LATITUDE E6540">DELL LATITUDE E6540</option>
                  <option  value="DELL LATITUDE E5530">DELL LATITUDE E5530</option>
                  <option  value="DELL LATITUDE 5480">DELL LATITUDE 5480</option>
                  <option  value="DELL LATITUDE 5420">DELL LATITUDE 5420</option>
                  <option  value="DELL LATITUDE 5480">DELL LATITUDE 5480</option>
                  <option  value="HP 280 G1 MT">HP 280 G1 MT</option>
                  <option  value="HP COMPAQ PRO 6300 SF7">HP COMPAQ PRO 6300 SF7</option>
                  <option  value="HP PROBOOK 450G2">HP PROBOOK 450G2</option>
                  <option  value="HP PROBOOK 450GH">HP PROBOOK 450GH</option>
                  <option  value="HP PROBOOK 450GS">HP PROBOOK 450GS</option>
                 @foreach($new_field as $n)
                       @if($n->new_machine!= null)
                        <option value="{{$n->new_machine}}">{{$n->new_machine}}
                        </option>
                       @endif
                @endforeach


                </select>
            </div>
             <div class="text-danger">{{$errors->first('type_of_machine')}}</div>
        </div>

        <div class="form-group">
            <label for="example-email" class="col-md-12">Serial #</label>

            <div class="col-md-12">
               <input type="number" placeholder="Serial No. 4CE0460D0G."class="form-control form-control-line" name="serial_number" value="{{ old('serial_number') }}" required autocomplete="serial_number" autofocus min="1" />
            </div>
            <div class="text-danger">{{$errors->first('serial_number')}}</div>
        </div>


         <div class="form-group">
            <label for="example-email" class="col-md-12">Bar Code</label>

            <div class="col-md-12">
               <input type="number" placeholder="e.g. 12100-00745."class="form-control form-control-line" name="bar_code" value="{{ old('bar_code') }}" required autocomplete="bar_code" autofocus min="1" />
            </div>
            <div class="text-danger">{{$errors->first('bar_code')}}</div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Location</label>

            <div class="col-md-12">
              <select class="form-control form-control-line" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
                 <option value="AMINI TANGA">AMINI TANGA</option>
                 <option value="ARUSHA">ARUSHA</option>
                 <option value="BIHARAMULO">BIHARAMULO</option>
                 <option value="CHUNYA">CHUNYA</option>
                 <option value="DODOMA">DODOMA</option>
                 <option value="GEITA">GEITA</option>
                 <option value="KAHAMA">KAHAMA</option>
                 <option value="KASULU">KASULU</option>
                 <option value="KAGERA">KAGERA</option>
                 <option value="KARATU">KARATU</option>
                 <option value="KAGERA SUGAR">KAGERA SUGAR</option>
                 <option value="KAKORA">KAKORA</option>
                 <option value="KARAGWE">KARAGWE</option>
                 <option value="KIDATU">KIDATU</option>
                 <option value="KIGAMBONI">KIGAMBONI</option>
                 <option value="KILOSA">KILOSA</option>
                 <option value="KILIMANJARO">KILIMANJARO</option>
                 <option value="KINONDONI">KINONDONI</option>
                 <option value="KOROGWE">KOROGWE</option>
                 <option value="LINDI">LINDI</option>
                 <option value="LUSHOTO">LUSHOTO</option>
                 <option value="MARA">MARA</option>
                 <option value="MAFINGA">MAFINGA</option>
                 <option value="MANYONI">MANYONI</option>
                 <option value="MANYARA">MANYARA</option>
                 <option value="MASASI">MASASI</option>
                 <option value="MASWA">MASWA</option>
                 <option value="MBEYA">MBEYA</option>
                 <option value="MBEZI">MBEZI</option>
                 <option value="MBINGA">MBINGA</option>
                 <option value="MBOZI">MBOZI</option>
                 <option value="MOROGORO" >MOROGORO</option>
                 <option value="MPANDA">MPANDA</option>
                 <option value="MTIBWA">MTIBWA</option>
                 <option value="MTWARA">MTWARA</option>
                 <option value="MWANZA">MWANZA</option>
                 <option value="MIKOCHENI">MIKOCHENI</option>
                 <option value="NJOMBE">NJOMBE</option>
                 <option value="NZEGA">NZEGA</option>
                 <option value="NSSFHQ">NSSFHQ</option>
                 <option value="PANGANI">PANGANI</option>
                 <option value="PWANI">PWANI</option>
                 <option value="RUKWA">RUKWA</option>
                 <option value="ROMBO">ROMBO</option>
                 <option value="RUVUMA">RUVUMA</option>
                 <option value="SAME">SAME</option>
                 <option value="SHINYANGA">SHINYANGA</option>
                 <option value="SINGIDA">SINGIDA</option>
                 <option value="SONGWE">SONGWE</option>
                 <option value="TABORA">TABORA</option>
                 <option value="TANGA">TANGA</option>
                 <option value="TARIME">TARIME</option>
                 <option value="TEMEKE">TEMEKE</option>
                 <option value="TPC">TPC</option>
                 <option value="TUNDURU">TUNDURU</option>
                 <option value="TUKUYU">TUKUYU</option>
                 <option value="UNILEVER">UNILEVER</option>
                 <option value="USA RIVER">USA RIVER</option>
                 <option value="HRM">HRM</option>
                 <option value="HAI">HAI</option>
                 <option value="IFAKARA">IFAKARA</option>
                 <option value="IFAKARA SUB">IFAKARA SUB</option>
                 <option value="ILALA">ILALA</option>
                 <option value="IRINGA">IRINGA</option>

                @foreach($new_field as $n)
                       @if($n->new_location!= null)
                        <option value="{{$n->new_location}}">{{$n->new_location}}
                        </option>
                       @endif
                @endforeach

              </select>
                
            </div>
            <div class="text-danger">{{$errors->first('location')}}</div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Department</label>

            <div class="col-md-12">
              <select class="form-control form-control-line" name="department" value="{{ old('department') }}" required autocomplete="brought_by" autofocus >
                <option value="REGISTRATION">REGISTRATION</option>
                <option value="SECURITY (CSM)">SECURITY (CSM)</optio>
                <option value="STORE">STORE</option>
                <option value="RECORDS (RM)">RECORDS (RM)</option>
                <option value="HR">HR</option>
                <option value="PROCUREMENT">PROCUREMENT</option>
                <option value="FINANCE">FINANCE</option>
                <option value="OPERATION">OPERATION</option>
                <option value="RISK">RISK</option>
                <option value="DIT">DIT</option>
                <option value="AUDITOR">AUDITOR</option>
                <option value="LEGAL">LEGAL</option>
                <option value="MARKETING">MARKETING</option>
                <option value="CONTROL ROOM">CONTROL ROOM</option>
                <option value="DG">DG</option>
                <option value="INFORMAL SECTOR">INFORMAL SECTOR</option>

                 @foreach($new_field as $n)
                       @if($n->new_department!= null)
                        <option value="{{$n->new_department}}">{{$n->new_department}}
                        </option>
                       @endif
                @endforeach
              </select >
            </div>
            <div class="text-danger">{{$errors->first('department')}}</div>
        </div>
        <br>
     <p>Personal Details</p>

       <div class="form-group">
            <label for="example-email" class="col-md-12">Email</label>

            <div class="col-md-12">
               <input type="email" placeholder="janedoe@gmail.com"class="form-control form-control-line" name="user_email" value="{{ old('user_email') }}" required autocomplete="user_email" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('user_email')}}</div>
        </div>

         <div class="form-group">
            <label for="example-email" class="col-md-12">Phone</label>

            <div class="col-md-12">
               <input type="number" placeholder="0745637837"class="form-control form-control-line" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('phone')}}</div>
        </div>

         <div class="form-group">
            <label for="example-email" class="col-md-12">Extention (optional)</label>

            <div class="col-md-12">
               <input type="number" placeholder="1212"class="form-control form-control-line" name="office_phone" value="{{ old('office_phone') }}">
            </div>
           
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
                    <div class="panel-heading text-center" style="color: #f33155">
                         RELEASE FORM
                    </div>
                <div class="panel-body">
                                       
    <form class="form-horizontal form-material" action="/output" method="POST">

        <div class="form-group">
            <label class="col-md-12">Ticket Number</label>
            <div class="col-md-12">
                <input type="number" class="form-control form-control-line" name="ticket_number" value="{{ old('ticket_number') }}" required autocomplete="ticket_number" autofocus />
            </div>
             <div class="text-danger">{{$errors->first('ticket_number')}}</div>
        </div>

         <div class="form-group">
            <label class="col-md-12">Date Out <i class="fa fa-calendar"></i></label>

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
                <textarea rows="5" class="form-control form-control-line" name="remark" placeholder="eg.RAM"></textarea>
            </div>
            <div class="text-danger">{{$errors->first('remark')}}</div>
        </div>

         <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light">submit</button>
            </div>
        </div>
      @csrf
    </form>
</div>
 </div>
</div>
</div>


<div class="panel">
            <div class="sk-chat-widgets">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" style="color: #f33155">
                         Add New Field
                    </div>
                <div class="panel-body">
                                       
    <form class="form-horizontal form-material" action="/new_field" method="POST">

         <div class="form-group">
            <label class="col-md-12">Type of Machine</label>

            <div class="col-md-12">
                <input type="text" class="form-control form-control-line" name="new_machine" value="{{ old('new_machine') }}" placeholder="DELL OPTIPLEX 7010" style="text-transform: uppercase;"/>
            </div>
           
        </div>

        <div class="form-group">
            <label class="col-md-12">Location</label>

            <div class="col-md-12">
                <input type="text" placeholder="Kibamba" class="form-control form-control-line" name="new_location" value="{{ old('new_location') }}" style="text-transform: uppercase;" />
            </div>
        </div>

      <div class="form-group">
          <label class="col-md-12">Department</label>

            <div class="col-md-12">
                <input type="text" placeholder="Sofware Department" class="form-control form-control-line" name="new_department" value="{{ old('new_department') }}"  style="text-transform: uppercase;"/>
            </div>
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