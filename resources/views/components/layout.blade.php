<!DOCTYPE html>
<html lang="en"
      data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>SMK MUHAMMADIYAH PAGUYANGAN</title>
    <link rel="shortcut icon"
          href="{{ asset('storage/logo_smk_muh.png') }}"
          type="image/x-icon">
    @vite('resources/js/app.js')
</head>

<body class="w-full">
    <x-Navbar></x-Navbar>
    <x-hero_section>
        <x-slot:content>
            @foreach ($content as $value)
                <video src="{{ asset('storage/' . $value->get('url')) }}"
                       class="absolute z-30 object-cover w-full h-full"
                       id="carouselContent"
                       autoplay
                       muted
                       style="z-index: {{ $value->get('index') }};"
                       loop>

                </video>
            @endforeach
        </x-slot:content>
    </x-hero_section>
    <div class="w-full min-w-[300px] max-w-[950px]  m-auto">
        {{ $slot }}
    </div>

    <x-Footer></x-Footer>
</body>

</html>
