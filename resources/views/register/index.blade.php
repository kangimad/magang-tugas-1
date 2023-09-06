@extends('layouts')
@section('content')
    <div class="mx-4 pt-5 flex flex-wrap justify-center font-serif border">
        <div class="p-5 rounded w-4/12 bg-gray-200 shadow-lg">
            <div class="flex flex-row justify-center items-center">
                <p class="font-bold">REGISTER</p>
            </div>
            <div class="flex flex-row w-full mt-5">
                <form action="/register" method="post" class="w-full">
                    @csrf
                    <div class="grid gap-y-3 w-full">
                        <div>
                            <label for="name" class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Name
                            </label>
                            <input type="name" name="name" id="name" placeholder="name" value="{{ old('name') }}"
                                class="px-3 py-2 rounded outline-none border  w-full @error('name') ring-2 ring-red-600 @enderror">
                                @error('name')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                        </div>
                        <div>
                            <label for="username" class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Username
                            </label>
                            <input type="username" name="username" id="username" placeholder="username" value="{{ old('username') }}"
                                class="px-3 py-2 rounded outline-none border  w-full @error('username') ring-2 ring-red-600 @enderror">
                                @error('username')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                        </div>
                        <div>
                            <label for="email" class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Email
                            </label>
                            <input type="email" name="email" id="email" placeholder="email" value="{{ old('email') }}"
                                class="px-3 py-2 rounded outline-none border  w-full @error('email') ring-2 ring-red-600 @enderror">
                                @error('email')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                        </div>
                        <div>
                            <label for="password" class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="password"
                                class="px-3 py-2 rounded outline-none border  w-full @error('password') ring-2 ring-red-600 @enderror">
                                @error('password')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="flex justify-center items-center">
                            <button type="submit"
                                class="block bg-teal-500 hover:bg-teal-700 text-white font-bold text-sm py-2 px-4 rounded">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex flex-row mt-3 justify-center">
                <p class="block">
                    have account ?
                    <a href="/login" class="text-teal-500 font-semibold hover:text-teal-700 hover:underline">
                        Login
                    </a>
                </p>

            </div>
        </div>
    </div>
@endsection
