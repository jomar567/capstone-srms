@extends('layouts.app')

@section('content')
    <header class="flex flex-col items-center justify-center h-screen bg-hero bg-center bg-cover bg-no-repeat">
      <div class="absolute bg-slate-200/[.20] grid place-items-center h-screen w-screen top-0 left-0"></div>
        <div class="container relative mx-auto text-center flex flex-col items-center justify-center h-screen">
          <p class="md:text-7xl text-2xl font-bold tracking-wide md:tracking-wider md:mb-3 mb-1">NOTICE</p>
          <p class="md:text-5xl text-xl font-medium md:mb-3 mb-1 tracking-normal md:tracking-wide">BOARD</p>
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
    <div class="container mx-auto px-4 py-44 ">
    <div>
        <div class="text-center text-4xl"><strong class="border-l-8 border-red-600">
            {{ $notice->title }}
        </strong>
        </div>
    </div>

    <div>
        <div class="text-justify text-xl"><strong class="mt-8">
            Date Posted:</strong><span class="ml-5"> {{ $notice->created_at }}</span>
        </div>
    </div>
    
    <hr>

    <hr>

    <div>
        <div class="text-justify mt-8">
            <p> {{ $notice->description }}</p>
        </div>
    </div>
</div>

@endsection
