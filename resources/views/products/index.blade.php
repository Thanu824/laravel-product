


@extends('products.layout')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Ptype_name</th>
      <th scope="col">Ptype_description</th>
      
      
    </tr>
  </thead>
  <tbody>
             @foreach ($products as $product)
               <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->quantity}}</td>
                  <td>{{ $product->ptype->name }}</td>
                  <td>{{ $product->ptype->description}}</td>
                  
  
                </tr>
            @endforeach
   
  </tbody>

</table>
