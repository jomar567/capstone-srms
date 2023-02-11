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
                Email
              </a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="mx-2">/</span>
              <span class="ml-1 text-sm font-medium">
                Email Notification
              </span>
            </div>
          </li>
        </ol>
      </nav>
      <hr class="mb-12 border-breadcrumb border-2">

     <div class=" mb-4">
        <div class="flex items-center justify-center text-blue">
          <div class="relative drop-shadow-lg md:w-1/4 md:px-6 px-3 py-10 bg-light rounded-lg shadow-xl ">
            <p class="font-semibold text-xl text-center mb-10">Send Email Notification</p>

            <form method="POST" action="{{ route('admin.sendEmail') }}" class="w-full md:mx-auto">
              @csrf
              <label for="course_id" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                Course
              </label>
              <select id="course_id" name="course_id" class="bg-light border border-blue text-blue text-sm rounded-lg block w-full p-2.5">
                <option selected disabled>Select Course</option>
                @foreach($courses as $course)
                  <option value="{{$course->id}}">{{$course->courseName}} - {{$course->courseYearNumeric}}{{$course->section}}</option>
                @endforeach
              </select>
              <button type="submit" class="block mx-auto text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center  mt-7">
                Send Email
              </button>
            </form>
          </div>
        </div>
     </div>
</div>
@endsection
