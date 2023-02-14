@extends('layouts.app')

@section('content')
    <header class="h-full md:min-h-lg min-h-sm bg-hero bg-center bg-cover bg-no-repeat">
      <div class="bg-slate-200/[.20] grid place-items-center w-screen top-0 left-0">
      </div>
        <div class="h-full md:min-h-lg min-h-sm container relative mx-auto text-center flex flex-col items-center justify-center">
          <p class="md:text-6xl text-2xl font-bold tracking-wide md:tracking-wider md:mb-3 mb-1">NOTICE</p>
          <p class="md:text-4xl text-xl font-medium md:mb-3 mb-1 tracking-normal md:tracking-wide">BOARD</p>
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
    <div class="container mx-auto px-4 md:py-32 py-28 grid gap-6">
      <p class="md:text-4xl text-3xl font-semibold before:border-l-4 before:border-redpink before:mr-4">
        {{ $notice->title }}
      </p>
      <div class="text-justify text-xl">
          <p class="text-lg font-semibold mr-5">
            Date Posted: <span class="text-base font-normal">{{date_format(new DateTime($notice->created_at), "F j, Y - g:i A")}}</span>
          </p>

      </div>
      <hr class="mb-12 border-breadcrumb border">
      <p class="leading-5"> {{ $notice->description }}</p>
</div>

@endsection
