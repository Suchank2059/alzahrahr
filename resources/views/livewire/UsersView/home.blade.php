<div>
<body class="w-screen h-screen">
    <div class="w-screen flex items-center justify-center font-serif text-emerald-900">
        <img class="mr-4" src="image/logo%20zahra.png">
        <div class="leading-3">
            <h1 class="text-4xl">Al Zahara</h1>
            <p class="flex justify-center">Human Resources Consulttancy</p>
        </div>
    </div>
    <div class="border-b border-green-200-200 w-screen  my-4"></div>
    <livewire:navigation />    <div class="flex items-center justify-center">
        <div class="relative overflow-hidden w-full">
            <div class="carousel" id="myCarousel">
                <div class="carousel-inner">
                    <div class="carousel-item relative">
                        <img src="image/cr3.png" alt="Slide 1">
                        <div class="absolute top-2  text-white w-screen flex justify-center items-center">
                            <p class="text-base flex justify-center" >Our offices</p>
                        </div>
                    </div>
                    <div class="carousel-item relative">
                        <img src="image/cr2.png" alt="Slide 2">
                        <div class="absolute top-2  text-white w-screen flex justify-center items-center">
                            <p class="text-base flex justify-center" >Our offices</p>
                        </div>
                    </div>
                    <div class="carousel-item relative">
                        <img src="image/cr1.png" alt="Slide 3">
                        <div class="absolute top-2  text-white w-screen flex justify-center items-center">
                            <p class="text-base flex justify-center" >Our offices</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="absolute top-1/2 left-8  -translate-y-1/2 bg-gradient-to-r from-emerald-500 to-emerald-700 hover:from-emerald-700 hover:to-emerald-900 text-white font-bold py-1 px-4 rounded-full transition-transform transform hover:scale-105 focus:outline-none focus:ring focus:border-emerald-700 opacity-40">
                    Nepal
                </a>

                <button class="absolute top-1/2 right-8  -translate-y-1/2 bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-700 hover:to-blue-900 text-white font-bold py-1 px-4 rounded-full transition-transform transform hover:scale-105 focus:outline-none focus:ring focus:border-blue-700 opacity-40">
                    Dubai
                </button>
                <button class="absolute top-1/2 transform -translate-y-1/2 left-2 carousel-control prev text-blue-50 hover:text-emerald-700" onclick="prevSlide()">&#10094;</button>
                <button class="absolute top-1/2 transform -translate-y-1/2 right-2 carousel-control next" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>
    </div>
    <div class="flex w-screen h-1/4">
        <div class="px-3 py-4 w-1/2 bg-emerald-950 opacity-70 flex justify-center items-center text-lime-50">
            About US
        </div>
        <div class="px-3 py-4  text-[11px] w-1/2 bg-gray-50  justify-center">
            <p>Get to Know Us
                Al Zahra Human Resource Consultancy was established in 2001 by Mr Abbas Mohammed </p>
            <a><h5 class="text-blue-900">read more</h5></a>
        </div>
    </div>
    <div class="flex  w-screen h-1/4">
        <div class="w-1/2">
            <img class="object-cover h-full" src="image/landing.png">
        </div>
        <div class="w-1/2 text-[11px] bg-emerald-950 opacity-70 text-lime-50">
            <ul>
                <li class=" relative before:content-['\2605'] font-bold before:text-[14px] text-[14px] px-3">Recruitment services</li>
                <p class=" px-4">Creating recruitment strategies and hiring the right talent, both in the UAE and abroad.</p>
                <li class=" relative before:content-['\2605'] font-bold before:text-[14px] text-[14px] px-3">Recruitment services</li>
                <p class=" px-4">Creating recruitment strategies and hiring the right talent, both in the UAE and abroad.</p>
                <li class=" relative before:content-['\2605'] font-bold before:text-[14px] text-[14px] px-3">Recruitment services</li>
                <p class=" px-4">Creating recruitment strategies and hiring the right talent, both in the UAE and abroad.</p>
            </ul>
        </div>
    </div>
    <div class="h-20 w-screen  flex px-4">
        <h1 class="text-[18px] flex justify-center items-center px-3 mr-4">Clients</h1>
        <img src="image/client1.webp" alt="error" class="flex justify-center items-center w-1/4 h-3/4" >
        <img src="image/trojanlogo_edited_edited.webp" alt="error" class="flex justify-center items-center w-1/4 h-3/4">
        <img src="image/client3.webp" alt="error" class="flex justify-center items-center w-1/4 h-3/4">
    </div>
    <div class="h-28 text-white w-screen bg-emerald-950 opacity-70 px-14 flex text-[7px]">
        <div class="w-1/3">
            <h3>Address :</h3>
            <h4>Dubai :</h4>
            <p>Prime Tower, Business Bay, Dubai United Arab Emirates
                P.O. Box: 111591, Dubai, UAE</p>
            <h4>Nepal :</h4>
            <p>Bhimsengola, Kathmamandu, Bagmati
                P.O. Box: 111591, Kathmandu, NEPAL</p>

        </div>
        <div class="w-1/3">
            <h3> Contact Us</h3>
            <p>+977 15648454
            inf0@nkgsk@mail.com
            kanfk;snfk;@fsadf.com</p>
        </div>
        <div class="w-1/3">

        </div>
    </div>

    <div class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </div>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');

        function showSlide(n) {
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
                } else {
                    slide.style.display = 'none';
                }
            });
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        function autoSlide() {
            nextSlide();
        }

        setInterval(autoSlide, 3000); // Change 3000 to the desired interval in milliseconds

        document.addEventListener('DOMContentLoaded', function () {
            showSlide(currentSlide);
        });
    </script>

</body>
</html>
</div>

