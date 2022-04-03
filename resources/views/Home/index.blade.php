<!DOCTYPE html>


<html lang="en">

    <head>
        <meta charset="UTF-8">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FRL Furniture Jogja</title>


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
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

        </style>


    </head>


    <body class="overflow-x-hidden antialiased ">

        <div class=" bg-backgroundHeader lg:h-1/4">



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
                        <a href="#"
                            class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-brown">Beranda</a>
                        <a href="#features"
                            class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Tentang</a>
                        <a href="#Product"
                            class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Produk</a>
                        <a href="#testimonials"
                            class="font-bold duration-100 transition-color hover:text-brown">Makeover</a>
                        <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                            {{-- <a href="#_" class="w-full py-2 font-bold text-center text-pink-500">Login</a> --}}
                            <a href="#_"
                                class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-green-500 fold-bold">Hubungi
                                Kami
                            </a>
                        </div>
                    </nav>

{{-- heading --}}
                    <div
                        class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
   
                        <a href=""
                            class="relative z-40 py-2 px-6 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Hubungi
                            Kami</a>

                        <svg class="absolute top-0 left-0 hidden w-screen max-w-3xl -mt-64 -ml-12 lg:block"
                            viewBox="0 0 818 815" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="c">
                                    <stop stop-color="#E614F2" offset="0%" />
                                    <stop stop-color="#FC3832" offset="100%" />
                                </linearGradient>
                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="f">
                                    <stop stop-color="#657DE9" offset="0%" />
                                    <stop stop-color="#1C0FD7" offset="100%" />
                                </linearGradient>
                                <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%"
                                    filterUnits="objectBoundingBox" id="a">
                                    <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                                    <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1"
                                        result="shadowBlurOuter1" />
                                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"
                                        in="shadowBlurOuter1" />
                                </filter>
                                <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%"
                                    filterUnits="objectBoundingBox" id="d">
                                    <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                                    <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1"
                                        result="shadowBlurOuter1" />
                                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"
                                        in="shadowBlurOuter1" />
                                </filter>
                                <path
                                    d="M160.52 108.243h497.445c17.83 0 24.296 1.856 30.814 5.342 6.519 3.486 11.635 8.602 15.12 15.12 3.487 6.52 5.344 12.985 5.344 30.815v497.445c0 17.83-1.857 24.296-5.343 30.814-3.486 6.519-8.602 11.635-15.12 15.12-6.52 3.487-12.985 5.344-30.815 5.344H160.52c-17.83 0-24.296-1.857-30.814-5.343-6.519-3.486-11.635-8.602-15.12-15.12-3.487-6.52-5.343-12.985-5.343-30.815V159.52c0-17.83 1.856-24.296 5.342-30.814 3.486-6.519 8.602-11.635 15.12-15.12 6.52-3.487 12.985-5.343 30.815-5.343z"
                                    id="b" />
                                <path
                                    d="M159.107 107.829H656.55c17.83 0 24.296 1.856 30.815 5.342 6.518 3.487 11.634 8.602 15.12 15.12 3.486 6.52 5.343 12.985 5.343 30.816V656.55c0 17.83-1.857 24.296-5.343 30.815-3.486 6.518-8.602 11.634-15.12 15.12-6.519 3.486-12.985 5.343-30.815 5.343H159.107c-17.83 0-24.297-1.857-30.815-5.343-6.519-3.486-11.634-8.602-15.12-15.12-3.487-6.519-5.343-12.985-5.343-30.815V159.107c0-17.83 1.856-24.297 5.342-30.815 3.487-6.519 8.602-11.634 15.12-15.12 6.52-3.487 12.985-5.343 30.816-5.343z"
                                    id="e" />
                            </defs>
                            <g fill="none" fill-rule="evenodd" opacity=".9">

                            </g>
                        </svg>
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
            <div
                class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
                <div
                    class="container group flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
                    <div
                        class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                        <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-3xl xl:mb-8">
                            Sebuah kreasi yang sesuai dengan kepribadian
                            anda</h1>

                        <p class="pr-0 mb-8 text-base text-subtitle sm:text-lg xl:text-xl lg:pr-20">Ubah tampilan rumah

                            Anda, ubah perspektif orang lain</p>

                        <a href=""
                            class="relative self-startinline-block w-auto px-8 py-2  mb-10 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Beli Sekarang</a>


                        <!-- Integrates with section -->
                        <div class="flex-col hidden mt-12 sm:flex lg:mt-24">


                        </div>

                    </div>
                    <div class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 lg:mr-10">
                        <div class="relative group  container relative  w-full max-w-2xl lg:absolute xl:max-w-6xl lg:w-screen">

                            <img src="{{ asset('assets/img/background/bg1.png') }}"
                                class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12">
 <div class="opacity-0 group-hover:opacity-100 duration-500 absolute inset-x-0 bottom-1 flex justify-center items-end">
 <img src="{{ asset('assets/img/background/bg2.png') }}" class="w-12 lg:w-24 h-auto  mb-24 ml-80  xl:mt-40 lg:mb-12 lg:h-full lg:-mr-52">


 </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- HERO SECTION END -->
        </div>

        <!-- BEGIN FEATURES SECTION -->
        <div id="features"
            class="relative w-full px-8 pt-10  md:py-0 lg:py-24 xl:py-40 xl:px-0">

            <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">

                {{-- <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Features</h2> --}}
                <h1
                    class="max-w-2xl px-5 md:mt-4 mt-2 text-choco text-3xl text-center font-black leading-tight  sm:mt-0 sm:px-0 sm:text-3xl md:text-right">


                    Kenapa Memilih Kami?</h1>
                <div class="flex flex-col sm:rounded-lg p-10 lg:rounded-lg w-full mt-10 lg:flex-row sm:mt-0 lg:mt-10">



                    <div class="flex flex-col md:flex-row mt-10 text-center md:-mx-4">
                        <div class="bg-white mt-5 rounded-lg shadow-md lg:shadow-sm p-8 md:mx-4 hover:bg-stone-100 ">


                            <img class="mx-auto mb-6 w-20 h-20"
                                src="{{ asset("assets/img/accounting.png") }}" alt="">


                            <h4 class="text-xl text-brown font-bold">Profesional </h4>

                            <p class="mt-1 text-subtitle">Menggunakan material terbaik dan tenaga ahli</p>

                        </div>

                        <div class="bg-white mt-5 rounded-lg shadow-md lg:shadow-sm p-8 md:mx-4 hover:bg-stone-100">
                            <img class="mx-auto mb-6 w-20 h-20"
                                src="{{ asset("assets/img/user-experience.png") }}" alt="">



                            <h4 class="text-xl text-brown font-bold">Berpengalaman</h4>

                            <p class="mt-1 text-subtitle">Telah mengerjakan ratusan proyek</p>


                        </div>

                        <div class="bg-white mt-5 rounded-lg shadow-md lg:shadow-sm p-8 md:mx-4 hover:bg-stone-100">
                            <img class="mx-auto mb-6 w-20 h-20"
                                src="{{ asset("assets/img/accounting.png") }}" alt="">


                            <h4 class="text-xl text-brown font-bold">Profesional </h4>

                            <p class="mt-1 text-subtitle">Menggunakan material terbaik dan tenaga ahli</p>

                        </div>

                        <div class="bg-white mt-5 rounded-lg shadow-md lg:shadow-sm p-8 md:mx-4 hover:bg-stone-100">
                            <img class="mx-auto mb-6 w-20 h-20"
                                src="{{ asset("assets/img/user-experience.png") }}" alt="">



                            <h4 class="text-xl text-brown font-bold">Berpengalaman</h4>

                            <p class="mt-1 text-subtitle">Telah mengerjakan ratusan proyek</p>


                        </div>

                    </div>




                </div>
            </div>
        </div>
        <!-- END FEATURES SECTION -->


        <!-- product Section -->
        <div class="relative px-8 py-10 bg-white border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">


            <div id="product" class="container flex flex-col items-center h-full max-w-6xl mx-auto">

                <h1
                    class="max-w-2xl px-5 md:pb-10 lg:pb-10 text-choco text-3xl text-center font-black leading-tight sm:mt-0 sm:px-0 sm:text-3xl md:text-right">

                    Produk Terbaru Kami</h1>
            </div>

            <nav id="product"
                class="absolute flex flex-col  hidden  mt-24 text-greyold-100 bg-white border-t border-gray-200 md:w-auto md:flex-row  lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">



                <a href="#"
                    class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-brown">All</a>
                <a href="#"
                    class="text-gray-600 mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Sofa</a>
                <a href="#"
                    class="text-gray-600 mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Meja</a>
                <a href="#"
                    class="text-gray-600 mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Lemari</a>
                <a href="#"
                    class="text-gray-600 mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Kursi</a>


            </nav>





            {{-- <div class="w-full  mx-auto"> --}}


            <div
                class=" mx-0 p-10 grid  grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

 @foreach($products as $key => $value)

                <!--Card 1-->
                <div class="swiper-slide  overflow-hidden  h-72 object-cover">
                    <div class="bg-white rounded-lg  border-2 p-8 md:mx-4">

                        <img class="mx-auto h-32"
                            src="{{ count($value->product_images) > 0 ? $value->product_images[0]->image : null }}" alt="">

                    </div>
                    <p class="mt-1 text-greyold">{{ $value->name }}</p>

                    <h4 class="text-xl text-choco font-bold">{{ $value->description }}</h4>
                    <p class="mt-1 text-greyold">Rp.{{ $value->price }},-</p>
                </div>
                @endforeach


            </div>




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

                        Makeover Terbaru Kami</h2>
                    <p class="my-6 text-xl lg:text-sm font-medium text-greyold">Kami memiliki lebih dari 300+ proyek

                        yang berhasil

                        dijalankan dan memuaskan harapan pelanggan kami.</p>
                </div>
                <div class="container my-12  mx-auto lg:px-4 md:px-12">

                    <div class="flex flex-wrap mx-1 lg:mx-12 ">

                        <!-- Column -->
                        <div class="my-1 md:mt-5 px-1  md:w-2/5 lg:my-8 lg:px-4 md:px-4 lg:w-2/5">


                            <div
                                class="  lg:border-l-0  lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r  flex flex-col justify-between leading-normal">
                                <div class="  ">
                                    <a href="#">
                                        <img alt="Placeholder"
                                            class=" object-cover  h-96 w-96 lg:h-96 lg:w-96  rounded-xl"
                                            src="https://picsum.photos/600/400/?random">

                                    </a>
                                </div>
                                <div class=" col-span-2 w-full mt-5">

                                    <h4 class="text-lg text-choco ">Rumah bergaya vintage yang membawa
                                        kembali memori</h4>
                                    <p class="mt-2 text-sm text-greyold">In publishing and graphic design, Lorem ipsum
                                        is a
                                        placeholder text commonly used to demonstrate the visual form of a document
                                        or a typeface
                                    </p>

                                </div>

                            </div>

                            <!-- END Article -->

                        </div>
                        <!-- END Column -->
                        <div class="mt-8 columns-1 lg:pl-5 md:w-3/5 lg:w-3/5">



                            <div class="lg:grid lg:w-full lg:py-5 lg:h-56 lg:grid-rows-2 lg:grid-flow-col mt-4 lg:border-l-0 lg:border-gray-400  rounded-b lg:rounded-b-none lg:rounded-r flex lg:flex-col leading-normal">


                                  <div class="row-span-2   ">
                                        <a href="#">
                                              <img alt="Placeholder" class="object-cover w-24 h-24 md:w-48 md:h-48 lg:h-48 lg:w-48 rounded-lg" src="https://picsum.photos/600/400/?random">
                                        </a>
                                  </div>
                                  <div class="row-span-2 col-span-2 w-full ml-5">

                                        <h4 class="text-lg text-choco ">Rumah bergaya vintage yang membawa
                                              kembali memori</h4>
                                        <p class="mt-2 text-sm text-greyold">In publishing and graphic design, Lorem ipsum
                                              is a
                                              placeholder text commonly used to demonstrate the visual form of a document
                                              or a typeface
                                        </p>
                                  </div>
                            </div>


                            <div class="lg:grid lg:w-full lg:py-5 lg:h-56 lg:grid-rows-2 lg:grid-flow-col mt-4 lg:border-l-0 lg:border-gray-400  rounded-b lg:rounded-b-none lg:rounded-r flex lg:flex-col leading-normal">


                                <div class="row-span-2   ">
                                    <a href="#">
                                        <img alt="Placeholder"
                                            class="object-cover w-24 h-24 md:w-48 md:h-48 lg:h-48 lg:w-48 rounded-lg"

                                            src="https://picsum.photos/600/400/?random">
                                    </a>
                                </div>
                                <div class="row-span-2 col-span-2 w-full ml-5">

                                    <h4 class="text-lg text-choco ">Rumah bergaya vintage yang membawa
                                        kembali memori</h4>
                                    <p class="mt-2 text-sm text-greyold">In publishing and graphic design, Lorem ipsum
                                        is a
                                        placeholder text commonly used to demonstrate the visual form of a document
                                        or a typeface
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- End makeover-->

        <div id="maps" class="flex items-center  justify-center lg:w-full w-full 2xl:w-full 2xl:h-full  md:py-0 xl:px-0">

              {{-- <div class="w-full mx-auto"> --}}
                    <div class="mapouter">
                          <div class="gmap_canvas"><iframe width="1024" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Gedongkuning%20No.60,%20Pelem%20Mulong,%20Rejowinangun,%20Kec.%20Kotagede,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055171&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                                <style>
                                      .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 600px;
                                            width: 1024px;
                                      }

                                </style><a href="https://www.embedgooglemap.net">google maps in website</a>
                                <style>
                                      .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 600px;
                                            width: 1024px;
                                      }

                                </style>
                          </div>
                    </div>



              {{-- </div> --}}

        </div>

<div id="socialMedia" class="flex items-center bg-backgroundHeader p-10 justify-center w-full 2xl:w-full 2xl:h-full  md:py-16 lg:py-24 sm:py-20 xl:px-0">


      <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl  mx-auto text-center">

            <h2 class="text-2xl font-bold leading-10 tracking-tight text-choco sm:text-3xl sm:leading-none md:text-3xl lg:text-3xl xl:text-3xl">
                  Ingin Tahu Lebih Detail?</h2>
            <p class="my-6 text-xl lg:text-sm font-medium text-subtitle">Kami akan selalu memberikan penjelasan terbaik terkait segala pertanyaan mengenai furniture dan makeover rumah anda</p>

            {{-- <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden"> --}}
                  {{-- <a href="#_" class="w-full py-2 font-bold text-center text-pink-500">Login</a> --}}
                   <a href="" class="relative z-40 py-2 px-6 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Hubungi
                         Kami</a>

            {{-- </div> --}}

      </div>


</div>




        <footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
            <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
                <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">
                   
                     <a href="/" class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start relative flex items-center  font-black leading-none">

                           <img src="{{ asset("assets/img/frl.png") }}" class="w-12 h-12 " alt="">
                          
                     </a>

                    <p class="mt-6 mr-4 text-base text-gray-500">Crafting the next-level of user experience and
                        engagement.
                    </p>


                </div>




                <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                        <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                            Product</li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Features</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Integrations</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Product</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">FAQ</a>
                        </li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                        <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                            Company</li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Privacy</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Terms
                                of
                                Service</a></li>
                    </ul>
                 
                    <div class="flex flex-col w-full text-gray-700">
                        <div class="inline-block px-3 py-2 mt-5 font-bold text-gray-800 uppercase md:mt-0">Follow Us
                        </div>
                        <div class="flex justify-start pl-4 mt-2">
                            <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                                target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                                </svg>
                            </a>
                            <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                                target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
                                </svg>
                            </a>
                            <a class="flex items-center block text-gray-400 no-underline hover:text-gray-600"
                                target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


            </div>


            <div class="pt-4 pt-6 mt-10 text-center text-gray-500 border-t border-gray-100">© 2020 Landmark. All rights
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
        {{-- swipper --}}




    </body>




</html>
