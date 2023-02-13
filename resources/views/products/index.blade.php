@extends('layouts.app')

@section('title', 'home')
    
@section('content')

<div class="container">
<table class="table">
    <thead class="thead-dark">
      <tr >
        <th>ID</th>
        <th> Title</th>
        <th> Country</th>
        <th> Price</th>
        <th> Create</th>
        <th> Updated</th>
        <th> Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $row)        
        <tr>
            <td >{{$row->id}}</td>
            <td >{{$row->title}}</td>
            <td >{{$row->country}}</td>
            <td >{{$row->price}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>
            <td>
                <form action="{{ route('products.destroy', $row->id) }}" method="POST">
                    @csrf
                    <button class="btn btn-danger">
                    <i class="bi bi-trash3"></i></button>
                </form>
                <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
            </td>
        </tr>
        @endforeach          
    </tbody>
  </table>  
</div>
     
@endsection