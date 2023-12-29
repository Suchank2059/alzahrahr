<div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <livewire:navigation />
    <livewire:web-livewire />
    <div class="flex items-center justify-center bg-grey py-18 ">
        <div class="relative overflow-hidden">
            <div class="carousel" id="myCarousel">
                <div class="carousel-inner ">
                    <div class="carousel-item relative flex items-center">
                        <div class="absolute inset-0 flex items-center justify-center text-accent p-4">
                            <div class="text-center">
                                <h2
                                    class="text-4xl font-bold text-emerald-200 animate-bounce animate-duration-[10ms] animate-delay-[5ms] mb-4">
                                    Alzahra Human Resource Consultancy
                                    Welcomes You</h2>
                                <button class="relative px-5 py-2 mr-4 font-medium text-white group">
                                    <span
                                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-purple-500 group-hover:bg-purple-700 group-hover:skew-x-12"></span>
                                    <span
                                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-purple-700 group-hover:bg-purple-500 group-hover:-skew-x-12"></span>
                                    <span
                                        class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-purple-600 -rotate-12"></span>
                                    <span
                                        class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-purple-400 -rotate-12"></span>
                                    <span
                                        class="relative animate-bounce animate-duration-[10ms] animate-delay-[5ms]">Download
                                        Company Profile</span>
                                </button>

                            </div>
                        </div>

                        <img src="image/cr3.png" alt="Slide 1" class="w-screen h-[628px] object-cover ">
                    </div>

                    <div class="carousel-item relative flex items-center">
                        <div class="absolute inset-0 flex items-center justify-center text-accent p-4">
                            <div class="text-center">
                                <button class="relative px-5 py-2 mr-4 font-medium text-white group">
                                    <span
                                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-purple-500 group-hover:bg-purple-700 group-hover:skew-x-12"></span>
                                    <span
                                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-purple-700 group-hover:bg-purple-500 group-hover:-skew-x-12"></span>
                                    <span
                                        class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-purple-600 -rotate-12"></span>
                                    <span
                                        class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-purple-400 -rotate-12"></span>
                                    <span
                                        class="relative animate-bounce animate-duration-[10ms] animate-delay-[5ms]">Download
                                        Company Profile</span>
                                </button>
                                <h2
                                    class="text-4xl font-bold text-emerald-200 mb-4 animate-bounce animate-duration-[10ms] animate-delay-[5ms] mt-10">
                                    Over 20 Years of Experience</h2>

                            </div>
                        </div>
                        <img src="image/carousel1.jpg" alt="Slide 2" class="w-screen h-[628px] object-cover ">
                    </div>
                    <div class="carousel-item relative">
                        <div class="absolute inset-0 flex items-center justify-center text-accent p-4">
                            <div class="text-center">
                                <h2
                                    class="text-4xl font-bold text-emerald-200 mb-4 animate-bounce animate-duration-[10ms] animate-delay-[5ms]">
                                    Fulifilling all your HR needs</h2>
                                <button class="relative px-5 py-2 mr-4 font-medium text-white group">
                                    <span
                                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-purple-500 group-hover:bg-purple-700 group-hover:skew-x-12"></span>
                                    <span
                                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-purple-700 group-hover:bg-purple-500 group-hover:-skew-x-12"></span>
                                    <span
                                        class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-purple-600 -rotate-12"></span>
                                    <span
                                        class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-purple-400 -rotate-12"></span>
                                    <span
                                        class="relative animate-bounce animate-duration-[10ms] animate-delay-[5ms]">Download
                                        Company Profile</span>
                                </button>

                            </div>
                        </div>
                        <img src="image/carousel2.jpg" alt="Slide 3" class="w-screen h-[628px] object-cover ">
                    </div>
                </div>


                <button
                    class="absolute top-1/2 transform -translate-y-1/2 left-2 carousel-control prev text-accent hover:text-emerald-700"
                    onclick="prevSlide()">&#10094;</button>
                <button
                    class="absolute top-1/2 transform -translate-y-1/2 right-2 carousel-control next text-accent hover:text-emerald-700"
                    onclick="nextSlide()">&#10095;</button>
            </div>
        </div>

    </div>
    <section class="stats section ">
        <div class="container mx-auto">
            <div class="flex flex-col xl:flex-row gap-y-6">
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[32px] font-semibold text-accent-tertiary xl:mb-2">
                        <span id="count1" class="display-4"></span>
                    </div>
                    <div class="mb-2">
                        Happy Employees
                    </div>
                </div>
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[32px] font-semibold text-accent-tertiary xl:mb-2">
                        <span id="count2" class="display-4"></span>
                    </div>
                    <div class="mb-2">
                        Total Branches
                    </div>
                </div>
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[32px] font-semibold text-accent-tertiary xl:mb-2">
                        <span id="count4" class="display-4"></span>
                    </div>
                    <div class="mb-2">
                        Years of Experience
                    </div>
                </div>
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[32px] font-semibold text-accent-tertiary xl:mb-2">
                        <span id="count3" class="display-4"></span>
                    </div>
                    <div class="mb-2">
                        Consultants
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="h-[32rem] bg-gray-100 dark:bg-gray-800">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">The
                    Executive Team</h1>

                <div class="flex justify-center mx-auto mt-6">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
        </div>

        <div class="container flex justify-center items-center px-6 py-10 mx-auto -mt-72 sm:-mt-80 md:-mt-96">
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2">
                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                    <img class="object-cover w-full rounded-xl aspect-square" src="image/chairman.png" alt="">

                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Khshitij Dhungana
                    </h1>
                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Chairman</p>
                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">I make sure you get the best experience
                        working with us.
                        Bringing together the organization needing such workers for
                        better productions and the pool of goods skilled, unskilled
                        workers and this gap has been successfully bridged by the
                        services provided by <span class="text-accent">ALZAHRA HUMAN RESOURCE CONSULTANCY Pvt.
                            Ltd.</span></p>
                    <div class="flex mt-3 -mx-2">
                    </div>
                </div>

                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                    <img class="object-cover w-full rounded-xl aspect-square" src="image/ceo.jpg" alt="">
                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Alzahara Dubai
                    </h1>
                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">CEO</p>
                    <div class="flex mt-3 -mx-2">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <h1 class="text-center text-accent-tertiary font-bold text-[35px] mb-6 "> Our Clients</h1>
        <div class="owl-carousel owl-theme bg-grey mt-6">
            <div class="item"><img src="image/owl1.png"></div>
            <div class="item"><img src="image/owl2.png"></div>
            <div class="item"><img src="image/owl3.png"></div>
            <div class="item"><img src="image/owl1.png"></div>
            <div class="item"><img src="image/owl2.png"></div>
            <div class="item"><img src="image/owl3.png"></div>
            <div class="item"><img src="image/owl1.png"></div>
            <div class="item"><img src="image/owl2.png"></div>
            <div class="item"><img src="image/owl3.png"></div>
            <div class="item"><img src="image/owl1.png"></div>
            <div class="item"><img src="image/owl2.png"></div>
            <div class="item"><img src="image/owl3.png"></div>
        </div>
    </section>
    <section class="services flex justify-center mb-6 bg-grey">
        <div class="bg-white rounded-3xl shadow-custom2 w-[80%] flex ">
            <div class="container mx-auto">
                <div class="services__top items-center xl:mb-[60px]">
                    <h2 class="xl:text-[40px] text-[18px] text-secondary xl:mt-2 flex justify-center py-4">
                        Our Current Vacancies
                    </h2>

                    @if ($jobs->isNotEmpty())
                        <div class="your-jobs-container flex space-x-80">
                            @foreach ($jobs as $job)
                                <div class="job-info">
                                    <p class="job-title">Job title: <span
                                            class="text-accent">{{ $job->job_title }}</span></p>
                                    <p class="vacancies">Vacancies: <span
                                            class="text-accent">{{ $job->male_required + $job->female_required }}</span>
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-accent">No jobs are currently available.</p>
                    @endif

                    <div class="stats__item flex-1 flex flex-col xl:flex items-center cursor-pointer ">
                        <a href="/vacancies" wire:navigate>
                            <p class="text-accent mt-10">Read more...</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service sm:hidden md:block items-center justify-center w-full"
             style="background-image: url('image/desert.png')">
        <h2 class="xl:text-[40px] text-[18px] text-secondary xl:mt-2 flex justify-center py-4">
            Our Services
        </h2>
        <div class="containers flex flex-wrap">
            <div
                class="card relative w-full md:w-1/3 lg:w-1/4 xl:w-1/4 bg-white m-30 mx-10 p-20 pb-15 flex flex-col shadow-md transition-transform duration-300 ease-in-out rounded-15 hover:h-[320px]">
                <div class="image relative w-260 h-260 top-neg-40 left-8 shadow-md z-10">
                    <img class="max-w-full rounded-15" href="#"
                         src="https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg">
                </div>
                <div
                    class="content relative top-neg-140 pt-32 text-center text-black visibility-hidden opacity-0 transition-opacity duration-300 ease-in-out">
                    <p class="text-[16px] font-medium text-emerald-700">Documentation</p>
                    <p class="leading-4 text-[10px]">DIn publishing and graphic design, Lorem ipsum is a placeholder
                        text commonly used to demonstrate the visual form of a document or a typeface without relying on
                        meaningful content.</p>
                </div>
            </div>
            <div
                class="card relative w-full md:w-1/3 lg:w-1/4 xl:w-1/4 bg-white m-30 mx-10 p-20 pb-15 flex flex-col shadow-md transition-transform duration-300 ease-in-out rounded-15 hover:h-[320px]">
                <div class="image relative w-260 h-260 top-neg-40 left-8 shadow-md z-10">
                    <img class="max-w-full rounded-15" href="#"
                         src="https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg">
                </div>
                <div
                    class="content relative top-neg-140 pt-32 text-center text-black visibility-hidden opacity-0 transition-opacity duration-300 ease-in-out">
                    <p class="text-[16px] font-medium text-emerald-700">Documentation</p>
                    <p class="leading-4 text-[10px]">DIn publishing and graphic design, Lorem ipsum is a placeholder
                        text commonly used to demonstrate the visual form of a document or a typeface without relying on
                        meaningful content.</p>
                </div>
            </div>
            <div
                class="card relative w-full md:w-1/3 lg:w-1/4 xl:w-1/4 bg-white m-30 mx-10 p-20 pb-15 flex flex-col shadow-md transition-transform duration-300 ease-in-out rounded-15 hover:h-[320px]">
                <div class="image relative w-260 h-260 top-neg-40 left-8 shadow-md z-10">
                    <img class="max-w-full rounded-15" href="#"
                         src="https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg">
                </div>
                <div
                    class="content relative top-neg-140 pt-32 text-center text-black visibility-hidden opacity-0 transition-opacity duration-300 ease-in-out">
                    <p class="text-[16px] font-medium text-emerald-700">Documentation</p>
                    <p class="leading-4 text-[10px]">DIn publishing and graphic design, Lorem ipsum is a placeholder
                        text commonly used to demonstrate the visual form of a document or a typeface without relying on
                        meaningful content.</p>
                </div>
            </div>
        </div>
<<<<<<< Updated upstream
        <a href="/services">
            <p class="text-accent text-center mb-4 cursor-pointer">read more...</p>
        </a>
=======
        <p class="text-accent text-center mb-4 cursor-pointer">read more...</p>
    </section>
    
    <section class="our-team py-32 text-center bg-grey">
        <h2 class="mb-12 text-3xl font-bold">
            Meet the <u class="text-primary dark:text-primary-400">team</u>
        </h2>

        <div class="lg:gap-xl-12 grid gap-x-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="mb-12 lg:mb-0">
                <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).jpg" alt="avatar" />
                <h5 class="mb-4 text-lg font-bold">Alan Turing</h5>
                <p class="mb-6">Frontend Developer</p>
                <ul class="mx-auto flex list-inside justify-center">
                    <a href="#!" class="px-2">
                        <!-- GitHub -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-4 w-4 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <a href="#!" class="px-2">
                        <!-- Twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-4 w-4 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#!" class="px-2">
                        <!-- Linkedin -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg>
                    </a>
                </ul>
            </div>
            <div class="mb-12 lg:mb-0">
                <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).jpg" alt="avatar" />
                <h5 class="mb-4 text-lg font-bold">Veronica Smith</h5>
                <p class="mb-6">Backend Developer</p>
                <ul class="mx-auto flex list-inside justify-center">
                    <a href="#!" class="px-2">
                        <!-- GitHub -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-4 w-4 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <a href="#!" class="px-2">
                        <!-- Twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-4 w-4 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#!" class="px-2">
                        <!-- Linkedin -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg>
                    </a>
                </ul>
            </div>
            <div class="mb-12 md:mb-0">
                <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).jpg" alt="avatar" />
                <h5 class="mb-4 text-lg font-bold">Tom Johnson</h5>
                <p class="mb-6">Digital Marketing Analyst</p>
                <ul class="mx-auto flex list-inside justify-center">
                    <a href="#!" class="px-2">
                        <!-- Facebook -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary dark:text-primary-400"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                    <a href="#!" class="px-2">
                        <!-- Twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-4 w-4 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#!" class="px-2">
                        <!-- Linkedin -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg>
                    </a>
                </ul>
            </div>
            <div class="mb-12 md:mb-0">
                <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).jpg" alt="avatar" />
                <h5 class="mb-4 text-lg font-bold">Emma Lovelace</h5>
                <p class="mb-6">Web Designer</p>
                <ul class="mx-auto flex list-inside justify-center">
                    <a href="#!" class="px-2">
                        <!-- Dribbble -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-4 w-4 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M12 0c-6.628 0-12 5.373-12 12s5.372 12 12 12 12-5.373 12-12-5.372-12-12-12zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073-.244-.563-.497-1.125-.767-1.68 2.31-1 4.165-2.358 5.548-4.082 1.35 1.594 2.197 3.619 2.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68-1.016-1.861-2.178-3.676-3.488-5.438.779-.197 1.591-.314 2.431-.314 2.275 0 4.368.779 6.043 2.072zm-10.516-.993c1.331 1.742 2.511 3.538 3.537 5.381-2.43.715-5.331 1.082-8.684 1.105.692-2.835 2.601-5.193 5.147-6.486zm-5.44 8.834l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48-1.432-1.719-2.296-3.927-2.296-6.334zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027.928 2.42 1.609 4.91 2.043 7.46-3.349 1.291-6.953.666-9.641-1.433zm11.586.43c-.438-2.353-1.08-4.653-1.92-6.897 1.876-.265 3.94-.196 6.199.196-.437 2.786-2.028 5.192-4.279 6.701z" />
                        </svg>
                    </a>
                    <a href="#!" class="px-2">
                        <!-- Linkedin -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg>
                    </a>
                    <a href="#!" class="px-2">
                        <!-- Instagram -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-4 w-4 text-primary dark:text-primary-400">
                            <path fill="currentColor"
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </ul>
            </div>
        </div>
        <button class="select-none rounded-lg bg-emerald-700 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">type="button"></button>
>>>>>>> Stashed changes
    </section>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoPlayTimeout: 500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <script type="text/javascript">
        document.addEventListener('livewire:navigated', function() {
            let currentSlide = 0;
            const slides = document.querySelectorAll('.carousel-item');

            const showSlide = (n) => {
                if (n >= slides.length) {
                    currentSlide = 0;
                } else if (n < 0) {
                    currentSlide = slides.length - 1;
                } else {
                    currentSlide = n;
                }

                slides.forEach((slide, index) => {
                    if (index === currentSlide) {
                        slide.style.display = 'block';

                        slide.classList.add('animate__animated', 'animate__slideInRight');
                    } else {
                        slide.style.display = 'none';
                        slide.classList.remove('animate__animated',
                            'animate__slideInLeft');
                    }
                });
            }
            const nextSlide = () => {
                showSlide(currentSlide + 1);
            }
            const prevSlide = () => {
                showSlide(currentSlide - 1);
            }

            const autoSlide = () => {
                nextSlide();
            }

            setInterval(autoSlide, 3000);

            document.addEventListener('DOMContentLoaded', () => {
                setTimeout(() => {
                    showSlide(currentSlide);
                }, 1);
            });
        })
    </script>
    <script>
        const counterAnim = (qSelector, start = 0, end, duration = 1000) => {
            const target = document.querySelector(qSelector);
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                target.innerText = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        document.addEventListener("livewire:navigated", () => {
            counterAnim("#count1", 10, 12000, 1000, 200);
            counterAnim("#count2", 500, 2, 2500);
            counterAnim("#count3", 500, 50, 1500);
            counterAnim("#count4", 500, 12, 2500);
        });
    </script>
</div>
