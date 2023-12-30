<div>

    <div class="owl-carousel owl-theme bg-grey lg:py-12">
        @foreach ($companies as $company)
            <div class="flex item-center w-full h-[160px]">
                <img src="{{ $company->getFirstMediaUrl() }}"
                    class="block max-h-[80px] max-w-full rounded-lg object-cover object-center" alt="#">
            </div>
        @endforeach
    </div>
</div>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoPlayTimeout: 50,
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
    });
</script>
