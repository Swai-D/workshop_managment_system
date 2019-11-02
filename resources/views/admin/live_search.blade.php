@extends('layout.admin_layout')
@section('content')
  <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
             <h4 class="page-title">Search Table page</h4>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
           <ol class="breadcrumb">

               <li><a href="#">Dashboard</a></li>
               <li class="active">Search Table Page</li>
           </ol>
        </div>
    </div>

    <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right" style="color:#f33155">
                                {{date('M D Y')}}
                            </div>
                           @if(isset($details))
                            <h5  style="color:#f33155">The search result for your query <b>{{$query}}</b> are:</h5>
                            <div class="table-responsive">
                                <table class="table">
                                     <thead>
                                        <tr>
                                            <th>ID#</th>
                                            <th>Date in</th>
                                            <th>Serial#</th>
                                            <th>Barcode#</th>
                                            <th>Ticket#</th>
                                            <th>Machine Type</th>
                                            <th>Location</th>
                                            <th>Department</th>
                                            <th>Email</th>
                                            <th>Phone#</th>
                                            <th>Extension#</th>
                                            <th>Date out</th>
                                            <th>CollectedBy</th>
                                            <th>Remarks</th>
                                            <th colspan="3" class="text-center">Action</th>

                                        </tr>
                                    </thead>
                                    @foreach($details as $d)
                                    <tbody>
                                        <tr>
                                             <td>{{$d->id}}</td>
                                            <td class="txt-oflo">{{$d->date_in}}</td>
                                            <td class="txt-oflo">{{$d->serial_number}}</td>
                                            <td class="txt-oflo">{{$d->bar_code}}</td>
                                            <td class="txt-oflo">{{$d->ticket_number}}</td>
                                            <td class="txt-oflo">{{$d->type_of_machine}}</td>
                                            <td class="txt-oflo">{{$d->location}}</td>
                                            <td class="txt-oflo">{{$d->department}}</td>
                                            <td class="txt-oflo">{{$d->user_email}}</td>    
                                            <td class="txt-oflo">{{$d->phone}}</td>    
                                            <td class="txt-oflo">{{$d->office_phone}}</td>    
                                            <td class="txt-oflo">{{$d->date_out}}</td>    
                                            <td class="txt-oflo">{{$d->collected_by}}</td>    
                                            <td class="txt-oflo">{{$d->remark}}</td> 
                                             <td>
                                               <small>
                                                 <a href="/{{$d->id}}" class="btn btn-info btn-sm inline">Edit
                                                 </a>
                                               </small>
                                            </td>

                                           <td>
                                             <form action="/{{$d->id}}" method="POST" class="pull-right">
                                              @method('DELETE')
                                               @csrf
                                                <button type="submit" class="btn btn-danger inline btn-sm pull-left">Delete
                                                </button>
                                             </form>
                                           </td>    
                                        </tr>
                                    </tbody>
                                     @endforeach
                                </table>
                               
                            </div>
                             @elseif(isset($message))
                               <p class="text-red">{{$message}}</p>  
                             @endif
                        </div>
                    </div>
                </div>
 @endsection