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
              <li class="breadcrumb-item active">Size/Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <div class="col-md-8 col-offset-2">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Size</h3>
              </div>  
             <form  action="{{ route('size.store') }}" method="post">
             	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Size Name</label>
                    <input type="text" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter size name">
                    @if($errors->has('size'))
                     <span style="color: red">{{ $errors->first('size') }}</span>
                    @endif
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Size</button>
                </div>

            </form>
    </div>
 </div> 
@endsection