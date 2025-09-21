@extends('layouts.app')


@section('main')


<div role="main" class="main shop pt-4">
<div class="container">
<div class="row">


<div class="col-lg-3 order-2 order-lg-1">


      @include('backend.components.sidebar')
</div>


<div class="col-lg-9 order-1 order-lg-2">

<h4> Create new brand</h4>
<a class="btn btn-sm btn-success" href="{{ route('brand.index') }}">Back</a> <br><br>

<form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input class="form-control" type="text" name="name" id="" placeholder="name"><br>
    <input class="form-control" type="text" name="slug" id="" placeholder="slug"><br>
    <input class="form-control" type="file" name="logo" ><br>
    <input class="btn btn-success" type="submit" value="create">
</form>

</div>
</div>
</div>
</div>
@endsection