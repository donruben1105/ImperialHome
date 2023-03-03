@props(['tagsCsv'])

@php 
  $tags = explode(',', $tagsCsv);
@endphp


<ul class="flex">
  @foreach ($tags as $tag)  
  <li
      class="flex items-center justify-center bg-sky-600 text-black rounded-xl py-1 px-3 mr-2"
  >
     {{$tag}}
  </li>

  @endforeach  
</ul>