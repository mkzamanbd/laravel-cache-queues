<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between">
            <span>Users</span>
            <span>About {{ count($users) }} results ({{ number_format(($queryTime),2) }} millisecond)</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <table class="w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-2 py-2 border-b-2 border-gray-200 bg-gray-100 font-semibold text-gray-600 uppercase tracking-wider">
                                SL
                            </th>
                            <th class="px-2 py-2 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-2 py-2 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Email
                            </th>
                            <th class="text-center px-2 py-2 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-2 py-2 border-b border-gray-200 bg-white text-sm">
                                    <span>{{ $loop->iteration }}.</span>
                                </td>
                                <td class="px-2 py-2 border-b border-gray-200 bg-white text-sm">
                                    <a href="#" class="flex items-center no-underline hover:underline">
                                        <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                            <img class="w-full h-full rounded-full" src="https://ui-avatars.com/api/?background=random&name={{ $user->name }}" alt="" />
                                        </div>
                                        <div class="ml-3 d-flex items-center">
                                            <span class="text-gray-900 whitespace-no-wrap m-0">
                                                {{ $user->name }}
                                            </span>
                                        </div>
                                    </a>
                                </td>
                                <td class="px-2 py-2 border-b border-gray-200 bg-white text-sm">
                                    <span class="text-gray-900 whitespace-no-wrap">
                                        {{ $user->email }}
                                    </span>
                                </td>
                                <td class="text-center px-2 py-2 border-b border-gray-200 bg-white text-sm">
                                    <span class="bg-purple-200 text-purple-600 py-1 px-2 rounded-full text-xs">Active</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
