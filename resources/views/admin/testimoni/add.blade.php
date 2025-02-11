@extends('admin.template.main')

@section('subject', 'Add Testimonial')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Website</li>
              <li class="breadcrumb-item active">Testimonial</li>
              <li class="breadcrumb-item active">Add Testimonial</li>
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
                <h3 class="card-title">Add Testimonial</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('testimoni.store') }}">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">
                                Name
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
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="from">
                                From
                            </label>
                            <input type="text"
                                class="form-control form-control-border @if(session('from')) is-invalid @endif @error('from') is-invalid @enderror"
                                id="from" name="from" value="{{ old('from') }}">
                            @error('from')
                            <small id="from" class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            @if (session('from'))
                            <small id="from" class="text-danger">
                                {{ session('from') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea rows="3" class="form-control form-control-border border-width-2 @if(session('message')) is-invalid @endif @error('message') is-invalid @enderror" id="message" name="message">{{ old('message') }}</textarea>
                    @error('message')
                        <small id="message" class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    @if (session('message'))
                        <small id="message" class="text-danger">
                            {{ session('message') }}
                        </small>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> &nbsp; Submit</button>
                    <a href="/testimoni" class="btn btn-secondary float-right mr-4"><i class="fas fa-undo"></i> &nbsp; Cancel</a>
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
