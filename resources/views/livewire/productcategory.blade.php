
<div class="row px-xl-5 pb-3">
    <div>
        @include('layout.flash-massage')
    </div>
    <br>
    @foreach($products as $product)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('images/products/'. $product->image ) }}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
                    @if($product->descount === 0)
                        <div class="d-flex justify-content-center">
                            <h5>${{ $product->price }}</h5>
                        </div>
                    @else
                        <div class="d-flex justify-content-center">
                            <h5>${{ $product->descount }}</h5><h6 class="text-muted ml-2"><del>${{ $product->price }}</del></h6>
                        </div>
                    @endif
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{ route('Products.show', $product->id ) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <button  class="btn btn-sm text-dark p-0" wire:click="addToCart({{ $product->id }})"> <i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                </div>
            </div>
        </div>
    @endforeach
</div>


