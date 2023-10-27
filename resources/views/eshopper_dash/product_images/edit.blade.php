<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     /  Edit Products
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')

    <div class="card">
        <section class="content">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('productImage.update', $product_images->id ) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="product"> Products </label>
                            <select name="product_id" id="product_id" class="form-control">
                                <option selected> Products </option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" @if ($product->id == $product_images->product_id) selected @endif>{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image 1</label>
                            <input type="file" class="form-control" name="filename_1">
                            <input type="hidden" name="old_image_1" value="{{ $product_images->filename_1 }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image 2</label>
                            <input type="file" class="form-control" name="filename_2">
                            <input type="hidden" name="old_image_2" value="{{ $product_images->filename_2 }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image 3</label>
                            <input type="file" class="form-control" name="filename_3">
                            <input type="hidden" name="old_image_3" value="{{ $product_images->filename_3 }}">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image 4</label>
                            <input type="file" class="form-control" name="filename_4">
                            <input type="hidden" name="old_image_4" value="{{ $product_images->filename_4 }}">

                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>

                </div>
                <!-- /.card -->
    </section>
    <br><br><br><br>

 <?php
    }else {
        abort(403, 'Unauthorized');
    }
?>
