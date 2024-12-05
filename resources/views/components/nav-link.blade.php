<!-- mengatur status properti dari navbar -->
 @props(['active'=> false])
 
<a {{$attributes}}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} 
    rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
    {{ $slot }}
    <!-- menangambil apa yang dituliskan didalam tag <a></a>-->
</a>