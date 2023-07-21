<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="m-1">
          <p>DETAIL {{$nama_satker->nama_satker}}</p>
        </div>
        <div class=" overflow-x-scroll rounded-lg border border-gray-200 shadow-md">
          <table class="table-auto text-center w-full border-collapse border">
            <thead class="bg-gray-50">
              <tr class="border-solid border">
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" colspan="1" rowspan="3">No</th>
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" colspan="1" rowspan="3">Tanggal</th>
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" colspan="{{$jumlahDirektorat*2}}">Direktorat</th>
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" colspan="4">Total</th>
              </tr>
              <tr class="border-solid border">

              @foreach($tampilDirektorat as $tampilDir)  
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" colspan="2">{{$tampilDir->nama_direktorat}}</th>
              @endforeach
                
                
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="2">Total Pagu</th>
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="2">Total Blokir</th>
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="2">Total Realisasi</th>
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" rowspan="2">Total Persentase</th>
              </tr>
              <tr class="border-solid border">
                @for ($i = 1; $i <= $jumlahDirektorat; $i++)
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border">Pagu</th>
                <th scope="col" class="py-2 px-3 font-medium text-gray-900 border">Realisasi</th>
                @endfor
                
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
              @foreach ($persentase as $tgl)
                  
              <tr class="hover:bg-gray-50">
                <td class="border py-2 px-3">{{$loop->iteration}}</td>
                <th class="flex gap-3 py-2 px-3 font-normal text-gray-900 border">{{$tgl->tanggal}}</th>

                
                  @for ($j = 0; $j < $jumlahDirektorat*2; $j++)
                    <td class="border py-2 px-3">{{number_format($tampilRealisasi[($loop->iteration)-1][$j],2,',','.')}}</td>
                  @endfor
                
               
                <td class="border py-2 px-3">{{number_format($tgl->total_pagu,2,',','.')}}</td>
                <td class="border py-2 px-3">{{number_format($tgl->total_blokir,2,',','.')}}</td>
                <td class="border py-2 px-3">{{number_format($tgl->total_realisasi,2,',','.')}}</td>
                <td class="border py-2 px-3">{{$tgl->total_persentase}}%</td>
               
              </tr>
              @endforeach
            </tbody>
          </table>
              
              
      </div>
      <!-- filter -->
      <div class="m-3">
        <p class="my-3">Filter Tampilan Persentase Realisasi Dari Tanggal</p>
        <form action="/filter/{{$tanggal}}/{{$id}}/{{$satker}}" class="flex flex-col sm:flex-row items-center">
          <div class="flex items-center mb-2 sm:mb-0">
            <input class="datepicker form-input pl-9 dark:bg-slate-800 text-slate-500 hover:text-slate-600 dark:text-slate-300 dark:hover:text-slate-200 font-medium w-full sm:w-[15.5rem]"
                   placeholder="Pilih Tanggal Awal" required name="tglAwal" data-class="flatpickr-left" />
          </div>
          <p class="mx-2">Sampai</p>
          <div class="flex items-center mb-2 sm:mb-0">
            <input class="datepicker form-input pl-9 dark:bg-slate-800 text-slate-500 hover:text-slate-600 dark:text-slate-300 dark:hover:text-slate-200 font-medium w-full sm:w-[15.5rem]"
                   placeholder="Pilih Tanggal Akhir" required name="tglAkhir" data-class="flatpickr-left" />
          </div>
          <button type="submit" class="px-4 py-2 rounded-md bg-blue-500 text-white ml-0 sm:ml-3">Filter</button>
        </form>
      </div>
      
    
    
      <!-- chart -->
      <div >
          <!-- Line chart (Real Time Value)   --> 
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <canvas id="financeChart" class="w-2/3" ></canvas>

          <script>
              
              var data = {!!$dataPersen!!};
              var ctx = document.getElementById('financeChart').getContext('2d');

              var chart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: data.map(d => d[0]),
                      datasets: [{
                          label: 'Persentase Realisasi Keuangan',
                          data: data.map(d => d[1]),
                          backgroundColor: 'rgba(0, 123, 255, 0.5)',
                          borderColor: 'rgba(0, 123, 255, 1)',
                          borderWidth: 1,
                          pointLabel: data.map(d => d[1] + '%')
                      }]
                  },
                  options: {
                      responsive: false,
                      scales: {
                          y: {
                              beginAtZero: true,
                              ticks: {
                                  callback: function(value) {
                                      return value + '%';
                                  }
                              }
                          }
                      }
                  }
              });

              window.addEventListener('resize', function() {
                  chartInstance.update();
              });
          </script>


      </div>
    </div> 
    </div>
</x-app-layout>
