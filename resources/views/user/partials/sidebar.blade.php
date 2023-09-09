<div class="flex-col w-2/12 bg-teal-900">
    <div class="flex-row w-full px-3 py-5 border-b items-center">
        <p class="text-gray-100 font-bold tracking-widest text-2xl text-center"><i class="bi bi-person-workspace"> </i>User Panel</p>
    </div>

    <div class="flex-row w-full px-3 py-3">
        <div class="mb-4">
            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'dashboard' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                <a href="/user/dashboard"><i class="bi bi-grid"> </i>Dashboard</a>
            </p>

            {{-- <div>
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded-r
                    . {{ $page == 'organization' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                        <a href="" class="w-full px-1 py-1">
                            Submenu
                        </a>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="mb-4">

            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'organizations' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                <a href="/user/organizations"><i class="bi bi-hospital"> </i>Organization</a>
            </p>


            <div>
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded-r
                    . {{ $page == 'form-organization' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                        <a href="/user/organizations/create" class="w-full px-1 py-1">
                            <i class="bi bi-file-earmark-plus"> </i>Form new Organization
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-4">
            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'groups' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                <a href="/user/groups"><i class="bi bi-boxes"> </i>Groups</a>
            </p>

            <div>
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded-r
                    . {{ $page == 'form-group' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                        <a href="/user/groups/create" class="w-full px-1 py-1">
                            <i class="bi bi-file-earmark-plus"> </i>Form new Group
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-4">
            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'types' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                <a href="/user/types"><i class="bi bi-funnel"> </i>Types</a>
            </p>
            <div>
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded-r
                    . {{ $page == 'form-type' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                        <a href="/user/types/create" class="w-full px-1 py-1">
                            <i class="bi bi-file-earmark-plus"> </i>Form new Type
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <p
                class="text-gray-100 mb-2 font-normal px-2 tracking-widest text-md hover:bg-lime-600 rounded-r
                        . {{ $page == 'class' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                <a href="/user/class"><i class="bi bi-border-width"> </i>Class</a>
            </p>

            <div>
                <ul>
                    <li
                        class="mx-5 text-gray-100  hover:bg-lime-600 rounded-r
                    . {{ $page == 'form-class' ? 'border-l-4 px-1 border-lime-400' : '' }}">
                        <a href="/user/class/create" class="w-full px-1 py-1">
                            <i class="bi bi-file-earmark-plus"> </i>Form new Class
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <a href="https://www.instagram.com/imaduddin____/" target="_blank">
        <div class="cursor-pointer flex-row w-full px-3 py-5">
            <p
                class="text-center text-gray-100 font-medium tracking-widest text-md hover:text-gray-600 hover:bg-cyan-400 rounded-lg py-5 pr-1 shadow border border-cyan-600">
                @kangimad
            </p>
        </div>
    </a>
</div>
