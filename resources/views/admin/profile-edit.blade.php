@extends('admin.template.main')
@section('subject', 'Edit Profile')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Profile</li>
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
                            <form method="POST" action="{{ route('profil-update', Auth::user()->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-border @if(session('name')) is-invalid @endif @error('name') is-invalid @enderror"
                                                    id="name" name="name" value="{{ Auth::user()->name }}">
                                                @error('name')
                                                <small id="name" class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                @if (session('name'))
                                                <small id="name" class="text-danger">
                                                    {{ session('name') }}
                                                </small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="no_whatsapp">
                                                    Whatsapp
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-border @if(session('no_whatsapp')) is-invalid @endif @error('no_whatsapp') is-invalid @enderror"
                                                    id="no_whatsapp" name="no_whatsapp"
                                                    value="{{ Auth::user()->no_whatsapp }}">
                                                @error('no_whatsapp')
                                                <small id="no_whatsapp" class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                @if (session('no_whatsapp'))
                                                <small id="no_whatsapp" class="text-danger">
                                                    {{ session('no_whatsapp') }}
                                                </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">
                                                    Email
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-border @if(session('email')) is-invalid @endif @error('email') is-invalid @enderror"
                                                    id="email" name="email" value="{{ Auth::user()->email }}">
                                                @error('email')
                                                <small id="email" class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                @if (session('email'))
                                                <small id="email" class="text-danger">
                                                    {{ session('email') }}
                                                </small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="instagram">
                                                    Instagram
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-border @if(session('instagram')) is-invalid @endif @error('instagram') is-invalid @enderror"
                                                    id="instagram" name="instagram"
                                                    value="{{ Auth::user()->instagram }}">
                                                @error('instagram')
                                                <small id="instagram" class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                @if (session('instagram'))
                                                <small id="instagram" class="text-danger">
                                                    {{ session('instagram') }}
                                                </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="tiktok">
                                                    TikTok
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-border @if(session('tiktok')) is-invalid @endif @error('tiktok') is-invalid @enderror"
                                                    id="tiktok" name="tiktok" value="{{ Auth::user()->tiktok }}">
                                                @error('tiktok')
                                                <small id="tiktok" class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                @if (session('tiktok'))
                                                <small id="tiktok" class="text-danger">
                                                    {{ session('tiktok') }}
                                                </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a href="/dashboard" class="btn btn-secondary float-right"><i
                                            class="fas fa-undo"></i>
                                        &nbsp; Cancel</a>
                                    <a href="{{ route('change-password', Auth::user()->id) }}"
                                        class="btn btn-danger float-right mr-4"><i class="fas fa-key"></i>
                                        &nbsp; Change Password</a>
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
