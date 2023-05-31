<x-layouts.main title="Test KBM">
  <div class="mb-20">

    <div class="container px-4 mx-auto">
      <div class="p-6 mx-20 bg-white rounded shadow">
        {!! $chart->container() !!}
      </div>
    </div>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}

    <div class="container px-4 mx-auto">
      <div class="p-6 m-20 bg-white rounded shadow max-w-xl">
        {!! $chartAge->container() !!}
      </div>
    </div>
    <script src="{{ $chartAge->cdn() }}"></script>
    {{ $chartAge->script() }}

    <div class="my-4 px-6">
      <a href="{{ url('add') }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">add</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Name
            </th>
            <th scope="col" class="px-6 py-3">
              Position
            </th>
            <th scope="col" class="px-6 py-3">
              Office
            </th>
            <th scope="col" class="px-6 py-3">
              Age
            </th>
            <th scope="col" class="px-6 py-3">
              Start Date
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="">Action</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pegawai as $row)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{$row->name}}
            </th>
            <td class="px-6 py-4">
              {{$row->position}}
            </td>
            <td class="px-6 py-4">
              {{$row->office}}
            </td>
            <td class="px-6 py-4">
              {{$row->age}}
            </td>
            <td class="px-6 py-4">
              {{$row->start_date}}
            </td>
            <td class="px-6 py-4 text-right flex justify-end items-center gap-4 ">
              <form action="{{ url('/', ["id" => $row->id]) }}" method="post">
                @csrf
                @method("delete")
                <button class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
              </form>
              <a href="{{ url('/edit', ['id' => $row->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</x-layouts.main>
