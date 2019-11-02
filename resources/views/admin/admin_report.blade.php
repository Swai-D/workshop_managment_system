@extends('layout.admin_layout')
@section('content')
  <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
             <h4 class="page-title">Report page</h4>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
           <ol class="breadcrumb">

               <li><a href="#">Dashboard</a></li>
               <li class="active">Report Page</li>
           </ol>
        </div>
    </div>

  <div class="row">

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title" style="color:#f33155">Store Report</h3>
            <ul class="list-inline text-right">
              <li>
                <h5><i class="fa fa-circle m-r-5 text-info"></i>Input</h5> </li>
              <li>
                <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Output</h5>
              </li>
            </ul>
              <div id="ct-visits" style="height: 405px;">
                 <!--  <canvas id="myAreaChart">    
                  </canvas> -->
              </div>
              </div>
        </div>
</div>

<script src="{{asset('vendor/jquery.min.js')}}"></script>
<script src="{{asset('vendor/Chart.min.js')}}"></script>

@endsection