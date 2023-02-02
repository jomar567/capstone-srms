<aside id="logo-sidebar" class="sidebar fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-blue text-white" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-blue">
     <ul class="space-y-2">
        <li>
           <a href="{{ route('student.dashboard') }}" class="{{ (request()->is('student/dashboard')) ? 'active' : '' }} hover:bg-redpink  flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
              <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z"></path>
              </svg>
              <span class="ml-3">Dashboard</span>
           </a>
        </li>
        <li>
          <a href="{{ route('student.view_result') }}" class="{{ (request()->is('student/view_result')) ? 'active' : '' }} hover:bg-redpink  flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <i class="fa-solid fa-list-check text-icons justify-center flex"></i>
            <span class="ml-3">View Result</span>
          </a>
        </li>
        <li>
          <button type="button" class="hover:bg-redpink flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="settings" data-collapse-toggle="settings">
            <i class="fa-solid fa-gear w-6 h-6 text-icons justify-center flex"></i>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Settings</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <ul id="settings" class="hidden py-2 space-y-2">
            <li>
              <a href="#" class="hover:bg-redpink flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                <i class="fa-solid fa-key text-subIcons justify-center flex"></i>
                <span class="ml-3">Change Password</span>
              </a>
            </li>
          </ul>
       </li>
     </ul>
  </div>
</aside>

