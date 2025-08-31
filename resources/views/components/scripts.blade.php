
   <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>

   <script src="{{asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
   <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>

   <script src="{{asset('assets/js/theme.min.js')}}"></script>


   
   {{-- Sidebar  --}}
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         var scrollable = document.querySelector("#myScrollableElement .simplebar-content-wrapper");
         if (scrollable) {
            scrollable.scrollTop = 0; // paksa ke paling atas
         }
      });
   </script>