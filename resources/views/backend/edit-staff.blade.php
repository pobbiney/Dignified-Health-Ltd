@php $pageName = "staff"; $subpageName = "add_staff"; @endphp

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
                        <i class="ph-duotone  ph-file f-s-16"></i> Staff
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="f-s-14 f-w-500" href="#">Update Staff</a>
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
                        <h5>Add New Staff</h5>
                         <a  href="{{ route('list-staff') }}" class="btn btn-success" style="float: right;margin-top:-20px"  ><i class="fa fa-list"></i> List Staff</a>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row">
                                
                                <form class="app-form" enctype="multipart/form-data" method="post" action="{{ route('edit-staff-process',$id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center mb-3">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type="file" id="imageUpload" name="photo"
                                                            accept=".png')}}, .jpg')}}, .jpeg">
                                                        <label for="imageUpload"><i
                                                                class="ti ti-photo-heart"></i></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imgPreview">
                                                            <img src="{{ asset($data->picture) }}" class="avatar-preview" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Surname</label>
                                                <input type="text" name="surname" class="form-control" placeholder="Enter Surname" value="{{ $data->surname }}"
                                                    required>
                                                    @error('surname') <small style="color:red"> {{ $message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Middle Name</label>
                                                <input type="text" name="othername" class="form-control" placeholder="Enter Name"  value="{{ $data->othername }}"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" name="firstname" class="form-control"
                                                    placeholder="Enter First Name"  value="{{ $data->firstname }}" >
                                                    @error('firstname') <small style="color:red"> {{ $message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-3">
                                            <div class="mb-3">
                                                <label class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control" name="dob"  value="{{ $data->dob }}">
                                                @error('dob') <small style="color:red"> {{ $message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-3 floating-select">
                                            <div class="mb-3">
                                                <label class="form-label">Gender</label>
                                                <select class="form-select" name="gender">
                                                    <option   value="{{ $data->gender }}">{{ $data->gender }}</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                @error('gender') <small style="color:red"> {{ $message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email Address</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text b-r-left">@</span>
                                                    <input type="text" class="form-control b-r-right"
                                                        placeholder="Email Address" name="email"  value="{{ $data->email }}">
                                                        @error('email') <small style="color:red"> {{ $message}}</small> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number</label>
                                                <input type="text" name="phone" class="form-control" placeholder="xxx-xxxx-xxx"  value="{{ $data->phone }}"
                                                    required>
                                                    @error('phone') <small style="color:red"> {{ $message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Position</label>
                                                <input type="text" name="position" class="form-control" placeholder="Enter Position"  value="{{ $data->position }}"
                                                    required>
                                                    @error('position') <small style="color:red"> {{ $message}}</small> @enderror
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="{{ $data->status }}"  >{{$data->status}}</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                                @error('status') <small style="color:red"> {{ $message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Profile</label>
                                                <textarea class="form-control" rows="5" name="profile"
                                                        placeholder="Enter Your Personal Profile">{{$data->profile}}</textarea>
                                                @error('profile') <small style="color:red"> {{ $message}}</small> @enderror
                                            </div>
                                        </div>
                                        
                                    
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Update Staff</button>
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>   
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