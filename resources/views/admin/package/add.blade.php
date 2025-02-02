@extends('admin.template.main')

@section('subject', 'Add Package')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Package</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Package</li>
                        <li class="breadcrumb-item active">Add Package</li>
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
                            <h3 class="card-title">Add Package</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('package.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
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
                                        * Dimension : 1600 x 670 <br>
                                        * Max size 2mb (jpeg, jpg, png) <br>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        Package Name
                                    </label>
                                    <input type="text"
                                        class="form-control form-control-border @if(session('name')) is-invalid @endif @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}">
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
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="location">
                                                Location
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('location')) is-invalid @endif @error('location') is-invalid @enderror"
                                                id="location" name="location" value="{{ old('location') }}">
                                            @error('location')
                                            <small id="location" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('location'))
                                            <small id="location" class="text-danger">
                                                {{ session('location') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="level">
                                                Canyoning Level
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('level')) is-invalid @endif @error('level') is-invalid @enderror"
                                                id="level" name="level" value="{{ old('level') }}">
                                            @error('level')
                                            <small id="level" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('level'))
                                            <small id="level" class="text-danger">
                                                {{ session('level') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="experience">
                                                Experience Level
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('experience')) is-invalid @endif @error('experience') is-invalid @enderror"
                                                id="experience" name="experience" value="{{ old('experience') }}">
                                            @error('experience')
                                            <small id="experience" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('experience'))
                                            <small id="experience" class="text-danger">
                                                {{ session('experience') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="fitness">
                                                Fitness
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('fitness')) is-invalid @endif @error('fitness') is-invalid @enderror"
                                                id="fitness" name="fitness" value="{{ old('fitness') }}">
                                            @error('fitness')
                                            <small id="fitness" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('fitness'))
                                            <small id="fitness" class="text-danger">
                                                {{ session('fitness') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="swimming_abilities">
                                                Swimming Abilities
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('swimming_abilities')) is-invalid @endif @error('swimming_abilities') is-invalid @enderror"
                                                id="swimming_abilities" name="swimming_abilities" value="{{ old('swimming_abilities') }}">
                                            @error('swimming_abilities')
                                            <small id="swimming_abilities" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('swimming_abilities'))
                                            <small id="swimming_abilities" class="text-danger">
                                                {{ session('swimming_abilities') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="time">
                                                Time in Canyon
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('time')) is-invalid @endif @error('time') is-invalid @enderror"
                                                id="time" name="time" value="{{ old('time') }}">
                                            @error('time')
                                            <small id="time" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('time'))
                                            <small id="time" class="text-danger">
                                                {{ session('time') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="approach">
                                                Approach
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('approach')) is-invalid @endif @error('approach') is-invalid @enderror"
                                                id="approach" name="approach" value="{{ old('approach') }}">
                                            @error('approach')
                                            <small id="approach" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('approach'))
                                            <small id="approach" class="text-danger">
                                                {{ session('approach') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="return">
                                                Return
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-border @if(session('return')) is-invalid @endif @error('return') is-invalid @enderror"
                                                id="return" name="return" value="{{ old('return') }}">
                                            @error('return')
                                            <small id="return" class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                            @if (session('return'))
                                            <small id="return" class="text-danger">
                                                {{ session('return') }}
                                            </small>
                                            @endif
                                        </div>
                                    </div>
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
