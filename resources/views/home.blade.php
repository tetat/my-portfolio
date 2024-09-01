@extends('layouts.app')

@section('content')
    
    <div class="flex items-center justify-evenly mt-8">
        <div>
            <div class="">
                <h1 class="mb-4 text-center text-4xl font-extrabold leading-none tracking-tight text-white lg:text-3xl lg:text-5xl dark:text-white">{{$myself['name']}}</h1>
                <p class="mb-6 text-center text-md font-normal text-gray-400 lg:text-xl sm:px-16 dark:text-gray-400">{{$myself['title']}}</p>
            </div>

            <div class="flex items-center justify-evenly mb-6">
                @foreach($myself['socials'] as $social)
                    <div class="bg-white h-12 w-12 lg:h-14 lg:w-14 flex items-center justify-center rounded-full">
                        <a href="{{$social['url']}}" target="_blank"><img class="h-8 w-8 lg:h-9 lg:w-9" src="{{$social['logo']}}" alt="{{$social['name']}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div>
        <hr class="border-1 bg-white mt-8 w-2/3 mx-auto">
        <h4 class="text-center text-3xl mt-6 font-bold tracking-tight text-white">About Me</h4>
    </div>

    <div class="md:flex md:flex-col lg:flex-row md:items-center md:justify-evenly">
        <div class="block my-2 lg:my-0 md:w-96 px-3 pb-6">
            @foreach($myself['descriptions'] as $msg)
                <p class="text-sm lg:text-md text-justify text-white my-2">{{$msg}}</p>
            @endforeach
        </div>
        <div class="block lg:h-96 lg:w-80 p-6">
            <img class="ms-16 lg:ms-0 h-1/3 lg:w-72 lg:h-80 rounded-full" src="{{ asset($myself['img_url']) }}" alt="{{ $myself['name'] }}">
        </div>
    </div>

@endsection