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
<h5  style="color:#f33155">{{ __('Edit Details For ') }}{{$id->location}} {{$id->type_of_machine}} of / {{$id->date_in}}</h5>
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
        <h3 class="box-title text-center"style="color: #f33155">Input Form</h3>
    <div class="comment-center p-t-10">
    <div class="comment-body">
     <div class="mail-contnet">

<form class="form-horizontal form-material"  action="/{{$id->id}}" method="POST">
  @csrf
  @method('PATCH')
        <div class="form-group">
            <label class="col-md-12 col-xs-6">Date In</label>

            <div class="col-md-12">
                <input type="date" class="form-control form-control-line" name="date_in" value="{{ old('date_in') ?? $id -> date_in}}" required autocomplete="date_in" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('date_in')}}</div>
        </div>


        <div class="form-group">
            <label class="col-md-12">Type of Machine</label>

            <div class="col-md-12">
              
            <select class="form-control form-control-line"  required autocomplete="type_of_machine" autofocus name="type_of_machine">
              @foreach($table as $id)
                  <option value="DELL OPTIPLEX 7010" {{ $id->type_of_machine == 'DELL OPTIPLEX 7010' ? 'selected' : '' }}>DELL OPTIPLEX 7010</option>
                  <option  value="DELL OPTIPLEX 7020" {{ $id->type_of_machine == 'DELL OPTIPLEX 7020' ? 'selected' : '' }}>DELL OPTIPLEX 7020</option>
                  <option  value="DELL OPTIPLEX 9010" {{ $id->type_of_machine == 'DELL OPTIPLEX 9010' ? 'selected' : '' }}>DELL OPTIPLEX 9010</option>
                  <option  value="DELL OPTIPLEX 3020" {{ $id->type_of_machine == 'DELL OPTIPLEX 3020' ? 'selected' : '' }}>DELL OPTIPLEX 3020</option>
                  <option  value="DELL OPTIPLEX 7090" {{ $id->type_of_machine == 'DELL OPTIPLEX 7090' ? 'selected' : '' }}>DELL OPTIPLEX 7090</option>
                  <option  value="DELL OPTIPLEX 5050" {{ $id->type_of_machine == 'DELL OPTIPLEX 5050' ? 'selected' : '' }}>DELL OPTIPLEX 5050</option>
                  <option  value="DELL OPTIPLEX 780" {{ $id->type_of_machine == 'DELL OPTIPLEX 780' ? 'selected' : '' }}>DELL OPTIPLEX 780</option>
                  <option  value="DELL OPTIPLEX 745" {{ $id->type_of_machine == 'DELL OPTIPLEX 745' ? 'selected' : '' }}>DELL OPTIPLEX 745</option>
                  <option  value="DELL VOSTO 220" {{ $id->type_of_machine == 'DELL VOSTO 220' ? 'selected' : '' }}>DELL VOSTO 220</option>
                  <option  value="DELL VOSTO 1520" {{ $id->type_of_machine == 'DELL VOSTO 1520' ? 'selected' : '' }}>DELL VOSTO 1520</option>
                  <option  value="DELL LATITUDE E6440" {{ $id->type_of_machine == 'DELL LATITUDE E6440' ? 'selected' : '' }}>DELL LATITUDE E6440</option>
                  <option  value="DELL LATITUDE E6540" {{ $id->type_of_machine == 'DELL LATITUDE E6540' ? 'selected' : '' }}>DELL LATITUDE E6540</option>
                  <option  value="DELL LATITUDE E5530" {{ $id->type_of_machine == 'DELL LATITUDE E5530' ? 'selected' : '' }}>DELL LATITUDE E5530</option>
                  <option  value="DELL LATITUDE 5480" {{ $id->type_of_machine == 'DELL LATITUDE 5480' ? 'selected' : '' }}>DELL LATITUDE 5480</option>
                  <option  value="DELL LATITUDE 5480" {{ $id->type_of_machine == 'DELL LATITUDE 5480' ? 'selected' : '' }}>DELL LATITUDE 5480</option>
                  <option  value="DELL LATITUDE 5480" {{ $id->type_of_machine == 'DELL LATITUDE 5480' ? 'selected' : '' }}>DELL LATITUDE 5480</option>
                  <option  value="HP 280 G1 MT" {{ $id->type_of_machine == 'HP 280 G1 MT' ? 'selected' : '' }}>HP 280 G1 MT</option>
                  <option  value="HP COMPAQ PRO 6300 SF7" {{ $id->type_of_machine == 'HP COMPAQ PRO 6300 SF7' ? 'selected' : '' }}>HP COMPAQ PRO 6300 SF7</option>
                  <option  value="HP PROBOOK 450G2" {{ $id->type_of_machine == 'HP PROBOOK 450G2' ? 'selected' : '' }}>HP PROBOOK 450G2</option>
                  <option  value="HP PROBOOK 450GH" {{ $id->type_of_machine == 'HP PROBOOK 450GH' ? 'selected' : '' }}>HP PROBOOK 450GH</option>
                  <option  value="HP PROBOOK 450GS" {{ $id->type_of_machine == 'HP PROBOOK 450GS' ? 'selected' : '' }}>HP PROBOOK 450GS</option>
                  @endforeach

                   @foreach($new_field as $n)
                       @if($n->new_machine!= null)
                        <option value="$n->new_machine"{{$id->type_of_machine == $n->new_machine ? 'selected' : ''}}>{{$n->new_machine}}
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
               <input type="number" placeholder="Serial No. 4CE0460D0G."class="form-control form-control-line" name="serial_number" value="{{ old('serial_number') ?? $id -> serial_number }}" required autocomplete="serial_number" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('serial_number')}}</div>
        </div>


        <div class="form-group">
            <label for="example-email" class="col-md-12">Bar Code</label>

            <div class="col-md-12">
               <input type="number" placeholder="e.g. 12100-00745."class="form-control form-control-line" name="bar_code" value="{{ old('bar_code') ?? $id->bar_code}}" required autocomplete="bar_code" autofocus min="1" />
            </div>
            <div class="text-danger">{{$errors->first('bar_code')}}</div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Location</label>

            <div class="col-md-12">

                 <select class="form-control form-control-line" name="location" required autocomplete="location" autofocus>
                    @foreach($table as $Id)
                 <option value="AMINI TANGA" {{$Id->location == 'AMINI TANGA' ? 'selected' : '' }}>AMINI TANGA</option>
                 <option value="ARUSHA" {{$Id->location == 'ARUSHA' ? 'selected' : '' }}>ARUSHA</option>
                 <option value="BIHARAMULO" {{$Id->location == 'BIHARAMULO' ? 'selected' : ''}}>BIHARAMULO</option>
                 <option value="CHUNYA" {{$Id->location == 'CHUNYA' ? 'selected' : ''}}>CHUNYA</option>
                 <option value="DODOMA" {{$Id->location == 'DODOMA' ? 'selected' : ''}}>DODOMA</option>
                 <option value="GEITA" {{$Id->location == 'GEITA' ? 'selected' : ''}}>GEITA</option>
                 <option value="KAHAMA" {{$Id->location == 'KAHAMA' ? 'selected' : ''}}>KAHAMA</option>
                 <option value="KASULU" {{$Id->location == 'KASULU' ? 'selected' : ''}}>KASULU</option>
                 <option value="KAGERA" {{$Id->location == 'KAGERA' ? 'selected' : ''}}>KAGERA</option>
                 <option value="KARATU" {{$Id->location == 'KARATU' ? 'selected' : ''}}>KARATU</option>
                 <option value="KAGERA SUGAR" {{$Id->location == 'KAGERA SUGAR' ? 'selected' : ''}}>KAGERA SUGAR</option>
                 <option value="KAKORA" {{$Id->location == 'KAKORA' ? 'selected' : ''}}>KAKORA</option>
                 <option value="KARAGWE" {{$Id->location == 'KARAGWE' ? 'selected' : ''}}>KARAGWE</option>
                 <option value="KIDATU" {{$Id->location == 'KIDATU' ? 'selected' : ''}}>KIDATU</option>
                 <option value="KIGAMBONI" {{$Id->location == 'KIGAMBONI' ? 'selected' : ''}}>KIGAMBONI</option>
                 <option value="KILOSA" {{$Id->location == 'KILOSA' ? 'selected' : ''}}>KILOSA</option>
                 <option value="KILIMANJARO" {{$Id->location == 'KILIMANJARO' ? 'selected' : ''}}>KILIMANJARO</option>
                 <option value="KINONDONI"{{$Id->location == 'KINONDONI' ? 'selected' : ''}}>KINONDONI</option>
                 <option value="KOROGWE"{{$Id->location == 'KOROGWE' ? 'selected' : ''}}>KOROGWE</option>
                 <option value="LINDI"{{$Id->location == 'LINDI' ? 'selected' : ''}}>LINDI</option>
                 <option value="LUSHOTO"{{$Id->location == 'LUSHOTO' ? 'selected' : ''}}>LUSHOTO</option>
                 <option value="MARA"{{$Id->location == 'MARA' ? 'selected' : ''}}>MARA</option>
                 <option value="MAFINGA"{{$Id->location == 'MAFINGA' ? 'selected' : ''}}>MAFINGA</option>
                 <option value="MANYONI"{{$Id->location == 'MANYONI' ? 'selected' : ''}}>MANYONI</option>
                 <option value="MANYARA"{{$Id->location == 'MANYARA' ? 'selected' : ''}}>MANYARA</option>
                 <option value="MASASI"{{$Id->location == 'MASASI' ? 'selected' : ''}}>MASASI</option>
                 <option value="MASWA"{{$Id->location == 'MASWA' ? 'selected' : ''}}>MASWA</option>
                 <option value="MBEYA"{{$Id->location == 'MBEYA' ? 'selected' : ''}}>MBEYA</option>
                 <option value="MBEZI"{{$Id->location == 'MBEZI' ? 'selected' : ''}}>MBEZI</option>
                 <option value="MBINGA"{{$Id->location == 'MBINGA' ? 'selected' : ''}}>MBINGA</option>
                 <option value="MBOZI"{{$Id->location == 'MBOZI' ? 'selected' : ''}}>MBOZI</option>
                 <option value="MOROGORO"{{$Id->location == 'MOROGORO' ? 'selected' : ''}}>MOROGORO</option>
                 <option value="MPANDA"{{$Id->location == 'MPANDA' ? 'selected' : ''}}>MPANDA</option>
                 <option value="MTIBWA"{{$Id->location == 'MTIBWA' ? 'selected' : ''}}>MTIBWA</option>
                 <option value="MTWARA"{{$Id->location == 'MTWARA' ? 'selected' : ''}}>MTWARA</option>
                 <option value="MWANZA"{{$Id->location == 'MWANZA' ? 'selected' : ''}}>MWANZA</option>
                 <option value="MIKOCHENI"{{$Id->location == 'MIKOCHENI' ? 'selected' : ''}}>MIKOCHENI</option>
                 <option value="NJOMBE"{{$Id->location == 'NJOMBE' ? 'selected' : ''}}>NJOMBE</option>
                 <option value="NZEGA"{{$Id->location == 'NZEGA' ? 'selected' : ''}}>NZEGA</option>
                 <option value="NSSFHQ"{{$Id->location == 'NSSFHQ' ? 'selected' : ''}}>NSSFHQ</option>
                 <option value="PANGANI"{{$Id->location == 'PANGANI' ? 'selected' : ''}}>PANGANI</option>
                 <option value="PWANI"{{$Id->location == 'PWANI' ? 'selected' : ''}}>PWANI</option>
                 <option value="RUKWA"{{$Id->location == 'RUKWA' ? 'selected' : ''}}>RUKWA</option>
                 <option value="ROMBO"{{$Id->location == 'ROMBO' ? 'selected' : ''}}>ROMBO</option>
                 <option value="RUVUMA"{{$Id->location == 'RUVUMA' ? 'selected' : ''}}>RUVUMA</option>
                 <option value="SAME"{{$Id->location == 'SAME' ? 'selected' : ''}}>SAME</option>
                 <option value="SHINYANGA"{{$Id->location == 'SHINYANGA' ? 'selected' : ''}}>SHINYANGA</option>
                 <option value="SINGIDA"{{$Id->location == 'SINGIDA' ? 'selected' : ''}}>SINGIDA</option>
                 <option value="SONGWE"{{$Id->location == 'SONGWE' ? 'selected' : ''}}>SONGWE</option>
                 <option value="TABORA"{{$Id->location == 'TABORA' ? 'selected' : ''}}>TABORA</option>
                 <option value="TANGA"{{$Id->location == 'TANGA' ? 'selected' : ''}}>TANGA</option>
                 <option value="TARIME"{{$Id->location == 'TARIME' ? 'selected' : ''}}>TARIME</option>
                 <option value="TEMEKE"{{$Id->location == 'TEMEKE' ? 'selected' : ''}}>TEMEKE</option>
                 <option value="TPC"{{$Id->location == 'TPC' ? 'selected' : ''}}>TPC</option>
                 <option value="TUNDURU"{{$Id->location == 'TUNDURU' ? 'selected' : ''}}>TUNDURU</option>
                 <option value="TUKUYU"{{$Id->location == 'TUKUYU' ? 'selected' : ''}}>TUKUYU</option>
                 <option value="UNILEVER"{{$Id->location == 'UNILEVER' ? 'selected' : ''}}>UNILEVER</option>
                 <option value="USA RIVER"{{$Id->location == 'USA RIVER' ? 'selected' : ''}}>USA RIVER</option>
                 <option value="HRM"{{$Id->location == 'HRM' ? 'selected' : ''}}>HRM</option>
                 <option value="HAI"{{$Id->location == 'HAI' ? 'selected' : ''}}>HAI</option>
                 <option value="IFAKARA"{{$Id->location == 'IFAKARA' ? 'selected' : ''}}>IFAKARA</option>
                 <option value="IFAKARA SUB"{{$Id->location == 'IFAKARA SUB' ? 'selected' : ''}}>IFAKARA SUB</option>
                 <option value="ILALA"{{$Id->location == 'ILALA' ? 'selected' : ''}}>ILALA</option>
                 <option value="IRINGA"{{$Id->location == 'IRINGA' ? 'selected' : ''}}>IRINGA</option>
                 @endforeach

                 @foreach($new_field as $n)
                      @if($n->new_location!= null)
                    <option value="$n->new_location"{{$id->location == $n->new_location ? 'selected' : ''}}>{{$n->new_location}}</option>
                    @endif
                @endforeach

              </select>
            </div>
            <div class="text-danger">{{$errors->first('location')}}</div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Department</label>

            <div class="col-md-12">

                <select class="form-control form-control-line" name="department" value="{{ old('department') ?? $id -> department }}" required autocomplete="department" autofocus >
                  @foreach($table as $Id)
                <option value="REGISTRATION"{{$Id->department == 'REGISTRATION' ? 'selected' : ''}}>REGISTRATION</option>
                <option value="SECURITY (CSM)"{{$Id->department == 'SECURITY (CSM)' ? 'selected' : ''}}>SECURITY (CSM)</optio>
                <option value="STORE"{{$Id->department == 'STORE' ? 'selected' : ''}}>STORE</option>
                <option value="RECORDS (RM)"{{$Id->department == 'RECORDS (RM)' ? 'selected' : ''}}>RECORDS (RM)</option>
                <option value="HR"{{$Id->department == 'HR' ? 'selected' : ''}}>HR</option>
                <option value="PROCUREMENT"{{$Id->department == 'PROCUREMENT' ? 'selected' : ''}}>PROCUREMENT</option>
                <option value="FINANCE"{{$Id->department == 'FINANCE' ? 'selected' : ''}}>FINANCE</option>
                <option value="OPERATION"{{$Id->department == 'OPERATION' ? 'selected' : ''}}>OPERATION</option>
                <option value="RISK"{{$Id->department == 'RISK' ? 'selected' : ''}}>RISK</option>
                <option value="DIT"{{$Id->department == 'DIT' ? 'selected' : ''}}>DIT</option>
                <option value="AUDITOR"{{$Id->department == 'AUDITOR' ? 'selected' : ''}}>AUDITOR</option>
                <option value="LEGAL"{{$Id->department == 'LEGAL' ? 'selected' : ''}}>LEGAL</option>
                <option value="MARKETING"{{$Id->department == 'MARKETING' ? 'selected' : ''}}>MARKETING</option>
                <option value="CONTROL ROOM"{{$Id->department == 'CONTROL ROOM' ? 'selected' : ''}}>CONTROL ROOM</option>
                <option value="DG" {{$Id->department == 'DG' ? 'selected' : ''}}>DG</option>
                <option value="INFORMAL SECTOR" {{$Id->department == 'INFORMAL SECTOR' ? 'selected' : ''}}>INFORMAL SECTOR</option>
                @endforeach
                @foreach($new_field as $n)
                    @if($n->new_department!= null)
                      <option value="$n->new_department"{{$id->department == $n->new_department ? 'selected' : ''}}>{{$n->new_department}}
                      </option>
                    @endif
                @endforeach
              </select >
            </div>
            <div class="text-danger">{{$errors->first('department')}}</div>
        </div>

         <p>Personal Details</p>

       <div class="form-group">
            <label for="example-email" class="col-md-12">Email</label>

            <div class="col-md-12">
               <input type="email" placeholder="janedoe@gmail.com"class="form-control form-control-line" name="user_email" value="{{ old('user_email') ?? $id->user_email }}" required autocomplete="user_email" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('user_email')}}</div>
        </div>

        <div class="form-group">
            <label for="example-email" class="col-md-12">Phone</label>

            <div class="col-md-12">
               <input type="number" placeholder="0745637837"class="form-control form-control-line" name="phone" value="{{ old('phone') ?? $id ->phone }}" required autocomplete="phone" autofocus />
            </div>
            <div class="text-danger">{{$errors->first('phone')}}</div>
        </div>

         <div class="form-group">
            <label for="example-email" class="col-md-12">Extention (optional)</label>

            <div class="col-md-12">
               <input type="number" placeholder="1212"class="form-control form-control-line" name="office_phone" value="{{ old('office_phone') ?? $id->office_phone}}">
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
                    <div class="panel-heading"style="color: #f33155">
                         RELEASE FORM
                    </div>
                <div class="panel-body">
                                       
    <form class="form-horizontal form-material" action="/output_edit" method="POST">

        <div class="form-group">
            <label class="col-md-12">Ticket Number</label>
            <div class="col-md-12">
                <input type="number" class="form-control form-control-line" name="ticket_number" value="{{ old('ticket_number') ?? $id -> ticket_number }}" required autocomplete="ticket_number" autofocus />
            </div>
             <div class="text-danger">{{$errors->first('ticket_number')}}</div>
        </div>

         <div class="form-group">
            <label class="col-md-12">Date Out</label>

            <div class="col-md-12">
                <input type="date" class="form-control form-control-line" name="date_out" value="{{ old('date_out') ?? $id -> date_out}}" required autocomplete="date_out" autofocus />
            </div>
             <div class="text-danger">{{$errors->first('date_out')}}</div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Collected by</label>

            <div class="col-md-12">
                <input type="text" placeholder=" eg.Mr.Hendry" class="form-control form-control-line" name="collected_by" value="{{ old('collected_by') ?? $id -> collected_by}}" required autocomplete="collected_by" autofocus />
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
                <input type="text" class="form-control form-control-line" name="new_machine" value="{{ old('new_machine') }}"placeholder="DELL OPTIPLEX 7010" style="text-transform: uppercase;"/>
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
                <input type="text" placeholder="Sofware Department" class="form-control form-control-line" name="new_department" value="{{ old('new_department') }}"style="text-transform: uppercase;"/>
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