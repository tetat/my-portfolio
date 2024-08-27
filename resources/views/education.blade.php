@include('layouts/head')

<body class="bg-gray-100 h-full">
    <header>
        @include('layouts/navbar')
    </header>

    <main class="bg-gray-900 h-5/6">
        <div class="max-h-fit py-4">
            <h2 class="text-white text-3xl font-bold text-center">Education</h2>
            <div class="relative py-4">
                <!-- Vertical Line -->
                <div class="absolute left-1/4 md:left-1/2 transform -translate-x-1/2 h-full border-r-2 border-gray-300"></div>
                
                @foreach($educations as $education)
                    <div class="my-4 flex items-center">
                        <div class="absolute left-1/4 md:left-1/2 transform -translate-x-1/2 w-3 h-3 shadow-md border border-gray-300 bg-white rounded-full"></div>
                        <div class="w-1/1 md:w-1/2 md:pr-8 text-right">
                            <p class="text-xs md:text-sm text-gray-100">{{$education['start']}} - {{$education['end']}}</p>
                        </div>
                        <div class="w-1/1 md:w-1/3">
                            <div class="px-4 pl-8">
                                <h3 class="text-lg md:text-xl text-gray-100 font-semibold">{{$education['degree']}}</h3>
                                <p class="text-md md:text-lg text-yellow-200">{{$education['school']}}</p>
                                <p class="text-sm md:text-md text-gray-100">{{$education['subject']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    @include('layouts/footer')

</body>
</html>
