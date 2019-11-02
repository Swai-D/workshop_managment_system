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
<div class="col-md-12 col-lg-12 col-sm-12">
    <div class="white-box">
        <h3 class="box-title text-center" style="color: #f33155">Asset Details</h3>
    <div class="comment-center p-t-10">
    <div class="comment-body">
     <div class="mail-contnet">

<form class="form-horizontal form-material" action="/asset_input" method="POST">
       <p class="lead">Device Details</p>
       <br>
        <div class="form-group row">  
            <div class="col-md-6">
                <label class="">Device Name<i class="fa fa-star" style="color: red"></i></label>
                <input type="text" class="form-control form-control-line" name="device_name" value="{{ old('device_name') }}" required autocomplete="device_name" autofocus placeholder="Printer" style="text-transform: uppercase;" />
            </div>
            <div class="text-danger">{{$errors->first('device_name')}}</div>


        
            <div class="col-md-6">
                <label class="">Vendor</label>

                <input type="text" class="form-control form-control-line" name="vendor" value="{{ old('vendor') }}" style="text-transform: uppercase;" placeholder="Hp manufacture" />
            </div>
            <div class="text-danger">{{$errors->first('vendor')}}</div>
        </div>


        <div class="form-group row">
                <div class="col-md-6">
                    <label class="">Product <i class="fa fa-star" style="color: red"></i></label>
                   <select class="form-control form-control-line" name="product">
                       <option value="Acces Point">Acces Point</option>
                       <option value="Printers">Printers</option>
                       <option value="Routers">Routers</option>
                       <option value="Server">Server</option>
                       <option value="Switches">Switches</option>
                       <option value="Workstations">Workstations</option>
                   </select>
                </div>
              
        
                <div class="col-md-6">
                    <label class="">Purchase Cost($)</label>
                    <input type="number" class="form-control form-control-line" name="cost" value="{{ old('cost') }}" min=1 placeholder="$380">
                </div>
                <div class="text-danger">{{$errors->first('cost')}}</div>
           </div>

        <div class="form-group row">  
            <div class="col-md-6">
                <label class="">Serial # <i class="fa fa-star" style="color: red"></i></label>
                <input type="number" class="form-control form-control-line" name="serial_number" value="{{ old('serial_number') }}" required autocomplete="serial_number" autofocus placeholder="4CE0460D0G." />
            </div>
            <div class="text-danger">{{$errors->first('serial_number')}}</div>


        
            <div class="col-md-6">
                <label class="">Acquisition <i class="fa fa-calendar"></i> <i class="fa fa-star" style="color: red"></i></label>

                <input type="date" class="form-control form-control-line" name="date_aquired" value="{{ old('date_aquired') }}" />
            </div>
            <div class="text-danger">{{$errors->first('date_aquired')}}</div>
        </div>



         <div class="form-group row">  
            <div class="col-md-6">
                <label class="">BarCode #</label>
                <input type="number" class="form-control form-control-line" name="barcode" value="{{ old('barcode') }}" placeholder="12100-00745." />
            </div>

             <div class="col-md-6">
                <label class="">Warranty Expire Date <i class="fa fa-calendar"></i></i></label>
                <input type="date" class="form-control form-control-line" name="warranty" value="{{ old('warranty') }}" />
            </div>
           
        </div>

        <div class="form-group row">  
            <div class="col-md-6">
                <label class="">Location <i class="fa fa-star" style="color: red"></i></label>
                <select class="form-control form-control-line" name="location">
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
                </select>
        
            </div>
            <div class="text-danger">{{$errors->first('location')}}</div>

        </div>
        <br>
        <p class="lead">State</p>
        <hr>

       <div class="form-group">
            <label for="example-email" class="col-md-12">Asset is Current <i class="fa fa-star" style="color: red"></i></label>
            <div class="col-md-6">
               <select class="form-control form-control-line" name="machine_condition">
                   <option value="In Store">In Store</option>
                   <option value="In Repair">In Repair</option>
                   <option value="In Use">In Use</option>
               </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Commet</label>
                <div class="col-md-6">
                    <textarea rows="5" class="form-control form-control-line" name="comment"></textarea>
                </div>
        </div>

                         
         <div class="form-group">
            
                <div class="col-sm-12">
                   <button class="btn btn-danger waves-effect waves-light">save</button>
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