<nav class="bg-white shadow">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Navbar Brand -->
            <a href="#" class="text-2xl font-semibold text-gray-900">
                <x-home.logos />
            </a>

            <!-- Mobile Menu Button -->
            <div class="flex md:hidden">
                <button type="button" class="text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden space-x-4 md:flex">
                <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">About</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Services</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Contact</a>
            </div>
        </div>
    </div>
</nav>
