<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / website infos
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">website info</h1>
                  </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary"> <a href="{{route('website_infos.create')}}"> Add Website info </a> </button></td>
                    </div>
                                <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Facebook</th>
                        <th>Twiter</th>
                        <th>Instgram</th>
                        <th>Youtube</th>
                      </tr>
                      </thead>
                      <tbody>
                    @foreach($website_infos as $website_info)
                      <tr>
                        <td>{{ $website_info->id }}</td>
                        <td>{{ $website_info->address }}</td>
                        <td>{{ $website_info->email }}</td>
                        <td>{{ $website_info->phone }}</td>
                        <td>{{ $website_info->facebook }}</td>
                        <td>{{ $website_info->twiter }}</td>
                        <td>{{ $website_info->instgram }}</td>
                        <td>{{ $website_info->youtube }}</td>
                        <td>
                          <a href="{{ route('website_infos.edit', $website_info->id ) }}">Edit</a>
                          <form action="{{ route('website_infos.destroy', $website_info->id ) }}" method="post">
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
