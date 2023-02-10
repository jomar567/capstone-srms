@extends('Student.layouts.layout')

@section('studentContent')
<div class="p-4 sm:ml-64 mt-16">
  <div class=" mb-4">
    <div class="flex items-center justify-center text-blue">
      <div class="relative drop-shadow-lg w-8/12 md:px-6 px-3 py-10 bg-light rounded-lg shadow-xl ">
        <p class="font-semibold text-3xl text-center mb-10">Your Result</p>
        <p class="font-semibold text-7xl text-center mt-16">{{$formatted_average}}%</p>
        <a href="{{ route('student.view_result') }}">
          <button type="submit" class="block mx-auto text-white bg-redpink hover:bg-blue focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-2.5 text-center mt-16">
            See more details
          </button>
        </a>
      </div>
    </div>
 </div>
</div>
@endsection
