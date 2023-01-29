@extends('layouts.app')

@section('content')
    <div class="hero">
        Hero
    </div>

    <div class="grid container mx-auto md:grid-cols-2">
        <div class="text-4xl mt-8"><strong class="border-l-8 border-red-600">Notice Board</strong><p class="text-xl text-justify mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p></div>
        <img src="{{URL('images/notice.png')}}" alt="">
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
