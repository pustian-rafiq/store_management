@extends('admin.admin_layout')
@push('css')
@endpush

@section('main_content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <div class="col-12">
            <!-- general form elements -->
            <div class=" card-primary">
              <div class="card-header">
                <h3 class="card-title"> Category List</h3>
              </div>  
                     <!-- /.card -->

            <div class="card">
              <div class="card-header">
               {{--  <h3 class="card-title">DataTable with default features</h3> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                    @foreach($categories as $key=>$category)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                      <a class="btn btn-sm btn-info" href="{{ route('category.edit',$category->id) }}"><i class="fa fa-edit"></i>Edit</a>
                      <a class="btn btn-sm btn-danger sa-delete" href="javascript:;" data-form-id="category-delete-{{ $category->id }}"><i class="fa fa-trash"></i>Delete</a>

                      <form id="category-delete-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        
                      </form>
                    </td>
                  </tr>
                   @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sl No</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->    
              
    </div>
 </div> 
@endsection