@extends('admin.template.main')
@section('subject', 'Change Password')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Change Password</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- form start -->
                            <form method="POST" action="{{ route('update-password', Auth::user()->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="old_password">
                                                    Old Password
                                                </label>
                                                <input type="password"
                                                    class="form-control form-control-border @if(session('old_password')) is-invalid @endif @error('old_password') is-invalid @enderror"
                                                    id="old_password" name="old_password" value="">
                                                @error('old_password')
                                                <small id="old_password" class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                @if (session('old_password'))
                                                <small id="old_password" class="text-danger">
                                                    {{ session('old_password') }}
                                                </small>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password">
                                                    New Password
                                                </label>
                                                <input type="password"
                                                    class="form-control form-control-border @if(session('new_password')) is-invalid @endif @error('new_password') is-invalid @enderror"
                                                    id="new_password" name="new_password" value="">
                                                @error('new_password')
                                                <small id="new_password" class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                @if (session('new_password'))
                                                <small id="new_password" class="text-danger">
                                                    {{ session('new_password') }}
                                                </small>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation">
                                                    Confirmation New Password
                                                </label>
                                                <input type="password"
                                                    class="form-control form-control-border @if(session('new_password')) is-invalid @endif @error('new_password') is-invalid @enderror"
                                                    id="password_confirmation" name="password_confirmation" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a href="{{ route('profil-edit', $user->id) }}" class="btn btn-secondary float-right"><i
                                            class="fas fa-undo"></i>
                                        &nbsp; Cancel</a>
                                    <button type="submit" class="btn btn-warning text-white float-right mr-4"><i
                                            class="fas fa-edit"></i>
                                        &nbsp; Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
