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
        
        @include('componen.hero_section')

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