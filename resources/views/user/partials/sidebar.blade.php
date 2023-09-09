<div class="flex-col w-2/12 bg-teal-900">
    <div class="flex-row w-full px-5 py-5">
        <p class="text-gray-100 font-bold tracking-widest text-xl"><i class="bi bi-person-workspace"> </i>User Panel</p>
    </div>

    <div class="flex-row w-full px-5 py-3">
        <div class="border border-white p-1 mb-2">
            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'dashboard' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                <a href="/user/dashboard"><i class="bi bi-grid"> </i>Dashboard</a>
            </p>

            {{-- <div class="border border-teal-300 p-1">
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded
                    . {{ $page == 'organization' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                        <a href="" class="w-full px-3 py-1">
                            Submenu
                        </a>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="border border-white p-1 mb-2">

            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'organizations' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                <a href="/user/organizations"><i class="bi bi-hospital"> </i>Organization</a>
            </p>


            <div class="border border-teal-300 p-1">
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded
                    . {{ $page == 'form-organization' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                        <a href="" class="w-full px-3 py-1">
                            <i class="bi bi-file-earmark-plus"> </i>Form new Organization
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border border-white p-1 mb-2">
            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'groups' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                <a href="/user/groups"><i class="bi bi-boxes"> </i>Groups</a>
            </p>

            <div class="border border-teal-300 p-1">
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded
                    . {{ $page == 'form-group' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                        <a href="" class="w-full px-3 py-1">
                            <i class="bi bi-file-earmark-plus"> </i>Form new Group
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border border-white p-1 mb-2">
            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'types' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                <a href="/user/types"><i class="bi bi-funnel"> </i>Types</a>
            </p>
            <div class="border border-teal-300 p-1">
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded
                    . {{ $page == 'form-type' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                        <a href="" class="w-full px-3 py-1">
                            <i class="bi bi-file-earmark-plus"> </i>Form new Type
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border border-white p-1">
            <p
                class="text-gray-100 mb-2 font-normal tracking-widest text-md hover:bg-lime-600 rounded
                . {{ $page == 'class' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                Class</p>

            <div class="border border-teal-300 p-1">
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded
                    . {{ $page == 'form-class' ? 'border-l-4 px-2 border-lime-400' : '' }}">
                        <a href="" class="w-full px-3 py-1">
                            <i class="bi bi-file-earmark-plus"> </i>Form new Class
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <a href="https://www.instagram.com/imaduddin____/" target="_blank">
        <div class="cursor-pointer flex-row w-full px-5 py-5">
            <p
                class="text-center text-gray-100 font-medium tracking-widest text-md hover:text-cyan-400 hover:bg-lime-600 rounded-lg py-5 pr-1 shadow-xl">
                @kangimad
            </p>
        </div>
    </a>
</div>
