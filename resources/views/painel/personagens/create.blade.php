@include('layouts.header')

<body style="padding-top: 70px;">
    @include('layouts.menu')
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="{{ route('personagem.store') }}" class="container mt-4 bg-secondary text-light p-4 rounded">
            @csrf
            <h2 class="mb-4">Cadastrar Personagem</h2>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="funcao_id" class="form-label">Função</label>
                <select id="funcao_id" name="funcao_id" class="form-select" required>
                    <option value="" disabled selected>Selecione uma função</option>
                    @foreach ($funcoes as $funcao)
                    <option value="{{ $funcao->id }}">{{ $funcao->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="row">
                @for ($i = 0; $i < 4; $i++) <div class="col-md-3 mb-2">
                    <div class="card bg-dark">
                        <div class="card-header">
                            <h5>Poder {{ $i + 1 }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="poder_nome_{{ $i }}" class="form-label">Nome</label>
                                <input type="text" id="poder_nome_{{ $i }}" name="poderes[{{ $i }}][nome]" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="poder_alcance_{{ $i }}" class="form-label">Alcance</label>
                                <input type="number" id="poder_alcance_{{ $i }}" name="poderes[{{ $i }}][alcance]" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputTipo" class="form-label">Tipo</label>
                                <select id="poder_tipo_{{ $i }}" name="poderes[{{ $i }}][tipo]" class="form-control" required>
                                    <option value="" disabled selected>Selecione um tipo</option>
                                    <option value="longo alcance">Ataque de Longo Alcance</option>
                                    <option value="corpo a corpo">Ataque Corpo a Corpo</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="poder_alvo_{{ $i }}" class="form-label">Alvo</label>
                                <input type="text" id="poder_alvo_{{ $i }}" name="poderes[{{ $i }}][alvo]" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="poder_sucesso_{{ $i }}" class="form-label">Sucesso</label>
                                <input type="text" id="poder_sucesso_{{ $i }}" name="poderes[{{ $i }}][sucesso]" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="poder_efeito_{{ $i }}" class="form-label">Efeito</label>
                                <input type="text" id="poder_efeito_{{ $i }}" name="poderes[{{ $i }}][efeito]" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="poder_fracasso_{{ $i }}" class="form-label">Fracasso</label>
                                <input type="text" id="poder_fracasso_{{ $i }}" name="poderes[{{ $i }}][fracasso]" class="form-control" required>
                            </div>
                        </div>
                    </div>
                 </div>
            @endfor
    </div>

    <button type="submit" class="btn btn-primary">Criar Personagem</button>
    <br>
    </form>

    <br>
    </div>
</body>

@include('layouts.footer')
