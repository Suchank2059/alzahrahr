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
        <div class = "containers flex">
            <div
                class = "card relative max-w-300 h-215 bg-white m-30 mx-10 p-20 pb-15 flex flex-col shadow-md transition-transform duration-300 ease-in-out rounded-15 hover:h-[320px]">
                <div class = "image relative w-260 h-260 top-neg-40 left-8 shadow-md z-10">
                    <img class="max-w-full rounded-15" href = "#"
                        src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div
                    class = "content relative top-neg-140 pt-32 text-center text-black visibility-hidden opacity-0 transition-opacity duration-300 ease-in-out">
                    <p class="text-[16px] font-medium text-emerald-700">Documentation</p>
                    <p class="leading-4 text-[10px]">DIn publishing and graphic design,Lorem ipsum is a placeholder
                        textcommonly used to demonstrate the visual form of a document or a typeface without relying on
                        meaningful content.</p>
                </div>
            </div>
            <div
                class = "card relative max-w-300 h-215 bg-white m-30 mx-10 p-20 pb-15 flex flex-col shadow-md transition-transform duration-300 ease-in-out rounded-15 hover:h-[320px]">
                <div class = "image relative w-260 h-260 top-neg-40 left-8 shadow-md z-10">
                    <img class="max-w-full rounded-15" href = "#"
                        src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div
                    class = "content relative top-neg-140 pt-32 text-center text-black visibility-hidden opacity-0 transition-opacity duration-300 ease-in-out">
                    <p class="text-[16px] font-medium text-emerald-700">Documentation</p>
                    <p class="leading-4 text-[10px]">DIn publishing and graphic design,Lorem ipsum is a placeholder
                        textcommonly used to demonstrate the visual form of a document or a typeface without relying on
                        meaningful content.</p>
                </div>
            </div>
            <div
                class = "card relative max-w-300 h-215 bg-white m-30 mx-10 p-20 pb-15 flex flex-col shadow-md transition-transform duration-300 ease-in-out rounded-15 hover:h-[320px]">
                <div class = "image relative w-260 h-260 top-neg-40 left-8 shadow-md z-10">
                    <img class="max-w-full rounded-15" href = "#"
                        src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div
                    class = "content relative top-neg-140 pt-32 text-center text-black visibility-hidden opacity-0 transition-opacity duration-300 ease-in-out">
                    <p class="text-[16px] font-medium text-emerald-700">Documentation</p>
                    <p class="leading-4 text-[10px]">DIn publishing and graphic design,Lorem ipsum is a placeholder
                        textcommonly used to demonstrate the visual form of a document or a typeface without relying on
                        meaningful content.</p>
                </div>
            </div>

        </div>
        <a href="/services">
            <p class="text-accent text-center mb-4 cursor-pointer">read more...</p>
        </a>
    </section>
    {{-- <section class="our-team py-32 text-center bg-grey">
        <h2 class="mb-12 text-3xl font-bold">
            Meet the <u class="text-primary dark:text-primary-400">team</u>
        </h2>

        <div class="lg:gap-xl-12 grid gap-x-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($members as $member)
                <div class="mb-12 lg:mb-0">
                    <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]"
                        src="{{ $member->getFirstMediaUrl('default') }}" alt="{{ $member->name }} avatar" />
                    <h5 class="mb-4 text-lg font-bold">{{ $member->name }}</h5>
                    <p class="mb-6">{{ $member->post }}</p>
                    <ul class="mx-auto flex list-inside justify-center">
                    </ul>
                </div>
            @endforeach
        </div>
        <a class="h-4 w-6 p-4 rounded-xl bg-red-700  placeholder:More ">Our Teams</a>
    </section> --}}

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
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');

        document.addEventListener('livewire:navigating', showSlide = (n) => {
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
        })

        document.addEventListener('livewire:navigating', nextSlide = () => {
            setTimeout(function() {
                showSlide(currentSlide + 1);
            })
        })
        document.addEventListener('livewire:navigating', prevSlide = () => {
            setTimeout(function() {
                showSlide(currentSlide - 1);
            })
        })

        document.addEventListener('livewire:navigating', autoSlide = () => {
            setTimeout(function() {
                nextSlide();
            })
        })

        setInterval(autoSlide, 3000);

        document.addEventListener('livewire:navigated', () => {
            setTimeout(function() {
                showSlide(currentSlide);
            });
        });
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
