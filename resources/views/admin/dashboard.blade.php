@extends('admin.template.main')
@section('subject', 'Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Package</h3>
                    {{-- <a href="/package">View more</a> --}}
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Package Name</th>
                    <th>Location</th>
                    <th>Canyoning Level</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($package as $p)
                    <tr>
                      <td>{{ $p->name }}</td>
                      <td>{{ $p->location }}</td>
                      <td>{{ $p->level }}</td>
                      <td>
                        <a href="/package" class="text-muted">
                          <i class="fas fa-info-circle"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">FAQ</h3>
                  <a href="/faq">View more</a>
                </div>
              </div>
              <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                @foreach ($faq as $f)
                    <div id="accordion">
                        <div class="card card-info">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100" data-toggle="collapse" href="#collapse{{ $f->id }}">
                                        {{ $f->question }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $f->id }}" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    {{ $f->answer }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Testimonial</h3>
                  <a href="/testimoni">View more</a>
                </div>
              </div>
              <div class="card-body clearfix">
                @foreach ($testimonial as $t)
                    <blockquote class="quote-success">
                        <p>{{ $t->message }}</p>
                        <small><cite title="timestamps">{{ \Carbon\Carbon::parse($t->created_at)->format('l, j F Y H:i:s') }}</cite></small>
                    </blockquote>
                @endforeach
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
