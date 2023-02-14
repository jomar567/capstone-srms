@extends('layouts.app')

@section('content')
    <header class="h-full md:min-h-lg min-h-sm bg-hero bg-center bg-cover bg-no-repeat">
      <div class="bg-slate-200/[.20] grid place-items-center w-screen top-0 left-0">
      </div>
      <div class="h-full md:min-h-lg min-h-sm container relative mx-auto text-center flex flex-col items-center justify-center">
        <p class="md:text-4xl text-xl font-medium md:mb-3 mb-1 tracking-normal md:tracking-wide">STUDENT</p>
        <p class="md:text-6xl text-2xl font-bold tracking-wide md:tracking-wider md:mb-3 mb-1">RESULT</p>
        <p class="md:text-4xl text-xl font-medium md:mb-3 mb-1 tracking-normal md:tracking-wide">MANAGEMENT</p>
        <p class="md:text-4xl text-xl font-medium md:mb-3 mb-1 tracking-normal md:tracking-widest">SYSTEM</p>
        {{-- <a href={{url('notice')}}> --}}
          <button type="button" class="text-white bg-red hover:bg-blue focus:ring-4 focus:outline-none focus:ring-blue font-semibold rounded-lg md:text-base text-xs mt-6 md:px-10 px-5 md:py-3.5 py-2 text-center dark:bg-blue dark:hover:bg-blue dark:focus:ring-blue">
            Learn More
          </button>
        {{-- </a> --}}
        <span class="absolute left-0 flex flex-col ml-4">
          <a href="#">
            <i class="fa-brands fa-facebook md:text-2xl text-l hover:text-redpink cursor-pointer mb-6"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-square-twitter md:text-2xl text-l hover:text-redpink cursor-pointer mb-6"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-github md:text-2xl text-l hover:text-redpink cursor-pointer mb-6"></i>
          </a>
        </span>
        <span class="absolute border-l-2 border-2 border-blue h-44 left-0 bottom-0 ml-6">
        </span>
      </div>
    </header>

    <div class="grid container gap-4 mx-auto px-4 md:py-32 py-28 md:grid-cols-2">
        <div class="mt-8">
          <p class="md:text-5xl text-3xl font-semibold before:border-l-4 before:border-redpink before:mr-4">Notice Board</p>
          <p class="text-xl text-justify mt-10">
            @if(count($notices) > 0)
              @foreach($notices as $notice)
              <a class="block" href="{{ route('notice', $notice->id) }}">
                {{$notice->title}}
              </a>
              @endforeach
            @else
              <p class="text-lg">No notice has been declared</p>
            @endif
          </p>
          </div>
        <img class="hidden md:block" src="{{URL('images/notice.png')}}" alt="">
    </div>

    {{-- Team Section --}}

    {{-- <section class="py-44">
      <div class="grid gap-4 lg:grid-cols-3 md:grid-cols-2 place-items-center">
        <div class="relative w-80 h-80 bg-gray/20 rounded-full shadow-teamShadow flex justify-center items-center
                    before:absolute before:top-9 before:left-20 before:w-5
                    before:h-5 before:rounded-full before:bg-light
                    after:absolute after:top-16 after:left-14 after:w-3 after:h-3
                    after:rounded-full after:bg-light">
          <img src="{{URL('images/jomar.jpg')}}" alt="Jomar Image" class="w-52 h-52 rounded-full">
        </div>
        <div class="relative w-80 h-80 bg-gray/20 rounded-full shadow-teamShadow flex justify-center items-center
                    before:absolute before:top-9 before:left-20 before:w-5
                    before:h-5 before:rounded-full before:bg-light
                    after:absolute after:top-16 after:left-14 after:w-3 after:h-3
                    after:rounded-full after:bg-light">
          <img src="{{URL('images/jomar.jpg')}}" alt="Jomar Image" class="w-52 h-52 rounded-full">
        </div>
        <div class="relative w-80 h-80 bg-gray/20 rounded-full shadow-teamShadow flex justify-center items-center
                    before:absolute before:top-9 before:left-20 before:w-5
                    before:h-5 before:rounded-full before:bg-light
                    after:absolute after:top-16 after:left-14 after:w-3 after:h-3
                    after:rounded-full after:bg-light">
          <img src="{{URL('images/jomar.jpg')}}" alt="Jomar Image" class="w-52 h-52 rounded-full">
        </div>
      </div>
    </section> --}}

@endsection
