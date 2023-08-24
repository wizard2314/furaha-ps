@extends('layout.app')
@section('title', 'Short Courses')
@section('content')
    <div class="p-6 sm:p-16">
        <div class="flex flex-col">
            <h1 class="uppercase text-blue-700 sm:text-3xl font-sans font-semibold text-xl text-center">
                Short Courses
            </h1>
            <p class="text-sm sm:text-base text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laboriosam odio tempora cumque, nisi animi nihil totam molestiae vitae quibusdam, id,
                a temporibus praesentium neque reiciendis illo explicabo omnis tenetur modi?</p>
        </div>

        <div class="mb-4">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center sm:justify-center" id="myTab" data-tabs-toggle="#myTabContent"
                role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Fani Zote</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Computer</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">Ushonaji</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Umeme</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="zote-tab" data-tabs-target="#fani-zote" type="button" role="tab" aria-controls="fani-zote"
                        aria-selected="false">
                        MVM
                    </button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="comp-tab" data-tabs-target="#comp" type="button" role="tab" aria-controls="comp"
                        aria-selected="false">
                        Udereva
                    </button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-2 sm:grid grid-cols-1 sm:grid-cols-4 rounded-lg gap-4 bg-gray-50" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                
                @for ($i=0; $i<= 5; $i++)
                    <div class="bg-gray-200 rounded-xl mb-2">
                        <img src="images/caro-2.jpg" alt="Image" class="w-fit mb-2 sm:max-w-full h-48 rounded-t-xl">
                        <div class="p-4">
                            <h2 class="text-xl uppercase font-sans font-medium">Title ya Course</h2>
                            <p class="text-gray-800 text-sm text-justify capitalize">Lorem ipsum dolor,</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="hidden p-2 sm:grid grid-cols-1 sm:grid-cols-4 rounded-lg gap-4 bg-gray-50" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <h2 class="uppercase text-2xl text-blue-700 font-bold font-sans">COMPUTER</h2>
                @for ($i=0; $i<= 3; $i++)
                    <div class="bg-gray-200 rounded-xl mb-2">
                        <img src="images/caro-2.jpg" alt="Image" class="w-fit mb-2 sm:max-w-full h-48 rounded-t-xl">
                        <div class="p-4">
                            <h2 class="text-xl uppercase font-sans font-medium">Title ya Course</h2>
                            <p class="text-gray-800 text-sm text-justify capitalize">Lorem ipsum dolor,</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="hidden p-2 sm:grid grid-cols-1 sm:grid-cols-4 rounded-lg gap-4 bg-gray-50" id="settings" role="tabpanel"
                aria-labelledby="settings-tab">
                @for ($i=0; $i<= 2; $i++)
                    <div class="bg-gray-200 rounded-xl mb-2">
                        <img src="images/caro-2.jpg" alt="Image" class="w-fit mb-2 sm:max-w-full h-48 rounded-t-xl">
                        <div class="p-4">
                            <h2 class="text-xl uppercase font-sans font-medium">Title ya Course</h2>
                            <p class="text-gray-800 text-sm text-justify capitalize">Lorem ipsum dolor,</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="hidden p-2 sm:grid grid-cols-1 sm:grid-cols-4 rounded-lg gap-4 bg-gray-50" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                @for ($i=0; $i<= 3; $i++)
                    <div class="bg-gray-200 rounded-xl mb-2">
                        <img src="images/caro-2.jpg" alt="Image" class="w-fit mb-2 sm:max-w-full h-48 rounded-t-xl">
                        <div class="p-4">
                            <h2 class="text-xl uppercase font-sans font-medium">Title ya Course</h2>
                            <p class="text-gray-800 text-sm text-justify capitalize">Lorem ipsum dolor,</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="hidden p-2 sm:grid grid-cols-1 sm:grid-cols-4 rounded-lg gap-4 bg-gray-50" id="fani-zote" role="tabpanel" aria-labelledby="zote-tab">
                @for ($i=0; $i<= 2; $i++)
                    <div class="bg-gray-200 rounded-xl mb-2">
                        <img src="images/caro-2.jpg" alt="Image" class="w-fit mb-2 sm:max-w-full h-48 rounded-t-xl">
                        <div class="p-4">
                            <h2 class="text-xl uppercase font-sans font-medium">Title ya Course</h2>
                            <p class="text-gray-800 text-sm text-justify capitalize">Lorem ipsum dolor,</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="hidden p-2 sm:grid grid-cols-1 sm:grid-cols-4 rounded-lg gap-4 bg-gray-50" id="comp" role="tabpanel" aria-labelledby="comp-tab">
                @for ($i=0; $i<= 4; $i++)
                    <div class="bg-gray-200 rounded-xl mb-2">
                        <img src="images/caro-2.jpg" alt="Image" class="w-fit mb-2 sm:max-w-full h-48 rounded-t-xl">
                        <div class="p-4">
                            <h2 class="text-xl uppercase font-sans font-medium">Title ya Course</h2>
                            <p class="text-gray-800 text-sm text-justify capitalize">Lorem ipsum dolor,</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

    </div>
@endsection
