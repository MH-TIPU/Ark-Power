@extends('layouts.layout')
@section('main-content')
    <div class="min-h-[calc(100vh-335px)]">
        <div class="w-full max-w-screen-xl mx-auto p-5 md:mt-24 mt-14">
            <div class="grid md:grid-cols-4 gap-10">
                <div class="md:col-span-1 lg:col-span-1">
                    <p class="text-3xl font-semibold uppercase mb-5">{{ $data->category->name }}</p>
                    <a class="p-3 border-2 uppercase font-semibold rounded border-black hover:bg-black hover:text-white"
                        href="{{ route('career') }}">Back to Career Page</a>
                </div>
                <div class="md:col-span-3">
                    <h1 class="text-3xl font-semibold mb-5">{{ $data->title }}</h1>
                    <div>
                        <strong>Job Description:</strong></p>
                        <p>{!! $data->description !!}</p>
                        <p><strong>Responsibilities:</strong></p>
                        <p>{!! $data->responsibilities !!}</p>
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
            </div>
        </div>
    </div>
@endsection
