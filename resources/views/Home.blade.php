<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing</title>
    @vite('resources/js/app.js')
</head>
<body class="w-full ">
    <div class="w-full min-w-[300px]  ">
        @include('componen.navbar',['judul'=>'SMK MUH'])

    
    <div    
    class="min-h-screen hero "
    style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="  hero-content text-neutral-content sm:w-[100%] md:max-w-3xl">
            <div class="flex flex-col items-center justify-center w-full">
            <h1 class="mb-3 text-xl font-bold text-center sm:text-2xl md:text-4xl">SMKS MUHAMMADIYAH PAGUYANGAN</h1>
            <p class="mb-5 text-center">
                PPDB! 2024/2025 Gelombang I, Pendaftaran dimulai pada Tanggal 26 Januari 2024 
            </p>
                          <!-- Open the modal using ID.showModal() method -->
                <button class="px-4 py-0 mb-3 btn btn-primary" onclick="my_modal_2.showModal()">DAFTAR</button>
                <dialog id="my_modal_2" class="modal">
                <div class="text-gray-800 modal-box">
                    <form method="dialog">
                        <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold ">Hallo</h3>
                    <p class="py-4">Press ESC key or click outside to close</p>
                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
                </dialog>
                        
            </div>
        </div>
        </div>


</div>

<div class="w-[100%] px-5 py-2  flex-col">

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
    @include('componen.footer')
</body>
</html>