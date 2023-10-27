<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / Categories
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">

                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Categories</h1>
                  </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary"> <a href="{{route('Categories.create')}}"> Add Category </a> </button></td>
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
                        <th>pro</th>
                      </tr>
                      </thead>
                      <tbody>

                    @foreach($categories as $categorie)
                      <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->name }}</td>
                        <td> <img src="{{asset('images/categories/'. $categorie->image ) }}" alt="" width="200" height="150"> </td>
                        <td>{{ $categorie->title }}</td>

                        <td>
                          <a href="{{ route('Categories.edit', $categorie->id ) }}">Edit</a>
                          <form action="{{ route('Categories.destroy', $categorie->id ) }}" method="post">
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

