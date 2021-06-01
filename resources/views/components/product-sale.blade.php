@props(['name', 'price', 'promotion', 'img'])

<article
  class="max-w-xs flex-shrink-0 bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 duration-300 ease-in-out">
  <img class="h-20 md:h-56 w-full object-cover" src="{{ Storage::url("images/$img") }}" alt="{{ $name }}">
  <div class="p-1 md:px-4 md:py-2 text-center">
    <h2 class="text-gray-900 font-bold text-base md:text-xl uppercase">{{ $name }}</h2>
    <p class="font-bold text-sm md:text-base line-through">R$ {{ $price }} </p>
    <p class="font-bold text-sm md:text-base">R$ {{ $promotion }}</p>
    <button
      class="block mx-auto bg-gray-800 py-2 px-2 text-white text-center rounded shadow-lg uppercase font-light my-2 hover:bg-gray-500 hover:text-white duration-300 ease-in-out">Ver
      Mais</button>
  </div>
</article>