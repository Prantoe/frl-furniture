<!DOCTYPE html>


<html lang="en">

    <head>
        <meta charset="UTF-8">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FRL Furniture Jogja</title>


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
        <!-- Small CSS to Hide elements at 1520px size -->



    </head>


    <body class="overflow-x-hidden antialiased ">

        <div id="features" class="relative w-full px-8 pt-10  md:py-0 lg:py-24 xl:py-40 xl:px-0">

            <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">

                {{-- <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Features</h2> --}}
                <h1
                    class="max-w-2xl px-5 md:mt-4 mt-2 text-choco text-2xl text-center font-black leading-tight  sm:mt-0 sm:px-0 sm:text-2xl md:text-right">


                    Login</h1>
                <div
                    class="flex flex-col sm:rounded-lg lg:items-center lg:justify-center md:mt-10 mt-5 sm:mt-5 lg:rounded-lg w-fulllg:flex-row lg:mt-10">




                    <form method="POST" action="{{ route('login.custom') }}"
                        class="w-full max-w-sm lg:items-center lg:justify-center">
                        @csrf
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="inline-email">
                                    Email
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black"
                                    type="text" placeholder="Email" id="email" name="email" required autofocus>


                                @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="inline-password">
                                    Password
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black "
                                    type="password" placeholder="Password" id="password" name="password" required>

                                @if($errors->has('password'))
                                    <span
                                        class="text-danger">{{ $errors->first('password') }}</span>
                                @endif


                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3"></div>
                            <label class="md:w-2/3 block text-gray-500 font-bold">
                                <input class="mr-2 leading-tight" name="remember" type="checkbox">

                                <span class="text-sm">
                                    Send me your newsletter!
                                </span>
                            </label>
                        </div>
                        <div class="md:flex md:items-center">
                            {{-- <div class="md:w-1/3"></div> --}}
                            <div class="md:w-full">
                                <button
                                    class="shadow w-full bg-brown100 hover:bg-backgroundHeader focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                    type="submit">
                                    Sign in
                                </button>
                            </div>
                        </div>
                    </form>





                </div>
            </div>
        </div>





    </body>




</html>
