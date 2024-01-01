<div>
    <livewire:navigation />
    <livewire:web-livewire />

    <div class="mx-auto mt-4 xl:mt-32 p-10">
        <div class="flex justify-center mb-4">
            <h3 class="text-emerald-800 text-[20px] ">Vacancies</h3>
        </div>
        @foreach ($jobs as $job)
            <section class="flex justify-center mb-6 w-full  border-4 border-dashed rounded-lg border-emerald-500 shadow-lg">
                <div class="bg-white rounded-3xl shadow-custom2 w-full p-4">
                    <div class="w-full">

                        <div class="ml-4 text-sm leading-normal xl:flex xl:flex-row">
                            <ul class="w-full">
                                <li class="py-2 border-t-2 border-dotted">
                                    <img src={{ $job->getFirstMediaUrl() }} alt="image"
                                        class="h-72 w-full object-cover">
                                    <div
                                        class="bg-white shadow-xl shadow-gray-400 w-full max-w-full flex flex-col sm:flex-row gap-3 sm:items-center justify-between px-5 py-4 rounded-md">
                                        <div class="flex flex-col">
                                            <p class="text-emerald-800 text-[20px]">Job title :
                                                <span class="text-secondary">{{ $job->job_title }}</span>
                                            </p>
                                            <p class="text-emerald-800 text-[20px]" mt-3">
                                                Job location :
                                                <span class="text-secondary">{{ $job->location }}</span>
                                            </p>
                                        </div>
                                        <div>
                                            <a href="/apply-now"
                                                class="bg-purple-900 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center"
                                                wire:navigate>

                                                Apply Now
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex gap-x-6">
                            <p class="text-emerald-800 mt-8 text-[20px]">
                                Required Total Employees:
                                <span class="text-secondary">
                                    {{ $job->male_required + $job->female_required }} (<span
                                        class="text-emerald-800 mt-8 text-[20px]"">Male required
                                        : </span>{{ $job->male_required }}
                                    <span><span class="text-emerald-800 mt-8 text-[20px]"">Female required :
                                        </span>{{ $job->female_required }}</span>)
                                </span>
                            </p>
                            <p class="text-emerald-800 mt-8 text-[20px] ">
                                Salary:
                                <span class="text-secondary">{{ $job->salary }}</span>
                            </p>
                            <p class="text-emerald-800 mt-8 text-[20px] ">
                                Min. Qualification:
                                <span class="text-secondary">{{ $job->minimun_qualification }}</span>
                            </p>
                        </div>
                        <div class="border-t-2 mt-4">
                            <span class="text-emerald-800 text-[20px]">Job Description:</span>
                            <ul class="list-disc ml-6">
                                @foreach (explode(PHP_EOL, $job->job_description) as $point)
                                    <li class="mb-2">{{ $point }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
</div>
