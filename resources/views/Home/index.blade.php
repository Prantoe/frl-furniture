<!DOCTYPE html>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FRL Furniture Jogja</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
        <link rel="stylesheet" href="{{ asset('lightbox/css/lightbox.css') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/frl.png') }}">

        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}" />




        <!-- Small CSS to Hide elements at 1520px size -->
        <style>
            <blade media|(max-width%3A1520px)%20%7B>.left-svg {
                display: none;
            }
            }

            /* small css for the mobile nav close */
            #nav-mobile-btn.close span:first-child {
                transform: rotate(45deg);
                top: 4px;
                position: relative;
                background: #a0aec0;
            }

            #nav-mobile-btn.close span:nth-child(2) {
                transform: rotate(-45deg);
                margin-top: 0px;
                background: #a0aec0;
            }
           
            /* Links inside the navbar */
           

            /* Add a red background color to navbar links on hover */
            .navbar a:hover, .dropdown:hover .dropbtn {
          
            }

            /* Dropdown content (hidden by default) */
            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            }

            /* Add a grey background color to dropdown links on hover */
            .dropdown-content a:hover {
            background-color: #ddd;
            }

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
            display: block;
            }

        </style>


    </head>


    <body class="overflow-x-hidden antialiased ">

        <div class=" bg-white ">



            <!-- Header Section -->
            <header class="relative z-50 w-full h-24 ">
                <div
                    class=" z-30  flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">


                    <a href="/" class="relative flex items-center  h-5 h-full font-black leading-none">
                        <img src="{{ asset("assets/img/frl.png") }}" class="w-12 h-12 " alt="">
                        <span class="ml-3 text-xl md:hidden text-gray-800">FRL Furniture</span></span>
                    </a>

                    <nav id="nav"
                        class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                        <a href="/"
                            class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-brown">Beranda</a>
                        <a href="{{ asset("about") }}"
                            class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Tentang
                            Kami</a>
                        <a href="{{ asset("productsList") }}"
                            class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown"></a>
                            
                        <div class="dropdown">
                              <button class="dropbtn mr-0 font-bold duration-100 md:mr-3 lg:mr-8 lg:-ml-8 transition-color hover:text-brown">Produk

                              </button>
                              
                              <div class="dropdown-content">
                                    <a href="{{ asset("productsList") }}">Produk Interior</a>

                                    <a href="{{ asset("constructionList") }}">Produk Konstruksi</a>

                              </div>
                        </div>

                        <a href="{{ asset("makeOverList") }}"
                            class="font-bold duration-100 transition-color hover:text-brown">Makeover</a>

                            
                        <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                            {{-- <a href="#_" class="w-full py-2 font-bold text-center text-pink-500">Login</a> --}}
                            <a href="https://linktr.ee/frl_furniture" target="_blank"
                                class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-green-500 fold-bold">Hubungi
                                Kami
                            </a>
                        </div>
                    </nav>

                    {{-- heading --}}
                    <div
                        class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">

                        <a href="https://linktr.ee/frl_furniture" target="_blank"
                            class="relative z-40 py-2 px-6 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Hubungi
                            Kami</a>


                    </div>

                    <div id="nav-mobile-btn"
                        class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                        <span
                            class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                        <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
                    </div>

                </div>
            </header>
            <!-- End Header Section-->

            <!-- BEGIN HERO SECTION -->
            <div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-0 lg:pb-0 xl:pt-0 xl:pb-0">
                <!-- Slider main container -->
                <div class="swiper ">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide lg:w-full lg:swiper-slide">
                            <div
                                class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
                                <div
                                    class="container group flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
                                    <div
                                        class=" flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                                        <h1
                                            class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-3xl xl:mb-8">
                                            Sebuah kreasi yang sesuai dengan kepribadian
                                            anda</h1>

                                        <p class="pr-0 mb-8 text-base text-subtitle sm:text-lg xl:text-xl lg:pr-20">Ubah
                                            tampilan rumah

                                            Anda, ubah perspektif orang lain</p>

                                        <a href="whatsapp://send?text=Hallo FRL Furniture!&phone=+6281904608678"
                                            class="relative self-startinline-block w-auto px-8 py-2  mb-10 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Beli
                                            Sekarang</a>


                                        <!-- Integrates with section -->
                                        <div class="flex-col hidden mt-12 sm:flex lg:mt-24">


                                        </div>

                                    </div>
                                    <div
                                        class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 lg:mr-10">
                                        <div
                                            class="relative group  container relative  w-full max-w-2xl lg:absolute xl:max-w-6xl lg:w-screen">

                                            <img src="{{ asset('assets/img/background/bg1.png') }}"
                                                class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12">
                                            <div
                                                class="opacity-0 group-hover:opacity-100 duration-500 absolute inset-x-0 bottom-1 flex justify-center items-end">
                                                <img src="{{ asset('assets/img/background/bg2.png') }}"
                                                    class="w-12 lg:w-24 h-auto  mb-24 ml-80  xl:mt-40 lg:mb-12 lg:h-full lg:-mr-52">


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide lg:w-full lg:swiper-slide">
                            <div
                                class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
                                <div
                                    class="container group flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
                                    <div
                                        class=" flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                                        <h1
                                            class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-3xl xl:mb-8">
                                            TV Cabinet <br>4 Drawers <br>2 Open Space</h1>

                                        <p class="pr-0 mb-8 text-base text-subtitle sm:text-lg xl:text-xl lg:pr-20">
                                            Terbuat dari kayu jati kualitas terbaik. <br><br></p>


                                        <a href="whatsapp://send?text=Hallo FRL Furniture!&phone=+6281904608678"
                                            class="relative self-startinline-block w-auto px-8 py-2  mb-10 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Beli
                                            Sekarang</a>


                                        <!-- Integrates with section -->
                                        <div class="flex-col hidden mt-12 sm:flex lg:mt-24">


                                        </div>

                                    </div>
                                    <div
                                        class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 lg:mr-10">
                                        <div
                                            class="relative group  container relative  w-full max-w-2xl lg:absolute xl:max-w-6xl lg:w-screen">

                                            <img src="{{ asset('assets/img/background/bg7.png') }}"
                                                class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12">



                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide lg:w-full lg:swiper-slide">
                            <div
                                class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
                                <div
                                    class="container group flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
                                    <div
                                        class=" flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                                        <h1
                                            class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-3xl xl:mb-8">
                                            TV CABINET</h1>

                                        <p class="pr-0 mb-8 text-base text-subtitle sm:text-lg xl:text-xl lg:pr-20">Solusi agar Televisi terlihat elegan dan indah</p>

                                        <a href="whatsapp://send?text=Hallo FRL Furniture!&phone=+6281904608678"
                                            class="relative self-startinline-block w-auto px-8 py-2  mb-10 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Beli
                                            Sekarang</a>


                                        <!-- Integrates with section -->
                                        <div class="flex-col hidden mt-12 sm:flex lg:mt-24">


                                        </div>

                                    </div>
                                    <div
                                        class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 lg:mr-10">
                                        <div
                                            class="relative group  container relative  w-full max-w-2xl lg:absolute xl:max-w-6xl lg:w-screen">

                                            <img src="{{ asset('assets/img/background/bgbg.png') }}"




                                                class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12">


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        ...
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    {{-- <div class="swiper-scrollbar"></div> --}}
                </div>

            </div>

            <!-- HERO SECTION END -->
        </div>

        


        <!-- product Section -->
        <div class="relative px-8 py-10 bg-white border-t border-gray-200 md:py-16 lg:py-24     xl:py-40 xl:px-0">


            <div id="product" class="container flex flex-col items-center h-full max-w-6xl mx-auto">

                <h1
                    class="max-w-2xl px-5 md:pb-10 lg:pb-10 text-choco text-3xl text-center font-black leading-tight sm:mt-0 sm:px-0 sm:text-3xl md:text-right">

                    Produk Terbaru Kami</h1>
            </div>

            <div class=" mx-0 grid  grid-cols-4 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-6">

                @foreach($products as $key => $value)

                <!--Card 1-->
                <div class="lg:w-full w-20 mt-10  overflow-hidden  h-full object-contain ">
                      <div class="bg-white rounded-lg  border-2 p-0 md:mx-4 shadow-md lg:shadow-sm md:mx-4 hover:bg-stone-100">

                            <a href="{{ count($value->product_images) > 0 ? $value->product_images[0]->image : null }}" data-lightbox="image{{ $value->id }}" data-title="{{ $value->name }}">

                                  <img class="w-full object-contain  md:h-28 lg:h-48" src="{{ count($value->product_images) > 0 ? $value->product_images[0]->image : null }}" alt="product" />

                            </a>
                            @if(count($value->product_images) > 0)

                            @foreach($value->product_images as $idx => $images)
                            @if($idx != 0)

                            <a href="{{ $images->image }}" data-lightbox="image{{ $value->id }}" data-title="Rp.{{ $value->price }}">

                            </a>
                            @endif


                            @endforeach

                            @endif

                    <a href="{{ count($value->product_images) > 0 ? $value->product_images[0]->image : null }}" data-lightbox="image{{ $value->id }}" target="_blank" class="relative text-[8px] lg:text-sm py-1 my-2 mx-2 px-0 block text-center content-center text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">{{ $value->name }}

                    </a>

                    </div>

                </div>
                @endforeach


            </div>
 
            <a href="{{ asset("productsList") }}" target="_blank" class="relative mt-10  py-1 my-2 mx-2 px-0 block text-center  text-grey font-semibold hover:text-choco transition duration-300 bg-brown100 text-white rounded-full">Lihat Semua Produk

            </a>
        </div>
        <!-- End swipper Section -->

        <!-- Start makeover -->
        <div id="makeover"
            class="flex items-center justify-center w-full px-8 py-10  md:py-16 lg:py-24 xl:py-40 xl:px-0">
            <div class="w-full ">
                {{-- <div class="flex-col items-center  "> --}}
                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">

                    <h2
                        class="text-2xl font-bold leading-10 tracking-tight text-choco sm:text-3xl sm:leading-none md:text-3xl lg:text-3xl xl:text-3xl">

                        Proyek Makeover</h2>
                    <p class="my-6 text-xl lg:text-sm font-medium text-greyold">Kami memiliki lebih dari 300+ proyek
                        yang berhasil dijalankan dan memuaskan harapan pelanggan kami.</p>
                </div>
                <div class="container my-12  mx-auto lg:px-4 md:px-12">
<div class="flex flex-row">
      @foreach($services as $key => $value)
      <div class="basis-1/2 relative">


      <a href="{{ count($value->service_images) > 0 ? $value->service_images[0]->image : null }}" data-lightbox="image{{ $value->id }}" data-title="{{ $value->description }}">


            <img class=" object-cover  w-full h-full p-5 md:w-full md:h-full lg:h-full lg:w-full rounded-lg" src="{{ count($value->service_images) > 0 ? $value->service_images[0]->image : null }}" alt="service" />
            <div class="z-20 absolute w-full lg:ml-0 lg:bottom-80 inset-x-2 uppercase font-bold lg:drop-shadow-lg lg:shadow-black lg:text-white  text-brown text-sm md:text-xl lg:text-3xl text-center md:max-w-md lg:max-w-md leading-4">{{ $value->title }}<br><br> {{ $value->description }}</div>


      </a>

            {{-- <h4 class="text-lg text-choco absolute pb-20">{{ $value->title }}</h4> --}}
            {{-- <p class="mt-2 text-sm text-greyold">{{ $value->description }}
            </p> --}}
    

        {{-- @if(count($value->service_images) > 0)

        @foreach($value->service_images as $idx => $images)
        @if($idx != 0)

        <a href="{{ $images->image }}" data-lightbox="image{{ $value->id }}" data-title="{{ $value->title }}">

        </a>
        @endif


        @endforeach

        @endif --}}


        </div>
    @endforeach
        
    </div>

                </div>
            </div>

        </div>

        <!-- End makeover-->
        {{-- konstruksi --}}
        <div class="relative px-8 py-10 bg-white border-t border-gray-200 md:py-16 lg:py-24     xl:py-40 xl:px-0">

                <div id="product" class="container flex flex-col items-center h-full max-w-6xl mx-auto">

                    <h1 class="max-w-2xl px-5 md:pb-10 lg:pb-10 text-choco text-3xl text-center font-black leading-tight sm:mt-0 sm:px-0 sm:text-3xl md:text-right">Produk Konstruksi</h1>
                </div>

              <div class="swiper2 mx-0 grid  grid-cols-4 sm:grid-cols-4 md:grid-cols-4  xl:grid-cols-4 gap-6">
<div class="swiper-wrapper">


                    @foreach($construction as $key => $value)


                    <!--Card 1-->
                    <div class="swiper-slide lg:w-full w-20 mt-10  overflow-hidden  h-full object-contain ">

                          <div class="bg-white w-full block rounded-lg  border-2 p-0 md:mx-4 shadow-md lg:shadow-sm md:mx-4 hover:bg-stone-100">

                                <a href="{{ count($value->construction_images) > 0 ? $value->construction_images[0]->image : null }}" data-lightbox="image{{ $value->id }}" data-title="{{ $value->description }}">


                                      <img class="w-full block object-contain  md:h-28 lg:h-48" src="{{ count($value->construction_images) > 0 ? $value->construction_images[0]->image : null }}" alt="construction" />

                                </a>
                                @if(count($value->construction_images) > 0)

                                @foreach($value->construction_images as $idx => $images)
                                @if($idx != 0)

                                <a href="{{ $images->image }}" data-lightbox="image{{ $value->id }}" data-title="{{ $value->description }}">

                                </a>
                                @endif


                                @endforeach

                                @endif

                                <a href="{{ count($value->construction_images) > 0 ? $value->construction_images[0]->image : null }}" data-lightbox="image{{ $value->id }}" target="_blank" class="relative text-[8px] lg:text-sm py-1 my-2 mx-2 px-0 block text-center content-center text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">{{ $value->title }}

                                </a>

                          </div>

                    </div>
                    @endforeach
 </div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

              </div>

              <a href="{{ asset("constructionList") }}" target="_blank" class="relative mt-10  py-1 my-2 mx-2 px-0 block text-center  text-grey font-semibold hover:text-brown100 transition duration-300  text-brown rounded-full">Lihat Semua Produk Konstruksi

              </a>
        </div>

        {{-- end konstruksi --}}

        <div class=" max-w-full sm:w-max-w-full rounded overflow-hidden shadow-lg">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="lg:w-full w-full sm:w-full lg:h-96" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=7%C2%B049'02.0%22S%20110%C2%B024'07.8%22E&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://123movies-to.org"></a>

                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;

                        }

                    </style><a href="https://www.embedgooglemap.net"></a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;

                        }

                    </style>
                </div>
            </div>


        </div>
        {{-- end maps --}}

        {{-- location --}}
        <div class="location relative mt-10">
            <div class="location1 ">
            
                <img class="w-full max-h-60 object-cover brightness-50" src="{{ asset('assets/img/background/bg001.jpeg') }}" alt="">


                <div class="bottom-left absolute z-10 text-white top-20 shadow-sm left-16 lg:text-xl text-sm font-bold">SHOWROOM:</div>
                <div class="bottom-left absolute z-10 text-white top-1/4 shadow-sm left-16 lg:text-lg text-xs font-bold w-1/2 lg:w-1/3">Jl. Gedongkuning No.8C, Pelem Mulong, Rejowinangun, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewah Yogyakarta 55198</div>

            </div>
            <div class="location2 grid grid-cols-2 max-h-60">

                <img class=" w-full h-56 object-cover brightness-50 " src="{{ asset('assets/img/background/bg002.jpeg') }}" alt="">

                <img class=" w-full h-56 object-cover brightness-50 " src="{{ asset('assets/img/background/bg003.jpeg') }}" alt="">
                <div class="bottom-left absolute z-10 text-white bottom-36 shadow-sm right-20 lg:right-1/3 lg:text-xl text-sm font-bold">TEMPAT PRODUKSI:</div>
                <div class="bottom-left absolute z-10 text-white bottom-14 lg:bottom-7 shadow-sm right-4 lg:right-48 lg:text-lg text-xs font-bold w-1/2 lg:w-1/3">Jl. Gedongkuning No.8C, Pelem Mulong, Rejowinangun, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewah Yogyakarta 55198</div>

            </div>

        </div>

        <!-- BEGIN FEATURES SECTION -->
        <div id="features" class="relative w-full px-8 pt-10  md:py-0 lg:py-24 xl:py-40 xl:px-0">

              <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">

                    {{-- <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Features</h2> --}}
                    <h1 class="max-w-2xl px-5 md:mt-4 mt-2 text-choco text-3xl text-center font-black leading-tight  sm:mt-0 sm:px-0 sm:text-3xl md:text-right">


                          Kenapa Memilih Kami?</h1>
                    <div class="flex flex-col sm:rounded-lg p-5 pb-10 lg:rounded-lg w-full mt-5 lg:flex-row sm:mt-0 lg:mt-10">



                          <div class="flex flex-col md:flex-row text-center md:-mx-4">
                          
                                <div class="bg-white mt-5 rounded-lg shadow-md lg:shadow-sm p-8 md:mx-4 hover:bg-stone-100 ">


                                      <img class="mx-auto mb-6 w-20 h-20" src="{{ asset("assets/img/accounting.png") }}" alt="">


                                      <h4 class="text-xl text-brown font-bold">Profesional </h4>

                                      <p class="mt-1 text-subtitle">Tenaga ahli di bidang makeover</p>

                                </div>

                                <div class="bg-white mt-5 rounded-lg shadow-md lg:shadow-sm p-8 md:mx-4 hover:bg-stone-100">
                                      <img class="mx-auto mb-6 w-20 h-20" src="{{ asset("assets/img/user-experience.png") }}" alt="">



                                      <h4 class="text-xl text-brown font-bold">Berpengalaman</h4>

                                      <p class="mt-1 text-subtitle">Telah mengerjakan ratusan proyek</p>


                                </div>

                                <div class="bg-white mt-5 rounded-lg shadow-md lg:shadow-sm p-8 md:mx-4 hover:bg-stone-100">
                                      <img class="mx-auto mb-6 w-20 h-20" src="{{ asset("assets/img/quality.png") }}" alt="">


                                      <h4 class="text-xl text-brown font-bold">Kualitas </h4>

                                      <p class="mt-1 text-subtitle">Menggunakan material terbaik</p>

                                </div>

                                <div class="bg-white mt-5 rounded-lg shadow-md lg:shadow-sm p-8 md:mx-4 hover:bg-stone-100">
                                      <img class="mx-auto mb-6 w-20 h-20" src="{{ asset("assets/img/furniture.png") }}" alt="">



                                      <h4 class="text-xl text-brown font-bold">Banyak Pilihan</h4>

                                      <p class="mt-1 text-subtitle">Tersedia berbagai macam produk</p>


                                </div>

                          </div>




                    </div>
              </div>
        </div>
        <!-- END FEATURES SECTION -->


        <div id="socialMedia"
            class="flex items-center mt-10 bg-stone-100 p-10 justify-center w-full 2xl:w-full 2xl:h-full md:py-16 lg:py-24 sm:py-20 xl:px-0">



            <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl  mx-auto text-center">

                <h2
                    class="text-2xl font-bold leading-10 tracking-tight text-choco sm:text-3xl sm:leading-none md:text-3xl lg:text-3xl xl:text-3xl">
                    Ingin Tahu Lebih Detail?</h2>
                <p class="my-6 text-xl lg:text-sm font-medium text-subtitle">FRL Furniture menawarkan berbagai macam
                    furniture berbahan dasar kayu jati belanda, jati, dan mahoni dengan konsep minimalis, kontemporer,
                    maupun modern dengan kualitas terbaik dan harga terjangkau.</p>


                {{-- <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden"> --}}
                {{-- <a href="#_" class="w-full py-2 font-bold text-center text-pink-500">Login</a> --}}
                <a href="https://linktr.ee/frl_furniture" target="_blank"
                    class="relative z-40 py-2 px-6 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Hubungi
                    Kami</a>

                {{-- </div> --}}

            </div>


        </div>




        <footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
            <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
                <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">

                    <a href="/"
                        class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start relative flex items-center  font-black leading-none">

                        <img src="{{ asset("assets/img/frl.png") }}" class="w-12 h-12 " alt="">

                    </a>

                    <p class="mt-6 mr-4 text-base text-gray-500"> Jl Gedongkuning Selatan No 14 B Yogyakarta

                    </p>


                </div>

                <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                        <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                            Product</li>
                        <li><a href="{{ asset("about") }}"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tentang
                                Kami</a>
                        </li>
                        
                        <li><a href="{{ asset("productsList") }}"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Produk</a>
                        </li>
                        <li><a href="{{ asset("makeOverList") }}"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Makeover</a>
                        </li>

                    </ul>
                    <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                        <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                            Contact</li>
                        <li><a href="whatsapp://send?text=Hallo FRL Furniture!&phone=+6281904608678"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600"> 0819 0460
                                8678</a>

                        </li>

                        <li><a href="mailto:frlfurniture2022@gmail.com"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">
                                frlfurniture2022@gmail.com</a>

                        </li>

                    </ul>

                    <div class="flex flex-col w-full text-gray-700">
                        <div class="inline-block px-3 py-2 mt-5 font-bold text-gray-800 uppercase md:mt-0">Follow Us
                        </div>
                        <div class="flex justify-start pl-4 mt-2">

                            <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                                target="_blank" rel="noopener noreferrer"
                                href="https://www.instagram.com/frl_furniture/">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>

                            </a>
                            <a class="flex items-center block text-gray-400 no-underline hover:text-gray-600"
                                target="_blank" rel="noopener noreferrer"
                                href="whatsapp://send?text=Hallo FRL Furniture!&phone=+6281904608678">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>


            </div>


            <div class="pt-4 pt-6 mt-10 text-center text-gray-500 border-t border-gray-100">© 2022 FRL Furniture. All
                rights
                reserved.</div>

        </footer>

        <!-- a little JS for the mobile nav button -->
        <script>
            if ( document.getElementById( 'nav-mobile-btn' ) ) {
                document.getElementById( 'nav-mobile-btn' ).addEventListener( 'click', function () {
                    if ( this.classList.contains( 'close' ) ) {
                        document.getElementById( 'nav' ).classList.add( 'hidden' );
                        this.classList.remove( 'close' );
                    } else {
                        document.getElementById( 'nav' ).classList.remove( 'hidden' );
                        this.classList.add( 'close' );
                    }
                } );
            }

        </script>
        <script src="{{ asset('lightbox/js/lightbox-plus-jquery.js') }}"></script>
        <script src="{{ asset('lightbox/js/lightbox.js') }}"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

        <script>
            const swiper = new Swiper( '.swiper', {
                // Optional parameters
                loop: true,
                effect: 'flip',
                autoplay: {
                    delay: 5000,
                },
                flipEffect: {
                    slideShadows: true,
                },



                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    prevEl: '.swiper-button-prev',
                    nextEl: '.swiper-button-next',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                    draggable: true,

                },
            } );

        </script>
        <script>
              const swiper2 = new Swiper('.swiper2', {
                    // Optional parameters
                    loop: true,
                    slidesPerView: 3,
                    spaceBetween: 30

                    , effect: 'slide'
                    , autoplay: {
                          delay: 5000
                    , }
                    , flipEffect: {
                          slideShadows: true
                    , },



                    // If we need pagination
                    pagination: {
                          el: '.swiper-pagination'
                    , },

                    // Navigation arrows
                    navigation: {
                          prevEl: '.swiper-button-prev'
                          , nextEl: '.swiper-button-next'
                    , },

                    // And if we need scrollbar
                    scrollbar: {
                          el: '.swiper-scrollbar'
                          , draggable: true,

                    }
              , });

        </script>

        <script>
        // set the dropdown menu element
        const targetEl = document.getElementById('dropdownMenu');

        // set the element that trigger the dropdown menu on click
        const triggerEl = document.getElementById('dropdownButton');

        // options with default values
        const options = {
        placement: 'bottom',
        onHide: () => {
        console.log('dropdown has been hidden');
        },
        onShow: () => {
        console.log('dropdown has been shown');
        }
        };

        </script>
    </body>

</html>
