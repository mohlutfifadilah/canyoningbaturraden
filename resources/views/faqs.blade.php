@extends('template.main')
@section("title', 'FAQ's | Canyoning Baturraden")
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mb-4">
        <div class="col-md-12">
            <div id="accordion" class="myaccordion">
                @foreach ($faq as $index => $f)
                    <div class="card m-0 py-2">
                        <div class="card-header" id="heading{{ $index }}" style="border-bottom: #41AB5D 1px solid;">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                    data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                    <h5>{{ $f->question }}</h5>
                                    <span class="fa-stack fa-sm">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse{{ $index }}" class="collapse" aria-labelledby="heading{{ $index }}" data-parent="#accordion">
                            <div class="card-body">
                                <p class="text-justify">
                                    {{ $f->answer }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target).prev().find("i:last-child").toggleClass("fa-minus fa-plus");
    });
</script>
@endsection
