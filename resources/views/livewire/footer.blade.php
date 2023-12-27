<div>
    <footer class="footer pt-12 xl:pt-[50px] mt-auto">
        <div class="container mx-auto flex flex-wrap justify-between">
            <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 mb-6">
                <h3 class="text-lg font-bold mb-3">Office 1</h3>
                {{-- <p>
                    <i class="fa fa-map-marker mr-2"></i>
                    @if ($location)
                        {{ $location }}
                    @else
                        No llocation to show
                    @endif
                </p> --}}
                <p>Cityville, State 12345</p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 mb-6">
                <h3 class="text-lg font-bold mb-3">Office 2</h3>
                <p><i class="fa fa-map-marker mr-2"></i>456 Oak Avenue</p>
                <p>Townsville, State 67890</p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 mb-6">
                <h3 class="text-lg font-bold mb-3">Contact Us</h3>
                <p><i class="fa fa-envelope mr-2"></i>Email: {{ $email }}</p>
                <p><i class="fa fa-phone mr-2"></i>Phone: {{ $primary_contact }}</p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 mb-6">
                <h3 class="text-lg font-bold mb-3">Map</h3>
                <!-- Replace the following iframe with your actual map embed code -->
                {{-- <a href="#"><img src="image/map.png" alt="error loading map" width="100%" height="200"
                        style="border:0;" allowfullscreen=""></a> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.380540846576!2d85.32091627561093!3d27.70553457618367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1973c96e0cd5%3A0xdbb28c517dd06bfb!2sEmperor%20Education%20Network!5e0!3m2!1sen!2snp!4v1688623817693!5m2!1sen!2snp"
                    height="300" class="w-full">
                </iframe>
            </div>
        </div>
        <div class="text-center mt-8 mb-0">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>
</div>
