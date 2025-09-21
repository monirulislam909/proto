@extends('layouts.app')


@section('main')


<div role="main" class="main shop pt-4">
<div class="container">
<div class="row">


<div class="col-lg-3 order-2 order-lg-1">


      @include('backend.components.sidebar')
</div>


<div class="col-lg-9 order-1 order-lg-2">

<h4> All Brands</h4>
<a class="btn btn-sm btn-success" href="{{ route('brand.create') }}">create brand</a>
<hr>
<table class="table">
   <thead>
    <th>#</th>
    <th>Name</th>
    <th>Slug</th>
    <th>logo</th>
    <th>Create At</th>
    <th>Action</th>
   </thead>
   <tbody>

    @foreach ($data as $item )
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td> {{$item->name}}</td>
        <td> {{$item->slug_name}}</td>
        <td> <img src="{{ URL::to('media/brand',$item->logo) }}" alt="" height="50px" width="auto"></td>
        <td> {{$item->time}}</td>
        <td>
            <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
            <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
            <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
        </td>
    </tr>

    @endforeach

   </tbody>
</table>

</div>
</div>
</div>
</div>
@endsection