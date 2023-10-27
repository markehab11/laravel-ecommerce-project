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
                        <button type="button" class="btn btn-secondary"> <a href="{{route('productImage.create')}}"> Add Product Images </a> </button></td>
                    </div>
                                <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Image 3</th>
                        <th>Image 4</th>
                        <th>pro</th>
                      </tr>
                      </thead>
                      <tbody>

                    @foreach($ProductImages as $ProductImage)
                      <tr>
                          <td> {{ $ProductImage->id }} </td>
                          <td> {{ $ProductImage->product_id }} </td>
                          <td> <img src="{{asset('images/products/'. $ProductImage->filename_1 ) }}" alt="" width="200" height="150"> </td>
                          <td> <img src="{{asset('images/products/'. $ProductImage->filename_2 ) }}" alt="" width="200" height="150"> </td>
                          <td> <img src="{{asset('images/products/'. $ProductImage->filename_3 ) }}" alt="" width="200" height="150"> </td>
                          <td> <img src="{{asset('images/products/'. $ProductImage->filename_4 ) }}" alt="" width="200" height="150"> </td>
                        <td>
                          <a href="{{ route('productImage.edit', $ProductImage->id ) }}">Edit</a>
                          <form action="{{ route('productImage.destroy', $ProductImage->id ) }}" method="post">
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
