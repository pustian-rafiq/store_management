@extends('admin.admin_layout')
@push('css')
@endpush

@section('main_content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Size Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Size List</li>
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
                <h3 class="card-title"> Size List</h3>

              </div><br>  
               <a href="{{ route('size.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New Size</a><br><br>
       <!-- .card -->
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
                    <th>Size Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                    @foreach($sizes as $key=>$size)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $size->size }}</td>
                    <td>
                      <a class="btn btn-sm btn-info" href="{{ route('size.edit',$size->id) }}"><i class="fa fa-edit"></i>Edit</a>
                      <a class="btn btn-sm btn-danger sa-delete" href="javascript:;" data-form-id="category-delete-{{ $size->id }}"><i class="fa fa-trash"></i>Delete</a>

                      <form id="category-delete-{{ $size->id }}" action="{{ route('size.destroy',$size->id) }}" method="post">
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
                    <th>Size Name</th>
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