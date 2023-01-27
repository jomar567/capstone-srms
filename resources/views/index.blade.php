@extends('layouts.app')

@section('content')
    <div class="hero">
        Hero
    </div>

    <div class="grid container mx-auto md:grid-cols-2">
        <div class="text-4xl mt-8"><strong class="border-l-8 border-red-600">Notice Board</strong><p class="text-xl text-justify mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p></div>
        <img src="{{URL('images/notice.png')}}" alt="">
    </div>
@endsection
