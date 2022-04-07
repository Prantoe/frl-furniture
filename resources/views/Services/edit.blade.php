<!doctype html>
<html lang="en">
    @include('layouts.inc.head')
    @stack('css')

    <body class="bg-white">

        @include('layouts.inc.navbar')
        <div class="h-screen flex flex-row flex-wrap">

            @include('layouts.inc.sidebar')
            @yield('content')
            <div class="card w-5/6 mx-auto bg-gray-100 ">
                <div class="card-body mt-20 block p-10 ">
                    <div class="flex flex-col">
                        <div class="flex flex-row justify-between items-center">
                            <h1 class="font-extrabold text-lg">Edit Make Over</h1>
                        </div>
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-12">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                {{-- <div class="overflow-hidden p-auto bg-white border-0 rounded-lg"> --}}
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {{-- <div class="w-full max-w-xs"> --}}
                                <form action="{{ route('services.update',$service->id) }}"
                                    method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">


                                    @csrf
                                    @method('PUT')

                                    
                                    <div class="mb-6">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                            Title Make Over
                                        </label>
                                        <input value="{{ $service->title }}"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            name="title" type="text" placeholder="name">

                                    </div>


                                    <div class="mb-6">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">

                                            Description
                                        </label>
                                        <div class="form-outline mb-4 w-full">
                                            <textarea
                                                class="form-control text-gray-700 w-full shadow appearance-none border eading-tight focus:outline-none focus:shadow-outline rounded py-2 px-3 text-gray-700"
                                                name="description" rows="4">{{ $service->description }}</textarea>
                                        </div>
                                    </div>

                                    

                                    <div
                                        class="cursor-pointer input-images shadow appearance-none border-1 rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    </div>
                                    <div class="flex mt-5">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                            type="submit">
                                            Submit
                                        </button>

                                        <a href="{{ route('services.index') }}" class="btn-bs-info hover:bg-orange-400 ml-5">Back</a>



                                    </div>
                                </form>

                                {{-- </div> --}}


                            </div>
                            {{-- </div> --}}

                        </div>


                    </div>
                </div>




            </div>


        </div>

        @include('layouts.inc.script')
        @stack('js')
    </body>

</html>
