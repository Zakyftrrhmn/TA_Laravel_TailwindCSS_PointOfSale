
   <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>

   <script src="{{asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
   <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js"></script>

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

   {{-- close alert --}}
   <script>
      document.addEventListener('DOMContentLoaded', function () {
         const closeButtons = document.querySelectorAll('[data-dismiss-target]');

         closeButtons.forEach(button => {
               button.addEventListener('click', function () {
                  const targetSelector = this.getAttribute('data-dismiss-target');
                  const target = document.querySelector(targetSelector);
                  if (target) {
                     target.remove(); // Atau bisa pakai: target.style.display = 'none';
                  }
               });
         });
      });
   </script>

   {{-- pagination --}}
   <script>
      document.addEventListener('DOMContentLoaded', function() {
         const showDataButton = document.getElementById('show-data-button');
         const showDataMenu = document.getElementById('show-data-menu');
         const showDataValue = document.getElementById('show-data-value');
         const searchInput = document.getElementById('search');
         
         const urlParams = new URLSearchParams(window.location.search);
         const selectedValue = urlParams.get('show_data') || '10';
         showDataValue.textContent = selectedValue;

         showDataButton.addEventListener('click', function() {
               showDataMenu.classList.toggle('hidden');
         });

         document.addEventListener('click', function(event) {
               if (!showDataButton.contains(event.target) && !showDataMenu.contains(event.target)) {
                  showDataMenu.classList.add('hidden');
               }
         });

         showDataMenu.querySelectorAll('a').forEach(item => {
               item.addEventListener('click', function(e) {
                  e.preventDefault();
                  const perPage = this.dataset.value;
                  const currentSearch = searchInput.value;
                  showDataValue.textContent = perPage;
                  showDataMenu.classList.add('hidden');
                  
                  const url = new URL(window.location.href);
                  url.searchParams.set('show_data', perPage);
                  if (currentSearch) {
                     url.searchParams.set('search', currentSearch);
                  } else {
                     url.searchParams.delete('search');
                  }
                  window.location.href = url.toString();
               });
         });

         searchInput.addEventListener('keypress', function(e) {
               if (e.key === 'Enter') {
                  const searchValue = this.value;
                  const perPage = showDataValue.textContent;
                  
                  const url = new URL(window.location.href);
                  url.searchParams.set('search', searchValue);
                  url.searchParams.set('show_data', perPage);
                  window.location.href = url.toString();
               }
         });
         
         document.addEventListener('open-delete-modal', (event) => {
               const id = event.detail.id;
               const form = document.getElementById('delete-form');
               form.action = `{{ url('admin/kategori_produk') }}/${id}`;
         });
      });
   </script>

