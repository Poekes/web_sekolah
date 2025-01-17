<div class="min-h-screen hero "
     x-data="{
         carousel: 1,
         lastCarousel: 0,
         init() {
             const content = document.querySelectorAll('#carouselContent');
             content[0].play();
             $nextTick(() => {
                 const btnCarouselBottom = $refs.carouselbtn.children[this.carousel];
                 btnCarouselBottom.click();
             })
         },
         HandleBtnCarousel(id, el) {
             if (id == this.lastCarousel) return;
             this.carousel = id
             if (this.lastCarousel != 0) {
                 $refs.carouselbtn.querySelectorAll('button').forEach((element) => element.classList.add('opacity-50'))
             }
             el.classList.remove('opacity-50');
             document.querySelectorAll('#carouselContent').forEach((er) => {
                 if (this.lastCarousel != 0) {
                     er.pause()
                     er.style.zIndex = 1
                 }
             })
             this.lastCarousel = id
     
             $refs.contentCarousel.children[id - 1].style.zIndex = 10;
             $refs.contentCarousel.children[id - 1].play();
         },
         handleBtnLeft() {
             const id = this.carousel == 1 ? $refs.contentCarousel.childElementCount : this.carousel - 1;
             $refs.carouselbtn.children[id].click()
         },
         handleBtnRight() {
             const id = this.carousel == $refs.contentCarousel.childElementCount ? 1 : this.carousel + 1;
             $refs.carouselbtn.children[id].click()
         }
     
     }">

    <div class="z-20 hero-overlay bg-opacity-60"></div>
    <div class=" z-30 hero-content text-neutral-content sm:w-[100%] md:max-w-3xl">
        <div class="flex flex-col items-center justify-center w-full">
            <h1 class="mb-3 text-xl font-bold text-center sm:text-2xl md:text-4xl">SMKS MUHAMMADIYAH PAGUYANGAN</h1>
            <p class="mb-5 text-center">
                PPDB! 2024/2025 Gelombang I, Pendaftaran dimulai pada Tanggal 26 Januari 2024
            </p>
            <!-- Open the modal using ID.showModal() method -->
            <button class="px-4 py-0 mb-3 btn btn-primary">DAFTAR</button>
            <button @click="handleBtnLeft()"
                    class="absolute text-white btn btn-circle btn-outline btn-sm sm:btn-md bottom-20 left-8 sm:left-24 ">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24"
                     fill="currentColor"
                     class="size-6">
                    <path fill-rule="evenodd"
                          d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
                          clip-rule="evenodd" />
                </svg>
            </button>
            <button @click="handleBtnRight()"
                    class="absolute text-white btn btn-circle btn-outline btn-sm sm:btn-md bottom-20 right-8 sm:right-24">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24"
                     fill="currentColor"
                     class="size-6">
                    <path fill-rule="evenodd"
                          d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                          clip-rule="evenodd" />
                </svg>
            </button>
            <div class="absolute px-1 bottom-10"
                 x-ref="carouselbtn">
                <template x-for="c in $refs.contentCarousel.childElementCount">
                    <button @click="HandleBtnCarousel(c,$el)"
                            class="w-2 h-1 m-[1px] sm:m-[2px] rounded-full opacity-50 sm:w-4 sm:h-2 bg-base-200"></button>
                </template>

            </div>

        </div>
    </div>
    <div class="relative z-10 hero-overlay"
         x-ref="contentCarousel">
        @foreach ($herocontent as $value)
            <video src="{{ asset('storage/' . $value['url']) }}"
                   class="absolute z-30 object-cover w-full h-full"
                   id="carouselContent"
                   {{-- autoplay=false --}}
                   muted
                   style="z-index: {{ $value['index'] }};"
                   loop>
            </video>
        @endforeach
    </div>

</div>
