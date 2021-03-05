@extends('admin.admin_layout')
@push('css')
@endpush

@section('main_content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Brand Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brand/Edit</li>
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
                <h3 class="card-title">Edit Brand</h3>
              </div>  
             <form  action="{{ route('brand.update',$brand->id) }}" method="post">
             	@csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand Name</label>
                    <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" value="{{ $brand->brand_name }}" >
                    @if($errors->has('brand_name'))
                     <span style="color: red">{{ $errors->first('brand_name') }}</span>
                    @endif
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save Brand</button>
                </div>

            </form>
    </div>
 </div> 
@endsection