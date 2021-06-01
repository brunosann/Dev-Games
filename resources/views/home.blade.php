@extends('layouts.site')

@section('title', '| Carrinho')

@section('main')

<nav class="bg-gray-800 py-3 px-3">
  <ul class="sm:w-2/4 mx-auto flex justify-center sm:justify-between flex-wrap text-white">
    @foreach ($categories as $category)
    <li class="text-xl">
      <a href="" class="p-2 hover:text-indigo-500">
        {{ $category->category }}
      </a>
    </li>
    @endforeach
  </ul>
</nav>

<main class="container mx-auto">
  <ul class="flex justify-center gap-5 sm:gap-8 mt-8">
    <li class="flex flex-col sm:flex-row gap-2 justify-center items-center text-xl">
      <i class="fa fa-credit-card" aria-hidden="true"></i>
      <span>Até 12x</span>
    </li>
    <li class="flex flex-col sm:flex-row gap-2 items-center text-xl">
      <i class="fa fa-exchange" aria-hidden="true"></i>
      <span>Troca Fácil</span>
    </li>
    <li class="flex flex-col sm:flex-row gap-2 items-center text-xl">
      <i class="fa fa-truck" aria-hidden="true"></i>
      <span>Frete Grátis</span>
    </li>
  </ul>

  <section class="w-full my-8">
    <div class="slide-wrapper" style="height: 380px">
      <ul class="slide" style="height: 375px">
        @foreach ($games as $key => $product)
        @if ($key > 2)
        @break
        @endif
        <x-slide-product name="{{ $product->name }}" img="{{ $product->photo }}" price="{{ $product->price }}"
          promotion="{{ $product->promotional_price }}" id="{{ $key }}" />
        @endforeach
      </ul>
    </div>
    <ul class="custom-controls">
      @foreach ($games as $key => $product)
      @if ($key > 2)
      @break
      @endif
      <li></li>
      @endforeach
    </ul>
  </section>

  <section>
    <div class="flex justify-center mb-8">
      <div class="inline-block">
        <span class="w-24 h-2 bg-black transform-gpu -skew-x-12 block ml-8"></span>
        <h1 class="text-5xl pb-3">Lançamentos</h1>
        <span class="w-24 h-2 bg-black transform-gpu float-right -skew-x-12 block mr-8"></span>
      </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 px-2">
      @foreach ($games as $game)
      <x-product-sale name="{{ $game->name }}" img="{{ $game->photo }}" price="{{ $game->price }}"
        promotion="{{ $game->promotional_price }}" />
      @endforeach
    </div>
  </section>

  <section class="mb-8">
    <div class="flex justify-center my-8">
      <div class="inline-block">
        <span class="w-24 h-2 bg-black transform-gpu -skew-x-12 block ml-8"></span>
        <h1 class="text-5xl pb-3">Mais Vendidos</h1>
        <span class="w-24 h-2 bg-black transform-gpu float-right -skew-x-12 block mr-8"></span>
      </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 px-2">
      @foreach ($games as $game)
      <x-product-sale name="{{ $game->name }}" img="{{ $game->photo }}" price="{{ $game->price }}"
        promotion="{{ $game->promotional_price }}" />
      @endforeach
    </div>
  </section>

</main>
@endsection

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endsection