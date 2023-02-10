@extends('Admin.layouts.layout')

@section('adminContent')
<div class="p-4 sm:ml-64 mt-16">
      {{-- Breadcrumb --}}
      <nav class="flex my-4 text-breadcrumb" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center justify-center">
            <a href="#" class="flex items-center justify-center text-sm font-medium">
              <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
              Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <span class="mx-2">/</span>
              <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                Settings
              </a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="mx-2">/</span>
              <span class="ml-1 text-sm font-medium">
                Change Password
              </span>
            </div>
          </li>
        </ol>
      </nav>
      <hr class="mb-12 border border-breadcrumb border-2">

     <div class=" mb-4">
        <div class="flex items-center justify-center text-blue">
          <div class="relative drop-shadow-lg w-full md:px-6 px-3 py-10 bg-light rounded-lg shadow-xl ">
            <form method="POST" action="{{ route('admin.update_password') }}" class="md:w-4/5 md:mx-auto">
              @csrf
              <div class="mb-6">
                  <label for="oldPassword" class="@error('oldPassword') text-redpink @enderror block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    Old Password <span class="text-base text-redpink">*</span>
                  </label>
                  <input type="password" id="oldPassword" name="oldPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @error('oldPassword')
                    <p class="mt-2 text-sm text-redpink">
                      <span class="font-medium">{{ $message }}</span>
                    </p>
                  @enderror
              </div>
              <div class="mb-6">
                  <label for="new_password" class="@error('new_password') text-redpink @enderror block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    New Password <span class="text-base text-redpink">*</span>
                  </label>
                  <input type="password" id="new_password" name="new_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @error('new_password')
                    <p class="mt-2 text-sm text-redpink">
                      <span class="font-medium">{{ $message }}</span>
                    </p>
                  @enderror
              </div>
              <div class="mb-6">
                  <label for="new_password_confirmation" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    Repeat New Password <span class="text-base text-redpink">*</span>
                  </label>
                  <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @error('new_password_confirmation')
                    <p class="mt-2 text-sm text-redpink">
                      <span class="font-medium">{{ $message }}</span>
                    </p>
                  @enderror
              </div>
              <button type="submit" class="block mx-auto text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center  mt-7">
                Update Password
              </button>
            </form>
          </div>
        </div>
     </div>
</div>
@endsection
