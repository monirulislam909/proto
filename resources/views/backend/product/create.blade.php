@extends('layouts.app')


@section('main')


<div role="main" class="main shop pt-4">
<div class="container">
<div class="row">


<div class="col-lg-3 order-2 order-lg-1">


      @include('backend.components.sidebar')
</div>


<div class="col-lg-9 order-1 order-lg-2">

<h4> Create new product</h4>
<a class="btn btn-sm btn-success" href="{{ route('product.index') }}">Back</a> <br><br>
@include('backend.components.message')
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input class="form-control" type="text" name="title" id="" placeholder="Product Title"><br>
    <input class="form-control" type="text" name="subtitle" id="" placeholder="Product subTitle"><br>
    <input class="form-control" type="text" name="short_dsc" id="" placeholder="Product descripton"><br>
    <input class="form-control" type="text" name="long_dsc" id="" placeholder="Product Long Description"><br>
    <input class="form-control" type="text" name="regular_price" id="" placeholder="regular_price"><br>
    <input class="form-control" type="text" name="sale_price" id="" placeholder="sale_price"><br>
    <input class="form-control" type="text" name="stock" id="" placeholder="Stock"><br>
    <input class="form-control" type="text" name="rating" id="" placeholder="Product rating"><br>

    <select name="brand" id=""  class="form-control" >
        @foreach ( $brand as $item )

        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    <div class="row">
        <div class="col-md-6">
            <p>Select Tags</p>

            @foreach ($tag as $item )
            <label>
            <input type="checkbox" name="tag[]" id=""  value="{{ $item->id }}"> {{ $item->name }}
           </label></br>

            @endforeach
        </div>

        <div class="col-md-6 d-flex justify-content-end" >
            <div>
                <p >Select Category</p>

        @foreach ($category as $item )
        <label>
            <input type="checkbox" name="category[]" id=""  value="{{ $item->id }}"> {{ $item->name }}
        </label></br>
            @endforeach
            </div>
        </div>
    </div>

    <input class="form-control" type="file" name="gallery[]" multiple ><br>
    <input class="btn btn-success" type="submit" value="create">
</form>

</div>
</div>
</div>
</div>
@endsection