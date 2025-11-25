@php $pageName = "user_management"; $subpageName = "user-category"; @endphp

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
                        <a class="f-s-14 f-w-500" href="#">Update User Account</a>
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
                        <h5>Update User Account</h5>
                          
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="app-datatable-default overflow-auto">
                                        <div class="col-md-6">
                                            <form action="{{ route('user-management-add-category-process') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label">
                                                        First Name  
                                                    </label>
                                                    <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}">
                                                    @error('category_name') <small style="color:red"> {{ $message}}</small> @enderror
                                                
                                                </div>
                                                
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xl-6 d-flex">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <h5 class="card-title">List Category</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive no-search">
                                                        <table id="myTable" class="table table-bordered">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Name</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                $i=1;
                                                                @endphp
                                                                @foreach ($listCategory as $catItem)
                                                                <tr>
                                                                    <td>{{ $i }}</td>
                                                                    <td>{{$catItem->cat_name}}</td>
                                                                    <td><a style="color:white;" href="{{ route('user-management-add-category-edit', Crypt::encrypt($catItem->cat_id)) }}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                                                                </tr>
                                                                @php
                                                                $i++;
                                                                @endphp
                                                                @endforeach
                                                                
                                                                
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