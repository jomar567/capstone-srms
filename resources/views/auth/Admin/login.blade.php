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
    <span class="absolute h-screen w-screen bg-loginAdmin bg-center bg-cover bg-no-repeat blur-sm"></span>
      <div class="content flex items-center justify-center h-screen">
        <div class="z-10 bg-blue w-96 p-8 rounded-3xl">
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
