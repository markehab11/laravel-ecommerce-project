@extends('layout.app')

@section('title')

    E Shopper -Cart

@endsection

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Cart Start -->
    <div class="container-fluid pt-5">

    </div>
    <livewire:Shoppingcart />
    <!-- Cart End -->

    @endsection
