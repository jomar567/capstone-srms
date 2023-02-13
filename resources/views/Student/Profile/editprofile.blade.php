@extends('Student.layouts.layout')
@section('studentContent')



<div class="p-4 sm:ml-64 mt-16">
   <div class=" mb-4">
            <div class="flex items-center justify-center text-blue">
                <form method="POST" action="{{route('student.updateprofile', $students->course->id) }}"  class="md:w-4/5 md:mx-auto">
                @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="fullName" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                                Full Name
                            </label>
                            <input type="text" id="fullName" value="{{ $students->fullName }}" ame="fullName" class="border border-gray-300 text-sm rounded-lg block w-full p-2" required>
                        </div>
                        <div>
                            <label for="student_ID" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                                Student ID
                            </label>
                            <input type="text" id="student_ID" value="{{ $students->student_ID }}" name="student_ID" class="border border-gray-300 text-sm rounded-lg block w-full p-2" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                            Email address
                        </label>
                        <input type="email" id="email"  value="{{ $students->email }}" name="email" class="border border-gray-300 text-sm rounded-lg block w-full p-2" required>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="fullName" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                                Gender
                            </label>
                            <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                <option value="male" {{$students->gender == 'male' ? 'selected' : ''}} >Male</option>
                                <option value="female" {{$students->gender == 'female' ? 'selected' : ''}}>Female</option>
                                <option value="others" {{$students->gender == 'others' ? 'selected' : ''}}>Others</option>
                              </select>
                        </div>
                        <div>
                            <label for="dob" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                                Date of Birth
                            </label>
                            <input type="date" id="dob"  value="{{ $students->dob }}" name="dob" class="border border-gray-300 text-sm rounded-lg block w-full p-2" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="courseName" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                            Course
                        </label>
                        <select id="course_id" name="course_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            
                            @foreach($courses as $course)
                              <option {{ $students->courseName == $course->id ? 'selected' : ''}} value="{{$course->id}}" >{{$course->courseName}}</option>
                            @endforeach 
                          </select>
                    <button type="submit"
                            class="block mx-auto text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center  mt-7">
                            Update profile
                    </button>
                </form>
            </div>
        </div>
</div>

@endsection