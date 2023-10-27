<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / Product Sizes
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">

                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Product Sizes</h1>
                  </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary"> <a href="{{route('sizes.create')}}"> Add Sizes </a> </button></td>
                    </div>
                                <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                          <th>Product</th>
                          <th>Size</th>

                      </tr>
                      </thead>
                      <tbody>

                    @foreach($sizes as $size)
                      <tr>
                        <td>{{ $size->id }}</td>
                          <td> {{ $size->product_id }} </td>
                          <td>{{ $size->name }}</td>

                        <td>
                          <a href="{{ route('sizes.edit', $size->id ) }}">Edit</a>
                          <form action="{{ route('sizes.destroy', $size->id ) }}" method="post">
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
