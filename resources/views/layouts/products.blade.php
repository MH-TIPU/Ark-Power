@extends('layouts.layout')
@section('main-content')
    <div class="min-h-[calc(100vh-335px)]">
        <div class="min-h-screen w-full max-w-screen-xl mx-auto flex items-center justify-center p-5">
            <div class="md:mt-24 mt-14">
                <h1 class="text-primary text-center md:text-5xl text-3xl uppercase">Our Products</h1>
                <p class="text-primary text-center md:mt-2 text-xl md:uppercase mb-10">We truly care about our customer</p>
                <div class="grid lg:grid-cols-4 md:grid-cols-3  gap-10">
                    @foreach ($data as $product)
                        <div
                            class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden p-1 border hover:shadow-xl">
                            <div
                                class="relative bg-clip-border overflow-hidden bg-transparent text-gray-700 shadow-none m-0 rounded-none">
                                <div class="relative h-44 rounded-lg overflow-hidden"><a
                                        href="{{ route('productdetails', $product->id) }}"><img
                                            src="{{ asset('storage/' . $product->image) }}" alt="Dhaka Metro TVM"
                                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-110"></a>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="py-3"><a class="md:text-xl text-black font-semibold text-sm"
                                        href="{{ route('productdetails', $product->id) }}">{{ $product->name }}</a></div>
                                <div><a href="{{ route('productdetails', $product->id) }}">{{ Str::limit($product->description, 100) }}<span
                                            class="text-blue-700 hover:underline">Read more</span></a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center mt-8"><button disabled=""
                        class="px-4 py-2 mx-1 border rounded bg-gray-300">Previous</button><button
                        class="px-4 py-2 mx-1 border rounded bg-blue-500 text-white">1</button><button
                        class="px-4 py-2 mx-1 border rounded bg-white text-blue-500 hover:bg-blue-300">2</button><button
                        class="px-4 py-2 mx-1 border rounded bg-white text-blue-500 hover:bg-blue-300">Next</button></div>
            </div>
        </div>
    </div>
@endsection
