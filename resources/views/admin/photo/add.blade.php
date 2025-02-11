@extends('admin.template.main')

@section('subject', 'Add Photo')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Photo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Package</li>
                        <li class="breadcrumb-item active">Photo</li>
                        <li class="breadcrumb-item active">Add Photo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Add Photo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('photo.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="id_package">
                                                Package
                                            </label>
                                            <select class="custom-select form-control-border @if(session('id_package')) is-invalid @endif @error('id_package') is-invalid @enderror" id="id_package" name="id_package">
                                                <option selected disabled value="">Choose Package</option>
                                                @foreach ($package as $p)
                                                    <option value="{{ $p->id }}" {{ old('id_package') === $p->id ? 'selected' : '' }}>{{ $p->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_package')
                                            <small id="id_package" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('id_package'))
                                            <small id="id_package" class="text-danger">
                                                {{ session('id_package') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="photo">Photo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file"
                                                        class="custom-file-input @if(session('photo')) is-invalid @endif @error('photo') is-invalid @enderror"
                                                        id="photo" name="photo">
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                </div>
                                            </div>
                                            @error('photo')
                                            <small id="photo" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('photo'))
                                            <small id="photo" class="text-danger">
                                                {{ session('photo') }}
                                            </small>
                                            @endif
                                            <br>
                                            <small class="text-muted text-danger">
                                                {{-- * Dimension : 1067 x 755 <br> --}}
                                                * Max size 2mb (jpeg, jpg, png) <br>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i>
                                    &nbsp; Submit</button>
                                <a href="/photo" class="btn btn-secondary float-right mr-4"><i class="fas fa-undo"></i>
                                    &nbsp; Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
