<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     /  Edit Slider
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
                  <form action="{{ route('Users.update', $users->id ) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control"  placeholder="name" name="name" value="{{ $users->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" placeholder="email" name="email"  value="{{ $users->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">password</label>
                            <input type="password" class="form-control" id="passwordField" placeholder="password" name="password">
                        </div>
                        @if( $users->role === 'admin')
                            <div class="form-group">
                                <input  type="radio" name="role" value="user" >
                                <label for="userCheckbox">User</label><br>

                                <input type="radio" name="role" value="admin" checked>
                                <label for="adminCheckbox">Admin</label>
                            </div>
                        @else
                            <div class="form-group">
                                <input  type="radio" name="role" value="user" checked>
                                <label for="userCheckbox">User</label><br>

                                <input type="radio" name="role" value="admin">
                                <label for="adminCheckbox">Admin</label>
                            </div>
                        @endif
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
