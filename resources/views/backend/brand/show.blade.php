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
<a href="{{ route('brand.index') }}">Back</a>

</div>
</div>
</div>
</div>
@endsection