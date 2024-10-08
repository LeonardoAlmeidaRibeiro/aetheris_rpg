@include('layouts.header')

<body style="padding-top: 70px;">
    @include('layouts.menu')
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('funcoes.store') }}" method="POST">
            @csrf
            <h2>Cadastrar Função</h2>
            <br>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group row">
                <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputVida" class="col-sm-2 col-form-label">Vida</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputVida" name="vida" placeholder="Vida" value="{{ old('vida') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAtaque" class="col-sm-2 col-form-label">Ataque</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputAtaque" name="ataque" placeholder="Ataque" value="{{ old('ataque') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAlcance" class="col-sm-2 col-form-label">Alcance</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputAlcance" name="alcance" placeholder="Alcance" value="{{ old('alcance') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTipo" class="col-sm-2 col-form-label">Tipo</label>
                <div class="col-sm-10">
                    <select id="inputTipo" name="tipo" class="form-control" required>
                        <option value="" disabled selected>Selecione um tipo</option>
                        <option value="longo alcance">Ataque de Longo Alcance</option>
                        <option value="corpo a corpo">Ataque Corpo a Corpo</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDefesa" class="col-sm-2 col-form-label">Defesa</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputDefesa" name="defesa" placeholder="Defesa" value="{{ old('defesa') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputMovimento" class="col-sm-2 col-form-label">Movimento</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputMovimento" name="movimento" placeholder="Movimento" value="{{ old('movimento') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDescricao" class="col-sm-2 col-form-label">Descrição</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputDescricao" name="descricao" placeholder="Descrição">{{ old('descricao') }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassiva" class="col-sm-2 col-form-label">Passiva</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassiva" name="passiva" placeholder="Passiva" value="{{ old('passiva') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGatilho" class="col-sm-2 col-form-label">Gatilho</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputGatilho" name="gatilho" placeholder="Gatilho">{{ old('gatilho') }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputResposta" class="col-sm-2 col-form-label">Resposta</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputResposta" name="resposta" placeholder="Resposta">{{ old('resposta') }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</body>

@include('layouts.footer')
