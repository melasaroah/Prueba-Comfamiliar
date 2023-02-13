@extends('layouts.app')

@section('title', 'Create')
    
@section('content')
<form action="{{route('products.store')}}" method="POST" class="col-md-6 container mt-5">
    @csrf
    <h1>Create Products</h1>
    <div class="col-m3 mb-3">
        <input type="Text" class="form-control" name="title" id="title" placeholder="Tittle">
        <input type="Text" class="form-control" name="country" id="country" placeholder="Country">
        <input type="Text" class="form-control" name="price" id="price" placeholder="Price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection