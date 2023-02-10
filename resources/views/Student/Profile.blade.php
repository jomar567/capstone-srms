@extends('Student.layouts.layout')
@section('studentContent')






<div class="p-4 sm:ml-64 mt-16">
   <div class=" mb-4">
   <div class="flex justify-end">
        <button type="button">
        <span class="text-xl">
        <i class="fa-solid fa-pen-to-square"></i>
        </span>
        </button>
    </div>
    <div class="flex items-center justify-center h-64">
    <img class="rounded-full w-36 h-36" src="https://w0.peakpx.com/wallpaper/666/961/HD-wallpaper-anime-jujutsu-kaisen-satoru-gojo.jpg" alt="Extra large avatar">
    </div>
    
    <div class="flex items-center justify-center text-blue">
        <form method="POST" action="{{route('admin.addNewStudent')}}" class="md:w-4/5 md:mx-auto">
        @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="fullName" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Full Name
                    </label>
                    <input type="text" id="fullName" name="fullName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="student_ID" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Student ID
                    </label>
                    <input type="text" id="student_ID" name="student_ID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    Email address
                </label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="fullName" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Gender
                    </label>
                    <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your Gender</option>
                    <option value="MA">Male</option>
                    <option value="FE">Female</option>
                    </select>
                </div>
                <div>
                    <label for="student_ID" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Date of Birth
                    </label>
                    <input type="date" id="student_ID" name="student_ID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>
            <div class="mb-6">
                <label for="courses" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                <select id="courses" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your Course</option>
                    <option value="IT">BSIT</option>
                    <option value="CE">Computer Engineering</option>
                    <option value="CS">Computer Science</option>
                    <option value="EE">Electrical Engineeting</option>
                </select>

            </div>
    </div>
 </div>
</div>

@endsection