<div class="flex flex-col items-center justify-items-center fixed mr-48">
    {{-- HEADER --}}
    <div
        class="flex flex-row items-center justify-items-center bg-teal-800 text-white font-bold shadow-lg">
        <a href="/">Health Services</a></li>
    </div>
    {{-- END HEADER --}}

    {{-- NAVBAR --}}
    <div
        class="flex flex-row items-center justify-items-center bg-teal-700 text-gray-300 text-sm font-semibold shadow-lg">
        <ul class="text-decoration-none flex gap-x-3">
                @auth
                <li><a href="/user/home"
                        class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Home' ? 'text-white underline' : '' }}">Home</a>
                </li>
                <li><a href="/user/organizations"
                        class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Organizations' ? 'text-white underline' : '' }}">Organizations</a>
                </li>
                <li><a href="/user/groups"
                        class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Groups' ? 'text-white underline' : '' }}">Groups</a>
                </li>
                <li><a href="/user/types"
                        class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Types' ? 'text-white underline' : '' }}">Types</a>
                </li>
                @endauth
            </ul>
        <ul class="ml-auto text-decoration-none flex gap-x-3">
            @auth
                <li class="flex items-center">
                    <p class="inline">Welcome back,</p>
                    <div>
                        <button class="relative flex items-center ml-2 group" id="dropdown1" onclick="dropdown()">
                            {{ auth()->user()->username }} |
                            <span class="inline ml-1 hover:bg-teal-800 rounded">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <div id="dropdown-menu"
                            class="absolute hidden group-focus:block top-full mt-1 rounded shadow-lg bg-teal-600">
                            <ul>
                                <li class="px-3 py-1 text-xs text-left border-b hover:rounded-t hover:bg-teal-700"><a
                                        href="/user/dashboard">Dashboard</a></li>
                                <li class="px-3 py-1 text-xs text-left hover:rounded-b hover:bg-teal-700">
                                    <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Logout' ? 'text-white underline' : '' }}">
                                                <i class="bi bi-box-arrow-left">
                                                </i>Logout</button>
                                        </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            @else
                <li>
                    <a href="/login"
                        class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Login' ? 'text-white underline' : '' }}">
                        <i class="bi bi-box-arrow-in-right">
                        </i> Login</a>
                </li>
            @endauth
        </ul>
    </div>
    {{-- END NAVBAR --}}
</div>
