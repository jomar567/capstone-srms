<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
  <div class="relative">
    <span class="absolute h-screen w-screen bg-login bg-center bg-cover bg-no-repeat blur-sm"></span>
      <div class="content flex items-center justify-center h-screen">
        <div class="z-10 bg-blue w-5/12 p-8 rounded-3xl">

          {{-- SUCCESS MESSAGE --}}
          @if(Session::has('success'))
          <div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">{{Session::get('success')}}
            </div>
          </div>
          @endif

          {{-- ERROR MESSAGE --}}
          @if(Session::has('error'))
          <div class="flex p-4 mb-4 text-sm text-redpink border border-redpink rounded-lg" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium text-redpink">{{Session::get('error')}}
            </div>
          </div>
          @endif
          <div class="text-2xl mb-5 text-center">Student Register</div>
          <form method="POST" action="{{ route('student.registerStudent') }}" autocomplete="off">
            @csrf

            <div class="grid md:grid-cols-2 md:gap-6">
              {{-- StudentID --}}
              <div class="mb-6">
                <label for="student_ID" class="block mb-2 text-sm font-medium text-white dark:text-white">
                  Student ID <span class="text-base text-redpink">*</span>
                </label>
                <input type="text" id="student_ID" name="student_ID" value="{{ old('student_ID') }}" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light">
                @error('student_ID')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                @enderror
              </div>

              {{-- Full Name --}}
              <div class="mb-6">
                <label for="fullName" class="block mb-2 text-sm font-medium text-white dark:text-white">
                  Full Name <span class="text-base text-redpink">*</span>
                </label>
                <input type="text" id="fullName" name="fullName" value="{{ old('fullName') }}" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light">
                @error('fullName')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">{{ $message }}</span>
                  </p>
                @enderror
              </div>
            </div>




            {{-- Email --}}
            <div class="mb-6">
              <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">
                Email <span class="text-base text-redpink">*</span>
              </label>
              <input type="text" id="email" name="email" value="{{ old('email') }}" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light">
              @error('email')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                  <span class="font-medium">{{ $message }}</span>
                </p>
              @enderror
            </div>

            {{-- Gender --}}
            <div class="mb-6">
              <label for="gender" class="block mb-2 text-sm font-medium text-white dark:text-white">
                Gender <span class="text-base text-redpink">*</span>
              </label>
              <input type="text" id="gender" name="gender" value="{{ old('gender') }}" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light">
              @error('gender')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                  <span class="font-medium">{{ $message }}</span>
                </p>
              @enderror
            </div>

            {{-- Password --}}
            <div class="mb-6">
              <label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white">
                Password <span class="text-base text-redpink">*</span>
              </label>
              <input type="password" id="password" name="password" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light" >
              @error('password')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                  <span class="font-medium">{{ $message }}</span>
                </p>
              @enderror
            </div>

            {{-- Password Confirmation --}}
            <div class="mb-6">
              <label for="password_confirmation" class="block mb-2 text-sm font-medium text-white dark:text-white">
                Confirm Password <span class="text-base text-redpink">*</span>
              </label>
              <input type="password" id="password_confirmation" name="password_confirmation" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light" >
              @error('password_confirmation')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                  <span class="font-medium">{{ $message }}</span>
                </p>
              @enderror
            </div>

            <button type="submit" class="block mx-auto text-white bg-redpink focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-8 mb-6 py-2.5 text-center">
              Register
            </button>
            <p class="text-sm text-center">Already have an account?  <a href={{route('student.login')}} class="text-redpink">Login</a></p>
          </form>
        </div>
      </div>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</body>
</html>
