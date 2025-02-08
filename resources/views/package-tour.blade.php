@extends('template.main')
@section('title', 'Package Tour | Canyoning Baturraden')
@section('content')
<div class="container-fluid package mb-4">
    <div class="row mt-5 mb-0">
        @foreach ($package as $p)
        <div class="col-md-4 mb-1">
            <div class="card mb-0" style="background-image: url('{{ asset('storage/photo-package/' . $p->photo) }}');">
                <div class="card-body" style="z-index: 2;">
                    <h1 class="card-title">{{ $p->name }}</h1>
                    <hr style="border: red 1px solid;">
                    <p class="card-text text-white"><b>Location:</b> {{ $p->location }}</p>
                    <p class="card-text text-white"><b>Level:</b> {{ $p->level }}</p>
                    <p class="card-text text-white"><b>Experience:</b> {{ $p->experience }}</p>
                    <p class="card-text text-white"><b>Fitness:</b> {{ $p->fitness }}</p>
                    <p class="card-text text-white"><b>Swimming Abilities:</b> {{ $p->swimming_abilities }}</p>
                    <p class="card-text text-white"><b>Time:</b> {{ $p->time }}</p>
                    <p class="card-text text-white"><b>Approach:</b> {{ $p->approach }}</p>
                    <p class="card-text text-white"><b>Return:</b> {{ $p->return }}</p>
                    <div class="row justify-content-center">
                        @if ($p->min_age)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/age.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->min_age }}
                            </small>
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        @if ($p->swing_change)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/swing.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->swing_change }}
                            </small>
                        </div>
                        @endif
                        @if ($p->jump_change)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/jump.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->jump_change }}
                            </small>
                        </div>
                        @endif
                        @if ($p->swim_change)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/swim.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->swim_change }}
                            </small>
                        </div>
                        @endif
                        @if ($p->slide_change)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/slide.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->slide_change }}
                            </small>
                        </div>
                        @endif
                    </div>
                    <hr style="border: #41AB5D 1px solid;">
                    <a href="{{ route('package-tour-detail', $p->id) }}" class="btn btn-success">
                        Detail Package
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('script')
@endsection
