@include('layouts.header')


<body style="padding-top: 70px;">
    <!-- Adiciona o espaçamento -->
    @include('layouts.menu')
    <div class="container">
        <div class="col-md-12 text-center text-white">
            <h1 class="display-4">Bem-vindo a Aetheris</h1>
            <p class="lead">
                Cada campeão em Aetheris tem uma classe atribuída, sendo que cada campeão pode  ter uma funcão . As classes e suas interações entre si influenciam o ritmo e as decisões do jogo.
            </p>
        </div>
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
