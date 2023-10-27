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
                  <form action="{{ route('Products.update', $products->id ) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"  placeholder="name" name="name" value="{{ $products->name }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" placeholder="title" name="title" value="{{ $products->title }}">
                      </div>
                      <div>
                        <input type="hidden" name="old_image" value="{{ $products->image }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" placeholder="description" name="description" value="{{ $products->description }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" placeholder="price" name="price" value="{{ $products->price }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Descount</label>
                        <input type="text" class="form-control" placeholder="descount" name="descount" value="{{ $products->descount }}">
                      </div>
                      <div class="form-group">
                      <label for="color_id">Category</label>
                      <select name="categorie_id" class="form-control">
                        <option selected>Category</option>
                        @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}" @if ($categorie->id == $products->categorie_id) selected @endif> {{ $categorie->name }}</option>
                        @endforeach
                      </select>
                          <label for="color_id">Slider</label>
                          <select class="form-control" aria-label="Default select example" name="slider_id"width="200" height="150" >
                              <label for="Category_id">Slider</label>
                              <option selected value="0">Slider</option>
                              @foreach($sliders as $slider)
                                  <option value="{{ $slider->id }}" @if ($slider->id == $products->slider_id) selected @endif>{{ $slider->name }}</option>
                              @endforeach
                          </select>
                      </div>

            <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="{{ $products->quantity }}">
                      </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
    </section>
    <br><br><br>
@endsection
    <?php
    }else {
        abort(403, 'Unauthorized');
    }
?>

