<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / Product Colors
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Product Colors</h1>
                  </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary"> <a href="{{route('colors.create')}}"> Add Colors </a> </button></td>
                    </div>
                                <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>name</th>
                      </tr>
                      </thead>
                      <tbody>
                    @foreach($colors as $color)
                      <tr>
                        <td>{{ $color->id }}</td>
                          <td> {{ $color->product_id }} </td>
                          <td>{{ $color->name }}</td>

                        <td>
                          <a href="{{ route('colors.edit', $color->id ) }}">Edit</a>
                          <form action="{{ route('colors.destroy', $color->id ) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    </table>
                  </div>
                </div>
        </section>

    @endsection

<?php
    }else {
        abort(403, 'Unauthorized');
    }
?>


