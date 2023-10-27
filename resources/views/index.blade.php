<?php
use App\Models\Slider;
use App\Models\Categorie;
?>
@extends('layout.app')

@section('title')
    e shopper -Home
@endsection

@section('content')

<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <?php
        $categories = Categorie::all();
        ?>
        @foreach($categories as $categorie)
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <a href="{{route('Categories.show', $categorie->id )}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('images/categories/'. $categorie->image)}}" alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">{{$categorie->name}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Categories End -->


<!-- Offer Start -->
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <?php
        $sliders = Slider::all();
        ?>
        @foreach($sliders as $slider)
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                <img src="{{asset('images/sliders/'. $slider->image ) }}" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">{{$slider->title}}</h5>
                    <h1 class="mb-4 font-weight-semi-bold">{{$slider->name}}</h1>
                    <a href="{{route('sliders.show', $slider->id )}}" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Offer End -->

<!-- Products Start -->
<div id="cart-container" class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
    </div>
        <livewire:productlist />
</div>
<!-- Products End -->


<!-- Subscribe Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
            </div>
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe End -->

<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <livewire:lastproducts />
    </div>
</div>
<!-- Products End -->
@endsection




