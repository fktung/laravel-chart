<x-layouts.main title="Test KBM">
  <div>
    <h1 class="text-3xl font-bold text-center">
      Tambah Pegawai
    </h1>
    <div class="my-4 max-w-md mx-auto">
      <form action="{{ url('/') }}" method="post">
        @csrf
        <div class="mb-6">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
          <input value="{{ old('name') }}" name="name" type="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama">
          @error('name')
          <div class="text-sm text-red-500">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-6">
          <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
          <input value="{{ old('position') }}" name="position" type="position" id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="misal (IS, SA, JTA, SE)">
          @error('position')
          <div class="text-sm text-red-500">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-6">
          <label for="office" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Office</label>
          <input value="{{ old('office') }}" name="office" type="office" id="office" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          @error('office')
          <div class="text-sm text-red-500">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-6">
          <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
          <input value="{{ old('age') }}" name="age" type="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          @error('age')
          <div class="text-sm text-red-500">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="relative mb-6">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <input value="{{ old('start_date') }}" datepicker datepicker-format="yyyy-mm-dd" name="start_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
          @error('start_date')
          <div class="text-sm text-red-500">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-6 flex justify-end">
          <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  @push('script')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
  @endpush
</x-layouts.main>
