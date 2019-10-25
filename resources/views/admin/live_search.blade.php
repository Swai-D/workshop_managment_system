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
                                            <th>Serial #</th>
                                            <th>Type Of machine</th>
                                            <th>Location</th>
                                            <th>Brought by</th>
                                            <th>Date out</th>
                                            <th>Collected By</th>
                                            <th>Remarks</th>

                                        </tr>
                                    </thead>
                                    @foreach($details as $d)
                                    <tbody>
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td class="txt-oflo">{{$d->date_in}}</td>
                                            <td class="txt-oflo">{{$d->serial_number}}</td>
                                            <td class="txt-oflo">{{$d->type_of_machine}}</td>
                                            <td class="txt-oflo">{{$d->location}}</td>
                                            <td class="txt-oflo">{{$d->brought_by}}</td>
                                            <td class="txt-oflo">{{$d->date_out}}</td>
                                            <td class="txt-oflo">{{$d->collected_by}}</td>    
                                            <td class="txt-oflo">{{$d->remark}}</td>    
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