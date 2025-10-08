
<x-layouts>
  @section('title','Students')

  @if ($errors->any())
    <div id="alert-1" class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 flex items-center" role="alert">
       <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
       </ul>
       <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " 
       data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
  @elseif (session('success'))
    <div id="alert-2" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 " role="alert">
      <div class="ms-3 text-sm font-medium">
        {{ session('success') }}
      </div>
      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-2" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
      </button>
    </div>
  @endif
  <div class="flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
      <div class="flex items-center justify-between gap-8 mb-8">
        <div>
          <h5
            class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-gray-900">
            Students list
          </h5>
          <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
            See information about all students
          </p>
        </div>
        <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
          <!-- Modal toggle -->
          <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="flex items-center space-x-2 text-white bg-black hover:bg-black/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
              </svg>

              <span>Add student</span>
          </button>

          <!-- add student modal -->
          <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-md max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow-sm">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                          <h3 class="text-lg font-semibold text-gray-900">
                              Create New Student
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                      </div>
                      <!-- Modal body -->
                      <form class="p-4 md:p-5" action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                          <div class="grid gap-4 mb-4 grid-cols-2">
                              <div class="col-span-2">
                                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                  <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type student name" required="">
                              </div>
                              <div class="col-span-2">
                                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email address</label>
                                  <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="john.doe@company.com"/>
                              </div> 
                              <div class=" col-span-2">
                                  <label for="number-input" class="block mb-2 text-sm font-medium text-gray-900 ">Score</label>
                                  <input type="number" name="score" id="number-input" min="0"  aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="0"  />
                              </div>
                              <div class="col-span-2 sm:col-span-1">
                                  <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                                
                                <div class=" flex items-center">
                                  <div class="flex items-center mr-2 w-full">
                                      <input checked id="default-radio-1" type="radio" value="m" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                                      <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 ">Male</label>
                                  </div>
                                  <div class="flex items-center w-full">
                                      <input  id="default-radio-2" type="radio" value="f" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                                      <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 ">Female</label>
                                  </div>
                                </div>

                              </div>
                              <div class="col-span-2 sm:col-span-1">
                                  {{-- <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                                  <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>

                                      <option value="A3">A3</option>
                                  </select> --}}
                              </div>
                              
                                  <div class="col-span-2">
                                      <label for="date-native" class="block mb-2 text-sm font-medium text-gray-900">Date of Birth</label>
                                      <input type="date" id="date-native" name="DOB"
                                            class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200">
                                  </div>
                                  <div class="col-span-2">
                                    <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                  </div>
                              
                          </div>
                          <button type="submit" class="text-white inline-flex items-center bg-black hover:bg-black/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                              <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                              Add new Student
                          </button>
                      </form>
                  </div>
              </div>
          </div>
          {{-- end --}}
          
        </div>
      </div>
      <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
        <div class="w-full ml-auto max-w-72">
          <div class="relative h-10 w-full min-w-[200px]">
            <div class="absolute grid w-5 h-5 top-2/4 right-3 -translate-y-2/4 place-items-center text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
              </svg>
            </div>
            <input
              class="peer h-full w-full rounded-[7px] border border-gray-200 border-t-transparent bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-gray-200 placeholder-shown:border-t-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-gray-50"
              placeholder=" " />
            <label
              class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-gray-500">
              Search
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="p-6 px-0 overflow-x-auto">
      <table class="w-full mt-4 text-left table-auto min-w-max">
        <thead>
          <tr>
            <th class="p-4 border-y border-gray-100 bg-gray-50/50">
              <p class="block font-sans text-sm antialiased font-normal leading-none text-gray-900 opacity-70">
                Students
              </p>
            </th>
            <th class="p-4 border-y border-gray-100 bg-gray-50/50">
              <p class="block font-sans text-sm antialiased font-normal leading-none text-gray-900 opacity-70">
                Date of Birth
              </p>
            </th>
            <th class="p-4 border-y border-gray-100 bg-gray-50/50">
              <p class="block font-sans text-sm antialiased font-normal leading-none text-gray-900 opacity-70">
                  Gender
              </p>
            </th>
            <th class="p-4 border-y border-gray-100 bg-gray-50/50">
              <p class="block font-sans text-sm antialiased font-normal leading-none text-gray-900 opacity-70">
                Score
              </p>
            </th>
            <th class="p-4 border-y border-gray-100 bg-gray-50/50">
              <p class="block font-sans text-sm antialiased font-normal leading-none text-gray-900 opacity-70">
                  Action
              </p>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $stu)
              <tr>
              <td class="p-4 border-b border-gray-50">
                  <div class="flex items-center gap-3">
                      @if ($stu->image)
                          <div class="w-10 h-10 overflow-hidden rounded-full ">
                            <img class="object-cover w-full h-full object-top rounded-full" src="{{ asset('storage/'.$stu->image) }}" alt="student image" />
                          </div>
                          
                      @else
                          <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-200 rounded-full ">
                              <span class="font-medium text-gray-600 ">
                                  {{ strtoupper(substr($stu->name, 0, 1)) }}
                              </span>
                          </div>
                      @endif

                  <div class="flex flex-col">
                      <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-900">
                          {{$stu->name}}
                      </p>
                      <p
                      class="block font-sans text-sm antialiased font-normal leading-normal text-gray-900 opacity-70">
                          {{$stu->email}}
                      </p>
                  </div>
                  </div>
              </td>
              <td class="p-4 border-b border-gray-50">
                  
                  <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-900">
                      {{$stu->DOB}}
                  </p>
                  
                  
              </td>
              <td class="p-4 border-b border-gray-50 uppercase">
                {{$stu->gender}}
              </td>
              <td>
                  <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-900">
                      {{$stu->score}}
                  </p>
                  
              </td>
              <td class="p-4 border-b border-gray-50 flex">
                  <div  class="w-full">
                    <a href ="{{route('students.edit',$stu->id)}}"
                      data-tooltip-target="tooltip-{{$stu->id}}" data-tooltip-style="light"
                      data-tooltip-placement="top"
                      type="button">
                      
                      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"  fill="blue"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                      
                    </a>
                    <div id="tooltip-{{$stu->id}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 tooltip">
                        edit
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                  </div>
                  <div class=" w-full">
                    <form action="{{ route('students.destroy', $stu->id) }}" method="post"
                      onsubmit="return confirm('Are you sure you want to delete this student ?')"
                      >
                      @csrf
                      @method('DELETE')
                      <button type="submit" class=" cursor-pointer"
                        data-tooltip-target="tooltip-delete-{{$stu->id}}" data-tooltip-style="light"
                        data-tooltip-placement="top"
                      >
                          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"  fill="red"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                      </button>
                      <div id="tooltip-delete-{{$stu->id}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 tooltip">
                        delete
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    </form>
                  </div>
              </td>
              </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
    {{-- pagination  --}}
    <div class="m-6">
      {{ $students->links('vendor.pagination.tailwind') }}
    </div>
  </div>


</x-layouts>