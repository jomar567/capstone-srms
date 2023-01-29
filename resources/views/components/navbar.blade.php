<nav class="bg-blue px-4 py-1 absolute w-screen z-10">
    <div class="container mx-auto flex flex-wrap justify-between mx-auto">
        <a href="{{ url('/') }}" class="flex items-center">
            <span class="self-center md:hover:text-blue-700 text-xl font-semibold whitespace-nowrap text-white">LOGO</span>
        </a>
        <button data-collapse-toggle="navbar-default"  class="inline-flex items-center p-2 ml-3 text-sm text-light-500 rounded-lg md:hidden hover:bg-gray-100   ">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6"  fill="currentColor" viewBox="0 0 20 20" ><path d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"></path></svg>
        </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-5 mt-5 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm  md:border-0  ">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-redpink rounded  md:p-0 dark:text-white" >Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-redpink md:hover:text-blue-700 rounded md:p-0 dark:text-gray-400  ">About</a>
                    </li>
                    <li>
                      <a href="#" >
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="hover:text-redpink text-white">
                          Student
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-red rounded-lg shadow w-25 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('student.login'))
                                        <li class="nav-item">
                                            <a class="block px-4 py-2 text-white" href={{ route('student.login') }}>Login</a>
                                        </li>
                                    @endif

                                    @if (Route::has('student.register'))
                                        <li class="nav-item">
                                            <a class="block px-4 py-2 text-white" href="{{ route('student.register') }}">Register</a>
                                        </li>
                                    @endif
                                @endguest
                            </ul>
                        </div>
                      </a>
                    </li>
                    <li>
                        <a href={{ route('admin.login') }} class="hover:text-redpink block py-2 pl-3 pr-4 text-white md:hover:text-blue-700 rounded md:p-0 dark:text-gray-400 ">Admin</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

