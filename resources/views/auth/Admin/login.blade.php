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
    <span class="absolute h-full w-screen bg-loginAdmin bg-fixed bg-center bg-cover bg-no-repeat blur-sm"></span>
      <div class="content min-h-auth flex items-center justify-center py-10">
        <div class="z-10 bg-blue w-96 p-8 rounded-3xl">
          <a href="{{ url('/') }}" class="flex justify-center p-5 items-center">
              <span class="self-center md:hover:text-blue-700 text-xl font-semibold whitespace-nowrap text-white">
                  <img src="{{URL('images/GroupW.png')}}" alt="" class="h-10 mr-3"/>
              </span>
          </a>
          <div class="text-2xl mb-5 text-center">Admin Login</div>
          <form method="POST" action="{{ route('admin.loginAdmin') }}" autocomplete="off">
            @csrf
            <div class="mb-6">
              <label for="username" class="block mb-2 text-sm font-medium @error('username') text-redpink @enderror">
                Username<span class="text-base text-redpink">*</span>
              </label>
              <input type="text" id="username" name="username" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light @error('username') bg-red-50 border-redpink @enderror">
              @error('username')
                <p class="mt-2 text-sm text-redpink">
                  <span class="font-medium">{{ $message }}</span>
                </p>
              @enderror
            </div>

            <div class="mb-6">
              <label for="password" class="block mb-2 text-sm font-medium @error('password') text-redpink @enderror">
                Password <span class="text-base text-redpink">*</span>
              </label>
              <input type="password" id="password" name="password" class="shadow-sm border text-blue text-sm rounded-lg block w-full p-2.5 dark:shadow-sm-light @error('password') bg-red-50 border-redpink @enderror" >
              @error('password')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                  <span class="font-medium">{{ $message }}</span>
                </p>
              @enderror
            </div>

            <div class="flex items-start mb-6">
              <div class="flex items-center h-5">
                <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
              </div>
              <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Remember me.
              </label>
            </div>

            <button type="submit" class="block mx-auto text-white bg-redpink focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-8 mb-6 py-2.5 text-center">
              Login
            </button>
          </form>
        </div>
      </div>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</body>
</html>
