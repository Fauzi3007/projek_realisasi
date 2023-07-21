<x-app-layout >
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto " id="atas">
        
        <div class="m-1">
          <p class="h3">User</p>
        </div>
        <div class=" overflow-x-scroll rounded-lg border border-gray-200 shadow-md dark:bg-slate-800">
            
            <table class="table-auto text-center w-full border-collapse border">
                <thead class="bg-gray-50">
                  <tr class="border-solid border">
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >No</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >Nama</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >Email</th>
                    <th scope="col" class="py-2 px-3 font-medium text-gray-900 border" >Status</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                
                  @foreach ($users as $item)
                      
                  <tr class="hover:bg-gray-50">
                    <td class="border py-2 px-3">{{$loop->iteration}}</td>
                    <td class="py-2 px-3 font-normal text-gray-900 border">{{$item->name}}</td>
                    <td class="py-2 px-3 font-normal text-gray-900 border">{{$item->email}}</td>
                    <td class="py-2 px-3 font-normal {{isset($item->user_id) ? 'text-green-600' : 'text-red-500'}} border">{{isset($item->user_id) ? 'Online' : 'Offline'}}</td>
                   
                  </tr>

                  @endforeach
               
                </tbody>
              </table>
              
              
        </div>
     

    </div>
</x-app-layout>
