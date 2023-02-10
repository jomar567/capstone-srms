{{-- Modal --}}
<dialog id="myModal" class=" w-11/12 md:w-5/12 p-5  bg-white rounded-md ">
  <div class="flex flex-col w-full">
    <div onclick="document.getElementById('myModal').close();" class="flex justify-end h-auto w-full cursor-pointer float-right">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x text-gray"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </div>
    <!-- Header -->
    <svg aria-hidden="true" class="mx-auto w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <div class="flex w-full justify-center items-center">
      <h3 class="mb-5 text-lg font-normal ">Are you sure you want to delete this product?</h3>
    <!--Header End-->
    </div>
    <!-- Modal Content-->
    <div class="p-6 text-center">
      <a method="POST" href="{{ route('admin.delete_subject_combination', $subjectCombinations->id) }}" class="inline">
        @csrf
        <button onclick="document.getElementById('myModal').close();" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
            Delete
        </button>
      </a>

      <button onclick="document.getElementById('myModal').close();" class="text-blue bg-light hover:bg-blue rounded-lg border text-sm font-medium px-5 py-2.5 hover:text-light focus:z-10">
        No, cancel
      </button>
    </div>
    <!-- End of Modal Content-->
  </div>
</dialog>
