<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Card Game')</title>
	<link href="{{ url('assets/css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


</head>
<body class="bg-dark text-light">
    <!-- Navegação Principal -->
    <header class="main-header">
        <nav>
            <a href="{{ route('home') }}">Início</a>
            <a href="{{ route('game') }}">Jogar</a>
            <a href="{{ route('decks') }}">Tipos de Baralho</a>
            <a href="{{ route('champions') }}">Campeões</a>
        </nav>
    </header>

    <!-- Conteúdo da Página -->
    <main class="content">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="main-footer">
        <p>&copy; {{ date('Y') }} Card Game. Todos os direitos reservados.</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
