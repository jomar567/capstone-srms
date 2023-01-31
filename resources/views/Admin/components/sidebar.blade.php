<aside id="logo-sidebar" class="sidebar fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-blue text-white" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-blue">
     <ul class="space-y-2">
        <li>
           <a href="{{ route('admin.dashboard') }}" class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }} hover:bg-redpink  flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
              <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z"></path>
              </svg>
              <span class="ml-3">Dashboard</span>
           </a>
        </li>
        <li>
          <a href="{{ route('admin.students_list') }}" class="{{ (request()->is('admin/students_list', 'admin/create_student', 'admin/edit_student')) ? 'active' : '' }} hover:bg-redpink  flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
            </svg>
             <span class="ml-3">Students</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.course_list') }}" class="{{ (request()->is('admin/course_list', 'admin/create_course', 'admin/edit_course')) ? 'active' : '' }} hover:bg-redpink flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
              <i class="fa-solid fa-clipboard-list text-icons justify-center flex"></i>
             <span class="ml-3">Students Courses</span>
          </a>
        </li>
        <li>
          <button type="button" class="hover:bg-redpink flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="subjects" data-collapse-toggle="subjects">
            <i class="fa-solid fa-book w-6 h-6 text-icons justify-center flex"></i>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Subjects</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <ul id="subjects" class="hidden py-2 space-y-2">
            <li>
              <a href="{{ route('admin.subject_list') }}" class="{{ (request()->is('admin/subject_list', 'admin/create_subject', 'admin/edit_subject')) ? 'active' : '' }} hover:bg-redpink flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                <i class="fa-solid fa-bars-progress text-subIcons justify-center flex"></i>
                <span class="ml-3">Manage Subjects</span>
              </a>
            </li>
            <li>
              <a href="{{ route('admin.subject_combination_list') }}" class="{{ (request()->is('admin/subject_combination_list', 'admin/create_subject_combination_list', 'admin/edit_subject_combination_list')) ? 'active' : '' }} hover:bg-redpink flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                <i class="fa-solid fa-file-circle-plus text-subIcons justify-center flex"></i>
                <span class="ml-3">Subjects Combination</span>
             </a>
            </li>
          </ul>
       </li>
        <li>
           <a href="{{ route('admin.result_list') }}" class="{{ (request()->is('admin/result_list', 'admin/create_result', 'admin/edit_result')) ? 'active' : '' }} hover:bg-redpink flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <i class="fa-solid fa-list-check text-icons justify-center flex"></i>
            <span class="flex-1 ml-3 whitespace-nowrap">Results</span>
           </a>
        </li>
        <li>
           <a href="#" class="hover:bg-redpink flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"></path>
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Notices</span>
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

