@php $pageName = "testimonial"; $subpageName = "list_staff"; @endphp

@extends('layouts.app')


@section('content')
    <div class="container-fluid">
         <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Website Manager</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-file f-s-16"></i> Contact
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="f-s-14 f-w-500" href="#">List All Messages</a>
                    </li>
                </ul>
            </div>
        </div>
      
      @if (session('message_success'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Success Message! <i class="ti ti-x float-end breadcrumb-start"
                                                    data-bs-dismiss="alert"></i></h4>
            <p>{{session('message_success')}} </p>
        </div>
        @endif
        @if (session('message_error'))
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error Message! <i class="ti ti-x float-end breadcrumb-start"
                                                    data-bs-dismiss="alert"></i></h4>
            <p>{{session('message_error')}}</p>
        </div>
        @endif
        <div class="row">
            <!-- Basic Input Groups start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Messages</h5>
                         
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="app-datatable-default overflow-auto">
                                        <table id="example" class="display app-data-table default-data-table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                             
                                            </tr>
                                            </thead>
                                            <tbody>
                                                 @php
                                                $i=1;
                                                @endphp
                                                @if($list)
                                                @foreach($list as $list)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td><span class="badge text-light-primary">{{ $list->name  }}</span></td>
                                                    <td>{{ $list->email }}</td>
                                                    <td>{{ $list->telephone }}</td>
                                                    <td>{{ $list->subject }}</td>
                                                     <td>{{ $list->message }}</td>
                                                 
                                                    
                                                 
                                                </tr>
                                                @php
                                                $i++;
                                                @endphp
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection

@section('scripts')
    <script>
    $(document).ready(function(){
    $('body').on('click', '#showmodal', function(){
    var userUrl = $(this).data('url');
    $.get(userUrl, function(data){
    $('#exampleModalLargeE').modal('show');
    $('#testID').val(data.id);
    $('#clientName').val(data.name);
    $('#clientMeg').val(data.message);
    $('#clientstatus').val(data.status);
    })
    });
    });
</script>
@endsection