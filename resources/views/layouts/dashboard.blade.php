<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Omar Blog')| {{ env('APP_NAME', 'Omar') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js']) {{-- যদি Tailwind ব্যবহার করেন --}}
</head>


<body class="bg-gray-50 font-sans">
    <div class="flex h-screen overflow-hidden">

        <!-- side navbar start -->
        @include('layouts.partials.sideNavbar')
        <!-- side navbar end -->
        <div class="flex-1 overflow-auto">
            {{-- top-header start --}}
            @include('layouts.partials.topHeader')
            {{-- top-header end --}}

            <!-- Main Contents -->
            <main class="px-4 py-6 sm:px-6 lg:px-8">
                @yield('main-content')
            </main>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const sidebar = document.getElementById('sidebar');

            mobileMenuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
            });

            // Sidebar dropdown menus
            const dropdownToggles = document.querySelectorAll('.sidebar-dropdown-toggle');

            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const dropdownMenu = this.nextElementSibling;

                    // Close all other dropdowns except this one
                    document.querySelectorAll('.sidebar-dropdown-menu').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.classList.add('hidden');
                        }
                    });

                    // Toggle this dropdown
                    dropdownMenu.classList.toggle('hidden');
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-dropdown-menu').forEach(menu => {
                    menu.classList.add('hidden');
                });
            });

            // User dropdown menu
            const userMenuButton = document.getElementById('user-menu-button');
            const userMenu = document.getElementById('user-menu');

            userMenuButton.addEventListener('click', function(e) {
                e.stopPropagation();
                userMenu.classList.toggle('hidden');
            });

            // Close user menu when clicking outside
            document.addEventListener('click', function() {
                userMenu.classList.add('hidden');
            });
        });
    </script>

</body>

</html>
