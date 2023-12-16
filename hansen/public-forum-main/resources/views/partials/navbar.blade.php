<nav class="relative container mx-auto p-6">
    <div class="flex items-center justify-between">
        <div class="pt-2">
            <h1 class="text-2xl font-bold text-[#3A3dba]">Public Forum</h1>
        </div>

        <div class="hidden md:flex space-x-6">
            <a href="" class="text-[#3a3dba] text-xl font-semibold">Home</a>
            <a href="" class="text-[#3a3dba] text-xl font-semibold">Forum</a>
            <a href="" class="text-[#3a3dba] text-xl font-semibold">About Us</a>

            <div class="relative">
                <button class=" text-gray-700 font-semibold pt-1 rounded inline-flex items-center ml-4"
                    onclick="toggleDropdown()">
                    <span class="mr-1">
                        <i class="fa-solid fa-user"></i>
                    </span>
                </button>
                <ul id="dropdownMenu" class="hidden absolute bg-white w-40 text-gray-700 pt-1 rounded shadow-lg">
                    <li><a class="rounded-t hover:bg-gray-200 py-2 px-4 block " href="#">Edit
                            Profile</a></li>
                    <li><a class="hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="#">Register</a></li>

                    @auth
                        <li><a class="hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="#">Dashboard</a>
                        </li>
                    @endauth
                    <li><a class="rounded-b hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                            href="#">Settings
                        </a></li>

                    @auth
                        <li><a href=""
                                class="rounded-b hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap">Logout</a></li>
                    @endauth
                </ul>
            </div>


        </div>



    </div>
</nav>
