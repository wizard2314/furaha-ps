@extends('layout.app')
@section('title', 'About-Us')
@section('content')
    {{-- Historical Background Section --}}
    <div class="p-6 sm:p-16 bg-gray-100 w-full max-w-screen-2xl">
        <div class="text-center mx-auto">
            <h2 class="font-sans text-2xl sm:text-3xl uppercase font-semibold mb-6">BUHANGIJA FDC</h2>
        </div>
        <div class="flex flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-2/5">
                <img src="images/favico.png" alt="director Buhangija fdc" class="h-96 w-96 rounded-xl">

            </div>
            <div class="text-justify font-light text-gray-500 w-full sm:w-3/5 px-5">
                <div class="text-center mx-auto">
                    <h2 class="font-mono text-3xl uppercase font-semibold mb-6">HISTORICAL BACKGROUND</h2>
                </div>
                <p class="leading-7 text-sm mb-8">
                    Chuo cha maendeleo ya wananchi buhangija ni chuo kinacho toa mafunzo ya ufundi stadi ngazi ya I na II,
                    na pia ni miongoni mwa vyuo 54 vinavyo endesha Program ya Elimu Haina Mwisho. wanafunzi wa ngazi ya I na
                    II
                    wa chuo hiki hufanya mitihani ya VETA, Chuo hiki ni miongoni mwa vyuo 54
                    vinavyomilikiwa na Wizara ya Elimu ,Sayansi na Teknolojia.Chuo hiki kinajishughulisha...
                </p>
                <p class="leading-7 text-sm mb-0">
                    Chuo cha maendeleo ya wananchi buhangija ni chuo kinacho toa mafunzo ya ufundi stadi ngazi ya I na II,
                    na pia ni miongoni mwa vyuo 54 vinavyo endesha Program ya Elimu Haina Mwisho. wanafunzi wa ngazi ya I na
                    II wa chuo hiki hufanya mitihani ya VETA,
                    Chuo hiki ni miongoni mwa vyuo 54 vinavyomilikiwa na Wizara ya Elimu ,Sayansi na Teknolojia.
                    Chuo hiki kinajish Chuo cha maendeleo ya wananchi buhangija ni chuo kinacho toa mafunzo ya ufundi stadi
                    ngazi ya I na II, na pia ni miongoni mwa
                    vyuo 54 vinavyo endesha Program ya Elimu Haina Mwisho. wanafunzi wa ngazi ya I na II wa chuo hiki
                    hufanya
                </p>
            </div>
        </div>
    </div>
    {{-- End Of Historical Bg the Section --}}

    {{-- Mission & Vision Section --}}
    <div class="flex sm:flex-row flex-col p-6 sm:p-16 sm:mx-4 my-2">
        <div class="text-start w-full sm:w-1/2 shadow-gray-400 shadow-xl sm:hover:shadow-xl rounded-xl p-8 mb-4 sm:mx-4 sm:mb-0">
            <h2 class="text-blue-500 text-3xl font-normal font-sans uppercase mb-2">Mission</h2>
            <p class="text-gray-400 text-sm font-extralight text-justify">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Error laudantium dolorum, hic officiis praesentium perspiciatis laborum,
                optio labore quaerat repellendus architecto minima incidunt,
                deleniti aliquam unde suscipit libero maxime magni. Lorem ipsum, dolor sit amet consectetur adipisicing
                elit.
                Error laudantium dolorum, hic officiis praesentium perspiciatis laborum,
                optio labore quaerat repellendus architecto minima incidunt,
                deleniti aliquam unde suscipit libero maxime magni.
            </p>
        </div>
        <div class="text-start w-full sm:w-1/2 shadow-gray-400 shadow-xl sm:hover:shadow-xl rounded-xl p-8 mt-4 sm:mt-0">
            <h2 class="text-blue-500 text-3xl font-normal font-sans uppercase mb-2">Vision</h2>
            <p class="text-gray-400 text-sm font-extralight text-justify">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Error laudantium dolorum, hic officiis praesentium perspiciatis laborum,
                optio labore quaerat repellendus architecto minima incidunt,
                deleniti aliquam unde suscipit libero maxime magni. Lorem ipsum, dolor sit amet consectetur adipisicing
                elit.
                Error laudantium dolorum, hic officiis praesentium perspiciatis laborum,
                optio labore quaerat repellendus architecto minima incidunt,
                deleniti aliquam unde suscipit libero maxime magni.
            </p>
        </div>
    </div>
    {{-- End of Mission & vision Section --}}

    {{-- Metrics Section --}}
    <div class="p-6 sm:p-16 bg-cyan-800 flex flex-col">
        <div class="flex flex-col text-center mx-auto mb-4 sm:mb-10 p-5">
            <h2 class="uppercase text-white text-xl text-center sm:text-3xl">Chuo cha maendeleo cha wananchi Buhangija</h2>
            <p class="text-gray-300 text-sm text-justify mt-2 font-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, temporibus non,
                placeat, dolor aperiam nam impedit perferendis facere fugit doloremque ullam.
                Numquam obcaecati debitis mollitia tempore? Voluptatum, eius perferendis! Voluptates.
            </p>
        </div>
        <div class="flex flex-col sm:flex-row text-center w-full p-4">
            <div class="w-full sm:w-1/4 p-5">
                <h2 class="text-white text-5xl">12+</h2>
                <hr class="w-full text-white my-4">
                <h3 class="uppercase text-white font-normal">Years of Experience</h3>
            </div>
            <div class="w-full sm:w-1/4 p-5">
                <h2 class="text-white text-5xl">10+</h2>
                <hr class="w-full text-white my-4">
                <h3 class="uppercase text-white font-normal">FANI</h3>
            </div>
            <div class="w-full sm:w-1/4 p-5">
                <h2 class="text-white text-5xl">10+</h2>
                <hr class="w-full text-white my-4">
                <h3 class="uppercase text-white font-normal">WAKUFUNZI</h3>
            </div>
            <div class="w-full sm:w-1/4 p-5">
                <h2 class="text-white text-5xl">8+</h2>
                <hr class="w-full text-white my-4">
                <h3 class="uppercase text-white font-normal">WANAFUNZI</h3>
            </div>
        </div>
    </div>
    {{-- End Metrics Section --}}
@endsection
