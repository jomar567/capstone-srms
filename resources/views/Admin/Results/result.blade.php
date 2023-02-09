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
                Result
              </a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="mx-2">/</span>
              <span class="ml-1 text-sm font-medium">
                Manage Result
              </span>
            </div>
          </li>
        </ol>
      </nav>
      <hr class="mb-12 border border-breadcrumb border-2">

     <div class=" mb-4">
        <div class="flex items-center justify-center text-blue">
          <div class="relative drop-shadow-lg w-full md:p-6 p-3 bg-light rounded-lg shadow-xl ">
            <p class="font-semibold text-lg">View Students Result</p>

            <a href="{{ route('admin.create_result') }}">
              <button type="button" class="float-right text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center  mt-5">
                Add New Result
              </button>
            </a>

            {{-- Data Table --}}
            <div class="relative overflow-x-auto sm:rounded-lg mt-20">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="studentResult">
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
                              Course
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Creation Date
                          </th>
                          <th scope="col" class="px-6 py-3">
                            Action
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($results) > 0)
                      @foreach($results as $result)
                        <tr class="bg-slate-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue/50 hover:text-white dark:hover:bg-blue/50">
                          <td class="px-6 py-4">
                              {{$result->id}}
                          </td>
                          <td class="px-6 py-4">
                              {{$result->student->fullName}}
                          </td>
                          <td class="px-6 py-4">
                            {{$result->student->student_ID}}
                          </td>
                          <td class="px-6 py-4">
                            {{$result->course->courseName}} - {{$result->course->courseYearNumeric}}{{$result->course->section}}
                          </td>
                          <td class="px-6 py-4">
                            {{date_format(new DateTime($result->created_at), "F j, Y")}}
                          </td>
                          <td class="flex px-6 py-4 gap-4">
                              <a href="{{ route('admin.edit_result', $result->id) }}" class="font-medium text-blue-600 dark:text-blue">
                              <i class="fa-solid fa-file-pen text-lg"></i>
                              </a>
                              <a href="#" class="font-medium text-redpink">
                                <i class="fa-solid fa-trash text-lg"></i>
                              </a>
                          </td>
                        </tr>
                      @endforeach
                    @else
                    <tr>
                      <td colspan="5" class="text-center">
                        No Result Found
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
  var dataTable = new DataTable("#studentResult");
</script>
@endsection
