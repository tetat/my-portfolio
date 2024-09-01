<nav class="bg-gray-800 shadow">
    <div x-data="{ isOpen: false }" class="mx-auto py-3 px-6 lg:px-0 lg:flex lg:justify-evenly lg:items-center">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="text-gray-800 text-xl hover:text-gray-700 ml-4"><img src="/assets/images/logo.jpg" class="h-14 shadow rounded-full" alt="Logo"></a>
                <span class="text-white text-2xl ms-2">Portfolio</span>
            </div>
            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button 
                    type="button" 
                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" 
                    aria-label="toggle menu"
                    @click="isOpen = !isOpen"
                >
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu, if mobile set to hidden -->
        <div :class="isOpen ? 'show' : 'hidden'" class="lg:flex items-center lg:block mt-4 lg:mt-0">
            <div class="flex flex-col lg:flex-row lg:ml-6">

                <a class="my-1 text-lg {{ request()->is('/') ? 'text-indigo-300' : 'text-white'  }} font-medium hover:text-indigo-500 lg:mx-4 lg:my-0" href="/">Home</a>

                <a class="my-1 text-lg {{ request()->is('skills') ? 'text-indigo-300' : 'text-white'  }} font-medium hover:text-indigo-500 lg:mx-4 lg:my-0" href="/skills">Skills</a>

                <a class="my-1 text-lg {{ request()->is('experience') ? 'text-indigo-300' : 'text-white'  }} font-medium hover:text-indigo-500 lg:mx-4 lg:my-0" href="/experience">Experience</a>

                <a class="my-1 text-lg {{ request()->is('projects') ? 'text-indigo-300' : 'text-white'  }} font-medium hover:text-indigo-500 lg:mx-4 lg:my-0" href="/projects">Projects</a>

                <a class="my-1 text-lg {{ request()->is('education') ? 'text-indigo-300' : 'text-white'  }} font-medium hover:text-indigo-500 lg:mx-4 lg:my-0" href="/education">Education</a>

                <a class="my-1 text-lg text-white font-medium hover:text-indigo-500 lg:mx-4 lg:my-0" href="https://drive.google.com/file/d/1vUcHMlMzfTVUHXOrJFZpBSkCtCDTaG2_/view?usp=sharing" target="_blank">Resume</a>

            </div>
        </div>
    </div>
</nav>