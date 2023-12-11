<div>
    <livewire:navigation/>
       <livewire:web-livewire/>
    <section class="hero bg-grey py-18  xl:pt-24 xl:pb-0 overflow-hidden">
        <div class="container mx-auto h-full">
            <div class="flex flex-col xl:flex-row items-center justify-between  h-full">
                <div class="hero__text lg:w-[48%] text-center xl:text-left">
                    <h1 class="font-bold text-[35px] mb-6">WELCOME</h1>
                    <p class="md:max-w-xl">We Alzaharahr Overseas Pvt. Ltd with government of Nepal license no 817/066/067 based in Kathmandu, Nepal, are happy to introduce ourselves and delighted to know about your esteemed organization. We have been achieving success and profitability in providing manpower needs for our clients in UAE, Malaysia, Qatar, Bahrain, Saudi Arabia and other Gulf countries and Europe.</p>
                    <button class="text-accent"><a href="/about-us" wire:navigate>Read More</a></button>
                    <button class="btn btn-lg btn-accent mt-8"><a href="/contacts" wire:navigate>Contact Us</a></button>

                </div>
                    <div class="hero__img hidden xl:flex max-w-[814px] self-end">
                        <img src="image/img.png" alt="error loading photo " class="w-full">
                    </div>
                </div>
            </div>
    </section>
    <section class="stats section">
        <div class="container mx-auto">
            <div class="flex flex-col xl:flex-row gap-y-6">
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[32px] font-semibold text-accent-tertiary xl:mb-2">
                        +12000
                    </div>
                    <div class="mb-2">
                        Happy Employees
                    </div>
                </div>
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[32px] font-semibold text-accent-tertiary xl:mb-2">
                        2
                    </div>
                    <div class="mb-2">
                        Total Branches
                    </div>
                </div>
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[32px] font-semibold text-accent-tertiary xl:mb-2">
                        +12
                    </div>
                    <div class="mb-2">
                        Years of Experience
                    </div>
                </div>
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[32px] font-semibold text-accent-tertiary xl:mb-2">
                        +50
                    </div>
                    <div class="mb-2">
                        Consultants
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services flex justify-center mb-6">
        <div class="bg-white rounded-3xl shadow-custom2 w-[80%] flex ">
            <div class="container mx-auto">
                <div class="services__top  items-center   xl:mb-[60px]">
                    <h2 class="xl:text-[40px] text-[18px] text-secondary xl:mt-2 flex justify-center  py-4">
                        Our Current Vaciencies
                    </h2>
                    <div class="flex flex-col text-[12px] xl:flex-row py-4">
                        <div class="stats__item flex-1 border-r-2 border-l-2 flex flex-col xl:flex items-center">
                            <div class="text-xl text-accent  font-light  xl:mb-2">
                                Job Title :House Keeping
                            </div>
                            <div class="mb-2 xl:text-2xl font-light text-accent">
                                No of Vacancies : 5
                            </div>
                        </div>
                        <div class="stats__item flex-1 border-l-2 border-r-2 flex flex-col xl:flex items-center">
                            <div class="text-2xl text-accent  font-light  xl:mb-2">
                                Job Title :House Keeping
                            </div>
                            <div class="mb-2 xl:text-2xl font-light text-accent">
                                No of Vacancies : 5
                            </div>
                        </div>
                        <div class="stats__item flex-1  border-l-2 border-r flex flex-col xl:flex items-center">
                            <div class="text-2xl text-accent  font-light  xl:mb-2">
                                Job Title :House Keeping
                            </div>
                            <div class="mb-2 xl:text-2xl font-light text-accent">
                                No of Vacancies : 5
                            </div>
                        </div>
                    </div>
                    <div class="stats__item flex-1  flex flex-col xl:flex items-center cursor-pointer">
                        <a href="/vacancies" wire:navigate>
                            <p class="text-accent">read more...</p>

                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="teamThought w-screen">
        <section class="hero bg-grey py-18  xl:pt-24 xl:pb-0 overflow-hidden">
            <div class="container mx-auto h-full">
                <div class="flex flex-col xl:flex-row items-center justify-between  h-full">
                    <div class="w-[50%]">
                        <img src="image/ceo.jpg" alt="error loding photo " class="object-cover">
                    </div>
                    <div class="hero__text lg:w-[48%] text-center xl:text-left ">
                        <h1 class="font-bold text-[35px] border-r-2">Kshitiz Dhungana</h1>
                        <p class="text-secondary mb-6 ">Chairman</p>
                        <p class="md:max-w-xl">I make sure you get the best experience working with us.
                            Bringing together the organization needing such workers for
                            better productions and the pool of goods skilled, unskilled
                            workers and this gap has been successfully bridged by the
                            services provided by S.P.M Overseas Pvt. Ltd.</p>
                        <button class="btn btn-lg btn-accent mt-8 ml-20"><a href="#">Contact Me</a></button>

                    </div>

                </div>
            </div>
        </section>
        <livewire:footer/>
</div>

