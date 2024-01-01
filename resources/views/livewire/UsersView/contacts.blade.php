<div class="">
    <div class="container my-24 mx-auto md:px-6">
        <livewire:navigation />
        <livewire:web-livewire />
        <section class="bg-emerald-100 shadow-lg mt-32" id="contact">
            <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
                <div class="mb-4">
                    <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                        <div class="flex flex-col items-center transform transition-transform hover:scale-110">
                            <img alt="error" src="image/logo%20zahra.png">
                            <p
                                class="font-bold mb-4 tracking-tight text-emerald-700 dark:text-white text-xl sm:text-2xl md:text-3xl lg:text-[23px]">
                                AL ZAHRA HUMAN RESOURCE CONSULTANCY Pvt. Ltd Welcomes You
                            </p>
                        </div>

                        <p
                            class="mx-auto mt-4 max-w-3xl text-base sm:text-xl md:text-2xl lg:text-2xl font-bold text-blue-800 dark:text-slate-400">
                            Get in Touch With Us
                        </p>
                    </div>
                </div>
                <div class="flex items-stretch justify-center">
                    <div class="grid md:grid-cols-2">
                        <div class="h-full pr-6">
                            <p class="mt-3 mb-12 text-lg text-accent dark:text-slate-400">
                                At Al Zahra Human Resource Consultancy, we pride ourselves on delivering unparalleled
                                expertise to our clients. We invite you to experience our services firsthand. Please do
                                not hesitate to contact us to discuss how we can assist you in achieving your goals.
                            </p>
                            <ul class="mb-6 md:mb-0">
                                <li class="flex">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                            <path
                                                d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 mb-4">
                                        <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Our
                                            Address
                                        </h3>
                                        <p class="text-gray-600 dark:text-slate-400"><span
                                                class="text-accent">{{ $location }}</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="flex">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                            <path
                                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                            </path>
                                            <path d="M15 7a2 2 0 0 1 2 2"></path>
                                            <path d="M15 3a6 6 0 0 1 6 6"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 mb-4">
                                        <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">
                                            Contact
                                        </h3>
                                        <p class="text-gray-600 dark:text-slate-400">Contact no : <span
                                                class="text-accent">{{ $primaryContact }}</span>
                                        </p>
                                        <p class="text-gray-600 dark:text-slate-400">Mail: <span
                                                class="text-accent">{{ $company_email }}</span></p>
                                    </div>
                                </li>
                                <li class="flex">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                            <path d="M12 7v5l3 3"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 mb-4">
                                        <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">
                                            Working
                                            hours</h3>
                                        <p class="text-gray-600 dark:text-slate-400">Monday - Friday: 08:00 - 17:00</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                            <h2 class="mb-4 text-2xl font-bold">Ready to Get Started?</h2>
                            {{-- <form wire:submit="contactUs"> --}}
                            <div class="mb-6">
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <div class="mx-0 mb-1 sm:mb-4">
                                        <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label>
                                        <input placeholder="Your name" wire:model="name"
                                            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0">
                                        @error('name')
                                            <div class="text-red-700">
                                                <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mx-0 mb-1 sm:mb-4">
                                        <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label>
                                        <input type="email" placeholder="Your email address" wire:model="email"
                                            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0">
                                        @error('email')
                                            <div class="text-red-700">
                                                <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label>
                                    <textarea wire:model="message" cols="30" rows="5" placeholder="Write your message..."
                                        class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                                    @error('message')
                                        <div class="text-red-700">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <button wire:click="contactUs" wire:loading.attr="disabled"
                                    class="w-full bg-blue-800 text-white px-6 py-3 font-xl rounded-md sm:mb-0 relative">
                                    <span wire:loading wire:target="contactUs"
                                        class="absolute inset-0 flex items-center justify-center">
                                        <svg aria-hidden="true"
                                            class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                            viewBox="0 0 100 101" fill="none">
                                            <path
                                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                fill="currentColor" />
                                            <path
                                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                fill="currentFill" />
                                        </svg>
                                    </span>
                                    Send Message
                                </button>
                                @if (session('success'))
                                    <p class="text-green-700 text-sm mt-2">{{ session('success') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
