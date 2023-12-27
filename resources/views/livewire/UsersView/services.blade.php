<div class="h-screen w-screen bg-gray-200 ">     
  


<livewire:navigation />
<livewire:web-livewire />
<nav class="flex justify-content-center px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
  <ol class="flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
    <li class=" items-center">
      <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
        Home
      </a>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Service</span>
      </div>
    </li>
  </ol>
</nav>
       
 <!--====== SERVICES PART START ======-->
 <div class="bg-gray-100 md:px-10 px-4 py-12 font-[sans-serif]">
      <div class="max-md:max-w-lg mx-auto">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-10">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-gradient-to-b from-indigo-800 to-indigo-600 text-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
            <img src="https://readymadeui.com/cardImg.webp" alt="Blog Post 1" class="w-full h-64 object-cover" />
            <div class="p-2">
            <div class='flex items-center justify-center  from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br' x-data="{ reportsOpen: false }">
    <div class='w-full max-w-lg  mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>
            <img src='https://tailwindcomponents.com/svg/logo-color.svg' class='h-8' />
    
            <p class='text-gray-600'></p>
    
            <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden mt-32 md:mt-0 mb-5 mx-auto'>
            <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>          
            </div>
            <div class='flex items-center px-2 py-3'>
            <div class='mx-3'>
                <button class="hover:underline">This is where you click to open</button>
            </div>
            </div>
            </div>

            <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
            x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
            This is a very simple dropdown/accordion/collapse (whatever you call it) using Tailwind, Alpine.js, and the Alpine.js plugin "Collapse" to enable smoother open/collapse transitions than what comes out of the box with Alpine.js
            </div>

        </div>
    </div>
</div>
            </div>
          </div>
          <div class="bg-gradient-to-b from-purple-800 to-purple-600 text-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
            <img src="https://readymadeui.com/hotel-img.webp" alt="Blog Post 2" class="w-full h-64 object-cover" />
            <div class="p-6">
              <h3 class="text-2xl font-semibold mb-2">Consectetur Adipiscing</h3>
              <p class="text-sm opacity-75">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</p>
              <a href="javascript:void(0);" class="mt-4 inline-block text-pink-200 text-sm hover:underline">Read More</a>
            </div>
          </div>
          <div class="bg-gradient-to-b from-teal-800 to-teal-600 text-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
            <img src="https://readymadeui.com/team-image.webp" alt="Blog Post 3" class="w-full h-64 object-cover" />
            <div class="p-6">
              <h3 class="text-2xl font-semibold mb-2">Lorem Ipsum Sit Amet</h3>
              <p class="text-sm opacity-75">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</p>
              <a href="javascript:void(0);" class="mt-4 inline-block text-green-200 text-sm hover:underline">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
