@include('layouts/head')

<body class="bg-gray-100 h-full">
    <header>
        @include('layouts/navbar')
    </header>

    <main class="bg-gray-900 h-5/6">
        <div class="h-full p-4">
            <h2 class="text-white text-3xl font-bold text-center">Skills</h2>
            <div class="p-4">
                <h4 class="text-white text-xl text-center md:mx-80">I have a strong passion for learning and I'm particularly drawn to challenging subjects. Below are the languages and technologies I have mastered.</h4>
                <div class="mt-20 md:mx-96 md:px-20 grid grid-cols-4 gap-y-14">
                    @foreach($skills as $skill)
                        <div class="mx-1 md:mx-3">
                            <div class="flex justify-center">
                                <img class="w-12 h-12 md:w-16 md:h-16" src="{{$skill['img_url']}}" alt="">
                            </div>
                            <p class="text-white text-md md:text-lg text-center">{{$skill['name']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    @include('layouts/footer')

</body>
</html>
