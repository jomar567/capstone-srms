<nav class="fixed top-0 z-50 w-full bg-light drop-shadow-lg">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">

      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a class="flex ml-2 md:mr-24">
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">
            <img src="{{URL('images/GroupB.png')}}" alt="" class="h-8 mr-3"/>
          </span>
        </a>
      </div>
      <div class="flex items-center justify-center">
        <div>
          <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
            <span class="sr-only">Open user menu</span>
            <p class="text-sm text-gray-900 dark:text-white" role="none">
              {{Auth::guard('student')->user()->fullName}}
            </p>
          </button>
        </div>
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
          <div class="px-4 py-3" role="none">
            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
            {{Auth::guard('student')->user()->email}}
            </p>
          </div>
          <ul class="py-1" role="none">
            <li>
              <a href="{{route('student.profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                Profile
              </a>
            </li>
          </ul>
        </div>
        {{-- <div class="ml-4 text-redpink">
          <a class="flex justify-center items-center" href="{{ route('student.logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <i class="fa-solid text-sm fa-arrow-right-from-bracket"></i>
            <p class="text-sm ml-2">Logout</p>
            <form id="logout-form" action="{{ route('student.logout') }}" method="POST" class="hidden">
              @csrf
            </form>
          </a>
        </div> --}}
      </div>
    </div>
  </div>
</nav>
