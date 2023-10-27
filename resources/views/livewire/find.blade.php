
<div class="input-group">
    <input type="text" class="form-control" placeholder="Search for products"id="myInput" onclick="showDropdown()" wire:model.debounce.300ms="searchQuery">
    <div class="input-group-append">
           <span wire:click="search" class="input-group-text bg-transparent text-primary">
                     <i class="fa fa-search"></i>
           </span>
    </div>
    <div>
        @if (empty($results))
            <p></p>
        @else
            <div >
                @if (count($results['categories']) > 0)
                    <h6>Categories</h6>
                    @foreach ($results['categories'] as $category)
                        <img src="{{asset('images/categories/'. $category->image ) }}" alt="" width="60" height="30"> </td>
                        <a href="{{route('Categories.show', $category->id )}}">{{ $category->name }}</a>
                        <br>
                    @endforeach
                @endif
            </div>
            <br>
            <div >
            @if (count($results['products']) > 0)
                <h6>Products</h6>
                        @foreach ($results['products'] as $product)
                        <img src="{{asset('images/products/'. $product->image ) }}" alt="" width="60" height="30"> </td>
                            <a href="{{ route('Products.show', $product->id ) }}">{{ $product->name }}</a>
                        <br>
                        @endforeach
            </div>
            @endif
            <br>
    </div>
    @endif
</div>
