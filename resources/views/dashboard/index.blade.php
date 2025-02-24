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

      <div class="grid lg:grid-cols-2 gap-4 sm:gap-6">
         <!-- Card -->
         <div
            class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl ">
            <!-- Header -->
            <div class="flex justify-between items-center">
               <div>
                  <h2 class="text-sm text-gray-500 ">
                     Income
                  </h2>
                  <p class="text-xl sm:text-2xl font-medium text-gray-800 ">
                     $126,238.49
                  </p>
               </div>

               <div>
                  <span
                     class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 ">
                     <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 5v14"></path>
                        <path d="m19 12-7 7-7-7"></path>
                     </svg>
                     25%
                  </span>
               </div>
            </div>
            <!-- End Header -->

            <div id="hs-multiple-bar-charts" style="min-height: 315px;">
               <div id="apexchartsyq6m8xuj" class="apexcharts-canvas apexchartsyq6m8xuj apexcharts-theme-light"
                  style="width: 870px; height: 300px;"><svg id="SvgjsSvg1833" width="870" height="300"
                     xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                     transform="translate(0, 0)" style="background: transparent;">
                     <foreignObject x="0" y="0" width="870" height="300">
                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;">
                        </div>
                     </foreignObject>
                     <g id="SvgjsG1948" class="apexcharts-yaxis" rel="0"
                        transform="translate(27.149993896484375, 0)">
                        <g id="SvgjsG1949" class="apexcharts-yaxis-texts-g"
                           transform="translate(-30.166671752929688, 0)"><text id="SvgjsText1951"
                              font-family="Inter, ui-sans-serif" x="20" y="31.4" text-anchor="start"
                              dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af"
                              class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan1952">120k</tspan>
                              <title>120k</title>
                           </text><text id="SvgjsText1954" font-family="Inter, ui-sans-serif" x="20"
                              y="89.32520015430451" text-anchor="start" dominant-baseline="auto" font-size="13px"
                              font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan1955">90k</tspan>
                              <title>90k</title>
                           </text><text id="SvgjsText1957" font-family="Inter, ui-sans-serif" x="20"
                              y="147.25040030860902" text-anchor="start" dominant-baseline="auto" font-size="13px"
                              font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan1958">60k</tspan>
                              <title>60k</title>
                           </text><text id="SvgjsText1960" font-family="Inter, ui-sans-serif" x="20"
                              y="205.17560046291354" text-anchor="start" dominant-baseline="auto" font-size="13px"
                              font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan1961">30k</tspan>
                              <title>30k</title>
                           </text><text id="SvgjsText1963" font-family="Inter, ui-sans-serif" x="20" y="263.100800617218"
                              text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400"
                              fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan1964">0</tspan>
                              <title>0</title>
                           </text></g>
                     </g>
                     <g id="SvgjsG1835" class="apexcharts-inner apexcharts-graphical"
                        transform="translate(57.149993896484375, 30)">
                        <defs id="SvgjsDefs1834">
                           <clipPath id="gridRectMaskyq6m8xuj">
                              <rect id="SvgjsRect1838" width="814.8500061035156" height="267.700800617218" x="-10"
                                 y="-18" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                 stroke-dasharray="0" fill="#fff"></rect>
                           </clipPath>
                           <clipPath id="forecastMaskyq6m8xuj"></clipPath>
                           <clipPath id="nonForecastMaskyq6m8xuj"></clipPath>
                           <clipPath id="gridRectMarkerMaskyq6m8xuj">
                              <rect id="SvgjsRect1839" width="806.8500061035156" height="235.70080061721802" x="-2"
                                 y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                 stroke-dasharray="0" fill="#fff"></rect>
                           </clipPath>
                        </defs>
                        <g id="SvgjsG1897" class="apexcharts-grid">
                           <g id="SvgjsG1898" class="apexcharts-gridlines-horizontal">
                              <line id="SvgjsLine1902" x1="0" y1="57.925200154304505" x2="802.8500061035156"
                                 y2="57.925200154304505" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt"
                                 class="apexcharts-gridline"></line>
                              <line id="SvgjsLine1903" x1="0" y1="115.85040030860901" x2="802.8500061035156"
                                 y2="115.85040030860901" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt"
                                 class="apexcharts-gridline"></line>
                              <line id="SvgjsLine1904" x1="0" y1="173.77560046291353" x2="802.8500061035156"
                                 y2="173.77560046291353" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt"
                                 class="apexcharts-gridline"></line>
                           </g>
                           <g id="SvgjsG1899" class="apexcharts-gridlines-vertical"></g>
                           <line id="SvgjsLine1907" x1="0" y1="231.70080061721802" x2="802.8500061035156"
                              y2="231.70080061721802" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                           </line>
                           <line id="SvgjsLine1906" x1="0" y1="1" x2="0"
                              y2="231.70080061721802" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                           </line>
                        </g>
                        <g id="SvgjsG1900" class="apexcharts-grid-borders">
                           <line id="SvgjsLine1901" x1="0" y1="0" x2="802.8500061035156"
                              y2="0" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-gridline"></line>
                           <line id="SvgjsLine1905" x1="0" y1="231.70080061721802" x2="802.8500061035156"
                              y2="231.70080061721802" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-gridline"></line>
                        </g>
                        <g id="SvgjsG1840" class="apexcharts-bar-series apexcharts-plot-series">
                           <g id="SvgjsG1841" class="apexcharts-series" rel="1" seriesName="ChosenxPeriod"
                              data:realIndex="0">
                              <path id="SvgjsPath1846"
                                 d="M 17.452083587646484 231.70180061721803 L 17.452083587646484 187.2924804989179 L 25.452083587646484 187.2924804989179 L 25.452083587646484 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 17.452083587646484 231.70180061721803 L 17.452083587646484 187.2924804989179 L 25.452083587646484 187.2924804989179 L 25.452083587646484 231.70180061721803 Z"
                                 pathFrom="M 17.452083587646484 231.70180061721803 L 17.452083587646484 231.70180061721803 L 25.452083587646484 231.70180061721803 L 25.452083587646484 231.70180061721803 L 25.452083587646484 231.70180061721803 L 25.452083587646484 231.70180061721803 L 25.452083587646484 231.70180061721803 L 17.452083587646484 231.70180061721803 Z"
                                 cy="187.2914804989179" cx="80.35625076293945" j="0" val="23000"
                                 barHeight="44.409320118300116" barWidth="16"></path>
                              <path id="SvgjsPath1848"
                                 d="M 84.35625076293945 231.70180061721803 L 84.35625076293945 146.74484039090476 L 92.35625076293945 146.74484039090476 L 92.35625076293945 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 84.35625076293945 231.70180061721803 L 84.35625076293945 146.74484039090476 L 92.35625076293945 146.74484039090476 L 92.35625076293945 231.70180061721803 Z"
                                 pathFrom="M 84.35625076293945 231.70180061721803 L 84.35625076293945 231.70180061721803 L 92.35625076293945 231.70180061721803 L 92.35625076293945 231.70180061721803 L 92.35625076293945 231.70180061721803 L 92.35625076293945 231.70180061721803 L 92.35625076293945 231.70180061721803 L 84.35625076293945 231.70180061721803 Z"
                                 cy="146.74384039090475" cx="147.26041793823242" j="1" val="44000"
                                 barHeight="84.95696022631327" barWidth="16"></path>
                              <path id="SvgjsPath1850"
                                 d="M 151.26041793823242 231.70180061721803 L 151.26041793823242 125.50560033432645 L 159.26041793823242 125.50560033432645 L 159.26041793823242 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 151.26041793823242 231.70180061721803 L 151.26041793823242 125.50560033432645 L 159.26041793823242 125.50560033432645 L 159.26041793823242 231.70180061721803 Z"
                                 pathFrom="M 151.26041793823242 231.70180061721803 L 151.26041793823242 231.70180061721803 L 159.26041793823242 231.70180061721803 L 159.26041793823242 231.70180061721803 L 159.26041793823242 231.70180061721803 L 159.26041793823242 231.70180061721803 L 159.26041793823242 231.70180061721803 L 151.26041793823242 231.70180061721803 Z"
                                 cy="125.50460033432644" cx="214.1645851135254" j="2" val="55000"
                                 barHeight="106.19620028289158" barWidth="16"></path>
                              <path id="SvgjsPath1852"
                                 d="M 218.1645851135254 231.70180061721803 L 218.1645851135254 121.64392032403947 L 226.1645851135254 121.64392032403947 L 226.1645851135254 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 218.1645851135254 231.70180061721803 L 218.1645851135254 121.64392032403947 L 226.1645851135254 121.64392032403947 L 226.1645851135254 231.70180061721803 Z"
                                 pathFrom="M 218.1645851135254 231.70180061721803 L 218.1645851135254 231.70180061721803 L 226.1645851135254 231.70180061721803 L 226.1645851135254 231.70180061721803 L 226.1645851135254 231.70180061721803 L 226.1645851135254 231.70180061721803 L 226.1645851135254 231.70180061721803 L 218.1645851135254 231.70180061721803 Z"
                                 cy="121.64292032403947" cx="281.06875228881836" j="3" val="57000"
                                 barHeight="110.05788029317856" barWidth="16"></path>
                              <path id="SvgjsPath1854"
                                 d="M 285.06875228881836 231.70180061721803 L 285.06875228881836 123.57476032918296 L 293.06875228881836 123.57476032918296 L 293.06875228881836 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 285.06875228881836 231.70180061721803 L 285.06875228881836 123.57476032918296 L 293.06875228881836 123.57476032918296 L 293.06875228881836 231.70180061721803 Z"
                                 pathFrom="M 285.06875228881836 231.70180061721803 L 285.06875228881836 231.70180061721803 L 293.06875228881836 231.70180061721803 L 293.06875228881836 231.70180061721803 L 293.06875228881836 231.70180061721803 L 293.06875228881836 231.70180061721803 L 293.06875228881836 231.70180061721803 L 285.06875228881836 231.70180061721803 Z"
                                 cy="123.57376032918296" cx="347.9729194641113" j="4" val="56000"
                                 barHeight="108.12704028803506" barWidth="16"></path>
                              <path id="SvgjsPath1856"
                                 d="M 351.9729194641113 231.70180061721803 L 351.9729194641113 113.92056030346555 L 359.9729194641113 113.92056030346555 L 359.9729194641113 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 351.9729194641113 231.70180061721803 L 351.9729194641113 113.92056030346555 L 359.9729194641113 113.92056030346555 L 359.9729194641113 231.70180061721803 Z"
                                 pathFrom="M 351.9729194641113 231.70180061721803 L 351.9729194641113 231.70180061721803 L 359.9729194641113 231.70180061721803 L 359.9729194641113 231.70180061721803 L 359.9729194641113 231.70180061721803 L 359.9729194641113 231.70180061721803 L 359.9729194641113 231.70180061721803 L 351.9729194641113 231.70180061721803 Z"
                                 cy="113.91956030346554" cx="414.8770866394043" j="5" val="61000"
                                 barHeight="117.78124031375248" barWidth="16"></path>
                              <path id="SvgjsPath1858"
                                 d="M 418.8770866394043 231.70180061721803 L 418.8770866394043 119.71308031889599 L 426.8770866394043 119.71308031889599 L 426.8770866394043 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 418.8770866394043 231.70180061721803 L 418.8770866394043 119.71308031889599 L 426.8770866394043 119.71308031889599 L 426.8770866394043 231.70180061721803 Z"
                                 pathFrom="M 418.8770866394043 231.70180061721803 L 418.8770866394043 231.70180061721803 L 426.8770866394043 231.70180061721803 L 426.8770866394043 231.70180061721803 L 426.8770866394043 231.70180061721803 L 426.8770866394043 231.70180061721803 L 426.8770866394043 231.70180061721803 L 418.8770866394043 231.70180061721803 Z"
                                 cy="119.71208031889599" cx="481.78125381469727" j="6" val="58000"
                                 barHeight="111.98872029832204" barWidth="16"></path>
                              <path id="SvgjsPath1860"
                                 d="M 485.78125381469727 231.70180061721803 L 485.78125381469727 110.05888029317858 L 493.78125381469727 110.05888029317858 L 493.78125381469727 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 485.78125381469727 231.70180061721803 L 485.78125381469727 110.05888029317858 L 493.78125381469727 110.05888029317858 L 493.78125381469727 231.70180061721803 Z"
                                 pathFrom="M 485.78125381469727 231.70180061721803 L 485.78125381469727 231.70180061721803 L 493.78125381469727 231.70180061721803 L 493.78125381469727 231.70180061721803 L 493.78125381469727 231.70180061721803 L 493.78125381469727 231.70180061721803 L 493.78125381469727 231.70180061721803 L 485.78125381469727 231.70180061721803 Z"
                                 cy="110.05788029317857" cx="548.6854209899902" j="7" val="63000"
                                 barHeight="121.64292032403945" barWidth="16"></path>
                              <path id="SvgjsPath1862"
                                 d="M 552.6854209899902 231.70180061721803 L 552.6854209899902 115.85140030860903 L 560.6854209899902 115.85140030860903 L 560.6854209899902 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 552.6854209899902 231.70180061721803 L 552.6854209899902 115.85140030860903 L 560.6854209899902 115.85140030860903 L 560.6854209899902 231.70180061721803 Z"
                                 pathFrom="M 552.6854209899902 231.70180061721803 L 552.6854209899902 231.70180061721803 L 560.6854209899902 231.70180061721803 L 560.6854209899902 231.70180061721803 L 560.6854209899902 231.70180061721803 L 560.6854209899902 231.70180061721803 L 560.6854209899902 231.70180061721803 L 552.6854209899902 231.70180061721803 Z"
                                 cy="115.85040030860903" cx="615.5895881652832" j="8" val="60000"
                                 barHeight="115.850400308609" barWidth="16"></path>
                              <path id="SvgjsPath1864"
                                 d="M 619.5895881652832 231.70180061721803 L 619.5895881652832 104.26636027774812 L 627.5895881652832 104.26636027774812 L 627.5895881652832 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 619.5895881652832 231.70180061721803 L 619.5895881652832 104.26636027774812 L 627.5895881652832 104.26636027774812 L 627.5895881652832 231.70180061721803 Z"
                                 pathFrom="M 619.5895881652832 231.70180061721803 L 619.5895881652832 231.70180061721803 L 627.5895881652832 231.70180061721803 L 627.5895881652832 231.70180061721803 L 627.5895881652832 231.70180061721803 L 627.5895881652832 231.70180061721803 L 627.5895881652832 231.70180061721803 L 619.5895881652832 231.70180061721803 Z"
                                 cy="104.26536027774812" cx="682.4937553405762" j="9" val="66000"
                                 barHeight="127.4354403394699" barWidth="16"></path>
                              <path id="SvgjsPath1866"
                                 d="M 686.4937553405762 231.70180061721803 L 686.4937553405762 166.05324044233961 L 694.4937553405762 166.05324044233961 L 694.4937553405762 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 686.4937553405762 231.70180061721803 L 686.4937553405762 166.05324044233961 L 694.4937553405762 166.05324044233961 L 694.4937553405762 231.70180061721803 Z"
                                 pathFrom="M 686.4937553405762 231.70180061721803 L 686.4937553405762 231.70180061721803 L 694.4937553405762 231.70180061721803 L 694.4937553405762 231.70180061721803 L 694.4937553405762 231.70180061721803 L 694.4937553405762 231.70180061721803 L 694.4937553405762 231.70180061721803 L 686.4937553405762 231.70180061721803 Z"
                                 cy="166.0522404423396" cx="749.3979225158691" j="10" val="34000"
                                 barHeight="65.64856017487843" barWidth="16"></path>
                              <path id="SvgjsPath1868"
                                 d="M 753.3979225158691 231.70180061721803 L 753.3979225158691 81.09628021602632 L 761.3979225158691 81.09628021602632 L 761.3979225158691 231.70180061721803 Z"
                                 fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 753.3979225158691 231.70180061721803 L 753.3979225158691 81.09628021602632 L 761.3979225158691 81.09628021602632 L 761.3979225158691 231.70180061721803 Z"
                                 pathFrom="M 753.3979225158691 231.70180061721803 L 753.3979225158691 231.70180061721803 L 761.3979225158691 231.70180061721803 L 761.3979225158691 231.70180061721803 L 761.3979225158691 231.70180061721803 L 761.3979225158691 231.70180061721803 L 761.3979225158691 231.70180061721803 L 753.3979225158691 231.70180061721803 Z"
                                 cy="81.09528021602631" cx="816.3020896911621" j="11" val="78000"
                                 barHeight="150.6055204011917" barWidth="16"></path>
                              <g id="SvgjsG1843" class="apexcharts-bar-goals-markers">
                                 <g id="SvgjsG1845" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1847" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1849" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1851" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1853" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1855" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1857" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1859" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1861" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1863" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1865" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1867" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                              </g>
                              <g id="SvgjsG1844" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                           </g>
                           <g id="SvgjsG1869" class="apexcharts-series" rel="2" seriesName="LastxPeriod"
                              data:realIndex="1">
                              <path id="SvgjsPath1874"
                                 d="M 33.452083587646484 231.70180061721803 L 33.452083587646484 198.87752052977882 L 41.452083587646484 198.87752052977882 L 41.452083587646484 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 33.452083587646484 231.70180061721803 L 33.452083587646484 198.87752052977882 L 41.452083587646484 198.87752052977882 L 41.452083587646484 231.70180061721803 Z"
                                 pathFrom="M 33.452083587646484 231.70180061721803 L 33.452083587646484 231.70180061721803 L 41.452083587646484 231.70180061721803 L 41.452083587646484 231.70180061721803 L 41.452083587646484 231.70180061721803 L 41.452083587646484 231.70180061721803 L 41.452083587646484 231.70180061721803 L 33.452083587646484 231.70180061721803 Z"
                                 cy="198.87652052977882" cx="96.35625076293945" j="0" val="17000"
                                 barHeight="32.82428008743921" barWidth="16"></path>
                              <path id="SvgjsPath1876"
                                 d="M 100.35625076293945 231.70180061721803 L 100.35625076293945 84.9579602263133 L 108.35625076293945 84.9579602263133 L 108.35625076293945 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 100.35625076293945 231.70180061721803 L 100.35625076293945 84.9579602263133 L 108.35625076293945 84.9579602263133 L 108.35625076293945 231.70180061721803 Z"
                                 pathFrom="M 100.35625076293945 231.70180061721803 L 100.35625076293945 231.70180061721803 L 108.35625076293945 231.70180061721803 L 108.35625076293945 231.70180061721803 L 108.35625076293945 231.70180061721803 L 108.35625076293945 231.70180061721803 L 108.35625076293945 231.70180061721803 L 100.35625076293945 231.70180061721803 Z"
                                 cy="84.9569602263133" cx="163.26041793823242" j="1" val="76000"
                                 barHeight="146.74384039090472" barWidth="16"></path>
                              <path id="SvgjsPath1878"
                                 d="M 167.26041793823242 231.70180061721803 L 167.26041793823242 67.58040018002194 L 175.26041793823242 67.58040018002194 L 175.26041793823242 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 167.26041793823242 231.70180061721803 L 167.26041793823242 67.58040018002194 L 175.26041793823242 67.58040018002194 L 175.26041793823242 231.70180061721803 Z"
                                 pathFrom="M 167.26041793823242 231.70180061721803 L 167.26041793823242 231.70180061721803 L 175.26041793823242 231.70180061721803 L 175.26041793823242 231.70180061721803 L 175.26041793823242 231.70180061721803 L 175.26041793823242 231.70180061721803 L 175.26041793823242 231.70180061721803 L 167.26041793823242 231.70180061721803 Z"
                                 cy="67.57940018002193" cx="230.1645851135254" j="2" val="85000"
                                 barHeight="164.1214004371961" barWidth="16"></path>
                              <path id="SvgjsPath1880"
                                 d="M 234.1645851135254 231.70180061721803 L 234.1645851135254 36.68696009772619 L 242.1645851135254 36.68696009772619 L 242.1645851135254 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 234.1645851135254 231.70180061721803 L 234.1645851135254 36.68696009772619 L 242.1645851135254 36.68696009772619 L 242.1645851135254 231.70180061721803 Z"
                                 pathFrom="M 234.1645851135254 231.70180061721803 L 234.1645851135254 231.70180061721803 L 242.1645851135254 231.70180061721803 L 242.1645851135254 231.70180061721803 L 242.1645851135254 231.70180061721803 L 242.1645851135254 231.70180061721803 L 242.1645851135254 231.70180061721803 L 234.1645851135254 231.70180061721803 Z"
                                 cy="36.685960097726195" cx="297.06875228881836" j="3" val="101000"
                                 barHeight="195.01484051949183" barWidth="16"></path>
                              <path id="SvgjsPath1882"
                                 d="M 301.06875228881836 231.70180061721803 L 301.06875228881836 42.47948011315665 L 309.06875228881836 42.47948011315665 L 309.06875228881836 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 301.06875228881836 231.70180061721803 L 301.06875228881836 42.47948011315665 L 309.06875228881836 42.47948011315665 L 309.06875228881836 231.70180061721803 Z"
                                 pathFrom="M 301.06875228881836 231.70180061721803 L 301.06875228881836 231.70180061721803 L 309.06875228881836 231.70180061721803 L 309.06875228881836 231.70180061721803 L 309.06875228881836 231.70180061721803 L 309.06875228881836 231.70180061721803 L 309.06875228881836 231.70180061721803 L 301.06875228881836 231.70180061721803 Z"
                                 cy="42.47848011315665" cx="363.9729194641113" j="4" val="98000"
                                 barHeight="189.22232050406137" barWidth="16"></path>
                              <path id="SvgjsPath1884"
                                 d="M 367.9729194641113 231.70180061721803 L 367.9729194641113 63.71872016973497 L 375.9729194641113 63.71872016973497 L 375.9729194641113 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 367.9729194641113 231.70180061721803 L 367.9729194641113 63.71872016973497 L 375.9729194641113 63.71872016973497 L 375.9729194641113 231.70180061721803 Z"
                                 pathFrom="M 367.9729194641113 231.70180061721803 L 367.9729194641113 231.70180061721803 L 375.9729194641113 231.70180061721803 L 375.9729194641113 231.70180061721803 L 375.9729194641113 231.70180061721803 L 375.9729194641113 231.70180061721803 L 375.9729194641113 231.70180061721803 L 367.9729194641113 231.70180061721803 Z"
                                 cy="63.717720169734974" cx="430.8770866394043" j="5" val="87000"
                                 barHeight="167.98308044748305" barWidth="16"></path>
                              <path id="SvgjsPath1886"
                                 d="M 434.8770866394043 231.70180061721803 L 434.8770866394043 28.963600077152275 L 442.8770866394043 28.963600077152275 L 442.8770866394043 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 434.8770866394043 231.70180061721803 L 434.8770866394043 28.963600077152275 L 442.8770866394043 28.963600077152275 L 442.8770866394043 231.70180061721803 Z"
                                 pathFrom="M 434.8770866394043 231.70180061721803 L 434.8770866394043 231.70180061721803 L 442.8770866394043 231.70180061721803 L 442.8770866394043 231.70180061721803 L 442.8770866394043 231.70180061721803 L 442.8770866394043 231.70180061721803 L 442.8770866394043 231.70180061721803 L 434.8770866394043 231.70180061721803 Z"
                                 cy="28.962600077152274" cx="497.78125381469727" j="6" val="105000"
                                 barHeight="202.73820054006575" barWidth="16"></path>
                              <path id="SvgjsPath1888"
                                 d="M 501.78125381469727 231.70180061721803 L 501.78125381469727 55.99536014916102 L 509.78125381469727 55.99536014916102 L 509.78125381469727 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 501.78125381469727 231.70180061721803 L 501.78125381469727 55.99536014916102 L 509.78125381469727 55.99536014916102 L 509.78125381469727 231.70180061721803 Z"
                                 pathFrom="M 501.78125381469727 231.70180061721803 L 501.78125381469727 231.70180061721803 L 509.78125381469727 231.70180061721803 L 509.78125381469727 231.70180061721803 L 509.78125381469727 231.70180061721803 L 509.78125381469727 231.70180061721803 L 509.78125381469727 231.70180061721803 L 501.78125381469727 231.70180061721803 Z"
                                 cy="55.994360149161025" cx="564.6854209899902" j="7" val="91000"
                                 barHeight="175.706440468057" barWidth="16"></path>
                              <path id="SvgjsPath1890"
                                 d="M 568.6854209899902 231.70180061721803 L 568.6854209899902 11.586040030860909 L 576.6854209899902 11.586040030860909 L 576.6854209899902 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 568.6854209899902 231.70180061721803 L 568.6854209899902 11.586040030860909 L 576.6854209899902 11.586040030860909 L 576.6854209899902 231.70180061721803 Z"
                                 pathFrom="M 568.6854209899902 231.70180061721803 L 568.6854209899902 231.70180061721803 L 576.6854209899902 231.70180061721803 L 576.6854209899902 231.70180061721803 L 576.6854209899902 231.70180061721803 L 576.6854209899902 231.70180061721803 L 576.6854209899902 231.70180061721803 L 568.6854209899902 231.70180061721803 Z"
                                 cy="11.58504003086091" cx="631.5895881652832" j="8" val="114000"
                                 barHeight="220.1157605863571" barWidth="16"></path>
                              <path id="SvgjsPath1892"
                                 d="M 635.5895881652832 231.70180061721803 L 635.5895881652832 50.2028401337306 L 643.5895881652832 50.2028401337306 L 643.5895881652832 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 635.5895881652832 231.70180061721803 L 635.5895881652832 50.2028401337306 L 643.5895881652832 50.2028401337306 L 643.5895881652832 231.70180061721803 Z"
                                 pathFrom="M 635.5895881652832 231.70180061721803 L 635.5895881652832 231.70180061721803 L 643.5895881652832 231.70180061721803 L 643.5895881652832 231.70180061721803 L 643.5895881652832 231.70180061721803 L 643.5895881652832 231.70180061721803 L 643.5895881652832 231.70180061721803 L 635.5895881652832 231.70180061721803 Z"
                                 cy="50.2018401337306" cx="698.4937553405762" j="9" val="94000"
                                 barHeight="181.49896048348742" barWidth="16"></path>
                              <path id="SvgjsPath1894"
                                 d="M 702.4937553405762 231.70180061721803 L 702.4937553405762 102.33552027260464 L 710.4937553405762 102.33552027260464 L 710.4937553405762 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 702.4937553405762 231.70180061721803 L 702.4937553405762 102.33552027260464 L 710.4937553405762 102.33552027260464 L 710.4937553405762 231.70180061721803 Z"
                                 pathFrom="M 702.4937553405762 231.70180061721803 L 702.4937553405762 231.70180061721803 L 710.4937553405762 231.70180061721803 L 710.4937553405762 231.70180061721803 L 710.4937553405762 231.70180061721803 L 710.4937553405762 231.70180061721803 L 710.4937553405762 231.70180061721803 L 702.4937553405762 231.70180061721803 Z"
                                 cy="102.33452027260464" cx="765.3979225158691" j="10" val="67000"
                                 barHeight="129.3662803446134" barWidth="16"></path>
                              <path id="SvgjsPath1896"
                                 d="M 769.3979225158691 231.70180061721803 L 769.3979225158691 104.26636027774812 L 777.3979225158691 104.26636027774812 L 777.3979225158691 231.70180061721803 Z"
                                 fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1"
                                 stroke-linecap="round" stroke-width="8" stroke-dasharray="0"
                                 class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskyq6m8xuj)"
                                 pathTo="M 769.3979225158691 231.70180061721803 L 769.3979225158691 104.26636027774812 L 777.3979225158691 104.26636027774812 L 777.3979225158691 231.70180061721803 Z"
                                 pathFrom="M 769.3979225158691 231.70180061721803 L 769.3979225158691 231.70180061721803 L 777.3979225158691 231.70180061721803 L 777.3979225158691 231.70180061721803 L 777.3979225158691 231.70180061721803 L 777.3979225158691 231.70180061721803 L 777.3979225158691 231.70180061721803 L 769.3979225158691 231.70180061721803 Z"
                                 cy="104.26536027774812" cx="832.3020896911621" j="11" val="66000"
                                 barHeight="127.4354403394699" barWidth="16"></path>
                              <g id="SvgjsG1871" class="apexcharts-bar-goals-markers">
                                 <g id="SvgjsG1873" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1875" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1877" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1879" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1881" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1883" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1885" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1887" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1889" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1891" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1893" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                                 <g id="SvgjsG1895" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskyq6m8xuj)">
                                 </g>
                              </g>
                              <g id="SvgjsG1872" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                           </g>
                           <g id="SvgjsG1842" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                              data:realIndex="0"></g>
                           <g id="SvgjsG1870" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                              data:realIndex="1"></g>
                        </g>
                        <line id="SvgjsLine1908" x1="0" y1="0" x2="802.8500061035156" y2="0"
                           stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                           class="apexcharts-ycrosshairs"></line>
                        <line id="SvgjsLine1909" x1="0" y1="0" x2="802.8500061035156" y2="0"
                           stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                           class="apexcharts-ycrosshairs-hidden"></line>
                        <g id="SvgjsG1910" class="apexcharts-xaxis" transform="translate(0, 0)">
                           <g id="SvgjsG1911" class="apexcharts-xaxis-texts-g" transform="translate(-2, -4)"><text
                                 id="SvgjsText1913" font-family="Inter, ui-sans-serif" x="29.452083587646484"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1914">Jan</tspan>
                                 <title>Jan</title>
                              </text><text id="SvgjsText1916" font-family="Inter, ui-sans-serif" x="96.35625076293945"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1917">Feb</tspan>
                                 <title>Feb</title>
                              </text><text id="SvgjsText1919" font-family="Inter, ui-sans-serif" x="163.26041793823242"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1920">Mar</tspan>
                                 <title>Mar</title>
                              </text><text id="SvgjsText1922" font-family="Inter, ui-sans-serif" x="230.1645851135254"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1923">Apr</tspan>
                                 <title>Apr</title>
                              </text><text id="SvgjsText1925" font-family="Inter, ui-sans-serif" x="297.06875228881836"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1926">May</tspan>
                                 <title>May</title>
                              </text><text id="SvgjsText1928" font-family="Inter, ui-sans-serif" x="363.9729194641113"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1929">Jun</tspan>
                                 <title>Jun</title>
                              </text><text id="SvgjsText1931" font-family="Inter, ui-sans-serif" x="430.8770866394043"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1932">Jul</tspan>
                                 <title>Jul</title>
                              </text><text id="SvgjsText1934" font-family="Inter, ui-sans-serif" x="497.78125381469727"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1935">Aug</tspan>
                                 <title>Aug</title>
                              </text><text id="SvgjsText1937" font-family="Inter, ui-sans-serif" x="564.6854209899902"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1938">Sep</tspan>
                                 <title>Sep</title>
                              </text><text id="SvgjsText1940" font-family="Inter, ui-sans-serif" x="631.5895881652832"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1941">Oct</tspan>
                                 <title>Oct</title>
                              </text><text id="SvgjsText1943" font-family="Inter, ui-sans-serif" x="698.4937553405762"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1944">Nov</tspan>
                                 <title>Nov</title>
                              </text><text id="SvgjsText1946" font-family="Inter, ui-sans-serif" x="765.3979225158691"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan1947">Dec</tspan>
                                 <title>Dec</title>
                              </text></g>
                        </g>
                        <g id="SvgjsG1965" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG1966" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG1967" class="apexcharts-point-annotations"></g>
                     </g>
                  </svg>
                  <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 507.271px; top: 10.8px;">
                     <div
                        class="ms-0.5 mb-2 bg-white border border-gray-200 text-gray-800 rounded-lg shadow-md dark:bg-neutral-800 dark:border-neutral-700 min-w-28">
                        <div
                           class="apexcharts-tooltip-title font-semibold !text-sm !bg-white !border-gray-200 text-gray-800 rounded-t-lg dark:!bg-neutral-800 dark:!border-neutral-700 dark:text-neutral-200 ">
                           July</div>
                        <div class="apexcharts-tooltip-series-group !flex !justify-between order-1 text-[12px] ">
                           <span class="flex items-center">
                              <span class="apexcharts-tooltip-marker !w-2.5 !h-2.5 !me-1.5 !rounded-sm"
                                 style="background: #2563eb"></span>
                              <div class="apexcharts-tooltip-text">
                                 <div class="apexcharts-tooltip-y-group !py-0.5">
                                    <span
                                       class="apexcharts-tooltip-text-y-value !font-medium text-gray-500 !ms-auto dark:text-neutral-400 ">Chosen
                                       Period:</span>
                                 </div>
                              </div>
                           </span>
                           <span
                              class="apexcharts-tooltip-text-y-label text-gray-500 dark:text-neutral-400 ms-2">$58k</span>
                        </div>
                        <div class="apexcharts-tooltip-series-group !flex !justify-between order-2 text-[12px] ">
                           <span class="flex items-center">
                              <span class="apexcharts-tooltip-marker !w-2.5 !h-2.5 !me-1.5 !rounded-sm"
                                 style="background: #d1d5db"></span>
                              <div class="apexcharts-tooltip-text">
                                 <div class="apexcharts-tooltip-y-group !py-0.5">
                                    <span
                                       class="apexcharts-tooltip-text-y-value !font-medium text-gray-500 !ms-auto dark:text-neutral-400 ">Last
                                       Period:</span>
                                 </div>
                              </div>
                           </span>
                           <span
                              class="apexcharts-tooltip-text-y-label text-gray-500 dark:text-neutral-400 ms-2">$105k</span>
                        </div>
                     </div>
                  </div>
                  <div
                     class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                     <div class="apexcharts-yaxistooltip-text"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Card -->

         <!-- Card -->
         <div
            class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="flex justify-between items-center">
               <div>
                  <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                     Visitors
                  </h2>
                  <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                     80.3k
                  </p>
               </div>

               <div>
                  <span
                     class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-red-100 text-red-800 dark:bg-red-500/10 dark:text-red-500">
                     <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 5v14"></path>
                        <path d="m19 12-7 7-7-7"></path>
                     </svg>
                     2%
                  </span>
               </div>
            </div>
            <!-- End Header -->

            <div id="hs-single-area-chart" style="min-height: 315px;">
               <div id="apexchartsaaosw8e9" class="apexcharts-canvas apexchartsaaosw8e9 apexcharts-theme-light"
                  style="width: 870px; height: 300px;"><svg id="SvgjsSvg1969" width="870" height="300"
                     xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                     transform="translate(0, 0)" style="background: transparent;">
                     <foreignObject x="0" y="0" width="870" height="300">
                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                           style="max-height: 150px;"></div>
                     </foreignObject>
                     <rect id="SvgjsRect1974" width="0" height="0" x="0" y="0" rx="0"
                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                        fill="#fefefe"></rect>
                     <g id="SvgjsG2040" class="apexcharts-yaxis" rel="0"
                        transform="translate(22.949996948242188, 0)">
                        <g id="SvgjsG2041" class="apexcharts-yaxis-texts-g"
                           transform="translate(-25.966659545898438, 0)"><text id="SvgjsText2043"
                              font-family="Inter, ui-sans-serif" x="20" y="31.5" text-anchor="start"
                              dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af"
                              class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan2044">200</tspan>
                              <title>200</title>
                           </text><text id="SvgjsText2046" font-family="Inter, ui-sans-serif" x="20"
                              y="77.84016012344361" text-anchor="start" dominant-baseline="auto" font-size="13px"
                              font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan2047">160</tspan>
                              <title>160</title>
                           </text><text id="SvgjsText2049" font-family="Inter, ui-sans-serif" x="20"
                              y="124.18032024688722" text-anchor="start" dominant-baseline="auto" font-size="13px"
                              font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan2050">120</tspan>
                              <title>120</title>
                           </text><text id="SvgjsText2052" font-family="Inter, ui-sans-serif" x="20"
                              y="170.52048037033083" text-anchor="start" dominant-baseline="auto" font-size="13px"
                              font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan2053">80</tspan>
                              <title>80</title>
                           </text><text id="SvgjsText2055" font-family="Inter, ui-sans-serif" x="20"
                              y="216.86064049377444" text-anchor="start" dominant-baseline="auto" font-size="13px"
                              font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan2056">40</tspan>
                              <title>40</title>
                           </text><text id="SvgjsText2058" font-family="Inter, ui-sans-serif" x="20"
                              y="263.200800617218" text-anchor="start" dominant-baseline="auto" font-size="13px"
                              font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                              style="font-family: Inter, ui-sans-serif;">
                              <tspan id="SvgjsTspan2059">0</tspan>
                              <title>0</title>
                           </text></g>
                     </g>
                     <g id="SvgjsG1971" class="apexcharts-inner apexcharts-graphical"
                        transform="translate(52.94999694824219, 30)">
                        <defs id="SvgjsDefs1970">
                           <clipPath id="gridRectMaskaaosw8e9">
                              <rect id="SvgjsRect1976" width="795.4250030517578" height="243.70080061721802" x="-4"
                                 y="-6" rx="0" ry="0" opacity="1" stroke-width="0"
                                 stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                           </clipPath>
                           <clipPath id="forecastMaskaaosw8e9"></clipPath>
                           <clipPath id="nonForecastMaskaaosw8e9"></clipPath>
                           <clipPath id="gridRectMarkerMaskaaosw8e9">
                              <rect id="SvgjsRect1977" width="793.4250030517578" height="235.70080061721802" x="-2"
                                 y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                 stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                           </clipPath>
                           <linearGradient id="SvgjsLinearGradient1982" x1="0" y1="0"
                              x2="0" y2="1">
                              <stop id="SvgjsStop1983" stop-opacity="0.1" stop-color="rgba(37,99,235,0.1)"
                                 offset="0"></stop>
                              <stop id="SvgjsStop1984" stop-opacity="0.8" stop-color="rgba(255,255,255,0.8)"
                                 offset="0.9"></stop>
                              <stop id="SvgjsStop1985" stop-opacity="0.8" stop-color="rgba(255,255,255,0.8)"
                                 offset="1"></stop>
                           </linearGradient>
                        </defs>
                        <line id="SvgjsLine1975" x1="0" y1="0" x2="0"
                           y2="231.70080061721802" stroke="#b6b6b6" stroke-dasharray="0" stroke-linecap="butt"
                           class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="231.70080061721802"
                           fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                        <g id="SvgjsG1988" class="apexcharts-grid">
                           <g id="SvgjsG1989" class="apexcharts-gridlines-horizontal">
                              <line id="SvgjsLine1993" x1="0" y1="46.3401601234436" x2="789.4250030517578"
                                 y2="46.3401601234436" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt"
                                 class="apexcharts-gridline"></line>
                              <line id="SvgjsLine1994" x1="0" y1="92.6803202468872" x2="789.4250030517578"
                                 y2="92.6803202468872" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt"
                                 class="apexcharts-gridline"></line>
                              <line id="SvgjsLine1995" x1="0" y1="139.0204803703308" x2="789.4250030517578"
                                 y2="139.0204803703308" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt"
                                 class="apexcharts-gridline"></line>
                              <line id="SvgjsLine1996" x1="0" y1="185.3606404937744" x2="789.4250030517578"
                                 y2="185.3606404937744" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt"
                                 class="apexcharts-gridline"></line>
                           </g>
                           <g id="SvgjsG1990" class="apexcharts-gridlines-vertical"></g>
                           <line id="SvgjsLine1999" x1="0" y1="231.70080061721802" x2="789.4250030517578"
                              y2="231.70080061721802" stroke="transparent" stroke-dasharray="0"
                              stroke-linecap="butt"></line>
                           <line id="SvgjsLine1998" x1="0" y1="1" x2="0"
                              y2="231.70080061721802" stroke="transparent" stroke-dasharray="0"
                              stroke-linecap="butt"></line>
                        </g>
                        <g id="SvgjsG1991" class="apexcharts-grid-borders">
                           <line id="SvgjsLine1992" x1="0" y1="0" x2="789.4250030517578"
                              y2="0" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt"
                              class="apexcharts-gridline"></line>
                           <line id="SvgjsLine1997" x1="0" y1="231.70080061721802" x2="789.4250030517578"
                              y2="231.70080061721802" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt"
                              class="apexcharts-gridline"></line>
                        </g>
                        <g id="SvgjsG1978" class="apexcharts-area-series apexcharts-plot-series">
                           <g id="SvgjsG1979" class="apexcharts-series" zIndex="0" seriesName="Visitors"
                              data:longestSeries="true" rel="1" data:realIndex="0">
                              <path id="SvgjsPath1986"
                                 d="M 0 231.70080061721802 L 0 23.17008006172182 L 71.76590936834161 172.61709645982742 L 143.53181873668322 162.19056043205262 L 215.29772810502485 187.6776484999466 L 287.06363747336644 129.7524483456421 L 358.82954684170807 173.77560046291353 L 430.5954562100497 185.3606404937744 L 502.3613655783913 171.45859245674134 L 574.1272749467329 129.7524483456421 L 645.8931843150746 139.0204803703308 L 717.6590936834161 162.19056043205262 L 789.4250030517578 150.6055204011917 L 789.4250030517578 231.70080061721802M 789.4250030517578 150.6055204011917z"
                                 fill="url(#SvgjsLinearGradient1982)" fill-opacity="1" stroke-opacity="1"
                                 stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                 class="apexcharts-area" index="0" clip-path="url(#gridRectMaskaaosw8e9)"
                                 pathTo="M 0 231.70080061721802 L 0 23.17008006172182 L 71.76590936834161 172.61709645982742 L 143.53181873668322 162.19056043205262 L 215.29772810502485 187.6776484999466 L 287.06363747336644 129.7524483456421 L 358.82954684170807 173.77560046291353 L 430.5954562100497 185.3606404937744 L 502.3613655783913 171.45859245674134 L 574.1272749467329 129.7524483456421 L 645.8931843150746 139.0204803703308 L 717.6590936834161 162.19056043205262 L 789.4250030517578 150.6055204011917 L 789.4250030517578 231.70080061721802M 789.4250030517578 150.6055204011917z"
                                 pathFrom="M -1 231.70080061721802 L -1 231.70080061721802 L 71.76590936834161 231.70080061721802 L 143.53181873668322 231.70080061721802 L 215.29772810502485 231.70080061721802 L 287.06363747336644 231.70080061721802 L 358.82954684170807 231.70080061721802 L 430.5954562100497 231.70080061721802 L 502.3613655783913 231.70080061721802 L 574.1272749467329 231.70080061721802 L 645.8931843150746 231.70080061721802 L 717.6590936834161 231.70080061721802 L 789.4250030517578 231.70080061721802">
                              </path>
                              <path id="SvgjsPath1987"
                                 d="M 0 23.17008006172182 L 71.76590936834161 172.61709645982742 L 143.53181873668322 162.19056043205262 L 215.29772810502485 187.6776484999466 L 287.06363747336644 129.7524483456421 L 358.82954684170807 173.77560046291353 L 430.5954562100497 185.3606404937744 L 502.3613655783913 171.45859245674134 L 574.1272749467329 129.7524483456421 L 645.8931843150746 139.0204803703308 L 717.6590936834161 162.19056043205262 L 789.4250030517578 150.6055204011917"
                                 fill="none" fill-opacity="1" stroke="#2563eb" stroke-opacity="1"
                                 stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                 class="apexcharts-area" index="0" clip-path="url(#gridRectMaskaaosw8e9)"
                                 pathTo="M 0 23.17008006172182 L 71.76590936834161 172.61709645982742 L 143.53181873668322 162.19056043205262 L 215.29772810502485 187.6776484999466 L 287.06363747336644 129.7524483456421 L 358.82954684170807 173.77560046291353 L 430.5954562100497 185.3606404937744 L 502.3613655783913 171.45859245674134 L 574.1272749467329 129.7524483456421 L 645.8931843150746 139.0204803703308 L 717.6590936834161 162.19056043205262 L 789.4250030517578 150.6055204011917"
                                 pathFrom="M -1 231.70080061721802 L -1 231.70080061721802 L 71.76590936834161 231.70080061721802 L 143.53181873668322 231.70080061721802 L 215.29772810502485 231.70080061721802 L 287.06363747336644 231.70080061721802 L 358.82954684170807 231.70080061721802 L 430.5954562100497 231.70080061721802 L 502.3613655783913 231.70080061721802 L 574.1272749467329 231.70080061721802 L 645.8931843150746 231.70080061721802 L 717.6590936834161 231.70080061721802 L 789.4250030517578 231.70080061721802"
                                 fill-rule="evenodd"></path>
                              <g id="SvgjsG1980" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                 data:realIndex="0">
                                 <g class="apexcharts-series-markers">
                                    <circle id="SvgjsCircle2063" r="0" cx="0" cy="0"
                                       class="apexcharts-marker wa5z9ldf4j no-pointer-events" stroke="#ffffff"
                                       fill="#2563eb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                       default-marker-size="0"></circle>
                                 </g>
                              </g>
                           </g>
                           <g id="SvgjsG1981" class="apexcharts-datalabels" data:realIndex="0"></g>
                        </g>
                        <line id="SvgjsLine2000" x1="0" y1="0" x2="789.4250030517578"
                           y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                           stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                        <line id="SvgjsLine2001" x1="0" y1="0" x2="789.4250030517578"
                           y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                           class="apexcharts-ycrosshairs-hidden"></line>
                        <g id="SvgjsG2002" class="apexcharts-xaxis" transform="translate(0, 0)">
                           <g id="SvgjsG2003" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text
                                 id="SvgjsText2005" font-family="Inter, ui-sans-serif" x="0" y="260.700800617218"
                                 text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400"
                                 fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2006">25 Jan</tspan>
                                 <title>25 Jan</title>
                              </text><text id="SvgjsText2008" font-family="Inter, ui-sans-serif" x="71.76590936834162"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2009">26 Jan</tspan>
                                 <title>26 Jan</title>
                              </text><text id="SvgjsText2011" font-family="Inter, ui-sans-serif" x="143.53181873668325"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2012">27 Jan</tspan>
                                 <title>27 Jan</title>
                              </text><text id="SvgjsText2014" font-family="Inter, ui-sans-serif" x="215.29772810502487"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2015">28 Jan</tspan>
                                 <title>28 Jan</title>
                              </text><text id="SvgjsText2017" font-family="Inter, ui-sans-serif" x="287.0636374733665"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2018">29 Jan</tspan>
                                 <title>29 Jan</title>
                              </text><text id="SvgjsText2020" font-family="Inter, ui-sans-serif" x="358.8295468417082"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2021">30 Jan</tspan>
                                 <title>30 Jan</title>
                              </text><text id="SvgjsText2023" font-family="Inter, ui-sans-serif" x="430.59545621004975"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2024">31 Jan</tspan>
                                 <title>31 Jan</title>
                              </text><text id="SvgjsText2026" font-family="Inter, ui-sans-serif" x="502.3613655783914"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2027">1 Feb</tspan>
                                 <title>1 Feb</title>
                              </text><text id="SvgjsText2029" font-family="Inter, ui-sans-serif" x="574.1272749467331"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2030">2 Feb</tspan>
                                 <title>2 Feb</title>
                              </text><text id="SvgjsText2032" font-family="Inter, ui-sans-serif" x="645.8931843150748"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2033">3 Feb</tspan>
                                 <title>3 Feb</title>
                              </text><text id="SvgjsText2035" font-family="Inter, ui-sans-serif" x="717.6590936834165"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2036">4 Feb</tspan>
                                 <title>4 Feb</title>
                              </text><text id="SvgjsText2038" font-family="Inter, ui-sans-serif" x="789.4250030517582"
                                 y="260.700800617218" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                 font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                 style="font-family: Inter, ui-sans-serif;">
                                 <tspan id="SvgjsTspan2039">5 Feb</tspan>
                                 <title>5 Feb</title>
                              </text></g>
                        </g>
                        <g id="SvgjsG2060" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG2061" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG2062" class="apexcharts-point-annotations"></g>
                     </g>
                  </svg>
                  <div class="apexcharts-tooltip apexcharts-theme-light">
                     <div class="apexcharts-tooltip-title"
                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                     <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                           class="apexcharts-tooltip-marker" style="background-color: rgb(37, 99, 235);"></span>
                        <div class="apexcharts-tooltip-text"
                           style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                           <div class="apexcharts-tooltip-y-group"><span
                                 class="apexcharts-tooltip-text-y-label"></span><span
                                 class="apexcharts-tooltip-text-y-value"></span></div>
                           <div class="apexcharts-tooltip-goals-group"><span
                                 class="apexcharts-tooltip-text-goals-label"></span><span
                                 class="apexcharts-tooltip-text-goals-value"></span></div>
                           <div class="apexcharts-tooltip-z-group"><span
                                 class="apexcharts-tooltip-text-z-label"></span><span
                                 class="apexcharts-tooltip-text-z-value"></span></div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                     <div class="apexcharts-yaxistooltip-text"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Card -->
      </div>

      <!-- Card -->
      <div class="flex flex-col">
         <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
               <div
                  class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                  <!-- Header -->
                  <div
                     class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                     <div>
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                           Users
                        </h2>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                           Add users, edit and more.
                        </p>
                     </div>

                     <div>
                        <div class="inline-flex gap-x-2">
                           <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                              href="#">
                              View all
                           </a>

                           <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                              href="#">
                              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M5 12h14"></path>
                                 <path d="M12 5v14"></path>
                              </svg>
                              Add user
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- End Header -->

                  <!-- Table -->
                  <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                     <thead class="bg-gray-50 dark:bg-neutral-800">
                        <tr>
                           <th scope="col" class="ps-6 py-3 text-start">
                              <label for="hs-at-with-checkboxes-main" class="flex">
                                 <input type="checkbox"
                                    class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="hs-at-with-checkboxes-main">
                                 <span class="sr-only">Checkbox</span>
                              </label>
                           </th>

                           <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                              <div class="flex items-center gap-x-2">
                                 <span
                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Name
                                 </span>
                              </div>
                           </th>

                           <th scope="col" class="px-6 py-3 text-start">
                              <div class="flex items-center gap-x-2">
                                 <span
                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Position
                                 </span>
                              </div>
                           </th>

                           <th scope="col" class="px-6 py-3 text-start">
                              <div class="flex items-center gap-x-2">
                                 <span
                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Status
                                 </span>
                              </div>
                           </th>

                           <th scope="col" class="px-6 py-3 text-start">
                              <div class="flex items-center gap-x-2">
                                 <span
                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Portfolio
                                 </span>
                              </div>
                           </th>

                           <th scope="col" class="px-6 py-3 text-start">
                              <div class="flex items-center gap-x-2">
                                 <span
                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Created
                                 </span>
                              </div>
                           </th>

                           <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                     </thead>

                     <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-1" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-1">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <img class="inline-block size-[38px] rounded-full"
                                       src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                                       alt="Avatar">
                                    <div class="grow">
                                       <span
                                          class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Christina
                                          Bersh</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">christina@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Human resources</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                       </path>
                                    </svg>
                                    Active
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 25%" aria-valuenow="25"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec, 12:12</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-2" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-2">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <img class="inline-block size-[38px] rounded-full"
                                       src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                                       alt="Avatar">
                                    <div class="grow">
                                       <span
                                          class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David
                                          Harrison</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding products</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                       </path>
                                    </svg>
                                    Warning
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 78%" aria-valuenow="78"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-3" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-3">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span
                                       class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                                       <span
                                          class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">A</span>
                                    </span>
                                    <div class="grow">
                                       <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Anne
                                          Richard</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">anne@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">IT department</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                       </path>
                                    </svg>
                                    Active
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 100%" aria-valuenow="100"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-4" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-4">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <img class="inline-block size-[38px] rounded-full"
                                       src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80"
                                       alt="Avatar">
                                    <div class="grow">
                                       <span
                                          class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Samia
                                          Kartoon</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">samia@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Executive
                                    director</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Marketing</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                       </path>
                                    </svg>
                                    Active
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">0/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0"
                                          aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-5" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-5">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span
                                       class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                                       <span
                                          class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">D</span>
                                    </span>
                                    <div class="grow">
                                       <span
                                          class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David
                                          Harrison</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Developer</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Mobile app</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                       </path>
                                    </svg>
                                    Danger
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 78%" aria-valuenow="78"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">15 Dec, 14:41</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-6" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-6">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <img class="inline-block size-[38px] rounded-full"
                                       src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                                       alt="Avatar">
                                    <div class="grow">
                                       <span
                                          class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Brian
                                          Halligan</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">brian@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Accountant</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Finance</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                       </path>
                                    </svg>
                                    Active
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">2/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 40%" aria-valuenow="40"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">11 Dec, 18:51</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-7" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-7">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <img class="inline-block size-[38px] rounded-full"
                                       src="https://images.unsplash.com/photo-1659482634023-2c4fda99ac0c?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2.5&amp;w=320&amp;h=320&amp;q=80"
                                       alt="Avatar">
                                    <div class="grow">
                                       <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Andy
                                          Clerk</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">andy@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Human resources</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                       </path>
                                    </svg>
                                    Active
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 25%" aria-valuenow="25"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec, 12:12</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-8" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-8">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <img class="inline-block size-[38px] rounded-full"
                                       src="https://images.unsplash.com/photo-1601935111741-ae98b2b230b0?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                                       alt="Avatar">
                                    <div class="grow">
                                       <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Bart
                                          Simpson</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">Bart@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding products</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                       </path>
                                    </svg>
                                    Warning
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 78%" aria-valuenow="78"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-9" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-9">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span
                                       class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                                       <span
                                          class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">C</span>
                                    </span>
                                    <div class="grow">
                                       <span
                                          class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Camila
                                          Welters</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">cwelt@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">IT department</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                       </path>
                                    </svg>
                                    Active
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 100%" aria-valuenow="100"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-10" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-10">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <img class="inline-block size-[38px] rounded-full"
                                       src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                                       alt="Avatar">
                                    <div class="grow">
                                       <span
                                          class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Oliver
                                          Schevich</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">oliver@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding products</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                       </path>
                                    </svg>
                                    Warning
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 78%" aria-valuenow="78"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-11" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-11">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span
                                       class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                                       <span
                                          class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">I</span>
                                    </span>
                                    <div class="grow">
                                       <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Inna
                                          Ivy</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">invy@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">IT department</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                       </path>
                                    </svg>
                                    Active
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 100%" aria-valuenow="100"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 py-3">
                                 <label for="hs-at-with-checkboxes-12" class="flex">
                                    <input type="checkbox"
                                       class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-at-with-checkboxes-12">
                                    <span class="sr-only">Checkbox</span>
                                 </label>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <img class="inline-block size-[38px] rounded-full"
                                       src="https://images.unsplash.com/photo-1670272505340-d906d8d77d03?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                                       alt="Avatar">
                                    <div class="grow">
                                       <span
                                          class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Jessica
                                          Williams</span>
                                       <span
                                          class="block text-sm text-gray-500 dark:text-neutral-500">myhairisred@site.com</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="h-px w-72 whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Executive
                                    director</span>
                                 <span class="block text-sm text-gray-500 dark:text-neutral-500">Marketing</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                       height="16" fill="currentColor" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                       </path>
                                    </svg>
                                    Active
                                 </span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <div class="flex items-center gap-x-3">
                                    <span class="text-xs text-gray-500 dark:text-neutral-500">0/5</span>
                                    <div
                                       class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                       <div
                                          class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                          role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0"
                                          aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-3">
                                 <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                              </div>
                           </td>
                           <td class="size-px whitespace-nowrap">
                              <div class="px-6 py-1.5">
                                 <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Edit
                                 </a>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <!-- End Table -->

                  <!-- Footer -->
                  <div
                     class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                     <div>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                           <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span> results
                        </p>
                     </div>

                     <div>
                        <div class="inline-flex gap-x-2">
                           <button type="button"
                              class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="m15 18-6-6 6-6"></path>
                              </svg>
                              Prev
                           </button>

                           <button type="button"
                              class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                              Next
                              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="m9 18 6-6-6-6"></path>
                              </svg>
                           </button>
                        </div>
                     </div>
                  </div>
                  <!-- End Footer -->
               </div>
            </div>
         </div>
      </div>
      <!-- End Card -->
   </div>
@endsection
