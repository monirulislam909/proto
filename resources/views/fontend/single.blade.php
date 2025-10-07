@extends('layouts.app')

@section('main')







<div role="main" class="main shop py-4">
<div class="container">
<div class="row">
{{-- <div class="col-lg-3"> --}}


{{-- @include('layouts.components.fontsidebar') --}}

{{-- </div> --}}


<div class="col-lg-12">
<div class="row">
<div class="col-lg-6">
<div class="thumb-gallery-wrapper">
<div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
@foreach ($single_product->galleries as $item)
<div>
<img alt="" class="img-fluid" src="{{ asset('media/gallery/product/'.$item->file_name) }}" data-zoom-image="{{ asset('media/gallery/product/'.$item->file_name)}}">
</div>
@endforeach



</div>
<div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
<div class="cur-pointer">
<img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
</div>
<div class="cur-pointer">
<img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">
</div>
<div class="cur-pointer">
<img alt="" class="img-fluid" src="img/products/product-grey-7-3.jpg">
</div>
<div class="cur-pointer">
<img alt="" class="img-fluid" src="img/products/product-grey-7-4.jpg">
</div>
<div class="cur-pointer">
<img alt="" class="img-fluid" src="img/products/product-grey-7-5.jpg">
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="summary entry-summary position-relative">
<div class="position-absolute top-0 right-0">
<div class="products-navigation d-flex">
<a href="#" class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Red Ladies Handbag"><i class="fas fa-chevron-left"></i></a>
<a href="#" class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Green Ladies Handbag"><i class="fas fa-chevron-right"></i></a>
</div>
</div>
<h1 class="mb-0 font-weight-bold text-7">{{$single_product->title}}</h1>
<div class="pb-0 clearfix d-flex align-items-center">
<div title="Rated 3 out of 5" class="float-left">
<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
</div>
<div class="review-num">
<a href="#description" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="75" data-hash-trigger-click=".nav-link-reviews" data-hash-trigger-click-delay="1000">
<span class="count text-color-inherit" itemprop="ratingCount">(2</span> reviews)
</a>
</div>
</div>
<div class="divider divider-small">
<hr class="bg-color-grey-scale-4">
</div>
<p class="price mb-3">
    @if ($single_product->sale_price)
    <span class="sale text-color-dark">${{$single_product->sale_price}}</span>
    <span class="amount">${{$single_product->regular_price}}</span>
       @else
       <span class="amount">${{$single_product->regular_price}}</span>
    @endif
</p>
<p class="text-3-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet.</p>
<ul class="list list-unstyled text-2">
<li class="mb-0">AVAILABILITY: <strong class="text-color-dark">{{$single_product->stock}}</strong></li>
<li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>
</ul>
<form enctype="multipart/form-data" method="post" class="cart" action="https://www.okler.net/previews/porto/8.3.0/shop-cart.html">
<table class="table table-borderless" style="max-width: 300px;">
<tbody>
<tr>
<td class="align-middle text-2 px-0 py-2">SIZE:</td>
<td class="px-0 py-2">
<div class="custom-select-1">
<select name="size" class="form-control text-1 h-auto py-2">
<option value="">PLEASE CHOOSE</option>
<option value="blue">Small</option>
<option value="red">Normal</option>
<option value="green">Big</option>
</select>
</div>
</td>
</tr>
<tr>
<td class="align-middle text-2 px-0 py-2">COLOR:</td>
<td class="px-0 py-2">
<div class="custom-select-1">
<select name="color" class="form-control text-1 h-auto py-2">
<option value="">PLEASE CHOOSE</option>
<option value="blue">Blue</option>
<option value="red">Red</option>
<option value="green">Green</option>
</select>
</div>
</td>
</tr>
</tbody>
</table>
<hr>
<div class="quantity quantity-lg">
<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
</div>
<button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Add to cart</button>
<hr>
</form>
<div class="d-flex align-items-center">
<ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark mr-3 mb-0">

<li class="social-icons-facebook">
<a href="https://www.facebook.com/sharer.php?u=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Facebook">
<i class="fab fa-facebook-f"></i>
</a>
</li>

<li class="social-icons-googleplus">
<a href="https://plus.google.com/share?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Google+">
<i class="fab fa-google-plus-g"></i>
</a>
</li>

<li class="social-icons-twitter">
<a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Twitter">
<i class="fab fa-twitter"></i>
</a>
</li>

<li class="social-icons-email">
<a href="https://www.okler.net/cdn-cgi/l/email-protection#92adc1e7f0f8f7f1e6afc1faf3e0f7b2c6fafbe1b2c2f3f5f7b4f3ffe2a9d0fdf6ebafdbb7a0a2e1f3e5b7a0a2e6fafbe1b7a0a2f3fcf6b7a0a2e6fafde7f5fae6b7a0a2fdf4b7a0a2ebfde7b3b7a0a2b2fae6e6e2e1a8bdbde5e5e5bcfdf9fef7e0bcfcf7e6" data-toggle="tooltip" data-placement="top" title="Share By Email">
<i class="far fa-envelope"></i>
</a>
</li>
</ul>
<a href="#" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2">
<i class="far fa-heart mr-1"></i> SAVE TO WISHLIST
</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col">
<div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
<ul class="nav nav-tabs justify-content-start">
<li class="nav-item active"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-toggle="tab">Description</a></li>
<li class="nav-item"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3" href="#productInfo" data-toggle="tab">Additional Information</a></li>
<li class="nav-item"><a class="nav-link nav-link-reviews font-weight-bold text-3 text-uppercase py-2 px-3" href="#productReviews" data-toggle="tab">Reviews (2)</a></li>
</ul>
<div class="tab-content p-0">
<div class="tab-pane px-0 py-3 active" id="productDescription">
<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. </p>
<p class="m-0">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
</div>
<div class="tab-pane px-0 py-3" id="productInfo">
<table class="table table-striped m-0">
<tbody>
<tr>
<th class="border-top-0">
Size:
</th>
<td class="border-top-0">
Unique
</td>
</tr>
<tr>
<th>
Colors
</th>
<td>
Red, Blue
</td>
</tr>
<tr>
<th>
Material
</th>
<td>
100% Leather
</td>
</tr>
</tbody>
</table>
</div>
<div class="tab-pane px-0 py-3" id="productReviews">
<ul class="comments">
<li>
<div class="comment">
<div class="img-thumbnail border-0 p-0 d-none d-md-block">
<img class="avatar rounded-circle" alt="" src="img/avatars/avatar-2.jpg">
</div>
<div class="comment-block">
<div class="comment-arrow"></div>
<span class="comment-by">
<strong>Jack Doe</strong>
<span class="float-right">
<div class="pb-0 clearfix">
<div title="Rated 3 out of 5" class="float-left">
<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
</div>
<div class="review-num">
<span class="count" itemprop="ratingCount">2</span> reviews
</div>
</div>
</span>
</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
</div>
</div>
</li>
<li>
<div class="comment">
<div class="img-thumbnail border-0 p-0 d-none d-md-block">
<img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
</div>
<div class="comment-block">
<div class="comment-arrow"></div>
<span class="comment-by">
<strong>John Doe</strong>
<span class="float-right">
<div class="pb-0 clearfix">
<div title="Rated 3 out of 5" class="float-left">
<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
</div>
<div class="review-num">
<span class="count" itemprop="ratingCount">2</span> reviews
</div>
</div>
</span>
</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra odio, gravida urna varius vitae, gravida pellentesque urna varius vitae.</p>
</div>
</div>
</li>
</ul>
<hr class="solid my-5">
<h4>Add a review</h4>
<div class="row">
<div class="col">
<form action="#" id="submitReview" method="post">
<div class="form-row">
<div class="form-group col pb-2">
<label class="required font-weight-bold text-dark">Rating</label>
<input type="text" class="rating-loading" value="0" title="" data-plugin-star-rating data-plugin-options="{'color': 'primary', 'size':'sm'}">
</div>
</div>
<div class="form-row">
<div class="form-group col-lg-6">
<label class="required font-weight-bold text-dark">Name</label>
<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
</div>
<div class="form-group col-lg-6">
<label class="required font-weight-bold text-dark">Email Address</label>
<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
</div>
</div>
<div class="form-row">
<div class="form-group col">
<label class="required font-weight-bold text-dark">Review</label>
<textarea maxlength="5000" data-msg-required="Please enter your review." rows="8" class="form-control" name="review" id="review" required></textarea>
</div>
</div>
<div class="form-row">
<div class="form-group col mb-0">
<input type="submit" value="Post Review" class="btn btn-primary btn-modern" data-loading-text="Loading...">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<hr class="solid my-5">
<h4 class="mb-3">Related <strong>Products</strong></h4>
<div class="products row">
<div class="col">
<div class="owl-carousel owl-theme show-nav-title nav-dark mb-0" data-plugin-options="{'loop': false, 'autoplay': false,'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true}">

    @foreach ($related as $item )

    <div class="product mb-0">
    <div class="product-thumb-info border-0 mb-3">
    <div class="product-thumb-info-badges-wrapper"><span class="badge badge-ecommerce badge-success">NEW</span>
    </div>
    <div class="addtocart-btn-wrapper">
    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
    <i class="icons icon-bag"></i>
    </a>
    </div>
    <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
    QUICK VIEW
    </a>
    <a href="shop-product-sidebar-left.html">
    <div class="product-thumb-info-image">
    <img alt="" class="img-fluid" src="{{ asset('media/gallery/product/'.$item->galleries[0]->file_name) }}">
    </div>
    </a>
    </div>
    <div class="d-flex justify-content-between">
    <div>
        @foreach ($item->categories as $cat)

        <a href="{{ route('category.product',$cat->slug_name) }}" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{$cat->name}}</a>
        @endforeach


    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">{{$item->title}}</a></h3>
    </div>
    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
    </div>
    <div title="Rated 5 out of 5">
    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
    </div>
    <p class="price text-5 mb-3">

        @if ($item->sale_price)

        <span class="sale text-color-dark font-weight-semi-bold">${{$item->sale_price}}</span>
        <span class="amount">${{$item->regular_price}}</span>
        @else
        <span class="amount">${{$item->regular_price}}</span>
        @endif
    </p>
    </div>


    @endforeach



</div>
</div>
</div>
</div>
</div>
</div>
</div>



@endsection