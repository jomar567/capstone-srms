@extends('layouts.app')

@section('content')
    <header class="flex flex-col items-center justify-center h-screen bg-hero bg-center bg-cover bg-no-repeat">
      <div class="absolute bg-slate-200/[.20] grid place-items-center h-screen w-screen top-0 left-0"></div>
        <div class="container relative mx-auto text-center flex flex-col items-center justify-center h-screen">
          <p class="md:text-5xl text-xl font-medium md:mb-3 mb-1 tracking-normal md:tracking-wide">STUDENT</p>
          <p class="md:text-7xl text-2xl font-bold tracking-wide md:tracking-wider md:mb-3 mb-1">RESULT</p>
          <p class="md:text-5xl text-xl font-medium md:mb-3 mb-1 tracking-normal md:tracking-wide">MANAGEMENT</p>
          <p class="md:text-5xl text-xl font-medium md:mb-3 mb-1 tracking-normal md:tracking-widest">SYSTEM</p>
          {{-- <a href={{url('notice')}}> --}}
            <button type="button" class="text-white bg-red hover:bg-blue focus:ring-4 focus:outline-none focus:ring-blue font-semibold rounded-lg md:text-base text-sm mt-6 md:px-10 px-5 md:py-3.5 py-2 text-center dark:bg-blue dark:hover:bg-blue dark:focus:ring-blue">
              Learn More
            </button>
          {{-- </a> --}}
          <span class="absolute left-0 flex flex-col ml-4">
            <a href="#">
              <i class="fa-brands fa-facebook md:text-2xl text-l hover:text-redpink cursor-pointer mb-8"></i>
            </a>
            <a href="#">
              <i class="fa-brands fa-square-twitter md:text-2xl text-l hover:text-redpink cursor-pointer mb-8"></i>
            </a>
            <a href="#">
              <i class="fa-brands fa-github md:text-2xl text-l hover:text-redpink cursor-pointer mb-8"></i>
            </a>
          </span>
          <span class="absolute border-l-2 border-2 border-blue h-44 left-0 bottom-0 ml-6">
          </span>
        </div>
    </header>

    <div class="grid container gap-4 mx-auto px-4 py-44 md:grid-cols-2">
        <div class="mt-8">
          <p class="text-5xl font-semibold before:border-l-8 before:border-redpink before:mr-4">Notice Board</p>
          <p class="text-xl text-justify mt-10">
            <a href={{url('notice')}}>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            </a>
          </p>
          </div>
        <img class="hidden md:block" src="{{URL('images/notice.png')}}" alt="">
    </div>

<div class="container mx-auto">
    <div>
        <div class="text-center text-4xl"><strong class="border-l-8 border-red-600">
            BSIT 3-C Result
        </strong>
        </div>
    </div>

    <div>
        <div class="text-justify text-xl"><strong class="mt-8">
            Date Posted:</strong><span class="ml-5">2023-09-29 10:00 AM</span>
        </div>
    </div>
    
    <hr>

    <hr>

    <div>
        <div class="text-justify mt-8">
            <p>Results for BSIT 3 Section C are posted. Check your email or login to your account to view your respective result.</p>
        </div>
    </div>
</div>

@endsection
