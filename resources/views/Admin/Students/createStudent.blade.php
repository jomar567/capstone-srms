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
                Students
              </a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="mx-2">/</span>
              <span class="ml-1 text-sm font-medium">
                Add Student
              </span>
            </div>
          </li>
        </ol>
      </nav>
      <hr class="mb-12 border border-breadcrumb border-2">

     <div class=" mb-4">
        <div class="flex items-center justify-center text-blue">
          <div class="relative drop-shadow-lg w-full md:px-6 px-3 py-10 bg-light rounded-lg shadow-xl ">
            <p class="font-semibold text-xl text-center mb-10">Add New Student</p>

            <form method="POST" action="{{route('admin.addNewStudent')}}" class="md:w-4/5 md:mx-auto">
              @csrf
              <div class="grid gap-6 mb-6 md:grid-cols-2">
                  <div>
                      <label for="fullName" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Full Name
                      </label>
                      <input value="{{old('fullName')}}" type="text" id="fullName" name="fullName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                      @error('fullName')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                      @enderror
                  </div>
                  <div>
                      <label for="student_ID" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Student ID
                      </label>
                      <input value="{{old('student_ID')}}" type="text" id="student_ID" name="student_ID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                      @error('student_ID')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                      @enderror
                  </div>
              </div>
              <div class="mb-6">
                  <label for="email" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    Email address
                  </label>
                  <input value="{{old('email')}}" type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @error('email')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                  @enderror
              </div>
              <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                  <label for="gender" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    Gender
                  </label>
                  <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                  </select>
                  @error('gender')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                  @enderror
                </div>
                <div>
                    <label for="dob" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                      Date of Birth
                    </label>
                    <input value="{{old('dob')}}" type="date" id="dob" name="dob" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    @error('dob')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                @enderror
                </div>
              </div>
              <div class="mb-6">
              <label for="course_id" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                Course
              </label>
              <select id="course_id" name="course_id" class="bg-dark-50 border text-blue border-blue-300 text-sm rounded-lg  block w-full p-2.5">
                <option selected disabled>Select Course</option>
                @foreach($courses as $course)
                  <option value="{{$course->id}}">{{$course->courseName}}{{$course->courseYearNumeric}} - {{$course->section}}</option>
                @endforeach
              </select>
              @error('course_id')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                  @enderror
                
              </div>
              <div class="mb-6">
                  <input type="password" id="password" value="Test123" name="password" class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              </div>
              <button type="submit" class="block mx-auto text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center  mt-7">
                Add Student
              </button>
            </form>
          </div>
        </div>
     </div>
</div>
@endsection
