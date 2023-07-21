<x-app-layout >
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto " id="atas">
        
         
      <p class="h3">Direktorat</p>
        <div class="my-2">
          <a href="/direktorat/create" class="px-4 py-2 rounded-md bg-green-600  text-white  sm:mt-0">Tambah Direktorat</a>
        </div>

        <div class=" overflow-x-scroll rounded-lg border border-gray-200 shadow-md dark:bg-slate-800">
            
            <table class="table-auto text-center w-full border-collapse border">
                <thead class="bg-gray-50">
                  <tr class="border-solid border">
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >No</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >Nama Direktorat</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border">Aksi</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                
                  @foreach ($direktorats as $item)
                      
                  <tr class="hover:bg-gray-50">
                    <td class="border py-2 px-3">{{$loop->iteration}}</td>
                    <td class="py-2 px-3 font-normal text-gray-900 border">{{$item->nama_direktorat}}</td>
                    <td class="border py-2 px-3 flex gap-2">
                      <a href="/direktorat/{{$item->id_direktorat}}/edit" class="px-4 py-2 rounded-md bg-yellow-300  text-white  sm:mt-0">Edit</a>
                      <form action="/direktorat/{{$item->id_direktorat}}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded-md bg-red-600  text-white  sm:mt-0" onclick="return confirm('Yakin akan menghapus data?')"> Hapus </button>
                    </form>
                    </td>
                  </tr>

                  @endforeach
               
                </tbody>
              </table>
              
              
        </div>
     

    </div>
</x-app-layout>
