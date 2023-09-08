{{-- @dd($groups) --}}
@extends('partials.user-layout')
@section('content')
    <div class=" pt-5 px-48 w-screen">
        {{-- ROW 1 --}}
        <div class="flex flex-row justify-center items-center">
            <p class="text-2xl font-bold">New Oganization Form</p>
        </div>
        {{-- END ROW 1 --}}

        {{-- ROW 2 --}}
        <div class="flex flex-row mt-5 py-2 justify-center items-center bg-white rounded ">
                <form class="w-full" action="/organizations" method="post">
                    @csrf
                    {{-- CODE, NAME --}}
                    <div class="flex flex-wrap mb-3 gap-y-3">
                        <div class="w-full lg:w-1/3 px-3 mb-3 md:mb-0">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="code">
                                Code
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm @error('code') ring-2 ring-red-600 @enderror"
                                id="code" name="code" type="text" placeholder="code (4 digit)" value="{{ old('code') }}">
                                @error('code')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="w-full lg:w-2/3 px-3">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm @error('name') ring-2 ring-red-600 @enderror"
                                id="name" name="name" type="text" placeholder="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    {{-- TYPE, GROUP, CLASS --}}
                    <div class="flex flex-wrap  gap-y-3 pb-3">
                        <div class="w-full lg:w-1/3 px-3 mb-3 md:mb-0">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="group_id">
                                Group
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm @error('group_id') ring-2 ring-red-600 @enderror"
                                    id="group_id" name="group_id">
                                    <option>Select one</option>
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}" name="{{ $group->id }}">{{ $group->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('group_id')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3 px-3">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="type_id">
                                Type
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm @error('type_id') ring-2 ring-red-600 @enderror"
                                    id="type_id" name="type_id">
                                    <option aria-required="" placeholder="Select one">Select one</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" name="{{ $type->id }}">{{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3 px-3">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="class">
                                Class
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm @error('class') ring-2 ring-red-600 @enderror"
                                id="class" name="class" type="text" placeholder="class" value="{{ old('class') }}">
                                @error('class')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    {{-- ADDRESS, PHONE --}}
                    <div class="flex flex-wrap  gap-y-3">
                        <div class="w-full px-3 lg:w-2/3">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="address">
                                Address
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm @error('address') ring-2 ring-red-600 @enderror"
                                id="address" name="address" type="text" placeholder="Address" value="{{ old('address') }}">
                                @error('address')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="w-full lg:w-1/3 px-3">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                                Phone
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm @error('phone') ring-2 ring-red-600 @enderror"
                                id="phone" name="phone" type="text" placeholder="Phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    {{-- PROVINCE, REGENCY, DISTRICT, VILLAGE --}}
                    <div class="flex flex-wrap  gap-y-3 pb-3">
                        <div class="w-full lg:w-1/4 px-3 mb-3 md:mb-0">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="province_id">
                                Province
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm"
                                    id="province_id" name="province_id">
                                    <option aria-required="" placeholder="Select one">Select one</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}" name="{{ $province->id }}">{{ $province->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4 px-3 mb-3 md:mb-0">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="regency_id">
                                Regency
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm"
                                    id="regency_id" name="regency_id">
                                    <option aria-required="" placeholder="Select one">Select one</option>
                                    @foreach ($regencies as $regency)
                                        <option value="{{ $regency->id }}" name="{{ $regency->id }}">
                                            {{ $regency->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                District
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm"
                                    id="district_id" name="district_id">
                                    <option aria-required="" placeholder="Select one">Select one</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}" name="{{ $district->id }}">
                                            {{ $district->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4 px-3 mb-3 md:mb-0">
                            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                Village
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-sm"
                                    id="village_id" name="village_id">
                                    <option aria-required="" placeholder="Select one">Select one</option>
                                    @foreach ($villages as $village)
                                        <option value="{{ $village->id }}" name="{{ $village->id }}">
                                            {{ $village->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrapper justify-end py-1 px-3 ">
                        <button type="reset"
                            class="text-gray-400 hover:text-gray-500 font-bold text-sm py-2 px-4 rounded">
                            Reset
                        </button>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-sm py-2 px-4 rounded">
                            Create
                        </button>
                    </div>
                </form>
        </div>
        {{-- END ROW 2 --}}

    </div>
@endsection
