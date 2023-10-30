<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/dri.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>DRI - PRD</title>
    <!-- CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap5.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    @stack('css')
</head>

<body class="font-pjs relative bg-black">

    {{-- navbar --}}
    <div id="navbar"
        class="w-full text-white flex flex-wrap 2xl:px-[104px] xl:px-20 lg:px-10 md:px-5 sss:px-4 fixed py-2 z-[999] backdrop-blur-sm bg-transparent bg-gradient-to-l from-[#30328C] to-[#3a3eca] ">
        <div href="" class="flex items-center w-full justify-between ">
            <img src="{{ asset('img/dri.png') }}" class="w-14 lg:mr-[104px] md:mr-20" alt="DRI" />


        </div>

    </div>
    {{-- navbar --}}

    <section>
        @yield('contain')
    </section>


    <div class="bg-hitam w-full relative z-[16] overflow-hidden">
        <div
            class="mt-[20px] sm:px-[104px] sss:px-4 sm:py-[56px] sss:py-8 flex flex-col items-start sm:gap-12 sss:gap-4 text-white">
            <div class="flex sm:justify-between flex-col sm:flex-row items-center self-stretch">
                <img src="{{ asset('img/dri.png') }}" class="sm:w-[72px] sss:w-14">
                <div class="flex justify-end items-center lg:gap-28 sss:gap-3">
                    <a href="#home" class="text-xl font-semibold leading-[140%] tracking-tight">Home</a>
                    <a href="#about" class="text-xl font-semibold leading-[140%] tracking-tight">About</a>
                    <a href="#produk" class="text-xl font-semibold leading-[140%] tracking-tight">Products</a>
                    <a href="#service" class="text-xl font-semibold leading-[140%] tracking-tight">Services</a>

                </div>
            </div>

            <div class="flex items-start sm:gap-12 gap-7">
                <a href="https://www.instagram.com/rekadigi.id/" target="_blank">
                    <img src="{{ asset('img/ig.png') }}" class="sm:w-12 w-6">
                </a>
                <a href="https://www.linkedin.com/company/pt-daya-rekadigital-indonesia" target="_blank">
                    <img src="{{ asset('img/lind.png') }}" class="sm:w-12 w-6">
                </a>
            </div>


        </div>

        {{-- lamp top left --}}
        <div class="absolute top-6 -left-30  bg-blue-900 lamp2 -z-[1] sm:w-[500px] w-80 h-80 sm:h-[500px]"></div>
        {{-- lamp top right --}}
        <div
            class="absolute sm:top-64 sss:top-[460px] right-0 lamp2 bg-blue-900  -z-[1] sm:w-[500px] w-80 h-80 sm:h-[500px]">
        </div>
    </div>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    @stack('scripts')

</body>

</html>
