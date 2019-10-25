@extends('layout.admin_layout')
@section('content')
  <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
             <h4 class="page-title">Basic Table page</h4>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
           <ol class="breadcrumb">

               <li><a href="#">Dashboard</a></li>
               <li class="active">Basic Table Page</li>
           </ol>
        </div>
    </div>

    <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right" style="color:#f33155">
                                {{date('M D Y')}}
                            </div>
                            <h3 class="box-title" style="color:#f33155">Store Updates</h3>
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
                                            <th colspan="2" class="text-center">Action</th>

                                        </tr>
                                    </thead>
                                     @foreach($table as $t)
                                    <tbody>
                                        <tr>
                                            <td>{{$t->id}}</td>
                                            <td class="txt-oflo">{{$t->date_in}}</td>
                                            <td class="txt-oflo">{{$t->serial_number}}</td>
                                            <td class="txt-oflo">{{$t->type_of_machine}}</td>
                                            <td class="txt-oflo">{{$t->location}}</td>
                                            <td class="txt-oflo">{{$t->brought_by}}</td>
                                            <td class="txt-oflo">{{$t->date_out}}</td>
                                            <td class="txt-oflo">{{$t->collected_by}}</td>    
                                            <td class="txt-oflo">{{$t->remark}}</td>
                                            <td>
                                               <small>
                                                 <a href="/{{$t->id}}" class="btn btn-info btn-sm inline">Edit
                                                 </a>
                                               </small>
                                            </td>

                                           <td>
                                             <form action="/{{$t->id}}" method="POST" class="pull-right">
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
                             <div class="text-center">{!! $table -> render() !!}</div>
                        </div>
                    </div>
                </div>
 @endsection