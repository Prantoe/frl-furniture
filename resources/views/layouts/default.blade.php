<!doctype html>
<html lang="en">
@include('layouts.inc.head')
@stack('css')

<body class="bg-gray-100">

      <!-- start navbar -->
      @include('layouts.inc.navbar')

      <!-- end navbar -->
      <!-- strat wrapper -->
      <div class="h-screen flex flex-row flex-wrap">

            <!-- start sidebar -->
            @include('layouts.inc.sidebar')

            <!-- end sidbar -->

            <!-- strat content -->
             @yield('content')

            {{-- footer --}}
            @include('layouts.inc.content')

            {{-- end footer --}}
            <!-- end content -->

      </div>
      <!-- end wrapper -->

      <!-- script -->
      @include('layouts.inc.script')
      @stack('js')
      <!-- end script -->

</body>

</html>

