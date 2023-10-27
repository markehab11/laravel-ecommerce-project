<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     /  Edit Category
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
                  <form action="{{ route('website_infos.update', $Website_infos->id ) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control"  placeholder="address" name="address" value="{{ $Website_infos->address }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" placeholder="email" name="email" value="{{ $Website_infos->email }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" placeholder="phone" name="phone" value="{{ $Website_infos->phone }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Facebook</label>
                        <input type="text" class="form-control" placeholder="facebooke" name="facebook" value="{{ $Website_infos->facebook }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Twiter</label>
                        <input type="text" class="form-control" placeholder="twiter" name="twiter" value="{{ $Website_infos->twiter }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Instgram</label>
                        <input type="text" class="form-control" placeholder="instgram" name="instgram" value="{{ $Website_infos->instgram }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Youtube</label>
                        <input type="text" class="form-control" placeholder="youtube" name="youtube" value="{{ $Website_infos->youtube }}">
                      </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
            </div>
    </section>
    <br><br><br><br>

    @endsection

    <?php
}else {
    abort(403, 'Unauthorized');
}
?>
