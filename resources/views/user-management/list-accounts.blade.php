@php $pageName = "user_management"; $subpageName = "list-account"; @endphp

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
                        <a class="f-s-14 f-w-500" href="#">List Account</a>
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
                        <h5>List User Account</h5>
                          
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="app-datatable-default overflow-auto">
                                         <form id="formValidationExamples" class="row g-6" action="{{route('user-management-get-accounts')}}" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label class="form-label" for="category">USER CATEGORY</label>
                                                        <select id="category" name="category" class="form-select select2" data-allow-clear="true">
                                                            <option value="">-- SELECT CATEGORY --</option>
                                                            @foreach ($listCategory as $catItem)
                                                                <option value="{{$catItem->cat_id}}">{{$catItem->cat_name}}</option> 
                                                            @endforeach
                                                        </select>
                                                        @error('category')<small style="color: red">{{$message}}</small>@enderror
                                                    </div>
                                                    <div class="col-md-6" style="padding-top:26px;">
                                                        <button type="submit" name="submitButton" class="btn btn-success"><i class="fa fa-list"></i></button>
                                                    </div>
                                                </div>
                                                
                                                @if ($userList != null)
                                                <div class="table-responsive" style="margin-top: 30px">                                 
                                                        <table   class="table table-bordered"  >
                                                            <thead>
                                                                <tr>
                                                                    <th>Full Name</th>
                                                                    <th>Email</th>
                                                                    <th>Category</th>
                                                                    <th>Action</th>
                                                                    <th>Creation Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($userList as $userList)
                                                                    <tr>
                                                                        <td><b>{{$userList->name}}</b></td>
                                                                        <td>{{$userList->email}}</td>
                                                                        <td>{{$userList->categoryname->cat_name}}</td>
                                                                        <td><a style="color: white;" href="{{route('user-management-edit-user-account',Crypt::encrypt($userList->id))}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a></td>
                                                                        <td>{{$userList->created_at}}</td>
                                                                    </tr>   
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                </div>
                                                @else
                                                    <p class="alert alert-danger" align="center" style="margin-top: 30px">NO RECORDS FOUND</p>
                                                @endif
                                            
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