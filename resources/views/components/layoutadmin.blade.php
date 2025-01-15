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

<body class="bg-base-200"
      x-data="{
          doc: {
              mainbox: $refs.mainbox,
          }
      }">
    <div class="sticky z-[999] top-0  w-full px-4 py-0 border-b border-gray-200 min-h-12 navbar bg-base-300">
        <div class="flex-none">
            <label class="btn btn-square btn-sm swap swap-rotate">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox"
                       x-init="$el.onchange = () => {
                           doc.mainbox.style.gridTemplateColumns = $el.checked ? '0rem 1fr' : '20rem 1fr';
                       }" />

                <!-- hamburger icon -->
                <svg class="fill-current swap-on"
                     xmlns="http://www.w3.org/2000/svg"
                     width="28"
                     height="28"
                     viewBox="0 0 512 512">
                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                </svg>

                <!-- close icon -->
                <svg class="fill-current swap-off"
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

            <div class="mx-2 text-sm breadcrumbs">
                <ul>
                    <li><a>Home</a></li>
                    <li><a>Documents</a></li>
                    <li>Add Document</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="w-full  grid grid-cols-[20rem,1fr] transition-all "
         x-ref="mainbox">
        <div
             class="bg-blue-400 sticky top-[3rem] overflow-hidden h-[calc(100vh_-_3rem)] col-span-1 z-20 overflow-y-auto">
            <h1 class="p-2 font-bold text-center text-white text-md drop-shadow-md ">SMK MUHAMADIYAH PAGUYANGAN </h1>
            <ul class="w-full space-y-1 menu rounded-box prose-a:bg-white prose-a:border prose-a:border-gray-800">
                <li><a
                       @if (!Route::is('admin.statistik')) href="{{ route('admin.statistik') }}" @else class="!bg-blue-400" @endif>statistik</a>
                </li>
                <li>
                    <details>
                        <summary class="bg-white border border-gray-800">Page</summary>
                        <ul class="pt-1 space-y-1">
                            <li><a>Utama</a></li>
                            <li><a>PPDB</a></li>
                            <li><a>Tentang</a></li>
                            <li><a>Lokasi</a></li>

                        </ul>
                    </details>
                </li>
                <li>
                    @php
                        $artikel = Route::is('admin.artikel');
                        $artikel_tambah = Route::is('admin.artikel.tambah');
                    @endphp
                    <details @if ($artikel || $artikel_tambah) open @endif>
                        <summary
                                 class="  @if ($artikel || $artikel_tambah) bg-blue-400 @else bg-white @endif border border-gray-800">
                            Artikel</summary>
                        <ul class="pt-1 space-y-1">
                            <li><a
                                   @if (!$artikel) href="{{ route('admin.artikel') }}" @else class="!bg-blue-400" @endif>Semua
                                    Artikel</a></li>
                            <li><a
                                   @if (!$artikel_tambah) href="{{ route('admin.artikel.tambah') }}" @else class="!bg-blue-400" @endif>Tambah
                                    Artikel</a></li>

                        </ul>
                    </details>
                </li>

            </ul>
        </div>
        <div class="absolute left-0 z-10 col-span-1 bg-gray-100 sm:relative h-[calc(100vh_-_3rem)] overflow-y-auto">
            <div class="max-w-[1200px] m-auto px-2">

                {{ $slot }}

            </div>

        </div>
    </div>
</body>

</html>
