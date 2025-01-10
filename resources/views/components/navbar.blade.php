<div class="fixed z-50 h-12 transition-all top-1 navbar min-h-10"
     style="transition: .4s"
     x-data="{
         isFocusDropdown: false,
         lastPositionScroll: 0,
         init() {
             $store.window.onscroll((e) => {
                 if (this.isFocusDropdown) return;
                 if (window.scrollY > this.lastPositionScroll) {
                     $refs.navbar.style.top = '-200px';
                 } else {
                     $refs.navbar.style.top = '0.25rem';
                 }
                 this.lastPositionScroll = window.scrollY;
             })
         },
         dropdownBlur() {
             this.isFocusDropdown = false;
         },
         dropdownFocus() {
             this.isFocusDropdown = true;
         }
     
     }"
     x-ref="navbar">

    <div class="navbar-start"></div>


    {{-- navbar center --}}
    <div class="flex justify-center text-blue-600 navbar-center">
        <ul class="absolute top-0 gap-1 shadow-md menu menu-horizontal backdrop-blur-md rounded-box ">

            {{-- Button Home --}}
            <li>
                <a class="bg-gray-100 bg-opacity-20">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-5 h-5"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
            </li>
            {{-- Button Menu --}}
            <li>
                <div class="flex justify-end flex-1 p-0 bg-gray-100 bg-opacity-20">
                    <div class="flex items-stretch ">
                        <div class=" dropdown dropdown-end">
                            <div tabindex="0"
                                 role="button"
                                 x-on:focus="dropdownFocus()"
                                 x-on:blur="dropdownBlur()"
                                 class="btn btn-ghost btn-sm rounded-btn">Menu</div>
                            <ul tabindex="0"x-on:focus="dropdownFocus()"
                                x-on:blur="dropdownBlur()"
                                class="menu dropdown-content bg-base-100 rounded-box z-[1] mt-4 w-48 md:w-52 p-2 shadow">

                                <li>
                                    <details open>
                                        <summary x-on:focus="dropdownFocus()"
                                                 x-on:blur="dropdownBlur()">Cara Mendaftar</summary>
                                        <ul>
                                            <li><a>Metode Online</a></li>
                                            <li><a>Metode Offline</a></li>
                                        </ul>
                                    </details>
                                </li>
                                <li>
                                    <details>
                                        <summary x-on:focus="dropdownFocus()"
                                                 x-on:blur="dropdownBlur()">Jurusan</summary>
                                        <ul>
                                            <li><a>RPL</a></li>
                                            <li><a>TOTR</a></li>
                                            <li><a>TKR</a></li>
                                            <li><a>BROADCAST</a></li>
                                        </ul>
                                    </details>
                                </li>
                                <li><a>Visi Misi</a></li>
                                <li><a>Galery</a></li>
                                @auth
                                    <li>
                                        <form class="grid w-full h-full grid-cols-1 "
                                              action="{{ route('logout') }}"
                                              method="POST">
                                            @csrf
                                            <button type="submit"
                                                    class="col-span-1 text-left">Logout</button>
                                        </form>
                                    </li>
                                @endauth


                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            {{-- Button Search --}}
            <li>

                <div class="flex justify-end flex-1 p-0 bg-gray-100 bg-opacity-20">
                    <div class="flex items-stretch ">
                        <div class=" dropdown dropdown-bottom">
                            <div tabindex="0"
                                 role="button"
                                 x-on:focus="dropdownFocus()"
                                 x-on:blur="dropdownBlur()"
                                 class="btn btn-ghost btn-sm rounded-btn">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-5 h-5"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <ul tabindex="0"
                                x-on:focus="dropdownFocus()"
                                x-on:blur="dropdownBlur()"
                                class="menu dropdown-content before:hidden rounded-box z-[1] mt-3 ml-[-150px] w-64 p-2 ">

                                <div class=" join">
                                    <input x-on:focus="dropdownFocus()"
                                           x-on:blur="dropdownBlur()"
                                           class="text-gray-900 focus:outline-none input focus:ring-0 join-item input-sm"
                                           placeholder="Search `Cara Mendaftar`" />
                                    <button
                                            class="text-white bg-blue-600 rounded-r-full hover:bg-blue-800 btn join-item btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-5 h-5"
                                             fill="none"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </div>


                            </ul>
                        </div>
                    </div>
                </div>

            </li>
        </ul>
    </div>

</div>
