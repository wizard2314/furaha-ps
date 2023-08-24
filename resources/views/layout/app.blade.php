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
            <div class="hidden md:block clear-both bg-gray-800 align-middle">
                <div class="p-6 md:p-6 flex justify-between">
                    <p class="text-white text-sm">Email: <a href="mailto:info@Furahaenglishmedium.sc.tz">
                            info@Furahaenglishmedium.sc.tz</a></p>
                    <p class="text-white text-sm"> Phone: <a href="tel:+255788697572">+255 788 697 572 |
                        </a><a href="tel:+255754928324">+255 754 928 324 | </a><a href="tel:+255756393882">+255 756 393
                            882</a></p>
                </div>
                <!-- /.container -->
            </div>
            {{-- Mid-header --}}
            {{-- <div class="custom-bg px-8 md:px-16 pt-8 md:pt-16 w-auto h-auto">
                <div class="flex align-middle ">
                    
                </div>
            </div> --}}
            {{-- /.End Mid-header --}}

            {{-- Navigation Bar --}}
            <nav class="flex bg-gray-900 dark:border-gray-700 sticky top-0">
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
                    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
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
                                <a href="/admission"
                                    class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Admission</a>
                            </li>
                            {{-- <li>
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
                            </li> --}}
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
                                            <a href="{{ route('formdownload') }}"
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
        <div class="w-full max-w-screen-2xl mx-auto bg-gray-800 p-6 md:p-16">
            <div class="flex flex-col md:flex-row pb-5 md:p-6">
                <div class="flex flex-col items-center md:items-start pb-5 w-full md:w-1/2 md:mr-4">
                    <div class="md:pr-4 px-5 md:px-8 items-start pb-5">
                        <h2 class="text-xl text-white text-center md:text-start font-normal mb-2">Furaha Primary School
                        </h2>
                        <p class="text-sm text-gray-300 font-extrathin text-justify">
                            The founders and directors of Furaha English Medium Schools, Mr.Faustine Gombo and Mrs John
                            Mohamed Hwagi are very concerned to constantly work on the quality of the school and on
                            positive interaction with the children.
                        </p>
                    </div>
                    <div class="px-5 md:px-8">
                        <img src="images/" height="128" width="128" alt="Furaha P/S logo">
                    </div>
                </div>
                <div class="flex flex-col items-center md:items-start pb-5 w-full md:w-1/4 md:mr-4">
                    <h2 class="text-xl text-white font-normal mb-2">Quick Links</h2>
                    <ul class="text-gray-300 text-center md:text-left text-sm font-extralight mb-2">
                        <li class="pb-2"><a href="#" class="">Home</a></li>
                        <li class="pb-2"><a href="#" class="">About Us</a></li>
                        <li class="pb-2"><a href="#" class="">Admission</a></li>
                        <li class="pb-2"><a href="#" class="">News & Updates</a></li>
                    </ul>
                </div>
                <div class="flex flex-col items-center md:items-start pb-5 w-full md:w-1/4 md:mr-4">
                    <h2 class="text-xl text-white font-normal mb-2">Contact Us</h2>
                    <h2 class="text-lg text-gray-300 font-light">Phone</h2>
                    <ul class="text-sm text-gray-300 font-extralight text-center mb-2">
                        <li><a href="tel:+255788697572" class="hover:text-sm hover:text-white">+255 788 697
                                572<br>Director</a>
                        </li>
                        <li><a href="tel:+255754928324" class="hover:text-sm hover:text-white">+255 754 928
                                324<br>Manager</a>
                        </li>
                        <li><a href="tel:+255756393882" class="hover:text-sm hover:text-white">+255 756 393
                                882<br>HeadMistress</a>
                        </li>
                    </ul>
                    <h2 class="text-lg text-gray-300 font-light">Email Address</h2>
                    <ul class="text-sm text-gray-300 font-extralight mb-2">
                        <li><a href="mailto:info@Furahaenglishmedium.sc.tz"
                                class="hover:text-sm hover:text-white">info@Furahaenglishmedium.sc.tz</a></li>
                    </ul>
                    <h2 class="text-lg text-gray-300 font-light">Posta Office Box</h2>
                    <ul class="text-sm text-gray-300 font-extralight mb-2">
                        <li><a href="#sanduku" class="hover:text-sm hover:text-white" id="sanduku">P.O.Box 4082,
                                Mwanza </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:justify-between md:px-14">
                <h2 class="text-white text-center md:text-start">Copyright - Furaha Primary School&copy;2023</h2>
                <ul class="flex flex-row justify-center pt-5 md:pt-0">
                    <li class="px-2">
                        <svg fill="#fff" height="24px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-143 145 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M272.8,560.7 c-20.8,20.8-44.9,37.1-71.8,48.4c-27.8,11.8-57.4,17.7-88,17.7c-30.5,0-60.1-6-88-17.7c-26.9-11.4-51.1-27.7-71.8-48.4 c-20.8-20.8-37.1-44.9-48.4-71.8C-107,461.1-113,431.5-113,401s6-60.1,17.7-88c11.4-26.9,27.7-51.1,48.4-71.8 c20.9-20.8,45-37.1,71.9-48.5C52.9,181,82.5,175,113,175s60.1,6,88,17.7c26.9,11.4,51.1,27.7,71.8,48.4 c20.8,20.8,37.1,44.9,48.4,71.8c11.8,27.8,17.7,57.4,17.7,88c0,30.5-6,60.1-17.7,88C309.8,515.8,293.5,540,272.8,560.7z">
                                    </path>
                                    <path
                                        d="M146.8,313.7c10.3,0,21.3,3.2,21.3,3.2l6.6-39.2c0,0-14-4.8-47.4-4.8c-20.5,0-32.4,7.8-41.1,19.3 c-8.2,10.9-8.5,28.4-8.5,39.7v25.7H51.2v38.3h26.5v133h49.6v-133h39.3l2.9-38.3h-42.2v-29.9C127.3,317.4,136.5,313.7,146.8,313.7z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </li>
                    <li class="px-2">
                        <svg fill="#fff" height="24px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-143 145 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M272.8,560.7 c-20.8,20.8-44.9,37.1-71.8,48.4c-27.8,11.8-57.4,17.7-88,17.7c-30.5,0-60.1-6-88-17.7c-26.9-11.4-51.1-27.7-71.8-48.4 c-20.8-20.8-37.1-44.9-48.4-71.8C-107,461.1-113,431.5-113,401s6-60.1,17.7-88c11.4-26.9,27.7-51.1,48.4-71.8 c20.9-20.8,45-37.1,71.9-48.5C52.9,181,82.5,175,113,175s60.1,6,88,17.7c26.9,11.4,51.1,27.7,71.8,48.4 c20.8,20.8,37.1,44.9,48.4,71.8c11.8,27.8,17.7,57.4,17.7,88c0,30.5-6,60.1-17.7,88C309.8,515.8,293.5,540,272.8,560.7z">
                                    </path>
                                    <path
                                        d="M191.6,273h-157c-27.3,0-49.5,22.2-49.5,49.5v52.3v104.8c0,27.3,22.2,49.5,49.5,49.5h157c27.3,0,49.5-22.2,49.5-49.5V374.7 v-52.3C241,295.2,218.8,273,191.6,273z M205.8,302.5h5.7v5.6v37.8l-43.3,0.1l-0.1-43.4L205.8,302.5z M76.5,374.7 c8.2-11.3,21.5-18.8,36.5-18.8s28.3,7.4,36.5,18.8c5.4,7.4,8.5,16.5,8.5,26.3c0,24.8-20.2,45.1-45.1,45.1C88,446.1,68,425.8,68,401 C68,391.2,71.2,382.1,76.5,374.7z M216.1,479.5c0,13.5-11,24.5-24.5,24.5h-157c-13.5,0-24.5-11-24.5-24.5V374.7h38.2 c-3.3,8.1-5.2,17-5.2,26.3c0,38.6,31.4,70,70,70c38.6,0,70-31.4,70-70c0-9.3-1.9-18.2-5.2-26.3h38.2V479.5z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </li>
                    <li class="px-2">
                        <svg fill="#fff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512"
                            xml:space="preserve" height="24px">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M272.8,560.7 c-20.8,20.8-44.9,37.1-71.8,48.4c-27.8,11.8-57.4,17.7-88,17.7c-30.5,0-60.1-6-88-17.7c-26.9-11.4-51.1-27.7-71.8-48.4 c-20.8-20.8-37.1-44.9-48.4-71.8C-107,461.1-113,431.5-113,401s6-60.1,17.7-88c11.4-26.9,27.7-51.1,48.4-71.8 c20.9-20.8,45-37.1,71.9-48.5C52.9,181,82.5,175,113,175s60.1,6,88,17.7c26.9,11.4,51.1,27.7,71.8,48.4 c20.8,20.8,37.1,44.9,48.4,71.8c11.8,27.8,17.7,57.4,17.7,88c0,30.5-6,60.1-17.7,88C309.8,515.8,293.5,540,272.8,560.7z">
                                    </path>
                                    <rect x="-8.5" y="348.4" width="49.9" height="159.7"></rect>
                                    <path
                                        d="M15.4,273c-18.4,0-30.5,11.9-30.5,27.7c0,15.5,11.7,27.7,29.8,27.7h0.4c18.8,0,30.5-12.3,30.4-27.7 C45.1,284.9,33.8,273,15.4,273z">
                                    </path>
                                    <path
                                        d="M177.7,346.9c-28.6,0-46.5,15.6-49.8,26.6v-25.1H71.8c0.7,13.3,0,159.7,0,159.7h56.1v-86.3c0-4.9-0.2-9.7,1.2-13.1 c3.8-9.6,12.1-19.6,27-19.6c19.5,0,28.3,14.8,28.3,36.4v82.6H241v-88.8C241,369.9,213.2,346.9,177.7,346.9z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </li>
                </ul>
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
