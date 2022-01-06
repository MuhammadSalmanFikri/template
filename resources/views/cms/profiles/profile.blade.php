@extends('cms.layouts.template')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile Update</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
          <form method="POST" action="{{ route('changePasswordPost') }}">
            <div class="form-row mt-5">
              <div class="form-group col-md-6">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" placeholder="Name" value="{{ old('name', $user->name) }}">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Date of birth</label>
                <input type="date" class="form-control" id="inputPassword4' placeholder="Password">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <select id="inputState" class="form-control">
                  <option selected>Gender</option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
                  <option value="Custom">Custom</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Images</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <!-- /.content-wrapper -->

@endsection
