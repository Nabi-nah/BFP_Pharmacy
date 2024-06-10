<nav x-data="{ open: false }" class="bg-white border-b border-gray-100" style=" position:relative;width: 100%;">
    <!-- Primary Navigation Menu -->
    <div style = "background-color: #796D67;">
    <!--x-header-background-->
        <div class="px-10 mx-auto max-w-10xl sm:px-10 lg:px-10 h:10">
        
            <div class="flex justify-between h-25">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex flex-shrink-0 items-center">
                        <x-footer-logo class="block w-auto h-10 text-gray-600 " />
                        <table>
                            <tr>
                            <td>
                                <p style="color:white; padding-left: 5px; font-size: 13px; font-weight:bold;">REPUBLIC OF THE PHILIPPINES<br></p>
                            </td> 
                            </tr>
                            <tr>
                            <td>
                                <p style="color:white; padding-left: 5px; font-size: 11px;">All Content is in the public domain 
                            unless otherwise stated </p>    
                            </td>
                            </tr>
                        </table>
                        
                    </div>
                    <!-- Navigation Links -->
                    <table>
                        <tr>
                        <td>
                            <p style="color:white; padding-left: 5px; font-size: 10px; font-weight:bold;"><a href="">Nutrition Program Link</a></p>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <p style="color:white; padding-left: 5px; font-size: 10px; font-weight:bold;"><a href="">Dental Health  Link</a></p>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <p style="color:white; padding-left: 5px; font-size: 10px; font-weight:bold;"><a href="">Physical Therapy I Link</a></p>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <p style="color:white; padding-left: 5px; font-size: 10px; font-weight:bold;"><a href="">Physical Therapy II Link</a></p>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <p style="color:white; padding-left: 5px; font-size: 10px; font-weight:bold;"><a href="">Mental Health Link</a></p>
                        </td>
                        </tr>
                    </table>
                    <table style = "float:right;">
                        <td>
                            <p style="color:white; padding-left: 5px; font-size: 13px; font-weight:bold;">                      
                                Contact Us
                            </p>
                            <p style="color:white; padding-left: 5px; font-size: 12px; ">
                                Email: hemd_nhq@yahoo.com
                                <br>
                                Telefax Number: (02) 426 - 0219
                            </p>

                        </td>
                    </table>
                
                </div>

                <!-- Settings Dropdown -->
                
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

    </div>
</nav>
