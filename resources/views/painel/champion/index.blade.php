@include('layouts.header')


<body style="padding-top: 70px;">
    <!-- Adiciona o espaçamento -->
    @include('layouts.menu')
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-secondary">
                    <img src="{{ url('imagens/draven.png') }}" alt="Teste" class="rounded-circle mx-auto d-block" style="width: 90px; height: 90px">
                    <div class="card-body">
                        <h5 class="card-title">DRAVEN</h5>
                        <p class="card-text">Draven é um atirador focado em dano massivo e alta mobilidade, que se destaca por suas mecânicas de machados giratórios e busca atenção para dominar seus adversários.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="{{route('campeao.index.draven')}}" class="btn btn-light">Ver</a>
                    </div>
                </div>
            </div>
        
            @foreach($campeoes as $campeao)
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-secondary">
                    <img src="{{ asset('storage/' . $campeao->token) }}" alt="Teste" class="rounded-circle mx-auto d-block" style="width: 90px; height: 90px">
                    <div class="card-body">
                        <h5 class="card-title">{{$campeao->nome}}</h5>
                        <p class="card-text">{{$campeao->descricao}}.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="{{route('campeao.show',$campeao->id)}}" class="btn btn-light">Ver</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>

</body>

@include('layouts.footer')
