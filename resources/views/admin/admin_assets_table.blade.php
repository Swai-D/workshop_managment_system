@extends('layout.admin_layout')
@section('content')
  <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
             <h4 class="page-title">Assets Page</h4>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
           <ol class="breadcrumb">

               <li><a href="#">Dashboard</a></li>
               <li class="active">Assets Page</li>
           </ol>
        </div>
    </div>
        <div class="">
          <h3 class="box-title" style="color:#f33155">Assets</h3>
            <div class="row">
               <div class="col-lg-4 col-xs-6 bg" id="card">
                  <div class="card">
                    <h4 class="card-header"><i class="fa fa-star-o">&nbsp;Access Point&nbsp;({{$acces_points}})</i><a href="{{url('/asset_form')}}" class="pull-right"><i class="fa fa-plus"></i></a></h4>
                    <div class="row no-gutters ">
                      <div class="col-md-6">
                       <img src="{{asset('asset/img/wifi.png')}}">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <p class="card-text">
                            <ul id="list">

                             <p><a href="">In Use&nbsp;({{$acces_points_in_use}})</a></p>
                             <p><a href="">In Store&nbsp;({{$acces_points_in_store}})</a></p>
                             <p><a href="">In Repair&nbsp;({{$acces_points_in_repair}})</a></p>
                           
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

               </div>
               <!-- ./col -->
               <div class="col-lg-4 col-xs-6" >
                   <!-- small box -->
                   <div class="card">
                    <h4 class="card-header"><i class="fa fa-star-o">&nbsp;Printers&nbsp;({{$printers}})</i><a href="{{url('/asset_form')}}" class="pull-right"><i class="fa fa-plus"></i></a></h4>
                   <div class="row no-gutters">
                      <div class="col-md-6">
                       <img src="{{asset('asset/img/printer.png')}}">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <p class="card-text">
                            <ul id="list">
                             <p><a href="">In Use&nbsp;({{$printers_in_use}})</a></p>
                             <p><a href="">In Store&nbsp;({{$printers_in_store}})</a></p>
                             <p><a href="">In Repair&nbsp;({{$printers_in_repair}})</a></p>
                           
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
                <div class="col-lg-4 col-xs-6" id="card">  
                   <div class="card">
                    <h4 class="card-header"><i class="fa fa-star-o">&nbsp;Routers&nbsp;({{$routes}})</i><a href="{{url('/asset_form')}}" class="pull-right"><i class="fa fa-plus"></i></a></h4>
                   <div class="row no-gutters">
                      <div class="col-md-6">
                       <img src="{{asset('asset/img/router.png')}}">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <p class="card-text">
                            <ul id="list">
                             <p><a href="">In Use&nbsp;({{$routers_in_use}})</a></p>
                             <p><a href="">In Store&nbsp;({{$routers_in_store}})</a></p>
                             <p><a href="">In Repair&nbsp;({{$routers_in_repair}})</a></p>
                           
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
           </div>

 <br><br>
        <div class="row">
               <div class="col-lg-4 col-xs-6">
                  <div class="card">
                    <h4 class="card-header"><i class="fa fa-star-o">&nbsp;Server&nbsp;({{$servers}})</i><a href="{{url('/asset_form')}}" class="pull-right"><i class="fa fa-plus"></i></a></h4>
                   <div class="row no-gutters"style="max-height: 540px;">
                      <div class="col-md-6">
                       <img src="{{asset('asset/img/cloud-computing.png')}}">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <p class="card-text">
                            <ul id="list">

                             <p><a href="">In Use&nbsp;({{$servers_in_use}})</a></p>
                             <p><a href="">In Store&nbsp;({{$servers_in_store}})</a></p>
                             <p><a href="">In Repair&nbsp;({{$servers_in_repair}})</a></p>
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

               </div>
               <!-- ./col -->
               <div class="col-lg-4 col-xs-6" id="card">
                   <!-- small box -->
                   <div class="card">
                    <h4 class="card-header"><i class="fa fa-star-o">&nbsp;Switches&nbsp;({{$switches}})</i><a href="{{url('/asset_form')}}" class="pull-right"><i class="fa fa-plus"></i></a></h4>
                    <div class="row no-gutters">
                      <div class="col-md-6">
                      <img src="{{asset('asset/img/switch.png')}}">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <p class="card-text">
                            <ul id="list">
                             <p><a href="">In Use&nbsp;({{$switches_in_use}})</a></p>
                             <p><a href="">In Store&nbsp;({{$switches_in_store}})</a></p>
                             <p><a href="">In Repair&nbsp;({{$switches_in_repair}})</a></p>
                          
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
                <div class="col-lg-4 col-xs-6">  
                   <div class="card">
                    <h4 class="card-header"><i class="fa fa-star-o">&nbsp;Workstations&nbsp;({{$workstations}})</i><a href="{{url('/asset_form')}}" class="pull-right"><i class="fa fa-plus"></i></a></h4>
                   <div class="row no-gutters">
                      <div class="col-md-6">
                       <img src="{{asset('asset/img/workstation.png')}}">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <p class="card-text">
                            <ul id="list">
                             <p><a href="">In Use&nbsp;({{$workstations_in_use}})</a></p>
                             <p><a href="">In Store&nbsp;({{$workstations_in_store}})</a></p>
                             <p><a href="">In Repair&nbsp;({{$workstations_in_repair}})</a></p>
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
           </div>

@endsection