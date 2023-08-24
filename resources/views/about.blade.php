@extends('layout.app')
@section('title', 'About-Us')
@section('content')
    {{-- Historical Background Section --}}
    <div class="p-6 md:p-16 bg-gray-100 w-full max-w-screen-2xl">
        <div class="text-center mx-auto">
            <h2 class="font-sans text-2xl md:text-3xl uppercase font-semibold mb-6">Furaha Primary School</h2>
        </div>
        <div class="flex flex-col md:flex-row p-6">
            <div class="flex md:flex-row flex-col md:w-1/3 w-full mx-0 md:mx-4">
                <div class="pt-2 mb-2 md:w-fit w-full">
                    <img src="images/boss.jpg" alt="director Buhangija fdc" class="h-64 md:w-max w-full rounded-xl">
                    <p class="p-4 text-left text-sm  font-sans font-thin">Mr.Faustine Gombo</p>
                </div>
                <div class="pt-2 mb-2 md:w-fit w-full">
                    <img src="images/boss.jpg" alt="director Buhangija fdc" class="h-64 md:w-max w-full rounded-xl">
                    <p class="p-4 text-left text-sm  font-sans font-thin">Mrs John Mohamed Hwagi</p>
                </div>
            </div>
            <div class="md:w-2/3 w-full">
                <h2 class="mb-2 text-xl md:text-2xl font-sans text-left text-blue-500 font-semibold">Our History</h2>
                <p class="text-justify text-sm md:text-md font-sans font-thin">
                    The founders and directors of Furaha English Medium Schools, Mr.Faustine Gombo and Mrs
                    John Mohamed Hwagi are very concerned to constantly work on the quality of the school and on
                    positive interaction with the children
                </p>
                <br>
                <h2 class="mb-2 text-xl md:text-2xl font-sans text-left text-blue-500 font-semibold">How it started</h2>
                <p class="text-justify text-sm md:text-md font-sans font-thin">
                    In the year 2007 the couple had the opportunity to buy the area at Nyamatala street,
                    Buhongwa ward and build the school, Furaha English Medium Pre & Primary School. They
                    believe that Education is the key to success, therefore educating children is a direct
                    contribution for the future of this country. The children themselves will contribute to their
                    community by being better educated.

                    <br><br>
                    With this in mind, and with their professional experiences as teachers and social workers,
                    Mr.Faustine Gombo and Mrs John Mohamed Hwagi decided to Open the school in 21 January
                    2008. Whereby Day care Baby classes for nursery pupils started.
                </p>
            </div>
        </div>

    </div>
    {{-- End Of Historical Bg the Section --}}

    {{-- Mission & Vision Section --}}
    <div class="flex md:flex-row flex-col p-6 md:p-16 md:mx-4 my-2">
        <div
            class="text-start w-full md:w-1/2 shadow-gray-400 shadow-xl md:hover:shadow-xl rounded-xl p-8 mb-4 md:mx-4 md:mb-0">
            <h2 class="text-blue-500 text-3xl font-normal font-sans uppercase mb-2">Mission</h2>
            <p class="text-gray-400 text-sm font-extralight text-justify">
                At Furaha English Medium School, we are committed to provide the best education to all
                children, also to most vulnerable ones. We believe curious, open-minded and responsible people will
                contribute to a just and
                peaceful society.
            </p>
        </div>
        <div class="text-start w-full md:w-1/2 shadow-gray-400 shadow-xl md:hover:shadow-xl rounded-xl p-8 mt-4 md:mt-0">
            <h2 class="text-blue-500 text-3xl font-normal font-sans uppercase mb-2">Vision</h2>
            <p class="text-gray-400 text-sm font-extralight text-justify">
                Furaha English Medium Schools is determined to accomplish as a role model to Working
                together to build community of god in our society.
                <br>
                <br>
                <i>School Legality:</i><br><strong> FURAHA ENGLISH MEDIUM REGISTRATION NUMBER
                    EM.14168./01</strong>
            </p>
        </div>
    </div>
    {{-- End of Mission & vision Section --}}

    {{-- Metrics Section --}}
    <div class="p-6 md:p-16 bg-cyan-800 flex flex-col">
        <div class="flex flex-col text-center mx-auto mb-4 md:mb-10 p-5">
            <h2 class="uppercase text-white text-xl text-center md:text-3xl">Furaha Primary School</h2>
            <p class="text-gray-300 text-sm text-justify mt-2 font-light">
                Furaha English Medium Schools is determined to accomplish as a role model to Working
                together to build community of god in our society
            </p>
        </div>
        <div class="flex flex-col md:flex-row text-center w-full p-4">
            <div class="w-full md:w-1/4 p-5">
                <h2 class="text-white text-5xl">420</h2>
                <hr class="w-full text-white my-4">
                <h3 class="uppercase text-white font-normal">Number of Pupils</h3>
            </div>
            <div class="w-full md:w-1/4 p-5">
                <h2 class="text-white text-5xl">290</h2>
                <hr class="w-full text-white my-4">
                <h3 class="uppercase text-white font-normal">Girls</h3>
            </div>
            <div class="w-full md:w-1/4 p-5">
                <h2 class="text-white text-5xl">190</h2>
                <hr class="w-full text-white my-4">
                <h3 class="uppercase text-white font-normal">Boys</h3>
            </div>
            <div class="w-full md:w-1/4 p-5">
                <h2 class="text-white text-5xl">40</h2>
                <hr class="w-full text-white my-4">
                <h3 class="uppercase text-white font-normal">Total Staff</h3>
            </div>
        </div>
    </div>
    {{-- End Metrics Section --}}
@endsection
