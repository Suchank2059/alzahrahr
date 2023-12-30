<div>
    <livewire:navigation />
    <livewire:web-livewire />
    <div class="container my-24 mx-auto md:px-6">
        <section class="mb-32">
            <style>
                .zoom:hover img {
                    transform: scale(1.1);
                }
            </style>
            <h2 class="mb-12 lg:mt-44 text-center text-3xl font-bold">Latest Events</h2>
            <div class="grid gap-6 lg:grid-cols-3">
                @forelse ($events as $event)
                    <div class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                        data-te-ripple-init data-te-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/051.jpg"
                            class="w-full align-middle transition duration-300 ease-linear" />
                        <a href="/photos/{{ $event->id }}" wire:navigate>
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
                                <div class="flex h-full items-end justify-start">
                                    <div class="m-6 text-white">
                                        <h5 class="mb-3 text-lg font-bold text-emerald-700">{{ $event->name }}</h5>
                                        <p>
                                            <small>{{ $event->description }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]">
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No events available</p>
                @endforelse
            </div>
        </section>
    </div>
</div>
