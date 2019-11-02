@extends('layout.auth_layout')

@section('content')
   
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Item Track Page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Item Track Page</li>
                        </ol>
                    </div>
                </div>
                <div class="row">

                	<div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body form-group">
                                        <form action="/item_live_search" method="POST">
                                        	<input type="number" name="q" placeholder="eg.Ticket No. 1274."class="form-control">
                                        	<br>
                                        	<button type="submit" class="btn btn-danger btn-block waves-effect waves-light">send</button>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="white-box">
                            <h3 class="text-center"><b>Item status</b></h3>
                             @if(isset($details))
                             <h5  style="color:#f33155">The search result for your query <b>{{$query}}</b> are:
                            <div class="comment-center p-t-10">
                                <div class="comment-body">
                        
                                    <div class="mail-contnet"> 
                                    	<table class="table table-striped">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Item Name</th>
                                                  <th scope="col">Serial #</th>
                                                  <th scope="col">Ticket #</th>
                                                  <th scope="col">Date Received</th>
											      <th scope="col">Status</th>
											    </tr>
											  </thead>
                                            @foreach($details as $d)
											  <tbody>
											    <tr>
											      <th scope="row">{{$d-> id}}</th>
                                                  <td>{{$d-> type_of_machine}}</td>
                                                  <td>{{$d-> serial_number}}</td>
											      <td>{{$d-> ticket_number}}</td>
											      <td>{{$d-> date_in}}</td>
											      <td>{{$d-> date_out}}</td>
											    </tr>
											    
											  </tbody>
                                            @endforeach
									</table>
											                                        
                                    </div>
                                    @elseif(isset($message))
                                       <p class="text-danger">{{$message}}</p>  
                                     @endif
                                </div>
   
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> &copy;Blacknative Inc. {{date('M Y')}} </footer>
   
 @endsection