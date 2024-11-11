@extends('layouts.layout')
@section('main-content')
    <div class="min-h-screen">
        <div class="w-full max-w-screen-xl mx-auto p-5">
            <div class="md:mt-24 mt-14">
                <div class="grid md:grid-cols-5 gap-16 ">
                    <div class="md:col-span-2"><img src="{{ asset('storage/' . $data->image) }}" alt="Product Image"
                            class="object-cover rounded-lg"></div>
                    <div class="md:col-span-3">
                        <h1 class="text-primary mb-5 md:text-5xl text-3xl uppercase">{{ $data->name }}</h1>
                        <p class="text-gray-600">{{ $data->description }}</p>
                        <div class="pt-10">
                            {{-- <h4 class="text-xl font-bold text-gray-700 mb-2">PDF Link</h4> --}}
                            <a href="{{ $data->source_url }}" class="text-blue-500 hover:underline cursor-pointer"
                                target="_blank" rel="noopener noreferrer">View Catalog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
