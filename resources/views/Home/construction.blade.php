<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
<link rel="stylesheet" href="{{ asset('lightbox/css/lightbox.css') }}">
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/frl.png') }}">

        <title>Produk Konstruksi FRL Furniture</title>

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

    <body class="bg-backgroundHeader overflow-x-hidden antialiased">


    <header class="relative z-50 w-full bg-white h-24 ">
          <div class=" z-30  flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">


                <a href="/" class="relative flex items-center  h-5 h-full font-black leading-none">
                      <img src="{{ asset("assets/img/frl.png") }}" class="w-12 h-12 " alt="">
                      <span class="ml-3 text-xl md:hidden text-gray-800">FRL Furniture</span></span>
                </a>

                <nav id="nav" class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                      <a href="/" class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-brown">Beranda</a>
                      <a href="{{ asset("about") }}" class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown">Tentang
                            Kami</a>
                      <a href="{{ asset("productsList") }}" class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-brown"></a>

                      <div class="dropdown ">
                            <button class="dropbtn mr-0 font-bold duration-100 md:mr-3 lg:mr-8 lg:-ml-8 transition-color hover:text-brown">Produk

                            </button>

                            <div class="dropdown-content">
                                  <a href="{{ asset("productsList") }}">Produk Interior</a>

                                  <a href="{{ asset("constructionList") }}">Produk Konstruksi</a>

                            </div>
                      </div>

                      <a href="{{ asset("makeOverList") }}" class="font-bold duration-100 transition-color hover:text-brown">Makeover</a>


                      <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                            {{-- <a href="#_" class="w-full py-2 font-bold text-center text-pink-500">Login</a> --}}
                            <a href="https://linktr.ee/frl_furniture" target="_blank" class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-green-500 fold-bold">Hubungi
                                  Kami
                            </a>
                      </div>
                </nav>


                {{-- heading --}}
                <div class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">

                      <a href="https://linktr.ee/frl_furniture" target="_blank" class="relative z-40 py-2 px-6 text-grey font-semibold hover:text-brown transition duration-300 bg-brown100 text-white rounded-full">Hubungi Kami</a>

                     
                </div>

                <div id="nav-mobile-btn" class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                      <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                      <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
                </div>

          </div>
    </header>

    <div class="container flex flex-col items-center mt-20 h-full max-w-3xl mx-auto">

          <h1 class="max-w-2xl px-5 md:pb-10 lg:pb-0 text-choco text-3xl text-center font-black leading-tight sm:mt-0 sm:px-0 sm:text-3xl md:text-right">

                Produk Konstruksi</h1>
    </div>
 


        <div class="container mx-auto grid grid-cols-2 p-5 gap-4 space-y-2 mt-10 lg:space-x-0 lg:space-y-2 lg:gap-4 lg:grid lg:grid-cols-4">

            @foreach($constructions as $key => $value)


            <div class="max-w-xs border-2 cursor-pointer  mb-5 bg-white  rounded-lg hover:shadow-2xl">

              
                    <a href="{{ count($value->construction_images) > 0 ? $value->construction_images[0]->image : null }}" data-lightbox="image{{ $value->id }}" data-title="{{ $value->title }}">

                          <img class="w-full h-48" src="{{ count($value->construction_images) > 0 ? $value->construction_images[0]->image : null }}" alt="product" />
                    </a>

                    @if(count($value->construction_images) > 0)

                    @foreach($value->construction_images as $idx => $images)
                    @if($idx != 0)

                    <a href="{{ $images->image }}" data-lightbox="image{{ $value->id }}" data-title="My caption">

                    </a>
                    @endif


                    @endforeach

                    @endif


                <div class="px-6 py-4">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-800">{{ $value->title }}</h4>
                    <p class="leading-normal text-gray-700">{{ $value->description }}.</p>
                </div>
            </div>
            @endforeach
   

        </div>

         <footer class="px-4 pt-12 lg:mt-10 pb-8 text-white bg-white border-t border-gray-200">

               <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
                     <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">

                           <a href="/" class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start relative flex items-center  font-black leading-none">

                                 <img src="{{ asset("assets/img/frl.png") }}" class="w-12 h-12 " alt="">

                           </a>

                           <p class="mt-6 mr-4 text-base text-gray-500"> Jl Gedongkuning Selatan No 14 B Yogyakarta

                           </p>


                     </div>

                     <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
                           <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                                 <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                                       Product</li>
                                 <li><a href="{{ asset("about") }}" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tentang Kami</a>
                                 </li>
                                 <li><a href="{{ asset("productsList") }}" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Produk</a>
                                 </li>
                                 <li><a href="{{ asset("makeOverList") }}" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Makeover</a>
                                 </li>

                           </ul>
                           <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                                 <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                                       Contact</li>
                                 <li><a href="whatsapp://send?text=Hallo FRL Furniture!&phone=+6281904608678" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600"> 0819 0460 8678</a>

                                 </li>
                                 <li><a href="mailto:frlfurniture2022@gmail.com" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600"> frlfurniture2022@gmail.com</a>

                                 </li>


                           </ul>

                           <div class="flex flex-col w-full text-gray-700">
                                 <div class="inline-block px-3 py-2 mt-5 font-bold text-gray-800 uppercase md:mt-0">Follow Us
                                 </div>
                                 <div class="flex justify-start pl-4 mt-2">

                                       <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/frl_furniture/">

                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                   <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                             </svg>

                                       </a>
                                       <a class="flex items-center block text-gray-400 no-underline hover:text-gray-600" target="_blank" rel="noopener noreferrer" href="whatsapp://send?text=Hallo FRL Furniture!&phone=+6281904608678">

                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                   <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                             </svg>

                                       </a>
                                 </div>
                           </div>
                     </div>


               </div>


               <div class="pt-4 pt-6 mt-10 text-center text-gray-500 border-t border-gray-100">© 2022 FRL Furniture. All rights
                     reserved.</div>

         </footer>


        <!-- a little JS for the mobile nav button -->
        <script>
              if (document.getElementById('nav-mobile-btn')) {
                    document.getElementById('nav-mobile-btn').addEventListener('click', function() {
                          if (this.classList.contains('close')) {
                                document.getElementById('nav').classList.add('hidden');
                                this.classList.remove('close');
                          } else {
                                document.getElementById('nav').classList.remove('hidden');
                                this.classList.add('close');
                          }
                    });
              }

        </script>
<script src="{{ asset('lightbox/js/lightbox-plus-jquery.js') }}"></script>

<script src="{{ asset('lightbox/js/lightbox.js') }}"></script>


    </body>

</html>
