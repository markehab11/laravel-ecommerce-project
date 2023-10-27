<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / Products Reviews
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">

                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Products Reviews</h1>
                  </div>
                                <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Body</th>
                        <th>Rating</th>
                        <th>pro</th>
                      </tr>
                      </thead>

                    @foreach($products as $product)
                      <tr>
                            @if ($product->reviews->count() > 0)
                              @foreach ($product->reviews as $review)
                              <td>{{ $review->id }}</td>
                              <td>{{ $product->name }}</td>
                              <td>{{ $review->name }}</td>
                              <td>{{ $review->email }}</td>
                              <td>{{ $review->body}}</td>
                              <td>{{ $review->rating }}</td>
                              <td>
                              <form action="{{ route('productReview.destroy', $review->id ) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Delete</button>
                              </form>
                            </td>
                      </tr>
                    @endforeach

                      @endif
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
