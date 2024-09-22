@include('layouts.header')

<body style="padding-top: 70px;">
    @include('layouts.menu')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <form method="POST" action="{{ route('personagem.store') }}">
            @csrf
            <div>
                <label>Nome</label>
                <input type="text" name="nome" required>
            </div>
            <div>
                <label>Função</label>
                <select name="funcao_id">
                    @foreach ($funcoes as $funcao)
                        <option value="{{ $funcao->id }}">{{ $funcao->nome }}</option>
                    @endforeach
                </select>
            </div>
            
            @for ($i = 0; $i < 4; $i++)
                <div>
                    <h5>Poder {{ $i + 1 }}</h5>
                    <label>Nome</label>
                    <input type="text" name="poderes[{{ $i }}][nome]" required>
                    <label>Alcance</label>
                    <input type="number" name="poderes[{{ $i }}][alcance]" required>
                    <label>Alvo</label>
                    <input type="text" name="poderes[{{ $i }}][alvo]" required>
                    <label>Sucesso</label>
                    <input type="text" name="poderes[{{ $i }}][sucesso]" required>
                    <label>Efeito</label>
                    <input type="text" name="poderes[{{ $i }}][efeito]" required>
                    <label>Fracasso</label>
                    <input type="text" name="poderes[{{ $i }}][fracasso]" required>
                </div>
            @endfor
        
            <button type="submit">Criar Personagem</button>
        </form>
            
    </div>
</body>

@include('layouts.footer')
