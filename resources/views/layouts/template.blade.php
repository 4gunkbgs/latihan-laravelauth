<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles       
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-white font-sans leading-normal tracking-normal mt-12">

        <!--Nav-->
        <nav class="bg-white pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

            @livewire('navigation-menu')

        </nav>


        <div class="flex flex-col md:flex-row bg-white">

            <div class="bg-white-800 h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

                <div class="md:mt-16 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="{{ route('beranda') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-black block md:inline-block">Beranda</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-black block md:inline-block">Data Forum</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>

            <div class="main-content flex-1 bg-blue-100 mt-12 md:mt-2 pb-24 md:pb-5">

                <div class="bg-white pt-3">
                    <div class="rounded-tl-3xl bg-blue-400 p-4 shadow text-2xl text-white">
                        <h3 class="font-bold pl-2">Dashboard</h3>
                    </div>
                </div>


                <div class="flex flex-row flex-wrap flex-grow">                
                    <main>
                        {{ $slot }}
                    </main>                    
                </div>
            </div>
        </div>




        <script>
            /*Toggle dropdown list*/
            function toggleDD(myDropMenu) {
                document.getElementById(myDropMenu).classList.toggle("invisible");
            }
            /*Filter dropdown options*/
            function filterDD(myDropMenu, myDropMenuSearch) {
                var input, filter, ul, li, a, i;
                input = document.getElementById(myDropMenuSearch);
                filter = input.value.toUpperCase();
                div = document.getElementById(myDropMenu);
                a = div.getElementsByTagName("a");
                for (i = 0; i < a.length; i++) {
                    if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                    } else {
                        a[i].style.display = "none";
                    }
                }
            }
            // Close the dropdown menu if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                    var dropdowns = document.getElementsByClassName("dropdownlist");
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (!openDropdown.classList.contains('invisible')) {
                            openDropdown.classList.add('invisible');
                        }
                    }
                }
            }
        </script>

        @stack('modals')

        @livewireScripts

    </body>
</html>
