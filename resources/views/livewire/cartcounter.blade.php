<div>
    <div class="cart-dropdown">
        <i class="fas fa-shopping-cart text-primary" onclick="toggleCartDropdown()">
            Shopping Cart
            <span class="badge">{{ $count }}</span>
        </i>
        <div class="cart-dropdown-content" id="cartDropdownContent">
            @include('layout.flash-massage')
            @foreach( $carts as $cart)
            <ul class="cart-items">
                <li class="cart-item">
                    <div class="item-image">
                        <img src="{{asset('images/products/'. $cart->product->image )}}" alt="Product 1">
                    </div>
                    <button class="btn btn-sm btn-primary" wire:click="remove({{ $cart->id }})"><i class="fa fa-times"></i></button>
                    <div class="item-details">
                        <h4 class="item-name"> {{ $cart->product->name }}</h4>
                        <p class="item-price">${{$cart->product->price}}</p>
                        <div class="item-quantity">
                            <button class="btn btn-sm btn-primary btn-minus" wire:click="decrement({{ $cart->id }})">-</button>
{{--                            <button class="quantity-btn" onclick="decreaseQuantity(this)">-</button>--}}
                            <h4>{{$cart->quantity}}</h4>
                            <button class="btn btn-sm btn-primary btn-plus" wire:click="increment({{ $cart->id }})">+</button>
                            {{--                            <button class="quantity-btn" onclick="increaseQuantity(this)">+</button>--}}
                        </div>
{{--                        <button class="remove-item" onclick="removeCartItem(this)">Remove</button>--}}
                    </div>
                </li>
                <!-- Add more cart items as needed -->
            </ul>
            @endforeach
            <div class="cart-total">
                <p>Total: <span class="total-price">${{ $this->total }}</span></p>
            </div>
            <a href="{{route('checkout')}}" class="checkout-btn">Checkout</a>
        </div>
    </div>
</div>

