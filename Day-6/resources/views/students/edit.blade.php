<x-layouts>
    @section('title', 'Edit Student')
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
    @endif
    <div class="relative bg-white rounded-lg shadow-sm max-w-3xl mx-auto">
        <!-- Modal header -->
        <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200"
        >
            <h3 class="text-lg font-semibold text-gray-900">Edit Student - {{$student->name}}</h3>
            
        </div>
        <!-- Modal body -->
        <form
            class="p-4 md:p-5"
            action="{{ route('students.update', $student->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PUT')
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                    <label
                        for="name"
                        
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Name</label
                    >
                    <input
                        type="text"
                        name="name"
                        id="name"
                        value = "{{$student->name}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Type student name"
                        required=""
                    />
                </div>
                <div class="col-span-2">
                    <label
                        for="email"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Email address</label
                    >
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value = "{{$student->email}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="john.doe@company.com"
                        required
                    />
                </div>
                <div class="col-span-2">
                    <label
                        for="number-input"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Score</label
                    >
                    <input
                        type="number"
                        name="score"
                        id="number-input"
                        min="0"
                        max="100"
                        value = "{{$student->score}}"
                        aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="0"
                        required
                    />
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label
                        for="gender"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Gender</label
                    >

                    <div class="flex items-center">
                        <div class="flex items-center mr-2 w-full">
                            <input
                                {{ $student->gender == 'm'? 'checked' : '' }}
                                id="default-radio-1"
                                type="radio"
                                value="m"
                                name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                            />
                            <label
                                for="default-radio-1"
                                class="ms-2 text-sm font-medium text-gray-900"
                                >Male</label
                            >
                        </div>
                        <div class="flex items-center w-full">
                            <input
                                {{ $student->gender == 'f'? 'checked' : '' }}
                                id="default-radio-2"
                                type="radio"
                                value="f"
                                name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                            />
                            <label
                                for="default-radio-2"
                                class="ms-2 text-sm font-medium text-gray-900"
                                >Female</label
                            >
                        </div>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    {{--
                    <label
                        for="category"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Category</label
                    >
                    <select
                        id="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    >
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>

                        <option value="A3">A3</option>
                    </select>
                    --}}
                </div>

                <div class="col-span-2 space-y-2">
                    <label
                        for="date-native"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Date of Birth</label
                    >
                    <input
                        type="date"
                        id="date-native"
                        name="DOB"
                        value = "{{$student->DOB}}"
                        class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                    />
                </div>
                <div class="col-span-2">
                                    <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                  </div>
            </div>
            <button
                type="submit"
                class="text-white inline-flex items-center bg-black hover:bg-black/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
                Update Student
            </button>
        </form>
    </div>
</x-layouts>