<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/6678200964.js" crossorigin="anonymous"></script>
    <title>Covid-19 Report</title>
</head>

<body>
    <section class="nav">
        <div class="navbar-shadow fixed top-0 z-20 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 shadow-md">
            <div x-data="{ open: false }" class="flex flex-col px-4 mx-auto md:items-center md:justify-between md:flex-row lg:px-8">
                <div class="flex flex-row items-center justify-between py-4">
                    <a href="index" class="text-2xl px-0 md:px-4 font-light tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">covid-19</a>
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    <a class="md:px-4 py-2 mt-2 text-lg font-light text-gray-900 rounded-lg dark-mode:bg-gray-700 md:mt-0 hover:text-gray-500" href="all-course">All Course</a>
                    <a class="md:px-4 py-2 mt-2 text-lg font-light bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-500 " href="contact">Contact</a>
                    <a class="md:px-4 py-2 mt-2 text-lg font-light bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-500  " href="roadmap">Alur Belajar</a>
                </nav>
            </div>
        </div>
    </section>
    <span class="countfect" data-num="1200"></span>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/resources/js/countfect.min.js"></script>
</body>

</html>