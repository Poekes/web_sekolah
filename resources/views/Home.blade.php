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
    @include('layout.navbar',['judul'=>'SMK MUH'])
    
    <div
    class="min-h-screen hero"
    style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="text-center hero-content text-neutral-content">
            <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
            <p class="mb-5">
                Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                quasi. In deleniti eaque aut repudiandae et a id nisi.
            </p>
            <button class="btn btn-primary">Get Started</button>
            </div>
        </div>

    </div>

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