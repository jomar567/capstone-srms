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
                Manage Students
              </span>
            </div>
          </li>
        </ol>
      </nav>
      <hr class="mb-12 border-2 border-breadcrumb">

     <div class=" mb-4">
        <div class="flex items-center justify-center text-blue">
          <div class="relative drop-shadow-lg w-full md:p-6 p-3 bg-light rounded-lg shadow-xl ">
            <p class="font-semibold text-lg">View Students</p>

            <a href="{{ route('admin.create_studentForm') }}">
              <button type="button" class="float-right text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center  mt-5">
                Add New Student
              </button>
            </a>

            {{-- Data Table --}}
            <div class="relative overflow-x-auto sm:rounded-lg mt-20">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="studentTable">
                  <thead class="text-xs text-gray-700 uppercase bg-blue/90 text-white">
                      <tr>
                          <th scope="col" class="px-6 py-3">
                              #
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Student name
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Student ID
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Course, Year & Section
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Email
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Date of Birth
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Gender
                          </th>
                          <th scope="col" class="px-6 py-3">
                            Action
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($students) > 0)
                    @foreach($students as $student)
                      <tr class="bg-slate-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue/50 hover:text-white dark:hover:bg-blue/50">
                          <td class="px-6 py-4">
                              {{ $student->id}}
                          </td>
                          <td class="px-6 py-4">
                              {{ $student->fullName}}
                          </td>
                          <td class="px-6 py-4">
                            {{ $student->student_ID}}
                          </td>
                          <td class="px-6 py-4">
                            {{ $student->course->courseName}} -
                            {{ $student->course->courseYearNumeric}}
                            {{ $student->course->section}}
                          </td>
                          <td class="px-6 py-4">
                            {{ $student->email}}
                          </td>
                          <td class="px-6 py-4">
                            {{date_format(new DateTime($student->dob), "F j, Y")}}
                          </td>
                          <td class="px-6 py-4">
                            {{ $student->gender}}
                          </td>
                          <td class="flex px-6 py-4 gap-4">
                              <a href="{{ route('admin.edit_student', $student->id) }}" class="font-medium text-blue-600 dark:text-blue">
                                <i class="fa-solid fa-user-pen text-lg"></i>
                              </a>
                              {{-- Delete icon / button --}}

                              {{-- Modal Button --}}
                            <button onclick="document.getElementById('myModal{{$student->id}}').showModal()" data-target="#myModal{{$student->id}}" class="block text-redpink font-medium">
                              <i class="fa-solid fa-trash text-lg"></i>
                            </button>


                            {{-- Modal --}}
                            <dialog id="myModal{{$student->id}}" value="{{$student->id}}" class=" w-11/12 md:w-4/12 p-8  bg-white rounded-md ">
                              <div class="flex flex-col w-full">
                                <!-- Header -->
                                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="flex w-full justify-center items-center">
                                  <h3 class="mb-5 text-lg font-normal ">Are you sure you want to delete this record?</h3>
                                <!--Header End-->
                                </div>
                                <!-- Modal Content-->
                                <div class="p-4 text-center">
                                  <form method="POST" action="{{ route('admin.delete_student', $student->id) }}" class="inline">
                                    @csrf
                                    <button onclick="document.getElementById('myModal{{$student->id}}').close();" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Delete
                                    </button>
                                  </form>

                                  <button onclick="document.getElementById('myModal{{$student->id}}').close();" class="text-blue bg-light hover:bg-blue rounded-lg border text-sm font-medium px-5 py-2.5 hover:text-light focus:z-10">
                                    Cancel
                                  </button>
                                </div>
                                <!-- End of Modal Content-->
                              </div>
                           </dialog>
                          </td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="7" class="text-center">
                          No Student Available
                        </td>
                      </tr>
                      @endif

                  </tbody>
              </table>
            </div>

          </div>
        </div>
     </div>
</div>
<script>
  var dataTable = new DataTable("#studentTable");
</script>
@endsection
