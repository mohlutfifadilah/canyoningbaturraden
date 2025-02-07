@extends('template.main')
@section('title', 'Canyoning Baturraden')
@section('content')
<!-- Konten utama -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="carousel-item">
            <img class="d-block w-100"
                src="https://images.unsplash.com/photo-1432958576632-8a39f6b97dc7?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=6ecedc1e639d8a4b77aa8e85f4962f03"
                data-color="lightblue" alt="First Image">
            <div class="carousel-caption d-md-block">
                <h5>First Image</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"
                src="https://images.unsplash.com/photo-1504736038806-94bd1115084e?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=3d045bbf1ecc01c4c9ec011ce5c8977d"
                data-color="firebrick" alt="Second Image">
            <div class="carousel-caption d-md-block">
                <h5>Second Image</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"
                src="https://images.unsplash.com/photo-1419064642531-e575728395f2?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=76d5c793e4f8d02d7a9be27bc71256f7"
                data-color="violet" alt="Third Image">
            <div class="carousel-caption d-md-block">
                <h5>Third Image</h5>
            </div>
        </div>
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
<div class="container">
    <h1 class="text-center mt-5">About</h1>
    <p class="text-center">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    <div class="row mt-5">
        <div class="col-md-6">
            <h2 class="mb-4">Voluptatem dignissimos provident quasi corporis</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aut at sequi laboriosam velit iusto
                dolorem molestiae esse, quis labore quas ipsa deleniti harum accusamus id alias iure saepe. Dicta.
            </p>
            <ul class="list-unstyled">
                <li class="mb-2">
                    <i class="fa fa-check-circle" aria-hidden="true"></i> Ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.
                </li>
                <li class="mb-2">
                    <i class="fa fa-check-circle" aria-hidden="true"></i> Ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.
                </li>
                <li class="mb-2">
                    <i class="fa fa-check-circle" aria-hidden="true"></i> Ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.
                </li>
            </ul>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-6">
            <img src="image.jpg" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
<div class="container-fluid adventage">
    <div class="card col-3">
        <h3 class="text-success"><i class="fas fa-smile"></i> 232</h3>
        <p>Happy Clients consequuntur quae</p>
    </div>
    <div class="card col-3">
        <h3 class="text-success"><i class="fas fa-smile"></i> 232</h3>
        <p>Happy Clients consequuntur quae</p>
    </div>
    <div class="card col-3">
        <h3 class="text-success"><i class="fas fa-smile"></i> 232</h3>
        <p>Happy Clients consequuntur quae</p>
    </div>
    <div class="card col-3">
        <h3 class="text-success"><i class="fas fa-smile"></i> 232</h3>
        <p>Happy Clients consequuntur quae</p>
    </div>
</div>
<div class="container">
    <h1 class="text-center mt-5">Package</h1>
    <p class="text-center">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    <div class="row mt-5">
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="https://www.freepik.com/free-photo-vectors/woman" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ad cupiditate sed est odio</h5>
                    <p class="card-text">
                        Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatisid.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="https://www.freepik.com/free-photo-vectors/woman" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ad cupiditate sed est odio</h5>
                    <p class="card-text">
                        Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatisid.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/img/parallax.jpg') }}">
    <span style="position:absolute; top: 400px; left: 400px;">Some Text</span>
    <p>Some other Content</p>
</div>
@endsection
@section('script')
<script>
    var $item = $('.carousel-item');
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
</script>
@endsection
