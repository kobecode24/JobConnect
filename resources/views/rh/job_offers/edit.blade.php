@extends('layouts.admin.app')

@section('contents')
    <div class="container px-6 py-8 mx-auto">
        <h3 class="text-3xl font-medium text-gray-700">Edit Job Offer</h3>

        <div class="mt-8 max-w-xl">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Holy smokes!</strong>
                    <span class="block sm:inline">Please check the following errors:</span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                <span class="block sm:inline">{{ $error }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('hr.job_offers.update', $jobOffer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Job Title</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $jobOffer->name) }}" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                    <textarea id="description" name="description" rows="4" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ old('description', $jobOffer->description) }}</textarea>
                </div>

                <div class="mb-6">
                    <label for="salary" class="block mb-2 text-sm font-medium text-gray-900">Salary</label>
                    <input type="number" id="salary" name="salary" value="{{ old('salary', $jobOffer->salary) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <div class="mb-6">
                    <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900">Deadline</label>
                    <input type="date" id="deadline" name="deadline" value="{{ old('deadline', $jobOffer->deadline->toDateString()) }}" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update Job Offer</button>
            </form>
        </div>
    </div>
@endsection
