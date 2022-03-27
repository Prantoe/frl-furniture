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


                              <div class="overflow-x-auto sm:-mx-6 lg:-mx-12 bg-white bg-black rounded-lg">

                                    <div class="flex flex-row justify-between items-center p-5">
                                          <h1 class="font-extrabold text-lg">Category Product</h1>

                                    </div>


                                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                          <a href="{{ route('categorys.create') }}" class="btn-info text-gray-800 hover:bg-yellow-500 hover:text-white inline-flex mx-8">Add


                                                Category</a>
                                          {{-- <div class="overflow-hidden p-auto bg-white border-0 rounded-lg"> --}}
                                          <table class="bg-white table-auto text-left my-10 border-collapse rounded-lg border border-slate-400 w-5/6 m-auto">

                                                <thead>
                                                      <tr class="bg-gray-100">

                                                            <td class="py-4 font-medium text-sm border border-slate-300 text-center">
                                                                  no.</td>
                                                            <td class="py-4 font-medium text-sm border border-slate-300 text-center">
                                                                  name</td>
                                                           
                                                            <td class="py-4 font-medium text-sm border border-slate-300 text-center">
                                                                  action</td>


                                                      </tr>

                                                </thead>
                                                <tbody>
                                                      @foreach($categorys as $key => $value)


                                                      <tr class="hover:bg-gray-100">

                                                            <td class="border border-slate-300 py-4 text-xs text-gray-600 text-center">
                                                                  {{ ++$i }}.</td>

                                                           
                                                            <td class="border border-slate-300 py-4 text-xs text-gray-600 text-center">
                                                                  {{ $value->name }}

                                                            </td>
                                                           

                                                            <td class="border border-slate-300 py-4 text-xs text-gray-600 text-center">
                                                                  <form action="{{ route('categorys.destroy',$value->id) }}" method="POST">


                                                                        <a class="bg-blue-600 btn btn-sm hover:bg-blue-700 text-white font-bold  px-15 rounded inline-flex items-center" href="{{ route('categorys.edit',$value->id) }}">Edit</a>

                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="bg-red-600 btn btn-sm hover:bg-red-700 text-white font-bold  px-15 rounded inline-flex items-center">Delete</button>
                                                                  </form>

                                                            </td>

                                                      </tr>
                                                      @endforeach
                                                </tbody>
                                          </table>
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

