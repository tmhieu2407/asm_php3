@extends('fe.index')

@section('title', 'Chi Tiết')

@section('main')
<section class="section mt-5">
    <div class="container">
        <h2 class="h5 section-title">Chi tiết</h2>
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-5 mb-lg-0">
                <article class="post-slider mb-4">
                    <img src="{{ asset('storage/images/' . $product->image) }}" class="img-fluid rounded" alt="Product Image">
                </article>
                <h1 class="h2">{{ $product->name }}</h1>
                <ul class="list-inline my-3 text-muted">
                    <li class="list-inline-item">
                        <i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}
                    </li>
                </ul>
                <div class="content mb-5">
                    <p>{!! $product->description !!}</p>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
