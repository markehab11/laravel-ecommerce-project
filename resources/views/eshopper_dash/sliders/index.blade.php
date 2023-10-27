<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>


    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / Sliders
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">

                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Sliders</h1>
                  </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary"> <a href="{{route('sliders.create')}}"> Add Sliders </a> </button></td>
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
                    @foreach($sliders as $slider)
                      <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $slider->name }}</td>
                        <td> <img src="{{asset('images/sliders/'. $slider->image ) }}" alt="" width="200" height="150"> </td>
                        <td>{{ $slider->title }}</td>

                        <td>
                          <a href="{{ route('sliders.edit', $slider->id ) }}">Edit</a>
                          <form action="{{ route('sliders.destroy', $slider->id ) }}" method="post">
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
