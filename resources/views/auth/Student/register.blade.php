<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- Toaster CSS --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- Toastr JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>
  @include('../components/toastr')
  <div class="relative">
    <span class="absolute h-screen w-screen bg-login bg-center bg-cover bg-no-repeat blur-sm"></span>
      <div class="content flex items-center justify-center h-screen">
        <div class="z-10 bg-blue w-5/12 p-8 rounded-3xl">
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

            {{-- Date of Birth --}}
            <div class="mb-6">
              <label for="dob" class="block mb-2 text-sm font-medium text-white dark:text-white">
                Date of Birth <span class="text-base text-redpink">*</span>
              </label>
              <input type="date" id="dob" name="dob" value="{{ old('dob') }}" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light">
              @error('dob')
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
