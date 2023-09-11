@extends('public.partials.public-layout')
@section('content')
    <div class="mx-3 py-16 flex flex-wrap justify-center items-center">
        <div class="p-20 rounded w-4/12 bg-gray-200 shadow-lg text-lg">
            @if (session('success'))
                <div class=" w-1/2 mx-auto p-2 mb-4 font-semibold text-center text-white bg-green-800 rounded-lg">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if (session('loginError'))
                <div class=" w-1/2 mx-auto p-2 mb-4 font-semibold text-center text-white  bg-red-800 rounded-lg">
                    <p>{{ session('loginError') }}</p>
                </div>
            @endif
            <div class="flex flex-row justify-center items-center">
                <p class="font-bold text-3xl">LOGIN</p>
            </div>
            <div class="flex flex-row w-full mt-5">
                <form action="/login" method="post" class="w-full">
                    @csrf
                    <div class="grid gap-y-5 w-full">
                        <div>
                            <label for="username" class="block tracking-wide text-gray-700 text-sm font-bold mb-2">
                                Username
                            </label>
                            <input type="text" name="username" id="username" placeholder="username"
                                value="{{ old('username') }}"
                                class="px-3 py-2 rounded outline-none border  w-full text-sm @error('username') ring-1 ring-red-600 @enderror">
                            @error('username')
                                <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block tracking-wide text-gray-700 text-sm font-bold mb-2">
                                Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="password"
                                class="px-3 py-2 rounded outline-none border  w-full text-sm @error('password') ring-1 ring-red-600 @enderror">
                                @error('password')
                                <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex justify-center items-center">
                            <button type="submit"
                                class="block bg-teal-500 hover:bg-teal-700 text-white font-bold text-sm py-2 px-4 rounded">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex flex-row mt-3 justify-center">
                <p class="block">
                    don't have account ?
                    <a href="/register" class="text-teal-500 font-semibold hover:text-teal-700 hover:underline">
                        Register
                    </a>
                </p>

            </div>
        </div>
    </div>
@endsection
