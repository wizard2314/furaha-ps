@extends('layout.app')
@section('title', 'Buhangija - FDC')

@section('content')
    {{-- Content Code goes in here --}}
    <div class="w-full max-w-screen-2xl mx-auto p-3 sm:p-16">
        <div class="flex flex-col-reverse sm:flex-row items-center">
            <div class="w-full sm:w-1/5 px-2 sm:px-6 py-3 sm:py-5">
                <div class="flex flex-row sm:flex-col space-x-4 sm:space-y-4 px-4">
                    <div class="h-20 sm:h-28 flex flex-col ">
                        <h1 class="text-3xl sm:text-5xl font-mono text-center sm:text-left font-extrabold">200+</h1>
                        <p class="text-center sm:text-left text-lg sm:text-2xl font-mono font-thin">Students</p>
                    </div>
                    <div class="h-20 sm:h-28 flex flex-col ">
                        <h1 class="text-3xl sm:text-5xl font-mono text-center sm:text-left font-extrabold">77+</h1>
                        <p class="text-center sm:text-left text-lg sm:text-2xl font-mono font-thin">Courses</p>
                    </div>
                    <div class="h-20 sm:h-28 flex flex-col ">
                        <h1 class="text-3xl sm:text-5xl font-mono text-center sm:text-left font-extrabold">70+</h1>
                        <p class="text-center sm:text-left text-lg sm:text-2xl font-mono font-thin">Staff</p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-4/5 ml-4 px-2 sm:px-5">
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <div class="carousel rounded-2xl">
                        <div class="carousel-inner rounded-xl">
                            <div class="carousel-item opacity-0">
                                <img src="images/caro-1.jpg" alt="Image 1" class="w-full h-auto">
                            </div>
                            <div class="carousel-item opacity-0">
                                <img src="images/caro-2.jpg" alt="Image 1" class="w-full h-auto">
                            </div>
                            <div class="carousel-item opacity-0">
                                <img src="images/caro-3.jpg" alt="Image 1" class="w-full h-auto">
                            </div>
                            <div class="carousel-item opacity-0">
                                <img src="images/caro-4.jpg" alt="Image 1" class="w-full h-auto">
                            </div>
                            <!-- Add other carousel items here -->
                        </div>
                        <div class="carousel-nav">
                            <button
                                class="carousel-prev absolute left-4 top-1/2 transform -translate-y-1/2 px-2 py-1 rounded-full bg-gray-800 text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <button
                                class="carousel-next absolute right-4 top-1/2 transform -translate-y-1/2 px-2 py-1 rounded-full bg-gray-800 text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> {{-- End of Carausel Screen --}}


    {{-- Welcome Note Section --}}
    <div class="p-6 sm:p-16 bg-gray-100 w-full max-w-screen-2xl">
        <div class="text-center mx-auto">
            <h2 class="font-mono text-xl uppercase font-semibold mb-6">Welcome Note</h2>
        </div>
        <div class="flex flex-col sm:flex-row">
            <div class="w-full sm:w-2/5">
                <img src="images/favico.png" alt="director Buhangija fdc" class="h-96 w-96 rounded-xl">

            </div>
            <div class="text-justify font-light text-gray-500 w-full sm:w-3/5 px-3 sm:px-5">
                <p class="leading-10 mb-12">
                    Chuo cha maendeleo ya wananchi buhangija ni chuo kinacho toa mafunzo ya ufundi stadi ngazi ya I na
                    II, na pia ni miongoni mwa vyuo 54 vinavyo endesha Program ya Elimu Haina Mwisho.
                    Wanafunzi wa ngazi ya I na II wa chuo hiki hufanya mitihani ya VETA,
                    Chuo hiki ni miongoni mwa vyuo 54 vinavyomilikiwa na Wizara ya Elimu,
                    Sayansi na Teknolojia.Chuo hiki kinajishughulisha na utoaji wa Elimu ya
                    maisha ya kujitegemea na Ufundi stadi ili kuwawezesha wananchi kupata maarifa,
                    stadi na ujuzi utakao wasaidia kujitegemea maishani mwao.
                </p>
                <p class="justify text-right"><i>"- Elimu Ya Ufundi Ni Ajira Binafsi"</i></p>
            </div>
        </div>
    </div>
    {{-- End Welcome Note Section --}}


    {{-- Grid Section (News & Events) --}}

    <div class="w-full max-w-screen-2xl p-6 sm:p-16">
        <div class="text-center mx-auto">
            <h2 class="font-mono text-xl uppercase font-semibold mb-6">News & Events</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
            @foreach ($events as $event)
                <div class="bg-gray-200 rounded-xl">
                    <img src="assets/images/{{$event->image}}" alt="Image" class="w-full h-56 mb-2 rounded-t-xl drop-shadow-lg">
                    <div class="p-4">
                        <h2 class="text-xl uppercase font-sans font-medium">{{$event->title}}</h2>
                        <p class="text-gray-800 text-sm text-justify lowercase">{{$event->description}}</p>
                        <button class="mt-2 text-blue-500 hover:text-blue-700">
                            <a href="{{route('events.single', $event->id)}}" class="capitalize">Read more</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    @push('styles')
        <style>
            .carousel {
                position: relative;
                overflow: hidden;
            }

            .carousel-inner {
                display: flex;
                transition: transform 0.3s ease-in-out;
            }

            .carousel-item {
                flex: 0 0 100%;
                opacity: 1;
                transition: opacity 0.3s ease-in-out;
            }

            .carousel-description {
                background-color: rgba(255, 255, 255, 0.8);
                padding: 10px;
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
            }
        </style>
    @endpush
@endsection
