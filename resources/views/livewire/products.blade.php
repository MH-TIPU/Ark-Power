<div class="">
    <div class="min-h-screen w-full max-w-screen-xl mx-auto flex items-center justify-center p-5">
        <div class="md:mt-24 mt-14">
            <h1 class="text-primary text-center md:text-5xl text-3xl uppercase">Our Products</h1>
            <p class="text-primary text-center md:mt-2 text-xl md:uppercase font-medium">We truly care about our
                customer</p>
            <div class="flex justify-center my-5">
                <button class="px-4 py-2 mx-2 bg-blue-600 text-white">All</button>
                <button class="px-4 py-2 mx-2 bg-gray-200">News</button>
                <button class="px-4 py-2 mx-2 bg-gray-200">Events</button>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-3 gap-10">
                @forelse ($products as $product)
                    <div
                        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden p-1 border hover:shadow-xl">
                        <div
                            class="relative bg-clip-border overflow-hidden bg-transparent text-gray-700 shadow-none m-0 rounded-none">
                            <div class="relative h-44 rounded-lg overflow-hidden">
                                <a href="{{ route('productdetails', $product->id) }}">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="py-3">
                                <a class="md:text-xl text-black font-semibold text-sm"
                                    href="{{ route('productdetails', $product->id) }}">{{ $product->name }}</a>
                            </div>
                            <div>
                                <a href="{{ route('productdetails', $product->id) }}">
                                    {{ Str::limit($product->description, 100) }}<span
                                        class="text-blue-700 hover:underline">Read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-700 font-semibold">
                        <p>No products available at the moment.</p>
                    </div>
                @endforelse
            </div>
            <!-- Pagination links -->
            @if ($products->hasPages())
                <div class="flex justify-center mt-8">
                    {{-- Previous Page Link --}}
                    @if ($products->onFirstPage())
                        <button disabled class="px-4 py-2 mx-1 border rounded bg-gray-300">Previous</button>
                    @else
                        <button wire:click="previousPage"
                            class="px-4 py-2 mx-1 border rounded bg-blue-500 text-white">Previous</button>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                        <button wire:click="gotoPage({{ $page }})"
                            class="px-4 py-2 mx-1 border rounded {{ $page === $products->currentPage() ? 'bg-blue-500 text-white' : 'bg-white text-blue-500 hover:bg-blue-300' }}">
                            {{ $page }}
                        </button>
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($products->hasMorePages())
                        <button wire:click="nextPage"
                            class="px-4 py-2 mx-1 border rounded bg-blue-500 text-white">Next</button>
                    @else
                        <button disabled class="px-4 py-2 mx-1 border rounded bg-gray-300">Next</button>
                    @endif
                </div>
            @endif

        </div>
    </div>
</div>
