<x-app-layout >
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto " id="atas">
        
        <div class="m-1">
          <p class="h3">Riwayat Laporan</p>
        </div>
        <div class=" overflow-x-scroll rounded-lg border border-gray-200 shadow-md dark:bg-slate-800">
            
            <table class="table-auto text-center w-full border-collapse border">
                <thead class="bg-gray-50">
                  <tr class="border-solid border">
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >No</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >ID</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >Tanggal</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border">Aksi</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                
                  @foreach ($riwayats as $item)
                      
                  <tr class="hover:bg-gray-50">
                    <td class="border py-2 px-3">{{$loop->iteration}}</td>
                    <td class="py-2 px-3 font-normal text-gray-900 border">{{$item->id_riwayat_laporan}}</td>
                    <td class="py-2 px-3 font-normal text-gray-900 border">{{$item->tanggal}}</td>
                    <td class="border py-2 px-3">
                      <form action="/riwayat/{{$item->id_riwayat_laporan}}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded-md bg-red-600 text-white mt-2 sm:mt-0" onclick="return confirm('Yakin akan menghapus data?')"> Hapus </button>
                    </form>
                    </td>
                  </tr>

                  @endforeach
               
                </tbody>
              </table>
              
              
        </div>
     

    </div>
</x-app-layout>
