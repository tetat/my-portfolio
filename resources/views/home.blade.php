@include('layouts/head')

<body class="bg-gray-100 h-full">
    <header>
        @include('layouts/navbar')
    </header>

    <main class="bg-gray-900 h-5/6">
        <div class="flex items-center justify-evenly h-full">
            <div>
                <div class="">
                    <h1 class="mb-4 text-center text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-7xl dark:text-white">Md. Nishat Miah</h1>
                    <p class="mb-6 text-center text-lg font-normal text-gray-400 lg:text-2xl sm:px-16 xl:px-48 dark:text-gray-400">Back-end Web Developer.</p>
                </div>
    
                <div class="flex items-center justify-evenly">
                    <div class="bg-white h-16 w-16 flex items-center justify-center rounded-full">
                        <a href="https://www.linkedin.com/in/tetat/" target="_blank"><img class="h-10 w-10" src="/assets/images/social/linkedin-in-brands-solid.svg" alt="LinkedIn"></a>
                    </div>
                    <div class="bg-white h-16 w-16 flex items-center justify-center rounded-full">
                        <a href="https://github.com/tetat" target="_blank"><img class="h-10 w-10" src="/assets/images/social/github-brands-solid.svg" alt="GitHub"></a>
                    </div>
                    <div class="bg-white h-16 w-16 flex items-center justify-center rounded-full">
                        <a href="mailto: nishat00101@gmail.com" target="_blank"><img class="h-10 w-10" src="/assets/images/social/envelope-regular.svg" alt="Email"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts/footer')

</body>
</html>
