@extends('layouts.layouts-landing')

@section('title', 'Home')
@section('product', 'active')

@section('content')

    <!-- Products Section -->
    <div id="featured-products" class="bg-white py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h2 class="text-2xl text-center sm:text-3xl font-bold text-gray-900 mb-4">Pencarian Products</h2>

                <!-- Search and Filter -->
                <form action="{{ route('home') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
                    <!-- Search Input -->
                    <div class="flex-1 min-w-0">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..."
                            class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200">
                    </div>

                    <div class="grid grid-cols-2  gap-4 mb-6">
                        <!-- Category Filter -->
                        <div class="w-full sm:w-auto">
                            <select name="category"
                                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200">
                                <option value="">All Categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Sort Filter -->
                        <div class="w-full sm:w-auto">
                            <select name="sort"
                                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200">
                                <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
                                <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low
                                    to
                                    High</option>
                                <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price:
                                    High
                                    to Low</option>
                            </select>
                        </div>
                    </div>
                    <!-- Apply Filter Button -->
                    <div class="w-full sm:w-auto">
                        <button type="submit"
                            class="w-full px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-colors">
                            Apply Filters
                        </button>
                    </div>
                </form>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-2 gap-4 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @forelse ($products as $product)
                    <a href="/detail/{{ $product->slug }}">
                        <div class="product-card border bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300"
                            data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-price="{{ $product->price }}"
                            data-image="{{ $product->getPrimaryImage() }}" data-category="{{ $product->category->name }}">
                            <div class="aspect-w-1 aspect-h-1">
                                <img src="{{ $product->getPrimaryImage() }}" alt="{{ $product->name }}"
                                    class="w-full h-48 sm:h-72 object-cover">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h3 class="product-name text-base sm:text-lg font-medium text-gray-900">
                                    {{ $product->name }}
                                </h3>
                                <p class="product-description mt-1 text-xs sm:text-sm text-gray-500">
                                    {{ Str::limit($product->description, 100) }}
                                </p>
                                <div class="mt-4 flex items-center justify-between">
                                    <p class="text-base sm:text-lg font-semibold text-yellow-600">
                                        {{ $product->formatted_price }}
                                    </p>
                                    {{-- <button
                                        class="add-to-cart px-3 py-1 sm:px-4 sm:py-2 text-sm bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-colors">
                                        Add to Cart
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-8 sm:py-12">
                        <h3 class="text-base sm:text-lg font-medium text-gray-900">No products found</h3>
                        <p class="mt-2 text-sm text-gray-500">Try adjusting your search or filter</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                <div class="flex items-center justify-center flex-wrap gap-2">
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        {{ $products->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection

@push('scripts')
    <script type="module" src="{{ asset('js/app.js') }}"></script>
@endpush
