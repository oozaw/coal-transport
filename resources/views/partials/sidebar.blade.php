<div id="hs-application-sidebar"
   class="hs-overlay  [--auto-close:lg]
            hs-overlay-open:translate-x-0
            -translate-x-full transition-all duration-300 transform
            w-[260px] h-full
            hidden
            fixed inset-y-0 start-0 z-[60]
            bg-white border-e border-gray-200
            lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
        "
   role="dialog" tabindex="-1" aria-label="Sidebar">
   <div class="relative flex flex-col h-full max-h-full">
      <div class="px-6 pt-4 flex items-center">
         <!-- Logo -->
         <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
            href="/dashboard" aria-label="Preline">
            <h1 class="text-blue-600 font-bold">Coal Transport</h1>
         </a>
         <!-- End Logo -->

         <div class="hidden lg:block ms-2">

         </div>
      </div>

      <!-- Content -->
      <div
         class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
         <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="flex flex-col space-y-1">
               <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                     href="#">
                     <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                     </svg>
                     Dashboard
                  </a>
               </li>

               <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                     href="#">
                     <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                     </svg>
                     Users
                  </a>
               </li>

               <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                     href="#">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
                     Vehicles
                  </a>
               </li>

               <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                     href="#">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-route"><circle cx="6" cy="19" r="3"/><path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"/><circle cx="18" cy="5" r="3"/></svg>
                     Routes
                  </a>
               </li>

               <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                     href="#">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-up"><path d="m3 16 4 4 4-4"/><path d="M7 20V4"/><path d="m21 8-4-4-4 4"/><path d="M17 4v16"/></svg>
                     Transports
                  </a>
               </li>
            </ul>
         </nav>
      </div>
      <!-- End Content -->
   </div>
</div>
