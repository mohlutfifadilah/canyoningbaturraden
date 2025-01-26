@extends('admin.template.main')

@section('subject', 'Edit FAQ')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Website</li>
              <li class="breadcrumb-item active">FAQ</li>
              <li class="breadcrumb-item active">Edit FAQ</li>
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
                <h3 class="card-title text-white">Edit FAQ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('faq.update', $faq->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="question">Question</label>
                    <textarea rows="3" class="form-control form-control-border border-width-2 @if(session('question')) is-invalid @endif @error('question') is-invalid @enderror" id="question" name="question">{{ $faq->question }}</textarea>
                    @error('question')
                        <small id="question" class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    @if (session('question'))
                        <small id="question" class="text-danger">
                            {{ session('question') }}
                        </small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea rows="3" class="form-control form-control-border border-width-2 @if(session('answer')) is-invalid @endif @error('answer') is-invalid @enderror" id="answer" name="answer">{{ $faq->answer }}</textarea>
                    @error('answer')
                        <small id="answer" class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    @if (session('answer'))
                        <small id="answer" class="text-danger">
                            {{ session('answer') }}
                        </small>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning float-right text-white"><i class="fas fa-edit"></i> &nbsp; Submit</button>
                    <a href="/faq" class="btn btn-secondary float-right mr-4"><i class="fas fa-undo"></i> &nbsp; Cancel</a>
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
