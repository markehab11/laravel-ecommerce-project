<div>
    <div class="card border-secondary mb-5">
        <div class="card-header bg-secondary border-0">
            <h4 class="font-weight-semi-bold m-0">Order Total</h4>
        </div>
        <div class="card-body">
            <h5 class="font-weight-medium mb-3">Products</h5>
            @foreach( $carts as $cart)
            <div class="d-flex justify-content-between">
                <h6>{{ $cart->product->name . '(' . $cart->quantity.')'.'$' .$cart->product->price }}</h6>
                <h6>${{ $cart->product->price * $cart->quantity }}</h6>
            </div>
            @endforeach

            <hr class="mt-0">
            <div class="d-flex justify-content-between mb-3 pt-1">
                <h6 class="font-weight-medium">Subtotal</h6>
                <h6 class="font-weight-medium">${{$sub_total}}</h6>
            </div>
            <div class="d-flex justify-content-between">
                <h6 class="font-weight-medium">Tax</h6>
                <h6 class="font-weight-medium">${{$tax}}</h6>
            </div>
        </div>
        <div class="card-footer border-secondary bg-transparent">
            <div class="d-flex justify-content-between mt-2">
                <h5 class="font-weight-bold">Total</h5>
                <h5 class="font-weight-bold">${{$total}}</h5>
            </div>
        </div>
    </div>
</div>
