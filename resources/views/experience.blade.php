@extends('layouts.app')

@section('content')

    <div class="mt-4 mb-52 py-4">
        <h2 class="text-white text-3xl font-bold text-center">Experience</h2>
        <hr class="border-1 bg-white mt-2 mb-8 w-5/6 mx-auto">

        <div class="relative py-8">
            <!-- Vertical Line -->
            <div class="absolute left-1/4 md:left-1/3 transform -translate-x-1/3 h-5/6 border-r-2 border-gray-300"></div>
            
            @foreach($experiences as $experience)
                <div class="my-4 flex items-center">
                    <!-- bold point -->
                    <div class="absolute left-1/4 md:left-1/3 transform -translate-x-1/3 w-3 h-3 shadow-md border border-gray-300 bg-white rounded-full"></div>
                    <!-- left side -->
                    <div class="md:w-1/3 md:pr-4 text-right">
                        <p class="text-xs md:text-sm text-gray-100">{{$experience['start']}} - {{$experience['end']}}</p>
                    </div>
                    <!-- right side -->
                    <div class="md:w-2/3">
                        <div class="pl-8">
                            <h3 class="text-md md:text-xl text-gray-100 font-semibold">{{$experience['title']}}</h3>
                            <p class="text-md md:text-lg text-yellow-200">{{$experience['company']}}</p>
                            <p class="text-sm md:text-md text-gray-100">Type: {{$experience['type']}}</p>
                            <ul class="list-disc list-inside">
                                @foreach($experience['descriptions'] as $msg)
                                    <li class="text-xs md:text-sm text-gray-100">{{$msg}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection