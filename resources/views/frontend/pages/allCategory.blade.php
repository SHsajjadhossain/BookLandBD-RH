@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Category

@endsection

@section('content')
    <section class="breadcrumb-section">
        <h2 class="sr-only">Site Breadcrumb</h2>
        <div class="container">
            <div class="breadcrumb-contents">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="inner-page-sec-padding-bottom space-db--30">
        <div class="container">
            <div class="row space-db-lg--60 space-db--30">
                @forelse ($all_categories as $category)
                <div class="col-lg-4 col-md-6 mb-lg--60 mb--30">
                    <div class="blog-card card-style-grid">
                        <a href="{{ route('catwiseproducts', [$category->id, Str::random(5)]) }}" class="image d-block">
                            <img src="{{ asset('uploads/category_photoes') }}/{{ $category->category_photo ?? '' }}" alt="Category Image Not Found">
                        </a>
                        @if ($category->relationWithSubCategory->count() > 0)
                        <div class="card-content">
                            <h3 class="mb-3 title">Category : <a href="javascript:void(0)">{{ $category->category_name ?? '' }}</a>
                            </h3>
                            <strong>Sub Category</strong>
                            <article>
                                <ul class="order-details-list">
                                    @foreach ($category->relationWithSubCategory as $sub_cat)
                                    <li>
                                        <a href="{{ route('subcatwiseproducts', [$sub_cat->id, Str::random(5)]) }}">{{ $sub_cat->sub_category_name ?? '' }} ({{ optional($sub_cat->relationWithProduct)->count() ?? 0 }})</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </article>
                        </div>
                        @else
                        <div class="card-content">
                            <h3 class="title">Category : <a href="{{ route('catwiseproducts', [$category->id, Str::random(5)]) }}">{{ $category->category_name ?? '' }} ({{ optional($category->relationWithProduct)->count() ?? 0 }})</a>
                            </h3>
                        </div>
                        @endif

                    </div>
                </div>
                @empty
                    <span class="mb-4 text-center text-danger">No Product To Show</span>
                @endforelse
            </div>
            <!-- Pagination Block -->
            <div class="row pt--30">
                <div class="col-md-12">
                    <div class="pagination-block">
                        {{--........................ --}}
                        {{ $all_categories->links('frontend.pages.paginate') }}
                        {{--........................ --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
