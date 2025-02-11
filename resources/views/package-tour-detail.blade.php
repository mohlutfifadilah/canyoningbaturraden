@extends('template.main')
@section('title', 'Detail | Canyoning Baturraden')
@section('content')
<div class="container-fluid package mb-4">
    <div class="row mt-5 mb-1">
        <div class="col-md-8">
            <img src="{{ asset('storage/photo-package/' . $package->photo) }}" alt="">
        </div>
        <div class="col-md-4">
            <div class="card mb-0" style="background-image: url('{{ asset('assets/img/background.jpg') }}');">
                <div class="card-body" style="z-index: 2;">
                    <h1 class="card-title">{{ $package->name }}</h1>
                    <hr style="border: red 1px solid;">
                    <p class="card-text text-white"><b>Location:</b> {{ $package->location }}</p>
                    <p class="card-text text-white"><b>Level:</b> {{ $package->level }}</p>
                    <p class="card-text text-white"><b>Experience:</b> {{ $package->experience }}</p>
                    <p class="card-text text-white"><b>Fitness:</b> {{ $package->fitness }}</p>
                    <p class="card-text text-white"><b>Swimming Abilities:</b> {{ $package->swimming_abilities }}</p>
                    <p class="card-text text-white"><b>Time:</b> {{ $package->time }}</p>
                    <p class="card-text text-white"><b>Approach:</b> {{ $package->approach }}</p>
                    <p class="card-text text-white"><b>Return:</b> {{ $package->return }}</p>
                    <div class="row justify-content-center">
                        @if ($package->min_age)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/age.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $package->min_age }}
                            </small>
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        @if ($package->swing_change)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/swing.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $package->swing_change }}
                            </small>
                        </div>
                        @endif
                        @if ($package->jump_change)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/jump.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $package->jump_change }}
                            </small>
                        </div>
                        @endif
                        @if ($package->swim_change)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/swim.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $package->swim_change }}
                            </small>
                        </div>
                        @endif
                        @if ($package->slide_change)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/slide.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $package->slide_change }}
                            </small>
                        </div>
                        @endif
                    </div>
                    <hr style="border: #41AB5D 1px solid;">
                    <div class="row">
                        <div class="col">
                            <a href="https://forms.gle/DFzVAbGhgw1u5Qu36" target="_blank" class="btn btn-danger btn-block">
                                BOOK NOW
                            </a>
                        </div>
                        <div class="col">
                            <h4 class="float-right mt-2">
                                IDR. {{ $package->price }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <h3>
                Description
            </h3>
            <hr style="border-bottom: #41AB5D 1px solid;">
            <p class="text-justify">
                {!! $package->description !!}
            </p>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection
