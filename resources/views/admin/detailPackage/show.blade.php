@extends('admin.template.main')

@section('subject', 'Detail')
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
                        <li class="breadcrumb-item active">Info</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <a href="{{ route('detailPackage.create') }}" class="btn btn-success float-right"><i
                                    class="fa fa-plus"></i> &nbsp; Add</a>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-sm-5">Package Name</dt>
                                        <dd class="col-sm-7">{{ $package->name }}</dd>
                                        <dt class="col-sm-5">Location</dt>
                                        <dd class="col-sm-7">{{ $package->location }}</dd>
                                        <dt class="col-sm-5">Canyoning Level</dt>
                                        <dd class="col-sm-7">{{ $package->level }}</dd>
                                        <dt class="col-sm-5">Experience Level</dt>
                                        <dd class="col-sm-7">{{ $package->experience }}</dd>
                                        <dt class="col-sm-5">Fitness</dt>
                                        <dd class="col-sm-7">{{ $package->fitness }}</dd>
                                        <dt class="col-sm-5">Swimming Abilities</dt>
                                        <dd class="col-sm-7">{{ $package->swimming_abilities }}</dd>
                                        <dt class="col-sm-5">Time</dt>
                                        <dd class="col-sm-7">{{ $package->time }}</dd>
                                        <dt class="col-sm-5">Approach</dt>
                                        <dd class="col-sm-7">{{ $package->approach }}</dd>
                                        <dt class="col-sm-5">Return</dt>
                                        <dd class="col-sm-7">{{ $package->return }}</dd>
                                    </dl>
                                    <hr>
                                    <dl class="row">
                                        <dt class="col-sm-5">Minimum Age</dt>
                                        <dd class="col-sm-7">{{ $package->min_age }}</dd>
                                        <dt class="col-sm-5">Swing Change</dt>
                                        <dd class="col-sm-7">{{ $package->swing_change }}</dd>
                                        <dt class="col-sm-5">Jump Change</dt>
                                        <dd class="col-sm-7">{{ $package->jump_change }}</dd>
                                        <dt class="col-sm-5">Slide Change</dt>
                                        <dd class="col-sm-7">{{ $package->slide_change }}</dd>
                                        <dt class="col-sm-5">Swim Change</dt>
                                        <dd class="col-sm-7">{{ $package->swim_change }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    {{-- <dl>
                                        <dt>Include</dt>
                                        <dd>
                                            {!! $package->include !!}
                                        </dd>
                                    </dl> --}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <dl>
                                        <dt>Description</dt>
                                        <dd>
                                            {!! $package->description !!}
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="/detailPackage" class="btn btn-secondary float-right mr-4"><i
                                    class="fas fa-undo"></i>
                                &nbsp; Back</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
