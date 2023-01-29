@extends('Admin.layouts.layout')

@section('adminContent')
<div class="p-4 sm:ml-64 mt-16">
     <div class="grid grid-cols-2 2xl:grid-cols-4 gap-4 mb-4">
        <div class="flex items-center justify-center">
          <div class="relative shadow-lg w-full p-6 bg-student/80 text-white rounded-lg shadow ">
            <svg class="lg:absolute lg:-left-2 lg:-bottom-2 md:block hidden mx-auto md:mb-0 mb-4 w-20 h-20 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
            </svg>
            <p class="mb-4 font-medium text-4xl text-right">7</p>
            <p class="font-normal text-right leading-5">Registered Student</p>
          </div>
        </div>
        <div class="flex items-center justify-center">
          <div class="relative shadow-lg w-full p-6 bg-subject/80 text-white rounded-lg shadow ">
            <svg class="lg:absolute lg:-left-2 lg:-bottom-2 md:block hidden mx-auto md:mb-0 mb-4 w-20 h-20 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9"></path>
            </svg>
            <p class="mb-4 font-medium text-4xl text-right">7</p>
            <p class="font-normal text-right leading-5">Subjects Listed</p>
          </div>
        </div>
        <div class="flex items-center justify-center">
          <div class="relative shadow-lg w-full p-6 bg-class/80 text-white rounded-lg shadow ">
            <svg class="lg:absolute lg:-left-2 lg:-bottom-2 md:block hidden mx-auto md:mb-0 mb-4 w-20 h-20 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
            </svg>
            <p class="mb-4 font-medium text-4xl text-right">7</p>
            <p class="font-normal text-right leading-5">Classes Listed</p>
          </div>
        </div>
        <div class="flex items-center justify-center">
          <div class="relative shadow-lg w-full p-6 bg-result/80 text-white rounded-lg shadow ">
            <svg class="lg:absolute lg:-left-2 lg:-bottom-2 md:block hidden mx-auto md:mb-0 mb-4 w-20 h-20 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" fill="currentColor" stroke="currentColor" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75"></path>
            </svg>
            <p class="mb-4 font-medium text-4xl text-right">7</p>
            <p class="font-normal text-right leading-5">Results Declared</p>
          </div>
        </div>
     </div>
     <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
     </div>
     <div class="grid grid-cols-2 gap-4">
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
           <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
           <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
           <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
           <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
     </div>
</div>
@endsection
