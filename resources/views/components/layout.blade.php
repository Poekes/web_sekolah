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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full bg-base-100">
    <x-navbar></x-navbar>


    {{ $slot }}

    <x-footer></x-footer>
</body>

</html>
