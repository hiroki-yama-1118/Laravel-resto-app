<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-end m-2 p-2">
        <a href="{{route('admin.reservations.create')}}"
          class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Reservation</a>
      </div>
      <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
              <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th scope="col" class="py-3 px-6">
                        Name
                      </th>
                      <th scope="col" class="py-3 px-6">
                        Email
                      </th>
                      <th scope="col" class="py-3 px-6">
                        Date
                      </th>
                      <th scope="col" class="py-3 px-6">
                        Table
                      </th>
                      <th scope="col" class="py-3 px-6">
                        Guests
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reservations as $reservation)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$reservation->first_name}} {{$reservation->last_name  }}
                      </th>
                      <td class="py-4 px-6 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                        {{ $reservation->email}}
                      </td>
                      <td class="py-4 px-6 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                        {{ $reservation->res_date}}
                      </td>
                      <td class="py-4 px-6 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                        {{ $reservation->table_id}}
                      </td>
                      <td class="py-4 px-6 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                        {{ $reservation->guest_number}}
                      </td>
                    </tr>
                    @endforeach



                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>