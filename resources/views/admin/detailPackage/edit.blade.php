@extends('admin.template.main')

@section('subject', 'Edit Detail')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Package</li>
                        <li class="breadcrumb-item active">Detail</li>
                        <li class="breadcrumb-item active">Edit Detail</li>
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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title text-white">Edit Detail</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('detailPackage.update', $package->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="min_age">
                                                Minimum Age
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('min_age')) is-invalid @endif @error('min_age') is-invalid @enderror"
                                                id="min_age" name="min_age" value="{{ $package->min_age }}">
                                            @error('min_age')
                                            <small id="min_age" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('min_age'))
                                            <small id="min_age" class="text-danger">
                                                {{ session('min_age') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="swing_change">
                                                Swing Change
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('swing_change')) is-invalid @endif @error('swing_change') is-invalid @enderror"
                                                id="swing_change" name="swing_change"
                                                value="{{ $package->swing_change }}">
                                            @error('swing_change')
                                            <small id="swing_change" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('swing_change'))
                                            <small id="swing_change" class="text-danger">
                                                {{ session('swing_change') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="jump_change">
                                                Jump Change
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('jump_change')) is-invalid @endif @error('jump_change') is-invalid @enderror"
                                                id="jump_change" name="jump_change" value="{{ $package->jump_change }}">
                                            @error('jump_change')
                                            <small id="jump_change" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('jump_change'))
                                            <small id="jump_change" class="text-danger">
                                                {{ session('jump_change') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="slide_change">
                                                Slide Change
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('slide_change')) is-invalid @endif @error('slide_change') is-invalid @enderror"
                                                id="slide_change" name="slide_change"
                                                value="{{ $package->slide_change }}">
                                            @error('slide_change')
                                            <small id="slide_change" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('slide_change'))
                                            <small id="slide_change" class="text-danger">
                                                {{ session('slide_change') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="swim_change">
                                                Swim Change
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('swim_change')) is-invalid @endif @error('swim_change') is-invalid @enderror"
                                                id="swim_change" name="swim_change" value="{{ $package->swim_change }}">
                                            @error('swim_change')
                                            <small id="swim_change" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('swim_change'))
                                            <small id="swim_change" class="text-danger">
                                                {{ session('swim_change') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="include">
                                        Include
                                    </label>
                                    <textarea
                                        class="form-control form-control-border @if(session('include')) is-invalid @endif @error('include') is-invalid @enderror"
                                        name="include" id="include">
                                        {{ $package->include }}
                                    </textarea>
                                    @error('include')
                                    <small id="include" class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                    @if (session('include'))
                                    <small id="include" class="text-danger">
                                        {{ session('include') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description">
                                        Description
                                    </label>
                                    <textarea
                                        class="form-control form-control-border @if(session('description')) is-invalid @endif @error('description') is-invalid @enderror"
                                        name="description" id="description">
                                        {{ $package->description }}
                                    </textarea>
                                    @error('description')
                                    <small id="description" class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                    @if (session('description'))
                                    <small id="description" class="text-danger">
                                        {{ session('description') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning float-right text-white"><i
                                        class="fas fa-edit"></i>
                                    &nbsp; Submit</button>
                                <a href="/detailPackage" class="btn btn-secondary float-right mr-4"><i
                                        class="fas fa-undo"></i>
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
