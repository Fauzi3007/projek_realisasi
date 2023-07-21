<!-- component -->
<x-app-layout>
    <script>
        
    </script>
    <div class="grid grid-cols-2 px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form method="POST" action="{{route('upload')}}" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <div class="relative">
                    <p class="mb-2">Tanggal Laporan</p>
                    <input id="tanggalLaporan" class="datepicker form-input pl-9 dark:bg-slate-800 text-slate-500 hover:text-slate-600 dark:text-slate-300 dark:hover:text-slate-200 font-medium w-[15.5rem]" 
                    placeholder="Pilih Tanggal" name="tanggal" data-class="flatpickr-left" />
                    
                </div>
            </div>
            <div class="relative">
                <label
                    for="formFileLg"
                    class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                    >Masukkan file excel</label
                >
                <input
                    class="relative  mb-2 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                    id="formFileLg"
                    required
                    name="excel_file"
                    accept=".xlsx,.xls"
                    type="file" />
                    <span>Download </span><a class="text-blue-600" href="/download-excel">template.xlsx</a>
            </div>
            <x-jet-validation-errors class="mt-4" />  

        
         <button type="submit" id="submitBtn" onclick="document.getElementById('loading').classList.remove('hidden'); " class="mt-3 px-4 py-2 rounded-md bg-blue-500 text-white">Upload</button>
        <div
            id="loading"
            class="hidden mt-2 ml-6 h-8 w-8 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
            role="status">
            
        </div>

        </form>    
    </div>
</x-app-layout>