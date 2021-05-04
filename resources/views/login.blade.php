<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>{{ env('APP_NAME') }} | Login</title>
</head>

<body>
  <main class="flex flex-col items-center sm:pt-8">
    <img src="{{ asset('storage/images/gamepad-za-dribbble2.png') }}" alt="logo" title="logo">
    <h1 class="text-3xl font-bold text-center leading-6">Bem vindo de volta!</h1>
    <h2 class="text-xl">Dev Games</h2>

    <form action="{{ route('login.submit') }}" method="post" class="bg-white w-80 sm:w-96 px-4">
      @csrf
      <div class="mb-3">
        <label for="email" class="auth-label">Email</label>
        <input value="{{ old('email') }}" class="auth-input @error('email') auth-is-invalid @enderror" type="email"
          name="email" id="email" placeholder="meuemail@gmail.com">
        @error('email') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="auth-label">Senha</label>
        <input class="auth-input @error('password') auth-is-invalid @enderror" type="password" name="password"
          id="password" placeholder="digite sua senha">
        @error('password') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
      </div>

      @error('message') <p class="text-red-400 text-center"> {{ $message }} </p> @enderror

      <button type="submit" class="auth-btn">Entrar</button>
    </form>

  </main>

</body>

</html>