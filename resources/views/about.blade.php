@include('layouts/head')

<body class="bg-gray-100 h-full">
    <header>
        @include('layouts/navbar')
    </header>

    <main class="bg-gray-900 h-full">
        <div class="md:flex md:flex-row md:items-center md:justify-evenly h-full">
            <div class="block my-2 md:my-0 md:w-96 max-w-sm p-6 ">
                <h5 class="mb-2 py-2 text-2xl font-bold tracking-tight text-white">About Me</h5>
                <p class="text-lg text-justify text-white">As a motivated and detail-oriented Backend Web Developer, I have foundational expertise in PHP, and MySQL, with hands-on experience in the Laravel framework. My background in competitive programming(C++) has honed my problem-solving skills and ability to tackle complex coding challenges efficiently.</p>
                <p class="mt-4 text-lg text-justify text-white">My goal is to become a highly skilled PHP developer, where I can contribute to and grow within challenging projects that push the boundaries of web development.</p>
            </div>
            <div class="block md:h-96 md:w-80 max-w-sm p-6">
                <img class="ms-16 md:ms-0 h-1/3 md:w-72 md:h-80" src="/assets/images/nishat.jpg" alt="Md. Nishat Miah">
            </div>
        </div>
    </main>

    @include('layouts/footer')

</body>
</html>
