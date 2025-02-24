@extends('layout.app')

@section('content')
   <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
      <!-- Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
         <!-- Card -->
         <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
               <div class="flex items-center gap-x-2">
                  <p class="text-xs uppercase tracking-wide text-gray-500">
                     Total Driver
                  </p>
                  <div class="hs-tooltip">
                     <div class="hs-tooltip-toggle">
                        <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                           width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                           stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <circle cx="12" cy="12" r="10"></circle>
                           <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                           <path d="M12 17h.01"></path>
                        </svg>
                        <span
                           class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700"
                           role="tooltip"
                           style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(61.6px, -583.2px, 0px);"
                           data-popper-placement="top">
                           The number of active drivers
                        </span>
                     </div>
                  </div>
               </div>

               <div class="mt-1 flex items-center gap-x-2">
                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                     {{ $drivers->count() }}
                  </h3>
               </div>
            </div>
         </div>
         <!-- End Card -->

         <!-- Card -->
         <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
               <div class="flex items-center gap-x-2">
                  <p class="text-xs uppercase tracking-wide text-gray-500">
                     Total Vehicle
                  </p>
               </div>

               <div class="mt-1 flex items-center gap-x-2">
                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                     {{ $vehicles->count() }}
                  </h3>
               </div>
            </div>
         </div>
         <!-- End Card -->

         <!-- Card -->
         <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
               <div class="flex items-center gap-x-2">
                  <p class="text-xs uppercase tracking-wide text-gray-500">
                     Total Route
                  </p>
               </div>

               <div class="mt-1 flex items-center gap-x-2">
                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                     {{ $routes->count() }}
                  </h3>
               </div>
            </div>
         </div>
         <!-- End Card -->

         <!-- Card -->
         <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
               <div class="flex items-center gap-x-2">
                  <p class="text-xs uppercase tracking-wide text-gray-500">
                     Total Transport
                  </p>
                  <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                       <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                          width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="10"></circle>
                          <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                          <path d="M12 17h.01"></path>
                       </svg>
                       <span
                          class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700"
                          role="tooltip"
                          style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(61.6px, -583.2px, 0px);"
                          data-popper-placement="top">
                          The number of on-going coal tranportation
                       </span>
                    </div>
                 </div>
               </div>

               <div class="mt-1 flex items-center gap-x-2">
                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                     {{ $transports->where('status', 'in transit')->count() }}
                  </h3>
               </div>
            </div>
         </div>
         <!-- End Card -->
      </div>
      <!-- End Grid -->
   </div>
@endsection
