@extends('Student.layouts.layout')
@section('studentContent')






<div class="p-4 sm:ml-64 mt-16">
   <div class=" mb-4">
   <div class="flex justify-end">
        <button type="button">
        <span class="text-xl">
            <a href="{{ route('student.edit_profile', $students->id) }}">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
        </span>
        </button>
    </div>
    <div class="flex items-center justify-center text-blue">
        <form method="POST" action="{{route('admin.addNewStudent')}}" class="md:w-4/5 md:mx-auto">
        @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="fullName" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Full Name
                    </label>
                    <input type="text" id="fullName" value="{{ $students->fullName }}" ame="fullName" class="bg-gray/20 border text-sm rounded-lg block w-full p-2.5" disabled>
                </div>
                <div>
                    <label for="student_ID" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Student ID
                    </label>
                    <input type="text" id="student_ID" value="{{ $students->student_ID }}" name="student_ID" class="bg-gray/20 border text-sm rounded-lg block w-full p-2.5" disabled>
                </div>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                    Email address
                </label>
                <input type="email" id="email"  value="{{ $students->email }}" name="email" class="bg-gray/20 border text-sm rounded-lg block w-full p-2.5" disabled>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="fullName" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Gender
                    </label>
                <input type="gender" id="gender"  value="{{ $students->gender }}" name="gender" class="bg-gray/20 border text-sm rounded-lg block w-full p-2.5" disabled>
                </div>
                <div>
                    <label for="dob" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                        Date of Birth
                    </label>
                <input type="dob" id="dob"  value="{{ $students->dob }}" name="email" class="bg-gray/20 border text-sm rounded-lg block w-full p-2.5" disabled>
                </div>
            </div>
            <div class="mb-6">
                <label for="courses" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                <input type="dob" id="dob"  value="{{ $students->course->courseName }}" name="email" class="bg-gray/20 border text-sm rounded-lg block w-full p-2.5" disabled>
            </div>
    </div>
 </div>
</div>

@endsection
