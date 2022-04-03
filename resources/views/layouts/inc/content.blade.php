 <div class="bg-gray-100 flex-1 p-6 md:mt-16">


     <!-- General Report -->
     <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


         <!-- card -->
         <div class="report-card">
             <div class="card">
                 <div class="card-body flex flex-col">

                     <!-- top -->
                     <div class="flex flex-row justify-between items-center">
                         <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
                        
                     </div>
                     <!-- end top -->

                     <!-- bottom -->
                     <div class="mt-8">
                         <h1 class="h5">{{ $dataCategories }}</h1>

                         <p>Categories Product</p>
                     </div>
                     <!-- end bottom -->

                 </div>
             </div>
             <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
         </div>
         <!-- end card -->


         <!-- card -->
         <div class="report-card">
             <div class="card">
                 <div class="card-body flex flex-col">

                     <!-- top -->
                     <div class="flex flex-row justify-between items-center">
                         <div class="h6 text-red-700 fad fa-store"></div>
                        
                     </div>
                     <!-- end top -->

                     <!-- bottom -->
                     <div class="mt-8">
                         <h1 class="h5">{{ $dataServices }}</h1>

                         <p>Total Makeover</p>
                     </div>
                     <!-- end bottom -->

                 </div>
             </div>
             <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
         </div>
         <!-- end card -->


         <!-- card -->
         <div class="report-card">
             <div class="card">
                 <div class="card-body flex flex-col">

                     <!-- top -->
                     <div class="flex flex-row justify-between items-center">
                         <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                         
                     </div>
                     <!-- end top -->

                     <!-- bottom -->
                     <div class="mt-8">
                         <h1 class="h5">{{ $dataProducts }}</h1>

                         <p>Total Products</p>
                     </div>
                     <!-- end bottom -->

                 </div>
             </div>
             <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
         </div>
         <!-- end card -->


         <!-- card -->
         <div class="report-card">
             <div class="card">
                 <div class="card-body flex flex-col">

                     <!-- top -->
                     <div class="flex flex-row justify-between items-center">
                         <div class="h6 text-green-700 fad fa-users"></div>
                        
                     </div>
                     <!-- end top -->

                     <!-- bottom -->
                     <div class="mt-8">
                         <h1 class="h5 ">{{ $users }}</h1>
                         <p>Administrator</p>
                     </div>
                     <!-- end bottom -->

                 </div>
             </div>
             <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
         </div>
         <!-- end card -->


     </div>
     <!-- End General Report -->



     <!-- Sales Overview -->
     <div class="card mt-6">

         <!-- header -->
         <div class="card-header flex flex-row justify-between">
             <h1 class="h6">Sales Overview</h1>

             <div class="flex flex-row justify-center items-center">

                 <a href="">
                     <i class="fad fa-chevron-double-down mr-6"></i>
                 </a>

                 <a href="">
                     <i class="fad fa-ellipsis-v"></i>
                 </a>

             </div>

         </div>
         <!-- end header -->

         <!-- body -->
         <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

             <div class="p-8">
                 <h1 class="h2">5,337</h1>
                 <p class="text-black font-medium">Sales this month</p>

                 <div class="mt-20 mb-2 flex items-center">
                     <div class="py-1 px-3 rounded bg-green-200 text-green-900 mr-3">
                         <i class="fa fa-caret-up"></i>
                     </div>
                     <p class="text-black"><span class="num-2 text-green-400"></span><span class="text-green-400">% more
                             sales</span> in comparison to last month.</p>
                 </div>

                 <div class="flex items-center">
                     <div class="py-1 px-3 rounded bg-red-200 text-red-900 mr-3">
                         <i class="fa fa-caret-down"></i>
                     </div>
                     <p class="text-black"><span class="num-2 text-red-400"></span><span class="text-red-400">% revenue
                             per sale</span> in comparison to last month.</p>
                 </div>

                 <a href="#" class="btn-shadow mt-6">view details</a>

             </div>

             <div class="">
                 <div id="sealsOverview"></div>
             </div>

         </div>
         <!-- end body -->

     </div>
     <!-- end Sales Overview -->


     <!-- end nmbers -->
 </div>
