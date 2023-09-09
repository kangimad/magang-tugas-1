@extends('user.partials.user-layout')
@section('user-content')
    <div class="flex-col mr-5 w-10/12">
        {{-- HEADER --}}
        <div class="flex w-full mt-2 py-3 mb-1">
            <div class="flex-col w-2/12 my-auto">
                <p class=" text-gray-500 font-semibold text-sm text-start"><i class="bi bi-house-fill"></i> / {{ $title }}</p>
            </div>
            <div class="flex-col w-8/12 my-auto">
                <p class=" text-gray-500 font-bold text-3xl text-center">{{ $title }}</p>
            </div>
            <div class="flex-col w-3/12 my-auto text-sm">
                <ul class="flex justify-end">
                    @auth
                        <li class="inline py-1">
                            <p class="inline">Welcome back,
                                {{ auth()->user()->username }} |
                            </p>
                        </li>
                        <li class="inline ml-1 px-2 py-1 rounded hover:text-white hover:bg-teal-700 hover:underline"
                            cursor-pointer>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit">
                                    <i class="bi bi-box-arrow-left"></i> Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <a href="/login"
                            class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Login' ? 'text-white underline' : '' }}">
                            <i class="bi bi-box-arrow-in-right">
                            </i> Login</a>
                    @endauth
                </ul>
            </div>
        </div>
        {{-- END HEADER --}}

        {{-- MAIN CONTENT --}}
        <div class="flex-row mt-5 w-full px-5 py-4 bg-white rounded shadow">
            <div class="mt-5 bg-white rounded">
                <div class="flex justify-between items-center pb-5 border-b-2 border-gray-300">
                    <p class="block text-xl font-medium">Filters</p>
                    @auth
                        <p class="ml-auto">
                            <a href="/organizations/create"
                                class="px-3 py-2 font-semibold text-gray-300 bg-teal-600 hover:bg-teal-700 rounded-lg shadow-lg text-lg">
                                Create New Organization
                            </a>
                        </p>
                    @endauth
                </div>

                <div class="py-5 px-4 border-b">
                    <form action="/user/organizations" method="get" class="w-full">
                        <div>
                            <input type="text" name="name" id="name" placeholder="Name"
                                value="{{ request('name') }}"
                                class="px-4 py-2 w-full text-small rounded outline-none ring-1 ring-teal-700 border-none">
                        </div>
                        <div class="mt-5 grid grid-cols-2 gap-x-5">
                            <div>
                                <select
                                    class="block appearance-none w-full  ring-1 ring-teal-700 border-none text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm"
                                    id="group_id" name="group_id">
                                    <option value="">Group</option>
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}" name="{{ $group->id }}"
                                            @selected(request()->get('group_id') == $group->id)>
                                            {{ $group->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select
                                    class="block appearance-none w-full  ring-1 ring-teal-700 border-none text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm"
                                    id="type_id" name="type_id">
                                    <option value="">Type</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" name="{{ $type->id }}"
                                            @selected(request()->get('type_id') == $type->id)>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end mt-5">
                            <button type="submit"
                                class="w-fit px-12 py-1 rounded-lg bg-teal-500 hover:rounded-r-lg hover:bg-teal-600 outline-none text-gray-300 text-lg font-medium">
                                <i class="bi bi-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-5 bg-white rounded">
                <table class="table-autoborder-spacing-2 w-full wrapper text-sm">
                    <thead class="border-b border-gray-300">
                        <tr>
                            <th class="text-md pb-2">#</th>
                            <th class="text-md pb-2">Name</th>
                            <th class="text-md pb-2">Group</th>
                            <th class="text-md pb-2">Type</th>
                            <th class="text-md pb-2">Class</th>
                            <th class="text-md pb-2">Address</th>
                            <th class="text-md pb-2">Phone</th>
                        </tr>
                    </thead>
                    <tbody class="border-b border-gray-300">
                        @php
                            $i = ($organizations->currentPage() - 1) * $organizations->perPage() + 1;
                        @endphp
                        @foreach ($organizations as $org)
                            <tr class="text-md">
                                <td class="text-center">{{ $i++ }}</td>
                                <td class="px-3 py-1">{{ $org->name }}</td>
                                <td class="px-3 py-1">{{ $org->group->name }}</td>
                                <td class="px-3 py-1">{{ $org->type->name }}</td>
                                <td class="px-3 py-1">{{ $org->class }}</td>
                                <td class="px-3 py-1">{{ $org->address }}</td>
                                <td class="px-3 py-1">{{ $org->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex flex-row mx-auto w-fit mt-5 font-mono font-semibold">
                    {{ $organizations->links() }}
                </div>
            </div>
        </div>
        {{-- END MAIN CONTENT --}}
    </div>
@endsection
