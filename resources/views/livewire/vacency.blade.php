<div>
    <livewire:navigation />
    <livewire:web-livewire />

    <div class="container mx-auto mt-4 xl:mt-20">
        <div class="flex justify-center mb-4">
            <h3 class="text-emerald-700 text-2xl font-bold">Vacancies</h3>
        </div>
        @if ($jobs->isNotEmpty())
            @foreach ($jobs as $job)
                <section class="flex justify-center mb-6">
                    <div class="bg-white rounded-3xl shadow-custom2 w-[80%] p-4">
                        <div class="flex items-center ">
                            <div>
                                <img src={{ $job->getFirstMediaUrl('default') }}
                                    class="w-16 h-16 object-cover rounded-full">
                            </div>

                            <div class="ml-4 text-sm leading-normal xl:flex xl:flex-row">
                                <ul class="xl:flex xl:flex-row gap-x-4">
                                    <li class="xl:border-r-2 xl:border-l-2 py-2 px-4">
                                        Job title : {{ $job->job_title }}
                                    </li>
                                    <li class="xl:border-r-2 py-2 px-4">
                                        Job location : {{ $job->location }}
                                    </li>
                                    <li class="xl:border-r-2 py-2 px-4">
                                        Company name : {{ $job->company_name }}
                                    </li>
                                    <li class="xl:border-r-2 py-2 px-4">
                                        Vacancy for male : {{ $job->male_required }}
                                    </li>
                                    <li class="xl:border-r-2 py-2 px-4">
                                        Vacancy for male : {{ $job->female_required }}
                                    </li>
                                    <li class="py-2 px-4">
                                        Minimum Qualification : {{ $job->minimun_qualification }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="border-t-2 mt-4">
                            <span>Job Description:</span>
                            <ul class="list-disc ml-6">
                                @foreach (explode(PHP_EOL, $job->job_description) as $point)
                                    <li class="mb-2">{{ $point }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
            @endforeach
        @else
            <p class="text-center text-accent">No jobs are currently available.</p>
        @endif
    </div>
    <livewire:footer />
</div>
