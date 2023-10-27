<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     /  Add Sizes
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
              <form action="{{ route('sizes.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <br>
                  <div class="form-group">
                      <label for="product"> Products </label>
                      <select name="product_id" id="product_id" class="form-control">
                          <option selected> Products </option>
                          @foreach ($products as $product)
                              <option value="{{ $product->id }}">{{ $product->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" >
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
