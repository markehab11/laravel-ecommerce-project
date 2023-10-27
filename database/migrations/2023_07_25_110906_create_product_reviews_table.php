<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->text('review_text');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_reviews');
    }
};


// <td>{{ $product->reviews->count() }}</td>

// <h2>Reviews</h2>

// @if ($productSorry, it looks like my previous response got cut off. Here's the rest of the solution:

// Open `show.blade.php` and add the following code below the product description:

// ```html
// <h2>Reviews</h2>

// @if ($product->reviews->count() > 0)
//     <ul>
//         @foreach ($product->reviews as $review)
//             <li>
//                 <h3>{{ $review->title }}</h3>
//                 <p>{{ $review->body }}</p>
//                 <p>Rating: {{ $review->rating }}</p>
//             </li>
//         @endforeach
//     </ul>
// @else
//     <p>No reviews yet.</p>
// @endif
