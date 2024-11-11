@extends('layouts.layout')
@section('main-content')
    <div class=" min-h-screen">
        <div class="w-full max-w-screen-xl mx-auto p-5 mt-20 md:mt-24">
            <div class="grid md:grid-cols-4 gap-10">
                <div class="md:col-span-3">
                    <h1 class="text-3xl md:text-5xl font-semibold mb-5">{{ $data->title }}</h1>
                    <div>
                        <div class="mb-3">
                            <p class="text-xl font-bold">Job Description</strong></p>
                            <p>{!! $data->description !!}</p>
                        </div>

                        <div class="mb-2">
                            <p class="text-xl font-bold">Responsibilities:</p>
                            <p>{!! $data->responsibilities !!}</p>
                        </div>


                        <p><strong>Required Skills:</strong></p>
                        <p>{!! $data->required_skills !!}</p>
                        <p><strong>Location: </strong>{{ $data->location }}</p>
                        <p><strong>Salary:</strong>&nbsp;Negotiable</p>
                        <p><strong>Educational Requirements:</strong></p>
                        <ul>
                            <li>{!! $data->qualifications !!}</li>
                        </ul>
                        <p><strong>Benefits:</strong></p>
                        <p>{!! $data->benefits !!}</p>
                        <p><strong>Application Procedure:</strong>&nbsp;{!! $data->application_process !!}</p>
                        <p><strong>Contact Information:</strong>&nbsp;{!! $data->contact_info !!}</p>
                        <p><em>This job will be expired on
                                {{ \Carbon\Carbon::parse($data->deadline)->format('d F Y') }}.</em></p>
                    </div>
                </div>
                <div class="md:col-span-1 lg:col-span-1 border-l-2 pl-5">
                    <p class="text-3xl font-semibold uppercase mb-5">{{ $data->category->name }}</p>
                    <a class="p-3 border-2 uppercase font-semibold rounded border-black hover:bg-black hover:text-white"
                        href="{{ route('career') }}">Back to Career Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
