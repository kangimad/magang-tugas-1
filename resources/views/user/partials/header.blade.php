        <div class="flex w-full mt-2 py-3 mb-1">
            <div class="flex-col w-2/12 my-auto">
                <p class=" text-gray-500 font-semibold text-sm text-start"><i class="bi bi-house-fill"></i> / {{ $title }} @if (isset($subtitle))
                    / {{ $subtitle }}
                @endif</p>
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
