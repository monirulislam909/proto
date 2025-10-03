@extends('layouts.app')


@section('main')


<div role="main" class="main shop pt-4">
<div class="container">
<div class="row">


<div class="col-lg-3 order-2 order-lg-1">

@include('fontend.fontsidebar')

</div>


<div class="col-lg-9 order-1 order-lg-2">
<div class="masonry-loader masonry-loader-showing">
<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">


@foreach ($product as $item)


<div class="col-sm-6 col-lg-4">
<div class="product mb-0">
<div class="product-thumb-info border-0 mb-3">
<div class="product-thumb-info-badges-wrapper"><span class="badge badge-ecommerce badge-success">NEW</span>
</div>
<div class="addtocart-btn-wrapper">
<a href="{{ route('single.product',$item->slug)}}" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
<i class="icons icon-bag"></i>
</a>
</div>
<a href="{{ route('single.product',$item->slug)}}" class="quick-view text-uppercase font-weight-semibold text-2">
QUICK VIEW
</a>
<a href="{{ route('single.product',$item->slug)}}">
<div class="product-thumb-info-image" style="height: 220px">
<img alt="" class="img-fluid" src="{{ URL::to('media/gallery/product',$item->galleries[0]->file_name) }}">
</div>
</a>
</div>
<div class="d-flex justify-content-between">
<div>
@foreach ($item->categories as $tag )

<a href="{{ route('single.product',$item->slug)}}" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{$tag->name}}</a>
    @endforeach

<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{ route('single.product',$item->slug)}}" class="text-color-dark text-color-hover-primary">{{$item->title}}</a></h3>
</div>
<a href="{{ route('single.product',$item->slug)}}" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
</div>
<div title="Rated 5 out of 5">
<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
</div>
<p class="price text-5 mb-3">
@if ($item->sale_price)

<span class="sale text-color-dark font-weight-semi-bold">${{ $item->sale_price }}</span>
<span class="amount">${{ $item->regular_price }}</span>
@else
<span class="amount">${{ $item->regular_price }}</span>
@endif

</p>
</div>
</div>





@endforeach







</div>
<div class="row mt-4">
<div class="col">
<ul class="pagination float-right">
<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>







@endsection