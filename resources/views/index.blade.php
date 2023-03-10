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
          <p class="md:text-4xl text-3xl font-semibold before:border-l-4 before:border-redpink before:mr-4">
            Notice Board
          </p>
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

    <section class="container gap-4 mx-auto px-4 md:pb-32 pt-20 pb-28">
      <p class="md:text-4xl text-3xl font-semibold before:border-l-4 before:border-redpink before:mr-4 pb-16">
        OUR TEAM
      </p>
      <div class="grid gap-4 lg:grid-cols-3 place-items-center">
        <div class="h-full">
          <div class="relative w-64 h-64  bg-gray/20 rounded-full shadow-teamShadow flex justify-center items-center
                    before:absolute before:top-9 before:left-12 before:w-5
                    before:h-5 before:rounded-full before:bg-light
                    after:absolute after:top-16 after:left-8 after:w-3 after:h-3
                    after:rounded-full after:bg-light">
            <img src="{{URL('images/demolAlan.png')}}" alt="Alan Image" class="lg:w-44 lg:h-44 w-36 h-36 rounded-full">
          </div>
          <div class="grid place-items-center py-8">
            <p class="text-redpink font-semibold text-xl">Alan Demol</p>
            <p class="font-medium text-lg">Fullstack Developer</p>
            <span class="text-lg gap-2 grid grid-flow-col">
              <a href="https://github.com/alandemol2022">
                <i class="text-xl fa-brands fa-github"></i>
              </a>
              <a href="https://www.facebook.com/alan.demol.5">
                <i class="text-xl fa-brands fa-facebook"></i>
              </a>
              <a href="https://www.linkedin.com/in/alan-demol-92b119173/">
                <i class="text-xl fa-brands fa-linkedin"></i>
              </a>
            </span>
          </div>
        </div>
        <div class="h-full">
          <div class="relative w-64 h-64  bg-gray/20 rounded-full shadow-teamShadow flex justify-center items-center
                    before:absolute before:top-9 before:left-12 before:w-5
                    before:h-5 before:rounded-full before:bg-light
                    after:absolute after:top-16 after:left-8 after:w-3 after:h-3
                    after:rounded-full after:bg-light">
            <img src="{{URL('images/zannBuce.jpg')}}" alt="Zann Image" class="lg:w-44 lg:h-44 w-36 h-36 rounded-full">
          </div>
          <div class="grid place-items-center py-8">
            <p class="text-redpink font-semibold text-xl">Zann Buce</p>
            <p class="font-medium text-lg">Fullstack Developer</p>
            <span class="text-lg gap-2 grid grid-flow-col">
              <a href="https://github.com/ZannBuce">
                <i class="text-xl fa-brands fa-github"></i>
              </a>
              <a href="https://www.facebook.com/zann.buce?mibextid=ZbWKwL">
                <i class="text-xl fa-brands fa-facebook"></i>
              </a>
              <a href="https://www.linkedin.com/in/zann-buce/">
                <i class="text-xl fa-brands fa-linkedin"></i>
              </a>
            </span>
          </div>
        </div>
        <div class="h-full">
          <div class="relative w-64 h-64  bg-gray/20 rounded-full shadow-teamShadow flex justify-center items-center
                    before:absolute before:top-9 before:left-12 before:w-5
                    before:h-5 before:rounded-full before:bg-light
                    after:absolute after:top-16 after:left-8 after:w-3 after:h-3
                    after:rounded-full after:bg-light">
            <img src="{{URL('images/jomar.jpg')}}" alt="Jomar Image" class="lg:w-44 lg:h-44 w-36 h-36 rounded-full">
          </div>
          <div class="grid place-items-center py-8">
            <p class="text-redpink font-semibold text-xl">Jomar Clado</p>
            <p class="font-medium text-lg">Fullstack Developer</p>
            <span class="text-lg gap-2 grid grid-flow-col">
              <a href="https://github.com/jomar567">
                <i class="text-xl fa-brands fa-github"></i>
              </a>
              <a href="https://www.facebook.com/jomar.clado.79/">
                <i class="text-xl fa-brands fa-facebook"></i>
              </a>
              <a href="https://www.linkedin.com/in/jomarclado/">
                <i class="text-xl fa-brands fa-linkedin"></i>
              </a>
            </span>
          </div>
        </div>
      </div>
    </section>

@endsection
