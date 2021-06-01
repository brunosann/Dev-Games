<header class="shadow-lg bg-white pb-2">
  <nav class="container mx-auto flex flex-col sm:flex-row justify-between items-center">
    <a href="{{ route('home') }}">
      <img width="100" src="{{ asset('storage/images/gamepad-za-dribbble2.png') }}" alt="logo" title="logo">
    </a>

    <ul class="flex flex-col sm:flex-row items-center gap-2.5">
      <form action="" method="get" class="flex justify-center rounded-lg text-lg sm:mr-3" role="group">
        <input type="text" name="search" id="search" placeholder="Buscar produto..."
          class="border text-gray-500 border-r-0 border-gray-500 rounded-l-lg px-4 py-1 mx-0 outline-none focus:shadow-outline">
        <button type="submit"
          class="hover:bg-gray-100 border border-l-0 border-gray-500 rounded-r-lg px-4 py-1 mx-0 outline-none focus:outline-none group">
          <i class="fa fa-search fa-lg text-gray-500 group-hover:text-gray-800"></i>
        </button>
      </form>
      @auth
      {{-- <li class="text-gray-500 text-xl">Olá <strong class="text-gray-500 text-xl"> {{ Auth::user()->name }}
      </strong>
      </li> --}}
      <div class="flex justify-between w-full gap-2.5">
        <li>
          <a href="" title="usuario" class="group flex items-center">
            <i class="fa fa-user fa-2x text-gray-500 group-hover:text-gray-800"></i>
            <span class="text-gray-500 text-xl ml-1 group-hover:text-gray-800">Minha Conta</span>
          </a>
        </li>
        <li>
          <a href="{{ route('logout') }}" title="sair" class="group flex items-center">
            <i class="fa fa-sign-out fa-2x text-gray-500 group-hover:text-gray-800"></i>
            <span class="text-gray-500 text-xl ml-1 group-hover:text-gray-800">Sair</span>
          </a>
        </li>
      </div>
      @endauth
      @guest
      <li>
        <a href="{{ route('login') }}" title="usuario" class="group flex items-center">
          <i class="fa fa-user fa-2x text-gray-500 group-hover:text-gray-800"></i>
          <span class="text-gray-500 text-xl ml-1 group-hover:text-gray-800">Entrar</span>
        </a>
      </li>
      @endguest
      <li>
        <a href="" class="relative group flex items-center" title="carrinho">
          <i class="fa fa-shopping-cart fa-2x text-gray-500 group-hover:text-gray-800"></i>
          <span
            class="flex items-center justify-center bg-indigo-800 group-hover:bg-gratext-gray-700 text-white absolute -top-2 rounded-full w-6 h-6">50</span>
          <span class="text-gray-500 text-xl ml-1 group-hover:text-gray-800">Carrinho</span>
        </a>
      </li>
    </ul>
  </nav>
</header>