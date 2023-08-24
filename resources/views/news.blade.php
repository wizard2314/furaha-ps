@extends('layout.app')
@section('title', 'News & Events')
@section('content')
    <div class="p-6 sm:p-20 bg-slate-700">
        <div class="text-center text-white mb-4">
            <h1 class="uppercase text-xl sm:text-4xl font-bold font-mono">News & Upcoming Events</h1>
            <p class="text-gray-400 text-justify font-light mb-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa numquam non tempore praesentium dolore aut earum, nobis ea eligendi aperiam voluptatibus.
                Totam, molestiae. Eius neque voluptatem hic rerum vitae quibusdam?
            </p>
            <div class="flex justify-center">
                <a href="#latest-news" class="px-1 sm:px-5 text-sm  underline underline-offset-8 uppercase">Latest News</a>
                <a href="#events" class="px-1 sm:px-5 text-sm underline underline-offset-8 uppercase">Upcoming Events</a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-2 sm:p-10">
            @foreach ($allEvents as $kaEvent)
                <div class="bg-gray-200 rounded-xl">
                    <img src="assets/images/{{$kaEvent->image}}" alt="Image" class="w-full h-48 mb-2 rounded-t-xl">
                    <div class="p-4">
                        <h2 class="text-xl uppercase font-sans font-medium">
                            {{$kaEvent->title}}
                        </h2>
                        <p class="text-gray-800 text-sm text-justify capitalize">
                            {{$kaEvent->description}}
                        </p>
                        <button class="mt-2 text-blue-500 hover:text-blue-700">
                            <a href="{{route('events.single', $kaEvent->id)}}" class="capitalize">Read more</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
