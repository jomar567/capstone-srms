@extends('Student.layouts.layout')

@section('studentContent')
<div class="p-4 sm:ml-64 mt-16">
  <div class=" mb-4">
    <div class="flex items-center justify-center text-blue">
      <div class="relative drop-shadow-lg w-10/12 md:px-6 px-3 py-10 bg-light rounded-lg shadow-xl ">
        <div class="grid md:grid-cols-2 mb-9">
          <div class="mb-2">
            <p class="text-base font-semibold mb-2">
              Name: <span class="text-base font-normal">{{$students->fullName}}</span>
            </p>
            <p class="text-base font-semibold">
              Student ID: <span class="text-base font-normal">{{$students->student_ID}}</span>
            </p>
          </div>
          <div class="mb-10">
            <p class="text-base font-semibold mb-2">
              Course: <span class="text-base font-normal">{{$students->course->courseName}}</span>
            </p>
            <p class="text-base font-semibold">
              Year & Section: <span class="text-base font-normal">{{$students->course->courseYearNumeric}} - {{$students->course->section}}</span>
            </p>
          </div>
        </div>

        {{-- Table --}}

        <div class="relative overflow-x-auto shadow-lg">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-breadcrumb">
              <thead class="text-xs bg-breadcrumb/50">
                  <tr>
                      <th scope="col" class="text-base px-6 py-5">
                          #
                      </th>
                      <th scope="col" class="text-base px-6 py-5">
                          Subject
                      </th>
                      <th scope="col" class="text-base px-6 py-5">
                          Marks
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($results as $result)
                  <tr class="bg-light border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                      {{$result->id}}
                    </th>
                    <td class="px-6 py-4">
                      {{$result->subject->subjectName}}
                    </td>
                    <td class="px-6 py-4">
                      {{$result->grades}}
                    </td>
                </tr>
                @endforeach
                <tr class="bg-light border dark:bg-gray-800">
                  <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
                    Total Score
                  </td>
                  <td class="px-6 py-4 text-center">
                      <span class="text-base font-semibold">360</span>
                      out of
                      <span class="text-base font-semibold">{{$totalScore}}</span>
                  </td>
                </tr>
                <tr class="bg-light border dark:bg-gray-800">
                  <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
                    Percentage
                  </td>
                  <td class="px-6 py-4 text-center">
                      <p class="text-base font-semibold">90%</p>
                  </td>
                </tr>
                <tr class="bg-light border dark:bg-gray-800">
                  <td colspan="2" class="text-base font-semibold border text-center px-6 py-4">
                    Remarks
                  </td>
                  <td class="px-6 py-4 text-center">
                      <p class="text-base font-semibold">PASSED</p>
                  </td>
                </tr>
                <tr class="bg-light border dark:bg-gray-800">
                  <td colspan="3" class="text-base font-semibold border text-center px-6 py-5">
                    <a href="{{route('student.generate_pdf')}}">
                      <button type="submit" class="block mx-auto text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center">
                        Download PDF
                      </button>
                    </a>
                  </td>
                </tr>
              </tbody>
          </table>
        </div>

      </div>
    </div>
 </div>
</div>
@endsection

