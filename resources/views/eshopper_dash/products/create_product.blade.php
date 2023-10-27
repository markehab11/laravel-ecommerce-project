<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     /  Add Products
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
                    <h3 class="card-title">Add</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('Products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"  placeholder="name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" placeholder="title" name="title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" placeholder="description" name="description">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" placeholder="price" name="price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Descount</label>
                        <input type="text" class="form-control" placeholder="descount" name="descount">
                      </div> <br>
                        <label for="Category_id">Category</label>
                      <select class="form-control" aria-label="Default select example" name="categorie_id"width="200" height="150" >
                      <option selected>Category</option>
                        @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                      </select><br>
                        <label for="slider_id">Slider</label>
                        <select class="form-control" aria-label="Default select example" name="slider_id"width="200" height="150" >
                            <option selected value="0">Slider</option>
                            @foreach($sliders as $slider)
                                <option value="{{ $slider->id }}">{{ $slider->name }}</option>
                            @endforeach
                        </select><br>
                          <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="text" class="form-control" placeholder="quantity" name="quantity">
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

@endsection

<?php
    }else {
        abort(403, 'Unauthorized');
    }
?>
