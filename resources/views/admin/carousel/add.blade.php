@extends('admin.template.main')

@section('subject', 'Add Carousel')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Carousel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Website</li>
                        <li class="breadcrumb-item active">Carousel</li>
                        <li class="breadcrumb-item active">Add Carousel</li>
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
                            <h3 class="card-title">Add Carousel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('carousel.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Image for Carousel</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @if(session('image')) is-invalid @endif @error('image') is-invalid @enderror"
                                                id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                    @error('image')
                                    <small id="image" class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                    @if (session('image'))
                                    <small id="image" class="text-danger">
                                        {{ session('image') }}
                                    </small>
                                    @endif
                                    <br>
                                    <small class="text-muted text-danger">
                                        * Dimension : 1600 x 670 <br>
                                        * Max size 2mb (jpeg, jpg, png) <br>
                                    </small>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i>
                                    &nbsp; Submit</button>
                                <a href="/faq" class="btn btn-secondary float-right mr-4"><i class="fas fa-undo"></i>
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
