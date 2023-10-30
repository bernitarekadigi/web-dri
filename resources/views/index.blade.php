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
    <title>{{ __('index.welcome') }}</title>
</head>

<body class="font-pjs relative bg-black">
    {{-- FLOAT BUTTON --}}
    <a href="http://wa.me/+6287802530264"
        class="float-button md:w-[72px] md:h-[72px] w-14 h-14 rounded-full fixed z-[100] bottom-10 md:right-10 right-5 p-3">
        <img src="{{ asset('img/wa.png') }}" alt="">
    </a>

    {{-- navbar --}}
    <div id="navbar"
        class="w-full text-white flex flex-wrap 2xl:px-[104px] xl:px-20 lg:px-10 md:px-5 sss:px-4 fixed py-2 z-[999] backdrop-blur-sm bg-transparent bg-gradient-to-l ">
        <div href="" class="flex items-center w-full justify-between relative">
            <img src="{{ asset('img/dri.png') }}" class="w-14 lg:mr-[104px] md:mr-20" alt="DRI" />

            <div class="hidden w-full md:flex md:justify-between md:items-center">
                <ul
                    class="flex 2xl:gap-20 lg:gap-16 md:gap-10 lg:text-xl text-base tracking-[0.12px] leading-[140%] font-semibold">
                    <a href="#home">
                        <li class="">{{ __('index.home') }}</li>
                    </a>
                    <a href="#about">
                        <li class="">{{ __('index.about') }}</li>
                    </a>
                    <a href="#produk">
                        <li class="">{{ __('index.product') }}</li>
                    </a>
                    <a href="#service">
                        <li class="">{{ __('index.service') }}</li>
                    </a>
                </ul>
                <div class="md:flex hidden">
                    @if (app()->getLocale() == 'en')
                        <a id="lang" href="/id"
                            class="flex items-center 2xl:mr-[80px] xl:mr-[60px] md:mr-5 cursor-pointer">
                            <img src="{{ asset('img/en.png') }}" class="xl:w-10 xl:mr-4 w-8 mr-3">
                            <span>EN</span>
                        </a>
                    @else
                        <a id="lang" href="/en"
                            class="flex items-center 2xl:mr-[80px] xl:mr-[60px] md:mr-5 cursor-pointer">
                            <img src="{{ asset('img/id.png') }}" class="xl:w-10 xl:mr-4 w-8 mr-3">
                            <span>ID</span>
                        </a>
                    @endif
                    <a href="http://wa.me/+6287802530264"
                        class="rounded-[80px] capitalize border-white border lg:py-[14px] py-3 lg:px-[24px] px-3">{{ __('index.contact_us') }}</a>

                </div>
            </div>

            <button data-collapse-toggle="navbar-default" type="button" onclick="openMenu()"
                class="inline-flex items-center p-1 w-14 h-14  justify-center text-sm text-white hover:text-[#30328C] rounded-lg md:hidden hover:bg-white focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

        </div>

    </div>
    {{-- navbar --}}

    {{-- navbar responsive --}}
    <div class="w-full h-full fixed md:hidden block py-0 top-0 left-0 duration-500 z-[99999] -translate-y-full bg-hitam bg-opacity-75"
        id="menuContent">
        <div class="bg-gradient-to-b bg-transparent from-[#30328C] to-[#3a3eca] rounded-b-3xl shadow-2xl pb-5">
            <div class="flex justify-between px-4 pt-8 ">
                <img src="{{ asset('img/dri.png') }}" class="w-14" alt="DRI" />
                <div onclick="closeMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-14 md:h-14 sss:w-10 sss:h-10"
                        viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(5.12,5.12)">
                                <path
                                    d="M25,2c-12.681,0 -23,10.319 -23,23c0,12.681 10.319,23 23,23c12.681,0 23,-10.319 23,-23c0,-12.681 -10.319,-23 -23,-23zM33.71,32.29c0.39,0.39 0.39,1.03 0,1.42c-0.2,0.19 -0.45,0.29 -0.71,0.29c-0.26,0 -0.51,-0.1 -0.71,-0.29l-7.29,-7.29l-7.29,7.29c-0.2,0.19 -0.45,0.29 -0.71,0.29c-0.26,0 -0.51,-0.1 -0.71,-0.29c-0.39,-0.39 -0.39,-1.03 0,-1.42l7.29,-7.29l-7.29,-7.29c-0.39,-0.39 -0.39,-1.03 0,-1.42c0.39,-0.39 1.03,-0.39 1.42,0l7.29,7.29l7.29,-7.29c0.39,-0.39 1.03,-0.39 1.42,0c0.39,0.39 0.39,1.03 0,1.42l-7.29,7.29z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <ul onclick="closeMenu()"
                class="flex flex-col gap-6 md:gap-9 p-5 tracking-[0.12px] leading-[140%] text-base md:text-xl font-bold text-white ">
                <a href="#home">
                    <li class="">{{ __('index.home') }}</li>
                </a>
                <a href="#about">
                    <li class="">{{ __('index.about') }}</li>
                </a>
                <a href="#produk">
                    <li class="">{{ __('index.product') }}</li>
                </a>
                <a href="#service">
                    <li class="">{{ __('index.service') }}</li>
                </a>
                <div class="flex justify-between">
                    @if (app()->getLocale() == 'en')
                        <a id="lang" href="/id"
                            class="flex items-center 2xl:mr-[80px] xl:mr-[60px] md:mr-5 cursor-pointer">
                            <img src="{{ asset('img/en.png') }}" class="xl:w-10 xl:mr-4 w-8 mr-3">
                            <span>EN</span>
                        </a>
                    @else
                        <a id="lang" href="/en"
                            class="flex items-center 2xl:mr-[80px] xl:mr-[60px] md:mr-5 cursor-pointer">
                            <img src="{{ asset('img/id.png') }}" class="xl:w-10 xl:mr-4 w-8 mr-3">
                            <span>ID</span>
                        </a>
                    @endif
                    <a href="http://wa.me/+6287802530264"
                        class="rounded-[80px] capitalize border-white border lg:py-[14px] py-3 lg:px-[24px] px-3">{{ __('index.contact_us') }}</a>
                </div>
            </ul>
        </div>
    </div>
    {{-- navbar responsive --}}

    {{-- HOME --}}
    <section id="home" class=" bg-hitam back bg-cover mx-auto top-0">



        <div class="flex flex-col justify-between h-full">

            {{-- SLOGAN --}}
            <div class="flex flex-col justify-center items-center h-[90%] 2xl:pt-[193px] pt-36 text-white ">
                <div class="font-bold self-center text-center">
                    <h1 class="lg:text-[40px] md:text-3xl sss:text-xl leading-[130%] tracking-[0.2px] pb-4">
                        {{ __('index.welcome') }}
                    </h1>
                    <h2
                        class="lg:text-[80px] md:text-[57px] sss:text-3xl tracking-[0.4px] md:leading-[130%] capitalize pb-6">
                        {{ __('index.text_utama') }}
                    </h2>
                    <p class="lg:text-2xl text-lg font-normal leading-[140%] tracking-[0.12px] pb-12 lg:mx-5 mx-2 ">
                        {{ __('index.text_desc') }}</p>

                </div>
                <a href="#service"
                    class="rounded-full  border-white border bg-abu py-[16px] px-[24px] flex justify-center items-center gap-4 w-[340px] backdrop-blur-lg">
                    <p class="font-semibold trackinng-[0.12px] leading-[140%] text-[24px]">
                        {{ __('index.selengkapnya') }}
                    </p>
                    <img src="{{ asset('img/more.svg') }}" alt="">
                </a>
            </div>


            {{-- MITRA KAMI --}}
            <div class="sm:pt-[168px] pt-[258px] lg:pb-24 pb-0">
                <p
                    class="flex justify-start md:px-[104px] px-4 text-xl leading-[140%] font-normal tracking-[0.1px] text-white">
                    {{ __('index.mitra') }} :
                </p>
                {{-- <div class="relative grid place-items-center overflow-hidden mx-[104px] gap-0 z-[60] w-[3500px] rr"> --}}
                <div class="grid place-items-center overflow-hidden ">
                    <div class="grid relative place-items-center mx-[104px] overflow-hidden ">
                        <div class="animate-marquee flex items-center 2xl:gap-10 2xl:w-[3100px] sss:w-[1000px] ">
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/pkr.png') }}" class="2xl:w-40 sss:w-14 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/sanggau.png') }}"
                                    class="2xl:w-40 sss:w-14 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/koni_ska.png') }}"
                                    class="2xl:w-40 sss:w-14 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/pixel.png') }}" class="2xl:w-60 sss:w-24 aspect-auto ">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/index.png') }}" class="2xl:w-60 sss:w-24 aspect-auto ">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/selasih.png') }}"
                                    class="2xl:w-60 sss:w-24 aspect-auto ">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/baba.png') }}" class="2xl:w-60 sss:w-24 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/thxxxx 1.png') }}"
                                    class="2xl:w-40 sss:w-14 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/gas.png') }}" class="2xl:w-28  sss:w-12 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/sh.png') }}" class="2xl:w-32 sss:w-14  aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/kripton.png') }}"
                                    class="2xl:w-60  sss:w-24 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/dtrans.png') }}" class="2xl:w-80 sss:w-24 aspect-auto">
                            </div>
                        </div>

                        <div
                            class="absolute top-0  animate-marquee2 whitespace-nowrap 2xl:w-[3100px] sss:w-[1000px] flex items-center">
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/pkr.png') }}" class="2xl:w-40 sss:w-14 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/sanggau.png') }}"
                                    class="2xl:w-40 sss:w-14 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/koni_ska.png') }}"
                                    class="2xl:w-40 sss:w-14 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/pixel.png') }}" class="2xl:w-60 sss:w-24 aspect-auto ">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/index.png') }}" class="2xl:w-60 sss:w-24 aspect-auto ">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/selasih.png') }}"
                                    class="2xl:w-60 sss:w-24 aspect-auto ">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/baba.png') }}" class="2xl:w-60 sss:w-24 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/thxxxx 1.png') }}"
                                    class="2xl:w-40 sss:w-14 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/gas.png') }}" class="2xl:w-28  sss:w-12 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/sh.png') }}" class="2xl:w-32 sss:w-14  aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/kripton.png') }}"
                                    class="2xl:w-60  sss:w-24 aspect-auto">
                            </div>
                            <div class="px-8 sss:px-2">
                                <img src="{{ asset('img/mitra/dtrans.png') }}" class="2xl:w-80 sss:w-24 aspect-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- END HOME --}}

    {{-- VISI --}}
    <section class="w-full bg-hitam relative pt-[160px] rounded-b-[80px] z-20 visimisi">

    </section>
    {{-- END VISI --}}

    {{-- LAYANAN KAMI --}}
    <section id="service" class="w-full bg-white lg:px-[100px] sss:px-4 relative z-[19] -mt-20">
        <p class="text-3xl md:text-5xl font-bold tracking-[0.24px] leading-[130%] text-black pt-[176px] pb-20">
            {{ __('index.layanan') }}</p>

        <div class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6]">
            <div class="flex sm:items-center sss:flex-col lg:flex-row md:gap-10">
                <img src="{{ asset('img/soft.png') }}"
                    class="lg:w-[200px] lg:h-[200px] md:w-[100px] md:h-[100px] sm:h-[70px] sm:w-[70px] sss:hidden sm:block">
                <div class="flex flex-col items-start gap-8  text-black">
                    <p class="text-xl md:text-4xl font-semibold leading-[130%] tracking-[0.2px] ">
                        {{ __('index.softwareTitle') }}
                    </p>
                    <p class="text-justify text-lg md:text-2xl tracking-[0.12px] leading-[140%] self-stretch">
                        {{ __('index.softwareDesc') }}</p>
                </div>
            </div>
            {{-- <div class="flex px-[23px] content-center self-stretch gap-x-8 gap-y-10 flex-wrap items-center"> --}}
            <div
                class="grid sss:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 3xl:grid-cols-10 grid-flow-row sss:gap-5 items-center justify-center">
                <img src="{{ asset('img/mitra/pkr.png') }}" class="sss:h-14 md:h-20  aspect-auto">
                <img src="{{ asset('img/mitra/sanggau.png') }}" class="sss:h-14 md:h-20  aspect-auto">
                <img src="{{ asset('img/mitra/koni_ska.png') }}" class="sss:h-14 md:h-20   aspect-auto">
                <img src="{{ asset('img/mitra/pixel.png') }}" class="sss:h-8 md:h-12 aspect-auto">
                <img src="{{ asset('img/mitra/indexb.png') }}" class="sss:h-8 md:h-12 aspect-auto">
                <img src="{{ asset('img/mitra/selasihb.png') }}" class="sss:h-9 md:h-14 aspect-[16/6]">
                <img src="{{ asset('img/mitra/baba.png') }}" class="sss:h-7 md:h-10 aspect-auto">
                <img src="{{ asset('img/mitra/thxxxx 1.png') }}" class="sss:h-14 md:h-20 aspect-auto">
                <img src="{{ asset('img/mitra/gas.png') }}" class="sss:h-14 md:h-20 aspect-auto">
                <img src="{{ asset('img/mitra/sh.png') }}" class="sss:h-14 md:h-20 aspect-auto">
                <img src="{{ asset('img/mitra/kripton.png') }}" class="sss:h-8 md:h-12 aspect-auto">
                <img src="{{ asset('img/mitra/dtrans.png') }}" class="sss:h-6 md:h-10 aspect-auto">
            </div>
        </div>

        <div class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6]">
            <div class="flex sm:items-center sss:flex-col lg:flex-row md:gap-10">
                <img src="{{ asset('img/market.png') }}"
                    class="lg:w-[200px] lg:h-[200px] md:w-[100px] md:h-[100px] sm:h-[70px] sm:w-[70px]  sss:hidden sm:block ">
                <div class="flex flex-col items-start gap-8 text-black ">
                    <p class="text-xl md:text-4xl font-semibold leading-[130%] tracking-[0.2px] ">
                        {{ __('index.digitalTitle') }}
                    </p>
                    <p class="text-justify text-lg md:text-2xl tracking-[0.12px] leading-[140%] self-stretch">
                        {{ __('index.digitalDesc') }}</p>
                </div>
            </div>
            <div
                class="grid sss:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 3xl:grid-cols-10 grid-flow-row sss:gap-5 items-center justify-center">
                <img src="{{ asset('img/digital/1gudeg.png') }}" class="sss:h-14 md:h-[90px] aspect-auto">
                <img src="{{ asset('img/digital/2batik.png') }}" class="sss:h-14 md:h-20 aspect-auto">
                <img src="{{ asset('img/digital/3mon.png') }}" class="sss:h-14 md:h-[90px] aspect-auto">
                <img src="{{ asset('img/digital/4dtp.png') }}" class="sss:h-14 md:h-[90px] aspect-auto">
                <img src="{{ asset('img/digital/5dku.png') }}" class="sss:h-14 md:h-[90px] aspect-auto">
                <img src="{{ asset('img/digital/6taman.png') }}" class="sss:h-14 md:h-[90px] aspect-auto">
                <img src="{{ asset('img/digital/7Clair.png') }}" class="sss:h-14 md:h-[90px] aspect-auto">
                <img src="{{ asset('img/digital/8cal.png') }}" class="sss:h-14 md:h-[90px] aspect-auto">
                <img src="{{ asset('img/digital/9trad.png') }}" class="sss:h-14 md:h-[90px] aspect-auto">
            </div>
        </div>

        <div
            class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6] z-50 ">
            <div class="flex sm:items-center sss:flex-col lg:flex-row md:gap-10">
                <img src="{{ asset('img/it.png') }}"
                    class="lg:w-[200px] lg:h-[200px] md:w-[100px] md:h-[100px] sm:h-[70px] sm:w-[70px]  sss:hidden sm:block ">
                <div class="flex flex-col items-start gap-8 text-black">
                    <p class="text-xl md:text-4xl font-semibold leading-[130%] tracking-[0.2px] ">
                        {{ __('index.perlengkapanTitle') }}</p>
                    <p class="text-justify text-lg md:text-2xl tracking-[0.12px] leading-[140%] self-stretch">
                        {{ __('index.perlengkapanDesc') }}</p>
                </div>
            </div>
            {{-- <div class="flex px-[23px] content-center self-stretch gap-x-8 gap-y-10 flex-wrap items-center z-20"> --}}
            <div
                class="grid sss:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 3xl:grid-cols-10 grid-flow-row sss:gap-5 items-center justify-center">
                <img src="{{ asset('img/mitra/pkr.png') }}" class="sss:h-14 md:h-20  aspect-auto">
                <img src="{{ asset('img/mitra/sanggau.png') }}" class="sss:h-14 md:h-20  aspect-auto">
                <img src="{{ asset('img/mitra/koni_ska.png') }}" class="sss:h-14 md:h-20   aspect-auto">
                <img src="{{ asset('img/mitra/pixel.png') }}" class="sss:h-8 md:h-12 aspect-auto">
                <img src="{{ asset('img/mitra/indexb.png') }}" class="sss:h-8 md:h-12 aspect-auto">
                <img src="{{ asset('img/mitra/selasihb.png') }}" class="sss:h-9 md:h-14 aspect-[16/6]">
                <img src="{{ asset('img/mitra/baba.png') }}" class="sss:h-7 md:h-10 aspect-auto">
                <img src="{{ asset('img/mitra/thxxxx 1.png') }}" class="sss:h-14 md:h-20 aspect-auto">
                <img src="{{ asset('img/mitra/gas.png') }}" class="sss:h-14 md:h-20 aspect-auto">
                <img src="{{ asset('img/mitra/sh.png') }}" class="sss:h-14 md:h-20 aspect-auto">
                <img src="{{ asset('img/mitra/kripton.png') }}" class="sss:h-8 md:h-12 aspect-auto">
                <img src="{{ asset('img/mitra/dtrans.png') }}" class="sss:h-6 md:h-10 aspect-auto">
            </div>


        </div>
        {{-- rouded bawah --}}
        <div class="absolute -bottom-[150px] bg-white w-full left-0 z-10 h-[150px] rounded-b-[80px]"></div>
    </section>
    {{-- END LAYANANKAMI --}}

    {{-- PRODUK KAMI --}}
    <section id="produk" class="w-full bg-hitam text-white relative z-[18] overflow-hidden rounded-b-[80px]">
        <p
            class="text-3xl md:text-5xl px-4 md:px-[100px] font-bold tracking-[0.24px] leading-[130%] text-white pt-[176px] pb-20 z-50 w-full">
            {{ __('index.produk') }}</p>

        <div class="flex flex-wrap justify-center w-full">
            <div class="w-[846px] md:mx-7 sss:mx-5 mb-20 flex flex-col gap-10 items-center justify-center ">
                <a href="https://gas.id/" target="_blank">
                    <img src="{{ asset('img/produkgas.png') }}"
                        class="lg:h-[503px] md:h-[373px] sm:h-[270px] sss:h-[213px] aspect-video ">
                    <div class="flex flex-col gap-6 items-start self-stretch">
                        <p
                            class="text-center self-stretch sss:text-2xl sm:text-[40px] font-semibold sm:leading-[130%] tracking-[0.2px]">
                            GAS
                            Apps</p>
                        <p
                            class="text-center self-stretch sss:text-xl sm:text-[32px] sm:leading-[130%] tracking-[0.16px]">
                            Mobile Marketplace
                            & Point of Sales</p>
                    </div>
                </a>
            </div>
            <div class="w-[846px] mx-7 mb-20 flex flex-col gap-10 items-center justify-center">
                <a href="https://baba.id/" target="_blank">

                    <img src="{{ asset('img/produkbaba.png') }}"
                        class="lg:h-[503px] md:h-[373px] sm:h-[270px] sss:h-[213px] aspect-video ">
                    <div class="flex flex-col gap-6 items-start self-stretch">
                        <p
                            class="text-center self-stretch sss:text-2xl sm:text-[40px] font-semibold sm:leading-[130%] tracking-[0.2px]">
                            BABA
                        </p>
                        <p
                            class="text-center self-stretch sm:text-[32px] sm:leading-[130%] sss:text-xl tracking-[0.16px]">
                            Management System
                        </p>
                    </div>
                </a>
            </div>
            <div class="w-[846px] mx-7 mb-20 flex flex-col gap-10 items-center justify-center">
                <a href="https://blangko.id/" target="_blank">
                    <img src="{{ asset('img/produkblanko.png') }}"
                        class="lg:h-[503px] md:h-[373px] sm:h-[270px] sss:h-[213px] aspect-video">
                    <div class="flex flex-col gap-6 items-start self-stretch">
                        <p
                            class="text-center self-stretch sss:text-2xl sm:text-[40px] font-semibold sm:leading-[130%] tracking-[0.2px]">
                            Blangko</p>
                        <p
                            class="text-center self-stretch sm:text-[32px] sm:leading-[130%] sss:text-xl tracking-[0.16px]">
                            Online Form
                            Builder</p>
                    </div>
                </a>
            </div>
        </div>

        {{-- lamp top left --}}
        <div class="absolute -top-40 -left-64  bg-blue-900 lamp2 -z-[1] w-[500px] h-[500px]"></div>
        {{-- lamp mid right --}}
        <div class="absolute bottom-[800px] -right-80 bp bg-blue-900 lamp2 -z-[1] w-[500px] h-[500px]"></div>
        {{-- lamp bot left --}}
        <div class="absolute bottom-[450px] -left-64  bg-blue-900 lamp2 -z-[1] w-[400px] h-[400px]"></div>

        {{-- rounded bottom --}}
        {{-- <div class="absolute -bottom-[87px] bg-red-600 -z-[3] w-full left-0 h-[150px] rounded-b-[80px]"></div> --}}

    </section>
    {{-- PRODUK KAMI --}}

    {{-- ABOUT --}}
    <div id="about" class="w-full bg-white text-black z-[17] relative -mt-20">

        <div class="xl:pt-[405px] pt-40 flex flex-col justify-center px-6 sm:px-10 md:px-24 2xl:px-[245px]">
            <div class="flex justify-center w-full relative z-10">
                <div class="absolute top-20 sm:-top-10 xl:-top-40 -z-[1]">
                    <img src="{{ asset('img/bg_about.png') }}" class="w-[690px] bg-about">
                </div>
                <p
                    class="text-center text-2xl sm:text-3xl md:text-[37.8px] pb-[166px] font-semibold tracking-[0.19px] md:leading-[130%] text-transparent bg-gradient-to-bl bg-clip-text from-[#30328C] to-[#3a3eca]">
                    {{ __('index.aboutText') }}</p>
            </div>
            <p class="text-[32px] font-bold leading-[130%] tracking-[0.16px] text-center pb-12 z-10">
                {{ __('index.question') }}</p>

            {{-- question --}}
            <div class="flex flex-col gap-8 pb-40 z-10">

                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold sm:text-2xl text-xl leading-none pb-6">
                        {{ __('index.q1Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] sm:text-xl text-lg font-medium leading-none">
                        {{ __('index.q1Desc') }}</p>
                </div>

                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold sm:text-2xl text-xl leading-none pb-6">
                        {{ __('index.q2Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] sm:text-xl text-lg font-medium leading-none">
                        {{ __('index.q2Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold sm:text-2xl text-xl leading-none pb-6">
                        {{ __('index.q3Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] sm:text-xl text-lg font-medium leading-none">
                        {{ __('index.q3Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold sm:text-2xl text-xl leading-none pb-6">
                        {{ __('index.q4Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] sm:text-xl text-lg font-medium leading-none">
                        {{ __('index.q4Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold sm:text-2xl text-xl leading-none pb-6">
                        {{ __('index.q5Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] sm:text-xl text-lg font-medium leading-none">
                        {{ __('index.q5Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold sm:text-2xl text-xl leading-none pb-6">
                        {{ __('index.q6Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] sm:text-xl text-lg font-medium leading-none">
                        {{ __('index.q6Desc') }}</p>
                </div>
            </div>


            {{-- rounded bottom --}}
            <div class="absolute -bottom-[105px] bg-white w-full left-0  h-[150px] rounded-b-[80px]"></div>


        </div>
    </div>
    {{-- end about --}}

    <div class="bg-hitam w-full relative  z-[16] overflow-hidden">
        <div class="px-3 sm:px-6 lg:px-32 pt-[300px] ">
            <div
                class="capitalize flex p-14 items-center gap-12 flex-col rounded-[48px] bg-[#ffffff66] text-white overflow-x-hidden relative">
                <h1 class="text-2xl md:text-[40px] font-bold tracking-[0.2px] md:leading-[130%] z-10">Unlock Your
                    Digital Potential
                </h1>
                <h1 class=" tracking-[0.2px] md:leading-[130%] md:text-[32px] text-xl z-10">Empower your brand with
                    software solutions &
                    digital marketing excellence</h1>
                <a href="http://wa.me/+6287802530264"
                    class="capitalize px-6 py-4 rounded-full flex items-center justify-center bg-transparent bg-gradient-to-tl from-[#30328C] to-[#3A3ECA] md:text-2xl text-xl font-bold tracking-[0.12px] leading-[140%]">get
                    started now</a>
                <img src="{{ asset('img/Group 51.png') }}" class="absolute -z-[1] lg:z-[1] left-0 top-0">
                <img src="{{ asset('img/Group 52.png') }}" class="absolute -z-[1] lg:z-[1] right-0 bottom-0">

            </div>
        </div>

        <div
            class="mt-[84px] sm:px-[104px] sss:px-4 sm:py-[56px] sss:py-8 flex flex-col items-start sm:gap-12 sss:gap-4 text-white">
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

            <p class="sm:text-2xl text-lg sm:leading-[140%] tracking-tight font-semibold">Crafting Your Digital Future
            </p>
            <p class="font-mont sm:text-xl text-lg leading-none">© 2023 PT Daya Rekadigital Indonesia All rights
                reserved.</p>
        </div>

        {{-- lamp top left --}}
        <div class="absolute top-6 -left-30  bg-blue-900 lamp2 -z-[1] sm:w-[500px] w-80 h-80 sm:h-[500px]"></div>
        {{-- lamp top right --}}
        <div
            class="absolute sm:top-64 sss:top-[460px] right-0 lamp2 bg-blue-900  -z-[1] sm:w-[500px] w-80 h-80 sm:h-[500px]">
        </div>
    </div>


    <script>
        const menu = document.getElementById("menuContent");
        const navbar = document.getElementById("navbar");

        function openMenu() {
            menu.classList.remove('-translate-y-full')
        }

        function closeMenu() {
            menu.classList.add('-translate-y-full')
        }
        window.addEventListener('scroll', function() {
            var scrollY = window.scrollY;

            // Lakukan sesuatu berdasarkan scrollY, misalnya ubah warna latar belakang saat digulir
            if (scrollY > 40) {
                navbar.classList.add('from-[#30328C]')
                navbar.classList.add('to-[#3a3eca]')
            } else {
                navbar.classList.remove('from-[#30328C]')
                navbar.classList.remove('to-[#3a3eca]')
            }
        });
    </script>

</body>

</html>
