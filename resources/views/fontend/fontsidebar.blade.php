
<aside class="sidebar">
     <form action="https://www.okler.net/previews/porto/8.3.0/page-search-results.html" method="get"> <div class="input-group mb-3 pb-1"> <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text"> <span class="input-group-append"> <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button> </span> </div> </form>

     <h5 class="font-weight-semi-bold pt-3">Categories</h5>
     <ul class="nav nav-list flex-column">

        @foreach ($category as $item)

        <li class="nav-item"><a class="nav-link" href="{{ route('category.product',$item->slug_name )}}">{{$item->name}}</a></li>
        @endforeach




    </ul>

         <h5 class="font-weight-semi-bold pt-5">Tags</h5>
         <div class="mb-3 pb-1">

            @foreach ($tag as $item)

            <a href="{{route('tag.product',$item->slug_name) }}"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">{{$item->name}}</span></a>

        @endforeach
             </div>


         <div class="row mb-5">
             <div class="col">
                <h5 class="font-weight-semi-bold pt-5">Top Rated Products</h5>
                <div class="product row row-gutter-sm align-items-center mb-4">
                    <div class="col-5 col-lg-5">
                        <div class="product-thumb-info border-0"> <a href="shop-product-sidebar-left.html"> <div class="product-thumb-info-image"> <img alt="" class="img-fluid" src="img/products/product-grey-6.jpg"> </div> </a> </div> </div> <div class="col-7 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1"> <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">hat</a> <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Blue Hat</a></h3> <div title="Rated 5 out of 5"> <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}"> </div> <p class="price text-4 mb-0"> <span class="sale text-color-dark font-weight-semi-bold">$299,00</span> <span class="amount">$289,00</span> </p> </div> </div> <div class="product row row-gutter-sm align-items-center mb-4"> <div class="col-5 col-lg-5"> <div class="product-thumb-info border-0"> <a href="shop-product-sidebar-left.html"> <div class="product-thumb-info-image"> <img alt="" class="img-fluid" src="img/products/product-grey-8.jpg"> </div> </a> </div> </div> <div class="col-7 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1"> <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a> <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Adventurer Bag</a></h3> <div title="Rated 5 out of 5"> <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}"> </div> <p class="price text-4 mb-0"> <span class="sale text-color-dark font-weight-semi-bold">$99,00</span> <span class="amount">$79,00</span> </p> </div> </div> <div class="product row row-gutter-sm align-items-center mb-4"> <div class="col-5 col-lg-5"> <div class="product-thumb-info border-0"> <a href="shop-product-sidebar-left.html"> <div class="product-thumb-info-image"> <img alt="" class="img-fluid" src="img/products/product-grey-9.jpg"> </div> </a> </div> </div> <div class="col-7 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1"> <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a> <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Baseball Ball</a></h3> <div title="Rated 5 out of 5"> <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}"> </div> <p class="price text-4 mb-0"> <span class="sale text-color-dark font-weight-semi-bold">$399,00</span> <span class="amount">$299,00</span> </p> </div> </div> </div> </div> </aside>



