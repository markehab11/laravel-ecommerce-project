@extends('layout.app')

@section('title')
    E Shopper -Details
@endsection

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        @foreach ($product_images as $product_image)
                            <div class="carousel-item active">
                                <img class="w-100 h-100" src="{{asset('images/products/'. $product->image) }}" alt="Image">
                            </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('images/products/'. $product_image->filename_1 ) }}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('images/products/'. $product_image->filename_2 ) }}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('images/products/'. $product_image->filename_3 ) }}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('images/products/'. $product_image->filename_4 ) }}" alt="Image">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{ $product->name }}</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                @if($product->descount === 0)
                <p class="font-weight-semi-bold mb-4">${{ $product->price }}</p>
                @else
                <h4 class="font-weight-semi-bold mb-4"><del>${{ $product->price }}</del></h4>
                <h3 class="font-weight-semi-bold mb-4">${{ $product->descount }}</h3>
                @endif
                <p class="mb-4">{{ $product->title }}</p>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                    <form>
                        @foreach ($sizes as $size)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="form-check-input" id="size-1" name="size">
                            <label  for="size-1">{{ $size->name }}</label>
                        </div>
                        @endforeach
                    </form>
                </div>
                <div class="d-flex mb-4">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
                    <form>
                        @foreach ($colors as $color)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="form-check-input" id="color-1" name="color">
                            <label  for="color-1">{{ $color->name }}</label>
                        </div>
                        @endforeach
                    </form>
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews ({{$product->reviews->count()}})</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p>{{ $product->description }}</p>
                    </div>

                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4"> Reviews Ror "{{ $product->name }}"</h4>

                                @foreach ($product->reviews as $review)
                                <div class="media mb-4">
                                    <img src="{{URL::asset('img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1}" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>{{ $review->name }}<small> - <i>{{ $review->created_at }}</i></small></h6>
                                        <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                        <p>{{ $review->review_text }}</p>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <small>Your email address will not be published. Required fields are marked *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form id="review_products" method="post" action="{{ route('productReview.store') }}" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <input type="hidden" id="product_id"  name="product_id" value="{{ $product->id }}">
                                        <textarea id="review_text" name="review_text" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Name *</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email *</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" id="addReview" class="btn btn-primary px-3">submit</button>
                                    </div>
                                    <div id="add"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <livewire:productlist />
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection
@section('script')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr('content')
            }
        } );

        $(document).ready(function() {
            $('#addReview').click(function (e) {
                e.preventDefault();

                var product_id = $('#product_id').val();
                var review_text = $('#review_text').val();
                var name = $('#name').val();
                var email = $('#email').val();

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        product_id: product_id,
                        review_text: review_text,
                        name: name,
                        email: email,
                        _token: '{{csrf_token()}}',
                        contentType: false,
                        cache: false,
                        processData: false,
                    },
                    url: '{{ route('productReview.store') }}',
                    success: function(response) {
                        $('#add').html('');
                        jQuery('#review_products')[0].reset();
                        jQuery('#add').html(response.message);
                    },
                    error: function (error) {
                        console.log('error');
                    }
                });
            });
        });

    </script>

@endsection
