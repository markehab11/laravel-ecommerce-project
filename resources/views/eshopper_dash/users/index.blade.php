<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / Users
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">

                <div class="card">
                  <div class="card-header">
                    <h1 class="card-title">Users</h1>
                  </div>
                  <div class="card-body"><button type="button" class="btn btn-success"> <a href="{{route('Users.create')}}"> Add User </a> </button></div>
                  <div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email </th>
                        <th>role</th>
                          <th>pro</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email  }}</td>
                        <td>{{ $user->role }}</td>

                          <td>
                              <a href="{{ route('Users.edit', $user->id ) }}">Edit</a>
                              <form action="{{ route('Users.destroy', $user->id ) }}" method="post">
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
              </div>
    @endsection

<?php
    }else {
        abort(403, 'Unauthorized');
    }
?>
