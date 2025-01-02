<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMK MUHAMMADIYAH PAGUYANGAN</title>
    <link rel="shortcut icon" href="{{ asset('storage/logo_smk_muh.png') }}" type="image/x-icon">
    @vite('resources/js/app.js')
</head>
<body class="w-full "
        x-data="{
            open:false,
            toggle(){this.open = ! this.open}
        }">
    <div class="w-full min-w-[300px]  "
   >
        <x-Navbar></x-Navbar>
        <x-Hero-section></x-Hero-section>
        <button class="btn" @click="toggle()">buka</button>
    </div>

<div class="w-[100%] px-5 py-2  flex-col" x-show="open">

    <div class="my-2 border shadow-md mockup-window bg-base-300">
        <div class="flex justify-center px-4 py-16 bg-base-200">Hello!</div>
    </div>

</div>

    <x-Footer></x-Footer>
</body>
</html>/
