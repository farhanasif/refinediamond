@extends('admin.admin_master')

@section('custom_css')
    
@endsection
@section('admin_title', 'Add Category')
@section('dashobard_title', 'Add Category')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Category</li>
              <li class="breadcrumb-item active">Add Category Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header text-white" style="background-color: saddlebrown">
           Add Category
        </div>
        @include('admin.includes.message')
        <div class="card-body">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{ route('storeCategory') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="category_name">Category Name</label>
                      <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                      <label for="photo">Upload Image</label>
                      <input type="file" class="form-control" name="photo">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('allCategory') }}" class="btn btn-info ">Back</a>
                  </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    
@endsection