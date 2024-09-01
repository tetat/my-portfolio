@extends('layouts.app')

@section('content')

    <div class="mt-4 py-4">
        <h2 class="text-white text-3xl font-bold text-center">Skills</h2>
        <hr class="border-1 bg-white mt-2 mb-8 w-5/6 mx-auto">
        <div class="py-4">
            <h4 class="text-white text-sm lg:text-md text-center lg:mx-80 my-2 px-2">I have a strong passion for learning and I'm particularly drawn to challenging subjects. Below are the languages and technologies I have mastered.</h4>
            <div class="my-20 mx-2 lg:mx-80 lg:px-20 grid grid-cols-4 gap-y-14">
                @foreach($skills as $skill)
                    <div class="mx-auto w-9 lg:w-14">
                        <div class="flex justify-center">
                            <img class="w-9 h-9 lg:w-14 lg:h-14" src="{{asset($skill['img_url'])}}" alt="">
                        </div>
                        <p class="text-white text-xs lg:text-sm text-center my-1">{{$skill['name']}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection