<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing</title>
    @vite('resources/js/app.js')
</head>
<body >
    <div class="w-full min-w-[300px]">

    
    <div
    class="min-h-screen hero"
    style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="text-center  hero-content text-neutral-content sm:w-[100%] md:max-w-3xl">
            <div class="flex flex-col items-center justify-center w-full">
            <h1 class="mb-3 text-xl font-bold sm:text-2xl md:text-4xl ">SMKS MUHAMMADIYAH PAGUYANGAN</h1>
            <p class="mb-5">
                PPDB! 2024/2025 Gelombang I, Pendaftaran dimulai pada Tanggal 26 Januari 2024 
            </p>
            {{-- <button class="btn btn-primary">Get Started</button> --}}
            <label class="flex items-center max-w-sm gap-2 max-h-[40px] input input-bordered shadow-xl">
                <input type="text" class="text-gray-700 grow" placeholder="Search" />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="w-4 h-4 opacity-70 fill-blue-500">
                  <path
                    fill-rule="evenodd"
                    d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                    clip-rule="evenodd" />
                </svg>
              </label>
            </div>
        </div>

    </div>
</div>


    @include('layout.navbar',['judul'=>'SMK MUH'])

    <div class="w-[100%] px-5 py-2 ">
        <button class="m-1 btn btn-neutral hover:btn-ghost btn-sm" id="result">Result Blog</button>

       
     
        

        <div class="my-2 border shadow-md mockup-window bg-base-300">
            <div class="flex justify-center px-4 py-16 bg-base-200">Hello!</div>
        </div>
        <div class="my-2 border shadow-md mockup-window bg-base-300">
            <div class="flex justify-center px-4 py-16 bg-base-200">Hello!</div>
        </div>
        <div class="my-2 border shadow-md mockup-window bg-base-300">
            <div class="flex justify-center px-4 py-16 bg-base-200">Hello!</div>
        </div>

       
    </div>

    @include('layout.footer')
</body>
</html>