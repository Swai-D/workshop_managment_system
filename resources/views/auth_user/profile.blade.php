@extends('layout.auth_layout')


@section('content')
  <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile Page/{{Auth::user()->name}}</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" height="100%" alt="user" src="../plugins/images/large/nssf_logo.png" style="background-image: center">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="/uploads/avatar/{{Auth::user()->avatar}}"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                {{Auth::user()->name}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" enctype="multipart/form-data" action="/profile" method="POST">
                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Johnathan Doe"
                                            class="form-control form-control-line"></div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="johnathan@admin.com"
                                            class="form-control form-control-line" name="example-email"
                                            id="example-email"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" value="password" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="123 456 7890"
                                            class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Photo</label>
                                    <div class="col-md-12">
                                          <input type="file" name ="avatar" class="form-control form-control-line">
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-danger btn-sm waves-effect waves-light">Update Profile</button>
                                    </div>
                                </div>
                                  @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
  @endsection