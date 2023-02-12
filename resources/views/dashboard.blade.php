<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table-auto w-full">
                <thead>
                  <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Phone</th>
                    <th class="px-4 py-2">Subject</th>
                    <th class="px-4 py-2">Message</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($messages as $message)
                    <tr>
                      <td class="border px-4 py-2">{{ $message->id }}</td>
                      <td class="border px-4 py-2">{{ $message->name }}</td>
                      <td class="border px-4 py-2">{{ $message->email }}</td>
                      <td class="border px-4 py-2">{{ $message->phone_number }}</td>
                      <td class="border px-4 py-2">{{ $message->subject }}</td>
                      <td class="border px-4 py-2">{{ $message->message }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="mt-4 flex justify-center">
                {{ $messages->links() }}
              </div>
        </div>
    </div>
</x-app-layout>
