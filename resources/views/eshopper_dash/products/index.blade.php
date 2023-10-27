<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / Products
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">

                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Products</h1>
                  </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary"> <a href="{{route('Products.create')}}"> Add Products </a> </button></td>
                    </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Categorie_id</th>
                          <th>Slider_id</th>
                        <th>Price</th>
                        <th>Descount</th>
                        <th>Quantity</th>
                        <th>pro</th>
                      </tr>
                      </thead>
                      <tbody>
                    @foreach($products as $product)
                      <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td> <img src="{{asset('images/products/'. $product->image ) }}" alt="" width="200" height="150"> </td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->categorie_id }}</td>
                          <td>{{ $product->slider_id }}</td>
                        <td>${{ $product->price }}</td>
                        <td>${{ $product->descount }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                          <a href="{{ route('Products.edit', $product->id ) }}">Edit</a>
                          <form action="{{ route('Products.destroy', $product->id ) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    @endsection
<?php
    }else {
        abort(403, 'Unauthorized');
    }
?>
