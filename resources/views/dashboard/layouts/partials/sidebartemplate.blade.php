<div
    class="md:hidden justify-end absolute -right-5 z-30 top-5 bg-slate-100 shadow-md border  p-2  rounded-full items-center">
    <button @click="isOpen = !isOpen" class="text-gray-600 hover:text-gray-800 focus:outline-none flex items-center"
        aria-label="Toggle navigation">
        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
        </svg>
        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>


<section class="flex flex-col justify-between h-full overflow-hidden" id="content">
    <div class="flex justify-between left-1 relative">
        <a href="/">
            <img class="w-auto h-14" src="{{ asset('assets/'.env('PATH_LOGO', 'newlogo.png')) }}" alt="">
        </a>
    </div>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <a class="flex items-center px-4 py-2 {{ Request::is('dashboard') ? 'text-white bg-indigo-500 hover:bg-indigo-700' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-700' }} transition-colors duration-300 transform rounded-md"
                href="/dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span class="mx-4 font-medium">Dashboard</span>
            </a>
            @can('isAdmin')
            <a class="flex items-center px-4 py-2 mt-5 {{ Request::is('dashboard/users*') ? 'text-white bg-indigo-500 hover:bg-indigo-700' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-700' }} transition-colors duration-300 transform rounded-md "
                href="/dashboard/users">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Users</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 {{ Request::is('dashboard/roles*') ? 'text-white bg-indigo-500 hover:bg-indigo-700' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-700' }} transition-colors duration-300 transform rounded-md "
                href="/dashboard/roles">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                </svg>


                <span class="mx-4 font-medium">Roles</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 {{ Request::is('dashboard/categories*') ? 'text-white bg-indigo-500 hover:bg-indigo-700' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-700' }} transition-colors duration-300 transform rounded-md "
                href="/dashboard/categories">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                </svg>
                <span class="mx-4 font-medium">Categories</span>
            </a>
            @endcan
            <a class="flex items-center px-4 py-2 mt-5 {{ Request::is('dashboard/events*') ? 'text-white bg-indigo-500 hover:bg-indigo-700' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-700' }} transition-colors duration-300 transform rounded-md"
                href="/dashboard/events">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Events</span>
            </a>
        </nav>

        <a href="/profile" class="flex items-center  px-4 -mx-2">
            <img class="object-cover mx-2 rounded-full h-9 w-9" src="{{ Auth::user()->image  }}" alt="avatar" />
            <div class=" ">
                <div class="flex items-center gap-1">
                    <span class="font-medium text-gray-800 dark:text-gray-200 line-clamp-1">{{
                        Auth::user()->username }}</span>
                    @if (auth()->user()->isVerified)
                    @include('layouts.partials.verified')
                    @endif
                </div>
                <p
                    class="inline-block px-2 py-1 text-xs {{ auth()->user()->role->role === 'Admin' ? 'text-red-500 bg-red-100/60' : 'text-indigo-500 bg-indigo-100/60' }} rounded-full dark:bg-gray-800">
                    {{ auth()->user()->role->role }}
                </p>

            </div>
        </a>
    </div>
</section>