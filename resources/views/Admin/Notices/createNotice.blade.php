@extends('Admin.layouts.layout')

@section('adminContent')
<div class="p-4 sm:ml-64 mt-16">
      {{-- Breadcrumb --}}
      <nav class="flex my-4 text-breadcrumb" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center justify-center">
            <a href="{{route('admin.dashboard')}}" class="flex items-center justify-center text-sm font-medium">
              <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
              Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <span class="mx-2">/</span>
              <a href="{{route('admin.notice_list')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                Notice
              </a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="mx-2">/</span>
              <span class="ml-1 text-sm font-medium">
                Add Notice
              </span>
            </div>
          </li>
        </ol>
      </nav>
      <hr class="mb-12 border border-breadcrumb">

     <div class=" mb-4">
        <div class="flex items-center justify-center text-blue">
          <div class="relative drop-shadow-lg w-full md:px-6 px-3 py-10 bg-light rounded-lg shadow-xl ">
            <p class="font-semibold text-xl text-center mb-10">Add New Notice</p>

            <form method="POST" action="{{ route('admin.add_Notice') }}" class="md:w-4/5 md:mx-auto">
              @csrf
              <div class="mb-6">
                  <label for="title" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    Notice Title
                  </label>
                  <input type="text" id="title" value="{{ old('title') }}" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @error('title')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                @enderror
              </div>
              <div class="mb-6">
                  <label for="description" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    Notice Description
                  </label>
                  <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-blue bg-gray-50 rounded-lg border dark:placeholder-gray-400" placeholder="Insert notice here...">{{ old('description') }}</textarea>
                  @error('description')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                @enderror
              </div>
              <button type="submit" class="block mx-auto text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center  mt-7">
                Add Notice
              </button>
            </form>
          </div>
        </div>
     </div>
</div>
@endsection
