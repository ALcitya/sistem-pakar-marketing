<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Konsultasi</title>
</head>
<body>
    <!-- tag untuk komponent navbar -->
    <x-navbar></x-navbar>
    <!-- untuk komponent header, mengirimkan kata kedalam komponent header -->
     <x-header>Konsultasi</x-header>
     <main class="container mx-auto max-h-80 w-80 bg-gradient-to-t from-blue-400 from-0% to-indigo-500 to-90% mt-3 rounded-md">
         <form Class="Flex justify-center gap-3 h-auto grid justify-items-stretch pt-2">
            <label class="block">
                <span class="block text-sm font-medium text-slate-900">Masukkan Nama Brand</span>
                <!-- Using form state modifiers, the classes can be identical for every input -->
                <input type="text" placeholder="Brand Kamu" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                "/>
            </label>
            <label class="block">
                <span class="block text-sm font-medium text-slate-900">Masukkan Nama Produk</span>
                <!-- Using form state modifiers, the classes can be identical for every input -->
                <input type="text" placeholder="Produk yang kamu jual" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                "/>
            </label>
            <label class="block ">
                <span class="block text-sm font-medium text-slate-900">Masukkan Anggaran</span>
                <!-- Using form state modifiers, the classes can be identical for every input -->
                <input type="text" placeholder="Anggaran Kamu" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                "/>
            </label>
            <button type="submit" class="justify-self-end box-border rounded-md bg-indigo-500 h-auto w-20 border-1 text-base font-medium text-center text-black">NEXT</button>
        </form> 
     </main>
</body>
</html>