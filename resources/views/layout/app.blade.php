<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/favico.png">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    @stack('styles')
    <title>@yield('title')</title>
    <style>
        .custom-bg {
            background-image: url('images/bg.jpg');
            object-fit: cover;
            background-position: top;
            height: 45vh;
        }

        .events {
            display: none;
        }

        .nav-active {
            color: rgba(29, 78, 216, 1);
        }
    </style>

</head>

<body>
    <div class="max-w-screen-2xl:flex">
        <header class="mb-0 pb-0">
            <div class="hidden sm:block clear-both bg-gray-800 align-middle">
                <div class="p-6 sm:p-6 flex justify-between">
                    <p class="text-white text-sm">Barua Pepe:<a href="mailto: buhangijafdc@moe.go.tz">
                            buhangijafdc@moe.go.tz</a></p>
                    <p class="text-white text-sm"> Simu:<a href="tel:(255) 753 359 899">(255) 753 359 899 |
                            (255) 754 085 488</a></p>
                </div>
                <!-- /.container -->
            </div>
            {{-- Mid-header --}}
            <div class="custom-bg px-8 sm:px-16 pt-8 sm:pt-16 w-auto h-auto">
                <div class="flex align-middle ">
                    <div class="hidden sm:block w-auto">
                        <img src="images/emblem.png" alt="court of arm logo" class="w-32 h-32 mx-auto">
                    </div>
                    <div class="w-auto">
                        <h2 class="align-middle text-center"><span
                                class="text-3xl sm:text-5xl font-extrabold font-sans">CHUO CHA
                                MAENDELEO
                                YA WANANCHI</span><br><span
                                class="text-xl sm:text-3xl font-semibold font-sans">BUHANGIJA</span><br><span
                                class="text-md sm:text-lg font-medium">SLP 442, SHINYANGA</span></h2>
                    </div>
                    <div class="hidden sm:block w-auto">
                        <img src="images/favico.png" alt="Image 1" class="w-32 h-32 mx-auto">
                    </div>
                </div>
            </div>
            {{-- /.End Mid-header --}}

            {{-- Navigation Bar --}}
            <nav class="flex bg-gray-900 dark:border-gray-700">
                <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4">
                    <button data-collapse-toggle="navbar-dropdown" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-dropdown" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div class="hidden w-full sm:block sm:w-auto" id="navbar-dropdown">
                        <ul
                            class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium text-lg text-white">
                            <li>
                                <a href="/"
                                    class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 md:dark:bg-transparent"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="/about-us"
                                    class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About
                                    Us</a>
                            </li>
                            <li>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="text-white hover:text-blue-700 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Courses
                                    Offered
                                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar"
                                    class="hidden bg-gray-300 text-base z-10 list-none divide-y divide-gray-300 shadow my-4 mx-4 rounded-lg w-56">
                                    <ul class="py-2" aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="{{ route('courses.short') }}"
                                                class="text-sm hover:bg-blue-400 hover:rounded-lg hover:text-gray-200 text-gray-700 block px-4 py-2">Short
                                                Courses</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('courses.long') }}"
                                                class="text-sm hover:bg-blue-400 hover:rounded-lg hover:text-gray-200 text-gray-700 block px-4 py-2">Long
                                                Courses</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <button id="dropdownNavbarLink-1" data-dropdown-toggle="dropdownNavbar-1"
                                    class="text-white border-b hover:text-blue-700 border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">ICT
                                    Services
                                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar-1"
                                    class="hidden bg-gray-300 text-base z-10 list-none divide-y divide-gray-100 shadow my-4 mx-4 rounded-lg w-56">
                                    <ul class="py-2" aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#"
                                                class="text-sm hover:bg-blue-400 hover:rounded-lg hover:text-gray-200 text-gray-700 block px-4 py-2">Examination
                                                Results</a>
                                        </li>
                                        <li>
                                            <a href="{{route('formdownload')}}"
                                                class="text-sm hover:bg-blue-400 hover:rounded-lg hover:text-gray-200 text-gray-700 block px-4 py-2">Application
                                                Form</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="/staff"
                                    class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                    aria-current="page">Staff</a>
                            </li>
                            <li>
                                <a href="/news"
                                    class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">News
                                    & Events</a>
                            </li>
                            <li>
                                <a href="/contact-us"
                                    class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact
                                    Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- End Navigation Bar --}}
            <!-- /.top-header -->
        </header>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="max-w-screen-2xl">
        <div class="w-full max-w-screen-2xl mx-auto bg-gray-800 p-6 sm:p-16">
            <div class="flex flex-col sm:flex-row pb-5 sm:p-6">
                <div class="flex flex-col items-center sm:items-start pb-5 w-full sm:2/5 sm:mr-4">
                    <div class="sm:pr-4 px-5 sm:px-8 items-start pb-5">
                        <h2 class="text-xl text-white text-center sm:text-start font-normal mb-2">BUHANGIJA FDC</h2>
                        <p class="text-sm text-gray-300 font-extrathin text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sed enim quod consectetur, assumenda aut ad cumque labore vitae nemo quia,
                            quasi impedit officiis, rerum tenetur nam nulla voluptates ut iste.
                        </p>
                    </div>
                    <div class="px-5 sm:px-8">
                        <img src="images/favico.png" height="128" width="128" alt="Buhangija FDC Logo">
                    </div>
                </div>
                <div class="flex flex-col items-center sm:items-start pb-5 w-full sm:w-1/5 sm:mr-4">
                    <h2 class="text-xl text-white font-normal mb-2">Quick Links</h2>
                    <ul class="text-gray-300 text-center sm:text-left text-sm font-extralight mb-2">
                        <li class="pb-2"><a href="#" class="">Home</a></li>
                        <li class="pb-2"><a href="#" class="">About Us</a></li>
                        <li class="pb-2"><a href="#" class="">Services</a></li>
                        <li class="pb-2"><a href="#" class="">News</a></li>
                    </ul>
                </div>
                <div class="flex flex-col items-center sm:items-start pb-5 w-full sm:w-1/5 sm:mr-4">
                    <h2 class="text-xl text-white font-normal mb-2">Contact Us</h2>
                    <h2 class="text-lg text-gray-300 font-light">Simu:</h2>
                    <ul class="text-sm text-gray-300 font-extralight mb-2">
                        <li><a href="tel:+255 753 359 899" class="hover:text-sm hover:text-white">+255 753 359 899</a>
                        </li>
                        <li><a href="tel:+255 754 085 488" class="hover:text-sm hover:text-white">+255 754 085 488</a>
                        </li>
                    </ul>
                    <h2 class="text-lg text-gray-300 font-light">Barua Pepe:</h2>
                    <ul class="text-sm text-gray-300 font-extralight mb-2">
                        <li><a href="mailto:buhangijafdc@moe.go.tz"
                                class="hover:text-sm hover:text-white">buhangijafdc@moe.go.tz</a></li>
                    </ul>
                    <h2 class="text-lg text-gray-300 font-light">Sanduku la Posta:</h2>
                    <ul class="text-sm text-gray-300 font-extralight mb-2">
                        <li><a href="#sanduku" class="hover:text-sm hover:text-white" id="sanduku">S.L.P 442,
                                Shinyanga</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col items-center sm:items-start pb-5 w-full sm:w-1/5">
                    <h2 class="text-xl text-white font-normal mb-2">Other Links</h2>
                    <ul class="text-gray-300 text-sm font-extralight mb-2">
                        <li class="pb-2"><a href="#" class="">VETA</a></li>
                        <li class="pb-2"><a href="#" class="">KTO</a></li>
                        <li class="pb-2"><a href="#" class="">TEA</a></li>
                        <li class="pb-2"><a href="#" class="">SIDO</a></li>
                    </ul>
                </div>
            </div>
            <div class="float-none sm:float-left sm:px-14">
                <h2 class="text-white text-center sm:text-start">Copyright&copy;2023</h2>
            </div>

        </div>

    </footer>
    <script>
        const carousel = document.querySelector('.carousel');
        const prevButton = document.querySelector('.carousel-prev');
        const nextButton = document.querySelector('.carousel-next');
        const carouselInner = document.querySelector('.carousel-inner');
        const carouselItems = document.querySelectorAll('.carousel-item');

        let currentIndex = 0;

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % carouselItems.length;
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
        });

        // Script for news&events logic
        document.addEventListener('DOMContentLoaded', function() {
            const latestNewsLink = document.querySelector('a[href="#latest-news"]');
            const eventsLink = document.querySelector('a[href="#events"]');
            const latestNewsDivs = document.querySelectorAll('.latest-news');
            const eventsDivs = document.querySelectorAll('.events');

            latestNewsLink.addEventListener('click', function(event) {
                event.preventDefault();
                latestNewsDivs.forEach(div => div.style.display = 'block');
                eventsDivs.forEach(div => div.style.display = 'none');
            });

            eventsLink.addEventListener('click', function(event) {
                event.preventDefault();
                latestNewsDivs.forEach(div => div.style.display = 'none');
                eventsDivs.forEach(div => div.style.display = 'block');
            });
        });
    </script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const activeLink = document.querySelector('[aria-current="page"]');
            if (activeLink) {
                activeLink.classList.add('nav-active');
            }
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>



</body>

</html>
