@extends('admin.template.main')

@section('subject', 'Photo')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Photo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Package</li>
                        <li class="breadcrumb-item active">Photo</li>
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
                        <div class="card-header">
                            <a href="{{ route('photo.create') }}" class="btn btn-success float-right"><i
                                    class="fa fa-plus"></i> &nbsp; Add</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Package</th>
                                        <th>Photo</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($photo as $p)
                                    @php
                                        $package = \App\Models\Package::find($p->id_package);
                                    @endphp
                                    <tr>
                                        <td>{{ $package->name }} | {{ $package->price }}</td>
                                        <td>
                                            @if ($p->image)
                                                <img src="{{ asset('storage/photo-package/' . $p->image) }}" alt="user-avatar" class="img-fluid" height="300"
                                                    width="300" id="profileImage" />
                                            @else
                                                No images yet
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap justify-content-center">
                                                {{-- Tombol Edit --}}
                                                <a
                                                    class="btn btn-sm btn-warning text-white mb-2 mb-md-0 me-md-2 mr-4"
                                                    href="{{ route('photo.edit', $p->id) }}">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>

                                                {{-- Tombol Hapus --}}
                                                <form id="delete-form-{{ $p->id }}"
                                                    action="{{ route('photo.destroy', $p->id) }}" method="post"
                                                    class="mb-2 mb-md-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        onclick="confirmDelete({{ $p->id }}, 'Photo')">
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
