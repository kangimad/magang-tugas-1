<div class="flex flex-col items-center justify-items-center w-full fixed">
    {{-- HEADER --}}
    <div
        class="flex flex-row px-48 py-2 items-center justify-items-center w-full bg-teal-800 text-white font-bold shadow-lg">
        <a href="/">Health Services</a></li>
    </div>
    {{-- END HEADER --}}

    {{-- NAVBAR --}}
    <div
        class="flex flex-row items-center px-48 py-2 justify-items-center w-full bg-teal-700 text-gray-300 text-sm font-semibold shadow-lg">
        <ul class="text-decoration-none flex gap-x-3">
            <li><a href="/home"
                    class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Home' ? 'text-white underline' : '' }}">Home</a>
            </li>
            <li><a href="/"
                class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Organizations' ? 'text-white underline' : '' }}">Organizations</a>
            </li>
            <li><a href="/groups"
                class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Groups' ? 'text-white underline' : '' }}">Groups</a>
            </li>
            <li><a href="/types"
                class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Types' ? 'text-white underline' : '' }}">Types</a>
            </li>
        </ul>
        <ul class="ml-auto text-decoration-none flex gap-x-3">
            @auth
                <li>
                    Welcome back, {{ auth()->user()->username }} |
                    <form action="/logout" method="post" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-gray-100 cursor-pointer focus:font-semibold . {{ $title == 'Logout' ? 'text-white underline' : '' }}">
                            <i class="bi bi-box-arrow-left">
                            </i>Logout</button>
                    </form>
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
