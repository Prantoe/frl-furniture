<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">

        <title>Document</title>
    </head>

    <body class="bg-backgroundHeader">

    <header class="relative z-50 w-full bg-white h-24 ">
          <div class=" z-30  flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">


                <a href="/" class="relative flex items-center  h-5 h-full font-black leading-none">
                      <img src="{{ asset("assets/img/frl.png") }}" class="w-12 h-12 " alt="">
                      <span class="ml-3 text-xl md:hidden text-gray-800">FRL Furniture</span></span>
                </a>

                <nav id="nav" class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                      <a href="#" class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-brown">Beranda</a>
                      <a href="#features" class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Tentang</a>
                      <a href="{{ asset("productsList") }}" class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Produk</a>
                      <a href="#testimonials" class="font-bold duration-100 transition-color hover:text-brown">Makeover</a>
                      <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                            {{-- <a href="#_" class="w-full py-2 font-bold text-center text-pink-500">Login</a> --}}
                            <a href="https://linktr.ee/frl_furniture" target="_blank" class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-green-500 fold-bold">Hubungi
                                  Kami
                            </a>
                      </div>
                </nav>

                {{-- heading --}}
                <div class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">

                      <a href="https://linktr.ee/frl_furniture" target="_blank" class="relative z-40 py-2 px-6 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Hubungi
                            Kami</a>

                      <svg class="absolute top-0 left-0 hidden w-screen max-w-3xl -mt-64 -ml-12 lg:block" viewBox="0 0 818 815" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                  <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="c">
                                        <stop stop-color="#E614F2" offset="0%" />
                                        <stop stop-color="#FC3832" offset="100%" />
                                  </linearGradient>
                                  <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="f">
                                        <stop stop-color="#657DE9" offset="0%" />
                                        <stop stop-color="#1C0FD7" offset="100%" />
                                  </linearGradient>
                                  <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox" id="a">
                                        <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                                        <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" in="shadowBlurOuter1" />
                                  </filter>
                                  <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox" id="d">
                                        <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                                        <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" in="shadowBlurOuter1" />
                                  </filter>
                                  <path d="M160.52 108.243h497.445c17.83 0 24.296 1.856 30.814 5.342 6.519 3.486 11.635 8.602 15.12 15.12 3.487 6.52 5.344 12.985 5.344 30.815v497.445c0 17.83-1.857 24.296-5.343 30.814-3.486 6.519-8.602 11.635-15.12 15.12-6.52 3.487-12.985 5.344-30.815 5.344H160.52c-17.83 0-24.296-1.857-30.814-5.343-6.519-3.486-11.635-8.602-15.12-15.12-3.487-6.52-5.343-12.985-5.343-30.815V159.52c0-17.83 1.856-24.296 5.342-30.814 3.486-6.519 8.602-11.635 15.12-15.12 6.52-3.487 12.985-5.343 30.815-5.343z" id="b" />
                                  <path d="M159.107 107.829H656.55c17.83 0 24.296 1.856 30.815 5.342 6.518 3.487 11.634 8.602 15.12 15.12 3.486 6.52 5.343 12.985 5.343 30.816V656.55c0 17.83-1.857 24.296-5.343 30.815-3.486 6.518-8.602 11.634-15.12 15.12-6.519 3.486-12.985 5.343-30.815 5.343H159.107c-17.83 0-24.297-1.857-30.815-5.343-6.519-3.486-11.634-8.602-15.12-15.12-3.487-6.519-5.343-12.985-5.343-30.815V159.107c0-17.83 1.856-24.297 5.342-30.815 3.487-6.519 8.602-11.634 15.12-15.12 6.52-3.487 12.985-5.343 30.816-5.343z" id="e" />
                            </defs>
                            <g fill="none" fill-rule="evenodd" opacity=".9">

                            </g>
                      </svg>
                </div>

                <div id="nav-mobile-btn" class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                      <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                      <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
                </div>

          </div>
    </header>

    <div class="container flex flex-col items-center mt-20 h-full max-w-3xl mx-auto">

          <h1 class="max-w-2xl px-5 md:pb-10 lg:pb-0 text-choco text-3xl text-center font-black leading-tight sm:mt-0 sm:px-0 sm:text-3xl md:text-right">

                Produk Terbaru Kami</h1>
    </div>
    <nav  class=" flex flex-row flex-row w-auto justify-center text-greyold-100  border-t border-gray-200 md:w-auto md:flex-row  text-base bg-transparent mt-5 border-none py-0 flex relative">



          <a href="#" class="ml-0 mr-3 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-brown">Semua Produk</a>
          <a href="#" class="text-gray-600 mr-3 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Sofa</a>
          <a href="#" class="text-gray-600 mr-3 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Meja</a>
          <a href="#" class="text-gray-600 mr-3 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Lemari</a>
          <a href="#" class="text-gray-600 mr-3 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Kursi</a>


    </nav>


        <div class="container mx-auto  space-y-2 mt-10 lg:space-x-0 lg:space-y-2 lg:gap-4 lg:grid lg:grid-cols-4">

            @foreach($products as $key => $value)
            <div class="max-w-xs  ml-8 mb-5 bg-white  rounded-lg hover:shadow-2xl">
                <img class="w-full h-48"
                    src="{{ count($value->product_images) > 0 ? $value->product_images[0]->image : null }}"

                    alt="product" />
                <div class="px-6 py-4">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-800">{{ $value->name }}</h4>
                    <p class="leading-normal text-gray-700">{{ $value->description }}.</p>
                </div>
            </div>
            @endforeach
   

        </div>

    </body>

</html>
