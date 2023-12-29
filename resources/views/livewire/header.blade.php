    <div class="relative">
        <header class="fixed top-0 z-10 bg-grey shadow-lg">
            <div class="container mx-auto lg:relative flex flex-col lg:flex-row lg:justify-between  lg:gap-0">
                <div class="flex justify-center lg:justify-normal">
                    <a href="#">
                        <img alt="error" src="image/logo%20zahra.png">

                    </a>
                    <h5 class="flex items-center text-emerald-700">Alzahara</h5>
                </div>
                <div class="flex flex-col gap-y-4 lg:flex-row lg:gap-x-10 lg:gap-y-0">
                    <div class="flex justify-center items-center gap-x-2 lg:justify-normal text-secondary">
                        <i class="fa fa-map-marker" aria-hidden="true">
                            {{ $location }}
                        </i>
                    </div>
                    <div class="flex justify-center items-center gap-x-2 lg:justify-normal text-secondary">
                        <i class="fa fa-phone">{{ $contact }}</i>
                    </div>
                    <button class="btn btn-sm btn-outline mt-3 lg:w-auto mx-auto lg:mx-0">
                        <a href="/apply-now" wire:navigate>Apply now</a>
                    </button>
                </div>

            </div>
            <nav class="  bg-white w-screen left-0  shadow-custom1 h-16 rounded-[10px] hidden lg:flex lg:items-center lg:justify-between lg:px-[50px]">

                <ul class="container flex  gap-x-4 justify-center">
                    <li>
                        <a href="/" class="menu-item text-secondary hover:text-accent transition-all duration-300 border-r pr-4 " onclick="setActiveLink(this)" wire:navigate>Home</a>
                    </li>
                    <li>
                        <a href="/about-us" class="menu-item text-secondary hover:text-accent transition-all duration-300 border-r pr-4 " onclick="setActiveLink(this)" wire:navigate>About</a>
                    </li>
                    <li>
                        <a href="/services" class="menu-item text-secondary hover:text-accent transition-all duration-300 border-r pr-4 " onclick="setActiveLink(this)" wire:navigate>Services</a>
                    </li>
                    <li>
                        <a href="/events"
                            class= "menu-item text-secondary hover:text-accent transition-all duration-300 border-r pr-4 "
                            onclick="setActiveLink(this)" wire:navigate>Events</a>
                    </li>
                    <li>
                        <a href="/contacts" class="menu-item text-secondary hover:text-accent transition-all duration-300 border-r pr-4 " onclick="setActiveLink(this)" wire:navigate>Contacts</a>
                    </li>
                    <li>
                        <a href="/vacancies" class="menu-item text-secondary hover:text-accent transition-all duration-300 border-r pr-4 " onclick="setActiveLink(this)" wire:navigate>Vacancy</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>