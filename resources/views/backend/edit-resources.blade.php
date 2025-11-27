@php $pageName = "res"; $subpageName = "add_res"; @endphp

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
                        <i class="ph-duotone  ph-file f-s-16"></i> Resources
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="f-s-14 f-w-500" href="#">Update Material</a>
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
                        <h5>Resources</h5>
 
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row">
                              
                                    <div class="col-6">
                                        <form enctype="multipart/form-data" method="post" action="{{ route('edit-resource-process',$id) }}">
                                            @csrf
                                            <div class="row">
                                                    <div class="mb-3">
                                                        <label for="userName" class="form-label">Document Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Enter Document Name" value="{{ $data->name }}"/>
                                                        @error('name') <small style="color:red"> {{ $message}}</small> @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="userName" class="form-label">Upload Document</label>
                                                        <input type="file" class="form-control"   name="document" placeholder="Upload Photo Here">
                                                       
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select class="form-control" name="status">
                                                            <option value="{{ $data->status }}"  >{{$data->status}}</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                        @error('status') <small style="color:red"> {{ $message}}</small> @enderror
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary" type="button">Update</button>
                                                    </div>
                                            </div>
                                        </form>

                                    </div>
                                
                                <div class="col-6">
                                    <div class="app-datatable-default overflow-auto">
                                        <table id="example" class="display app-data-table default-data-table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Document</th>
                                                
                                                <th>Action</th>
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
                                                    <td>{{$list->name}}</td>
                                                    <td><a href="{{ $list->document }}" class="btn btn-sm btn-info" target="_"><i class="fa fa-eye"></i>  View  </a></td>
                                                    <td>
                                                        <a href="{{route('edit-resources',Crypt::encrypt($list->id))}}" class="btn btn-success icon-btn b-r-4 pen-btn"><i class="fa fa-edit"></i> </a>
                                                        
                                                        <a onclick="return confirm( 'Are you sure you want to delete this Document ?')" href=" {{ url('Resources/'.$list->id).'/delete' }}"  class="btn btn-danger icon-btn b-r-4 delete-btn">
                                                            <i class="ti ti-trash"></i>
                                                        </a>
                                                    </td>
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
 
@endsection