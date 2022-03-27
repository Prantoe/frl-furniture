<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>


    <body class="bg-white">
        <div class="flex absolute bg-backgroundHeader h-3/6 md:h-2/4 md:w-full">
            <div class="max-w-6xl md:ml-auto md:mr-10">
                <div class="sticky">
                    {{-- <div class=" "> --}}
                    <!-- Primary Navbar items -->
                    <div class="pt-5 p-3 md:flex items-center md:space-x-8">
                        <a href="" class="py-4 px-2 text-brown border-b-4 border-brown font-semibold ">Beranda</a>

                        <a href=""
                            class="py-4 px-2 text-grey font-semibold hover:text-brown transition duration-300">Tentang</a>
                        <a href=""
                            class="py-4 px-2 text-grey font-semibold hover:text-brown transition duration-300">Produk</a>
                        <a href=""
                            class="py-2 px-2 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Hubungi
                            Kami</a>
                    </div>

                </div>
            </div>


        </div>
        <div class="p-px absolute md:p-10 md:h-2/4 md:w-2/5">


            <div class="text-brown py-12 pl-5 mt-20 font-bold fixed md:absolute text-3xl md:p-12">Sebuah kreasi yang sesuai dengan kepribadian
                anda</div>

            <p class="text-subtitle mt-60 ml-0 fixed p-5 w-full md:ml-0 md:mt-48 md:p-12 text-base">Ubah tampilan rumah Anda, ubah perspektif orang lain.
            </p>
            <div class="button mt-80 ml-40 fixed md:ml-0 md:mt-72 ">
                <a href=""
                    class=" py-2 px-2 mb-10 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full ml-12">Beli
                    Sekarang</a>
            </div>

        </div>
        <div class="image absolute hidden md:w-1/2 md:ml-96 md:mt-64 md:flex">
        <img class="" src="{{ asset('assets/img/background/bg1.png') }}" alt="">
        </div>
        <div class="image absolute hidden md:w-24 md:right-44 md:mt-48 md:flex">
              <img class="" src="{{ asset('assets/img/background/bg2.png') }}" alt="">
        </div>



        </div>

    </body>

</html>
