<div class="h-screen w-screen bg-gray-200 ">



  <livewire:navigation />
  <livewire:web-livewire />
  <nav class="flex justify-content-center xl:mt-32 px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class=" items-center">
        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
          </svg>
          Home
        </a>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Service</span>
        </div>
      </li>
    </ol>
  </nav>

  <!--====== SERVICES PART START ======-->
  <div class="  md:px-10  py-12 font-[sans-serif] ">
    <div class="max-md:max-w-lg mx-auto">
      <h2 class="  text-2xl text-center text-emerald-700 font-extrabold mb-10">Our Services</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="  rounded-lg bg-white overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
          <img src="https://readymadeui.com/cardImg.webp" alt="Blog Post 1" class="w-full h-64 object-cover" />
          <div class="p-2">
            <div class='flex items-center justify-center ' x-data="{ reportsOpen: false }">
              <div class='w-full max-w-lg  mx-auto bg-white rounded-lg shadow-xl'>
                <div class='max-w-md mx-auto space-y-6'>
                  <p class='text-emerald-800 font-bold text-lg'>Documentation service</p>
                  <div @click="reportsOpen = !reportsOpen" class='flex items-center text-emerald-600 w-full border-b overflow-hidden mt-32 md:mt-0 mb-5 mx-auto'>
                    <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                      </svg>
                    </div>
                    <div class='flex items-center  py-3'>
                      <div class='mx-3'>
                        <button class="hover:underline">This is where you click to open</button>
                      </div>
                    </div>
                  </div>

                  <div class="flex p-5 md:p-0 w-full transform transition text-emerald-700 duration-300 ease-in-out border-b pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                    Requirement of documents vary from country to country. Documents requirements also depend on whether the embassy of manpower importing has a diplomatic mission in Nepal or not. Basically, we demand two types of documents before making a final deal for sending workers overseas. We follow the in-detail government provisions to avoid unnecessary hassles to the workers.

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="  rounded-lg bg-white overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
          <img src="https://readymadeui.com/cardImg.webp" alt="Blog Post 1" class="w-full h-64 object-cover" />
          <div class="p-2">
            <div class='flex items-center justify-center ' x-data="{ reportsOpen: false }">
              <div class='w-full max-w-lg  mx-auto bg-white rounded-lg shadow-xl'>
                <div class='max-w-md mx-auto space-y-6'>
                  <p class='text-emerald-800 font-bold text-lg'>Deployment</p>
                  <div @click="reportsOpen = !reportsOpen" class='flex items-center text-emerald-600 w-full border-b overflow-hidden mt-32 md:mt-0 mb-5 mx-auto'>
                    <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                      </svg>
                    </div>
                    <div class='flex items-center  py-3'>
                      <div class='mx-3'>
                        <button class="hover:underline">This is where you click to open</button>
                      </div>
                    </div>
                  </div>

                  <div class="flex p-5 md:p-0 w-full transform transition text-emerald-700 duration-300 ease-in-out border-b pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                    After the restoration of democracy, Nepal increased its bilateral relationships through the opening of embassies or consular offices where there had not been one, which thus expanded the horizon of employment opportunities for Nepali workers. The prospect of relatively more lucrative work in foreign countries has increasingly appealed to Nepalese as it has to many other Asian migrant workers.

                    Manpower Agencies in Nepal are one of the largest start-ups and have been in the forefront of the recruitment industry. To maintain the manpower supply in the diverse range in the market, the agencies have to maintain a level of status to deliver a quality service with highly motivational approach to recruitment.


                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="  rounded-lg bg-white overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
          <img src="https://readymadeui.com/cardImg.webp" alt="Blog Post 1" class="w-full h-64 object-cover" />
          <div class="p-2">
            <div class='flex items-center justify-center ' x-data="{ reportsOpen: false }">
              <div class='w-full max-w-lg  mx-auto bg-white rounded-lg shadow-xl'>
                <div class='max-w-md mx-auto space-y-6'>
                  <p class='text-emerald-800 font-bold text-lg'>Overseas Recruitment</p>
                  <div @click="reportsOpen = !reportsOpen" class='flex items-center text-emerald-600 w-full border-b overflow-hidden mt-32 md:mt-0 mb-5 mx-auto'>
                    <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                      </svg>
                    </div>
                    <div class='flex items-center  py-3'>
                      <div class='mx-3'>
                        <button class="hover:underline">This is where you click to open</button>
                      </div>
                    </div>
                  </div>

                  <div class="flex p-5 md:p-0 w-full transform transition text-emerald-700 duration-300 ease-in-out border-b pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                    For people working in competitive industries such as construction, engineering, security, Oil & Gas, hospitality, it’s important to consider how an overseas recruitment and overseas projects could benefit their careers in the long term. Although Nepal market is growing and creating an opportunities for its people, yet it is important to get explored to global market with new challenges.
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>

      </div>