@extends('template.main')
@section('title', 'Canyoning Baturraden')
@section('content')
<!-- Konten utama -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach ($carousel as $index => $item)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach ($carousel as $index => $item)
            <div class="carousel-item main {{ $index === 0 ? 'active' : '' }}">
                <img class="d-block w-100"
                    src="{{ asset('storage/carousel/' . $item->image) }}" alt="">
                {{-- <div class="carousel-caption d-md-block">
                    <h5>First Image</h5>
                </div> --}}
            </div>
        @endforeach
    </div>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container mb-5">
    <h1 class="text-center mt-5">About</h1>
    <div class="row mt-5">
        <div class="col-md-6 mt-5">
            <h2 class="mb-4">Get ready for an unforgettable adventure</h2>
            <p>Let us take you on an adventure through stunning Baturraden landscapes.</p>
            <ul class="list-unstyled">
                <li class="mb-2">
                    We offer canyoning tours in Baturraden start from beginner, intermediate, and advance level. Our expert Guides will show you
                    how to enjoy the descent safely and fun atmosphere.
                </li>
            </ul>
            {{-- <a href="#" class="btn btn-primary">Read More</a> --}}
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/img/ready.jpg') }}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
<div class="container-fluid adventage">
    <div class="row p-5 text-white">
        <div class="col-md-3 text-center">
            <h1 class="text-white"><ion-icon name="accessibility"></ion-icon> 150+</h1>
            <small>Participants have tried this</small>
        </div>
        <div class="col-md-3 text-center">
            <h1 class="text-white"><ion-icon name="happy"></ion-icon> 100+</h1>
            <small>Delightful testimony</small>
        </div>
        <div class="col-md-3 text-center">
            <h1 class="text-white"><ion-icon name="file-tray-stacked"></ion-icon> {{ $count_package }}</h1>
            <small>Frequently package</small>
        </div>
        <div class="col-md-3 text-center">
            <h1 class="text-white"><ion-icon name="people-circle"></ion-icon> 10</h1>
            <small>Experienced coach</small>
        </div>
    </div>
</div>
<div class="container-fluid package">
    <h1 class="text-center mt-5">Package</h1>
    {{-- <p class="text-center">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
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
                                    <img src="{{ asset('assets/img/swing.png') }}" class="img-fluid mb-3" alt="Responsive image" style="width: 50px; height: 50px;"> <br>
                                    <small class="card-text mt-5 text-white">
                                        {{ $p->swing_change }}
                                    </small>
                                </div>
                            @endif
                            @if ($p->jump_change)
                                <div class="col-md-3 m-0 p-0">
                                    <img src="{{ asset('assets/img/jump.png') }}" class="img-fluid mb-3" alt="Responsive image" style="width: 50px; height: 50px;"> <br>
                                    <small class="card-text mt-5 text-white">
                                        {{ $p->jump_change }}
                                    </small>
                                </div>
                            @endif
                            @if ($p->swim_change)
                                <div class="col-md-3 m-0 p-0">
                                    <img src="{{ asset('assets/img/swim.png') }}" class="img-fluid mb-3" alt="Responsive image" style="width: 50px; height: 50px;"> <br>
                                    <small class="card-text mt-5 text-white">
                                        {{ $p->swim_change }}
                                    </small>
                                </div>
                            @endif
                            @if ($p->slide_change)
                                <div class="col-md-3 m-0 p-0">
                                    <img src="{{ asset('assets/img/slide.png') }}" class="img-fluid mb-3" alt="Responsive image" style="width: 50px; height: 50px;"> <br>
                                    <small class="card-text mt-5 text-white">
                                        {{ $p->slide_change }}
                                    </small>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-3 mb-5">
        <div class="col text-center">
            <a href="/package-tour" class="btn btn-outline-success">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="parallax-section mt-5">
    <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/img/parallax.jpg') }}">
        <div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach ($testimonial as $index => $t)
                    <div class="carousel-item {{ $index === 0 ? 'active' : ''}} text-center" style="min-height: 250px;">
                        <blockquote class="blockquote text-center text-white py-5 mt-5">
                            <small class="mb-0">{{ $t->message }}</small>
                            <footer class="blockquote-footer text-success mt-2">{{ $t->name }}, <cite title="Source Title">{{ $t->from }}</cite>
                            </footer>
                        </blockquote>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<hr class="mt-0 pt-0" style="border: #41AB5D 1px solid;">
@endsection
@section('script')
<script>
    var $item = $('.main');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen');

    $('.carousel img').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
            'background-image' : 'url(' + $src + ')',
            'background-color' : $color
        });
        $(this).remove();
    });
    // Menambahkan class 'scrolled' saat user scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#navbar').addClass('scrolled');
        } else {
            $('#navbar').removeClass('scrolled');
        }
    });
    $(document).ready(function(){
        $('.slick-testimonial').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
        });
    });
</script>
@endsection
