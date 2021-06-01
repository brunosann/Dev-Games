@props(['name', 'price', 'promotion', 'id', 'img'])

<li class="flex flex-col sm:flex-row">
  <div class="w-full sm:w-9/12 h-3/4 sm:h-full"
    style="background-size: cover;background-image: url('{{ asset("storage/images/$img") }}')">
  </div>
  <div
    class="flex flex-col gap-1 sm:gap-2 items-center justify-end pb-2 sm:pb-16 w-full sm:w-3/12 bg-gray-900 text-white">
    <p class="text-center">{{ $name }}</p>
    <span class="line-through">R$ {{ $price }} </span> <span>R$ {{ $promotion }}</span>
    <a href="#{{ $id }}" class="bg-white rounded text-gray-700 py-2 px-3">Ver Produto</a>
  </div>
</li>