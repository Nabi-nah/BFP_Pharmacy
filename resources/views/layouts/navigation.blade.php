<nav x-data="{ open: false }" class="bg-white border-b border-gray-100" style="position:fixed; width: 100%;">
    <!-- Primary Navigation Menu -->
    <div style = "background-color: #92141A; background-image: url('headerbg.png'); background-repeat: no-repeat; background-blend-mode: multiply; background-size:100%; width:100%; height:75">
    <!--x-header-background-->
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-6 h:10">
            
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <x-nav-link :href="route('bfp')" :active="request()->routeIs('bfp')"  style="color:white;">
                        <div class="flex items-center">
                            <!--x-application-logo class="block w-auto h-10 text-gray-600 " style ="width:50; height:50"/-->
                            <img src="bfp.png" alt="bfp" width="50" height="50" style="display: block; margin-left: auto; margin-right: auto;">
                            <p style="color:white; padding-left: 5px;">Bureau of <br>Fire Protection</p>
                        </div>
                        </x-nav-link>
                        <!-- Navigation Links -->
                        @auth
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('medicines.monthly-medicines')" :active="request()->routeIs('medicines.monthly-medicines')"  style="color:white;">
                                {{ __('Monthly Medicine') }} 
                            </x-nav-link>
                        </div>
                        @endauth
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('about')" :active="request()->routeIs('about')"  style="color:white;">
                                {{ __('About Us') }}  
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('directory')" :active="request()->routeIs('directory')"  style="color:white;">
                                {{ __('BFP Directory') }}  
                            </x-nav-link>
                        </div>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        @auth
                        <x-dropdown text-align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center text-sm font-medium text-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300" style = "color:white;">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fi-llrule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile')">
                                    {{ __('My profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                        @else
                            <a href="{{ route('logins') }}" class="text-sm text-gray-700 underline dark:text-gray-500 "  style="color:white;">Log in</a>

                                
                        @endauth
                    </div>

                    <!-- Hamburger -->
                    <div class="flex items-center -mr-2 sm:hidden">
                        <button @click="open = ! open"
                                class="inline-flex justify-center items-center p-2 text-gray-400 rounded-md transition duration-150 ease-in-out hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"/>
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
        </div>
    </div>    
    <!--/x-header-background-->

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!--div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('contacts.index')" :active="request()->routeIs('contacts.index')">
                {{ __('Contacts') }}
            </x-responsive-nav-link>
        </div-->

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
        @auth
            <div class="px-4">
                <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')">
                    {{ __('My profile') }}
                </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        @else
            <div class="space-y-1">
                <x-responsive-nav-link :href="route('login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                
            </div>
        @endauth
        </div>
    </div>
</nav>
