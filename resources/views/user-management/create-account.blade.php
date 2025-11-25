@php $pageName = "user_management"; $subpageName = "create-account"; @endphp

@extends('layouts.app')


@section('content')
    <div class="container-fluid">
         <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">User  Management</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-file f-s-16"></i> User
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="f-s-14 f-w-500" href="#">Create Account</a>
                    </li>
                </ul>
            </div>
        </div>
      
      @if (session('success_message'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Success Message! <i class="ti ti-x float-end breadcrumb-start"
                                                    data-bs-dismiss="alert"></i></h4>
            <p>{{session('success_message')}} </p>
        </div>
        @endif
        @if (session('error_message'))
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error Message! <i class="ti ti-x float-end breadcrumb-start"
                                                    data-bs-dismiss="alert"></i></h4>
            <p>{{session('error_message')}}</p>
        </div>
        @endif
        <div class="row">
            <!-- Basic Input Groups start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create User Account</h5>
                          
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="app-datatable-default overflow-auto">
                                         <form id="formValidationExamples" method="POST" action="{{route('create-account-process')}}">
                                                @csrf
                                    
                                                
                                                <div class="form-group row">
                                            
                                                <div class="col-md-6">
                                                    <label class="form-label" for="users">User</label>
                                                    <select id="users" name="users" class="form-select select2" data-allow-clear="true">
                                                        <option value="">-- SELECT USER --</option>
                                                        @foreach ($listStaff as $staff)
                                                            <option value="{{$staff->staff_id}}">{{$staff->title}} {{$staff->firstname}} {{$staff->surname}}</option>
                                                        @endforeach 
                                                    </select>
                                                    @error('users')<small style="color: red">{{$message}}</small>@enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="category">Category</label>
                                                    <select id="category" name="category" class="form-select select2" data-allow-clear="true">
                                                        <option value="">-- SELECT CATEGORY --</option>
                                                        @foreach ($userCategoryList as $catItem)
                                                        <option value="{{$catItem->cat_id}}">{{$catItem->cat_name}}</option> 
                                                        @endforeach
                                                        
                                                    </select>
                                                    @error('category')<small style="color: red">{{$message}}</small>@enderror
                                                </div>
                                                </div>
                                                <div class="form-group row">
                                            
                                                <div class="col-md-6">
                                                    <div class="form-password-toggle">
                                                        <label class="form-label" for="email">User email</label>
                                                        <div class="input-group input-group-merge">
                                                            <input @readonly(true)  class="form-control" type="text" id="email" name="email" placeholder="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-password-toggle">
                                                        <label class="form-label" for="password">Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="password" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-confirm-password2" />
                                                            
                                                        </div>
                                                        @error('password')<small style="color: red">{{$message}}</small>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                <!-- Personal Info -->
                                            <br>
                                                <div class="text-end">
                                                    <button type="submit" name="submitButton" class="btn btn-primary">Create Account</button>
                                                </div>
                                            </form>
                                             
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
    $(document).on('change','#users',function(e){
        e.preventDefault();

        let id = $(this).val();

        $.ajax({
            type:'POST',
            url:'get-user-email-process',
            data:{
                "_token": "{{ csrf_token() }}",
                'users': id
            },
            success:function(data){

                $('#email').val(data);
            }
        });

        
    });
</script>
@endsection