<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <meta translate="false">
    <title>admin Dasboard</title>
    <x-headvite />
</head>

<body class="bg-base-200">
    <div class="z-10 px-2 py-0 border-b border-gray-200 min-h-12 navbar bg-base-300">
        <div class="flex-none">
            <label class="btn btn-square btn-sm swap swap-rotate">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" />

                <!-- hamburger icon -->
                <svg class="fill-current swap-off"
                     xmlns="http://www.w3.org/2000/svg"
                     width="28"
                     height="28"
                     viewBox="0 0 512 512">
                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                </svg>

                <!-- close icon -->
                <svg class="fill-current swap-on"
                     xmlns="http://www.w3.org/2000/svg"
                     width="28"
                     height="28"
                     viewBox="0 0 512 512">
                    <polygon
                             points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                </svg>
            </label>
        </div>
        <div class="flex-1">
            <h1 class="mx-2 text-lg font-bold">daisyUI</h1>
        </div>

    </div>
    <div class="w-full bg-red-500 grid grid-cols-[20rem,1fr]">
        <div class="col-span-1 bg-yellow-500">
            navigasi
        </div>
        <div class="col-span-1 bg-green-700">
            content
        </div>
    </div>
</body>

</html>
