<x-app-layout >
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto " id="atas">
        

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8" >

          
                    

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gapy-2 px-3" >
              <form action="{{ route('filter') }}" method="POST">
                @csrf
                <div class="flex flex-col sm:flex-row items-center sm:space-x-4">
                  <div class="flex items-center sm:w-auto ">
                    <select name="operator" id="operator" class="form-input px-5 text-slate-500">
                      <option value="<=">Lebih Kecil Dari</option>
                      <option value="=">Sama Dengan</option>
                      <option value=">=">Lebih Besar dari</option>
                    </select>
                    <input type="number" id="filterId" class="border form-input border-gray-300 rounded-md px-4 py-2 ml-4" name="filterValue" placeholder="%" min="0" max="100" step="0.05">
                  </div>
                  <div class="flex items-center mt-2 sm:mt-0">
                    <div class="relative">
                      <input class="datepicker form-input pl-9 dark:bg-slate-800 text-slate-500 hover:text-slate-600 dark:text-slate-300 dark:hover:text-slate-200 font-medium w-[15.5rem]" placeholder="Pilih Tanggal" name="tanggalLaporan" data-class="flatpickr-left" />
                      <div class="absolute inset-0 right-auto flex items-center pointer-events-none">
                        <svg class="w-4 h-4 fill-current text-slate-500 dark:text-slate-400 ml-3" viewBox="0 0 16 16">
                          <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z" />
                        </svg>
                      </div>
                    </div>
                    <div class="relative inline-block text-left ml-2 mr-2">
                      <div>
                        <span class="rounded-md shadow-sm">
                          <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-slate-500 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150 ml-2" id="dropdown-menu" aria-haspopup="true" aria-expanded="false">
                            Pilih Daerah
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10 12l-6-6 1.5-1.5L10 9.8l4.5-4.5L16 6l-6 6z" clip-rule="evenodd" />
                            </svg>
                          </button>
                        </span>
                      </div>
                      <div class="origin-top-right absolute right-0 mt-2 w-96 rounded-md shadow-lg hidden" id="dropdown-list">
                        <div class="rounded-md bg-white shadow-xs">
                          <div class="px-4 py-3">
                            <div class="grid grid-cols-3 gap-1">
                              @foreach ($lokasi as $loc)
                              <label class="inline-flex items-center">
                                <input type="checkbox" name="selectedValues[]" value="{{$loc->lokasi}}" class="form-checkbox">
                                <span class="ml-2">{{ ucwords($loc->lokasi) }}</span>
                              </label>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="px-4 py-2 rounded-md bg-blue-500 text-white mt-2 sm:mt-0">Filter</button>
                </div>
              </form>
            </div>
            
            {{-- Skrip dropdown --}}
              <script>
                document.addEventListener('DOMContentLoaded', function () {
                  // Get the dropdown menu element
                  var dropdownMenu = document.getElementById('dropdown-menu');
                  var dropdownList = document.getElementById('dropdown-list');
                  
                  // Toggle the dropdown menu
                  function toggleDropdown() {
                    if (dropdownList.classList.contains('hidden')) {
                      dropdownList.classList.remove('hidden');
                      dropdownMenu.setAttribute('aria-expanded', 'true');
                    } else {
                      dropdownList.classList.add('hidden');
                      dropdownMenu.setAttribute('aria-expanded', 'false');
                    }
                  }
                  
                  // Close the dropdown menu when clicked outside
                  document.addEventListener('click', function (event) {
                    var target = event.target;
                    
                    if (!dropdownMenu.contains(target) && !target.classList.contains('form-checkbox')) {
                      if (!dropdownList.classList.contains('hidden')) {
                        dropdownList.classList.add('hidden');
                        dropdownMenu.setAttribute('aria-expanded', 'false');
                      }
                    }
                  });
                  
                  // Add event listener to toggle the dropdown menu when clicked
                  dropdownMenu.addEventListener('click', toggleDropdown);
                  
                  // Prevent dropdown menu from closing when clicking checkboxes
                  var checkboxes = document.querySelectorAll('.form-checkbox');
                  checkboxes.forEach(function (checkbox) {
                    checkbox.addEventListener('click', function (event) {
                      event.stopPropagation();
                    });
                  });
                });
              </script>
             
             <a id="btnBackToTop" href="#atas" class="fixed bottom-4 right-4 z-50 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full shadow-md hidden sm:block">
                Kembali ke Atas
            </a>
          
         
        </div>
        <div class="m-1">
          <p>REALISASI KEUANGAN PER TANGGAL : {{$tanggalLaporan}}</p>
        </div>
        <div class=" overflow-x-scroll rounded-lg border border-gray-200 shadow-md dark:bg-slate-800">
            
            <table class="table-auto text-center w-full border-collapse border">
                <thead class="bg-gray-50">
                  <tr class="border-solid border">
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" colspan="1" rowspan="3">No</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" colspan="1" rowspan="3">Satker</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" colspan="4">Total</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="3">Aksi</th>
                  </tr>
                  <tr class="border-solid border">
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="2">Total Pagu</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="2">Total Blokir</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="2">Total Realisasi</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="2">Total Persentase</th>
                  </tr>
                 
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                
                  @foreach ($laporans as $item)
                      
                  <tr class="hover:bg-gray-50">
                    <td class="border py-2 px-3">{{$loop->iteration}}</td>
                    <th class="flex gap-3 py-2 px-3 font-normal text-gray-900 border">{{$item->nama_satker}}</th>
                    <td class="border py-2 px-3">{{number_format($item->total_pagu,2,',','.')}}</td>
                    <td class="border py-2 px-3">{{number_format($item->total_blokir,2,',','.')}}</td>
                    <td class="border py-2 px-3">{{number_format($item->total_realisasi,2,',','.')}}</td>
                    <td class="border py-2 px-3">{{$item->total_persentase}}%</td>
                    <td class="border py-2 px-3">
                      <a href="/detail/{{$item->tanggal}}/{{$item->id_riwayat_laporan_satker}}/{{$item->id_satker}}" class="text-blue-500">Detail</a>
                    </td>
                  </tr>

                 

                  @endforeach
               
                </tbody>
              </table>
              
              
        </div>
     

    </div>
</x-app-layout>
