@include('layouts.header')


<body style="padding-top: 70px;">
    <!-- Adiciona o espaçamento -->
    @include('layouts.menu')
    <div class="container">
        <div class="row">
            @foreach($funcoes as $funcao)
            <div class="col-md-4 mb-3">
                <div class="card bg-light text-dark">
                    <div class="card-header"><strong>{{$funcao->nome}}</strong></div>
                    <div class="card-body">
                        <p class="card-text">{{$funcao->descricao}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</body>

@include('layouts.footer')
