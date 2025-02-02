@extends('admin.template.main')

@section('subject', 'Testimonial')
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
                <a href="{{ route('testimoni.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i> &nbsp; Add</a>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>From</th>
                        <th>Message</th>
                        <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($testimoni as $t)
                        <tr>
                            <td>{{ $t->name }}</td>
                            <td>{{ $t->from }}</td>
                            <td>{{ $t->message }}</td>
                            <td>
                                <div class="d-flex flex-wrap justify-content-center">
                                    {{-- Tombol Edit --}}
                                    {{-- <a class="btn btn-sm btn-warning text-white mb-2 mb-md-0 me-md-2 mr-4"
                                        href="{{ route('testimoni.edit', $t->id) }}">
                                        <i class="fas fa-edit"></i> Edit
                                    </a> --}}

                                    {{-- Tombol Hapus --}}
                                    <form id="delete-form-{{ $t->id }}" action="{{ route('testimoni.destroy', $t->id) }}"
                                        method="post" class="mb-2 mb-md-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="confirmDelete({{ $t->id }}, 'Testimoni')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
