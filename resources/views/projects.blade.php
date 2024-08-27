@include('layouts/head')

<body class="bg-gray-100 h-full">
    <header>
        @include('layouts/navbar')
    </header>

    <main class="bg-gray-900 py-5 max-h-fit">
        <h2 class="text-white text-3xl py-4 font-bold text-center">Projects</h2>
        <div class="py-2 w-64 md:w-auto md:grid md:grid-cols-3 md:gap-1 md:p-4 md:mx-56 max-h-fit">
            @foreach($projects as $project)
                <div class="w-64 md:w-80 md:h-96 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{$project['github_url']}}">
                        <img class="rounded-t-lg w-80 h-64" src="{{$project['img_url']}}" alt="Home Page" />
                    </a>
                    <div class="p-1">
                        <a href="{{$project['github_url']}}">
                            <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">{{$project['title']}}</h5>
                        </a>
                        <p class="mb-1 text-xs font-normal text-gray-700 dark:text-gray-400">{{$project['description']}}</p>
                        <a href="{{$project['github_url']}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" target="_blank">
                            GitHub
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </main>

    @include('layouts/footer')

</body>
</html>
