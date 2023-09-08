{{-- @dd($types); --}}
@extends('user.partials.user-layout')
@section('user-content')
    <div class="mx-3 py-5 font-serif">
        {{-- ROW 1 --}}
        <div class="flex flex-row justify-center items-center">
            <p class="text-2xl font-bold font-serif">Organizations Types</p>
        </div>
        {{-- END ROW 1 --}}

        {{-- ROW 2 --}}
        <div class="flex flex-row mt-5 justify-evenly items-center font-mono">
            <table class="table-auto border-spacing-2 w-1/4 wrapper bg-gray-200 rounded shadow-lg">
                <thead class="border-b border-gray-300">
                    <tr class="text-md">
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // $i = ($types->currentPage() - 1) * $types->perPage() + 1;
                        $i = 1;
                    @endphp
                    @foreach ($types as $type)
                        <tr class="text-md">
                            <td class="text-center">{{ $i++ }}</td>
                            <td class="px-3 py-1">{{ $type->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="flex flex-row mx-auto w-fit mt-3 font-mono font-semibold">
            {{ $types->links() }}
        </div> --}}
        {{-- END ROW 2 --}}
    </div>
@endsection
