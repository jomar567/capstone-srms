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
                Subjects
              </a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="mx-2">/</span>
              <span class="ml-1 text-sm font-medium">
                Manage Subject Combination
              </span>
            </div>
          </li>
        </ol>
      </nav>
      <hr class="mb-12 border border-breadcrumb border-2">

     <div class=" mb-4">
        <div class="flex items-center justify-center text-blue">
          <div class="relative drop-shadow-lg w-full md:p-6 p-3 bg-light rounded-lg shadow-xl ">
            <p class="font-semibold text-lg">View Subjects Combination</p>

            <a href="{{ route('admin.create_subject_combination') }}">
              <button type="button" class="float-right text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center  mt-5">
                Add New Subject Combination
              </button>
            </a>

            {{-- Data Table --}}
            <div class="relative overflow-x-auto sm:rounded-lg mt-20">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="studentSubject">
                  <thead class="text-xs text-gray-700 uppercase bg-blue/90 text-white">
                      <tr>
                          <th scope="col" class="px-6 py-3">
                              #
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Course Year and Section
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Subject
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
                    @if(count($subject_combinations) > 0)
                      @foreach($subject_combinations as $combinedSubject)
                      <tr class="bg-slate-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue/50 hover:text-white dark:hover:bg-blue/50">
                        <td class="px-6 py-4">
                            {{ $combinedSubject->id }}
                        </td>
                        <td class="px-6 py-4">
                          {{ $combinedSubject->course->courseName }} - {{ $combinedSubject->course->courseYearNumeric }}{{ $combinedSubject->course->section }}
                        </td>
                        <td class="px-6 py-4">
                          {{ $combinedSubject->subject->subjectName }} - {{ $combinedSubject->subject->subjectCode }}
                        </td>
                        <td class="px-6 py-4">
                            2022-09-04
                        </td>
                        <td class="flex px-6 py-4 gap-4">
                            <a href="{{ route('admin.edit_subject_combination', $combinedSubject->id) }}" class="font-medium text-blue-600 dark:text-blue">
                            <i class="fa-solid fa-file-pen text-lg"></i>
                            </a>


                            <button data-modal-target="delete" data-modal-toggle="delete" class="block text-redpink font-medium" type="button">
                              <i class="fa-solid fa-trash text-lg"></i>
                            </button>

                            {{-- <form method="POST" action="{{ route('admin.delete_subject_combination', $combinedSubject->id) }}">
                              @csrf
                              <button class="font-medium text-redpink">
                                  <i class="fa-solid fa-trash text-lg"></i>
                                </button>
                            </form> --}}

                        </td>
                    </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="5" class="text-center">
                          No Subject Combination
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

<div id="delete" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
  <div class="relative w-full h-full max-w-md md:h-auto">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="delete">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">Close modal</span>
          </button>
          <div class="p-6 text-center">
              <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this record?</h3>
              <form method="POST" action="{{ route('admin.delete_subject_combination', $combinedSubject->id) }}" class="inline">
                @csrf
                <button data-modal-hide="delete" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Delete
                </button>
              </form>

              <button data-modal-hide="delete" class="text-blue bg-light hover:bg-blue rounded-lg border text-sm font-medium px-5 py-2.5 hover:text-light focus:z-10">
                No, cancel
              </button>
          </div>
      </div>
  </div>
</div>
<script>
  var dataTable = new DataTable("#studentSubject");
</script>
@endsection
