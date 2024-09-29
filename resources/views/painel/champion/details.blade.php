@include('layouts.header')

<body style="padding-top: 70px;">
    @include('layouts.menu')
    <div class="container">
        <div class="row d-flex align-items-stretch" style="height: 100%;">
            <div class="col-6 d-flex align-items-stretch">
                <div class="w-100">
                    <img src="{{ asset('storage/' . $campeao->imagem) }}" class="img-fluid w-100 h-100" style="object-fit: inherit-down;"> 
                </div>
            </div>
            <div class="col-6 d-flex align-items-stretch">
                <div class="w-100">
                    <div class="bg-dark text-light p-3 mb-2">
                        <h5>Nome: {{ $campeao->nome}}</h5>
                        <h6>Função:  {{ $campeao->funcao->nome}}</h6>
                    </div>
                    <div class="bg-dark text-light p-3 mb-2">
                        <h5>Atributos</h5>
                        <div class="mb-2">
                            <label>Vida: {{ $campeao->funcao->vida}}</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $campeao->funcao->vida}}%;" aria-valuenow="{{ $campeao->funcao->vida}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>Ataque: {{ $campeao->funcao->ataque}}</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $campeao->funcao->ataque}}%;" aria-valuenow="{{ $campeao->funcao->ataque}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>Defesa: {{ $campeao->funcao->defesa}}</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $campeao->funcao->defesa}}%;" aria-valuenow="{{ $campeao->funcao->defesa}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>Movimento: {{ $campeao->funcao->movimento}}</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{$campeao->funcao->movimento}}%;" aria-valuenow="{{$campeao->funcao->movimento}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-success text-light p-3 mb-2" style="border: 2px solid white;">
                        <h5 class="text-center bg-light text-dark p-2">Ataques Especiais</h5>
                        <div class="d-flex align-items-stretch">
                            <div class="bg-dark text-light w-50 pe-2 d-flex flex-column" style="border: 2px solid white; padding: 10px;">
                                <div class="bg-secondary text-light text-center p-2">
                                    <h6>Revolução do Machado</h6>
                                </div>
                                <p><strong>Alcance:</strong> 8 quadrados | <strong>Alvo:</strong> 1 Inimigo</p>
                                <p><strong>Sucesso:</strong> 9 de dano por ataque</p>
                                <p><strong>Efeito:</strong> você ajusta 2 espaços e pode realizar um Ataque Básico contra um inimigo.</p>
                                <p><strong>Fracasso total:</strong> 5 de dano no último alvo.</p>
                            </div>
                            <div class="bg-dark text-light w-50 ps-2 d-flex flex-column" style="border: 2px solid white; padding: 10px;">
                                <div class="bg-secondary text-light text-center p-2">
                                    <h6>Lâminas Sinistras</h6>
                                </div>
                                <p><strong>Alcance:</strong> 8 quadrados | <strong>Alvo:</strong> 1 Inimigo</p>
                                <p><strong>Sucesso:</strong> 12 de dano por ataque</p>
                                <p><strong>Efeito:</strong> o alvo perde 2 pontos de vida após cada jogada dele por 2 rodadas ou até que consiga recuperar pontos de vida. Acerta novamente reinicia o efeito.</p>
                                <p><strong>Fracasso:</strong> 5 de dano.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-danger text-light p-3 mb-2" style="border: 2px solid white;">
                        <h5 class="text-center bg-light text-dark p-2">Ataques Ultimatos</h5>
                        <div class="d-flex align-items-stretch">
                            <div class="bg-dark text-light w-50 pe-2 d-flex flex-column" style="border: 2px solid white; padding: 10px;">
                                <div class="bg-secondary text-light text-center p-2">
                                    <h6>Reta da Morte</h6>
                                </div>
                                <p><strong>Alcance:</strong> 8 quadrados | <strong>Alvo:</strong> 1 Inimigo</p>
                                <p><strong>Benefício:</strong> Você faz dois ataques contra o alvo.</p>
                                <p><strong>Sucesso:</strong> 6 de dano por ataque</p>
                                <p><strong>Efeito:</strong> Se obtiver sucesso nos dois ataques, causa 3 de dano adicional.</p>
                                <p><strong>Fracasso total:</strong> 5 de dano no último alvo.</p>
                            </div>
                            <div class="bg-dark text-light w-50 ps-2 d-flex flex-column" style="border: 2px solid white; padding: 10px;">
                                <div class="bg-secondary text-light text-center p-2">
                                    <h6>Lâminas Sinistras</h6>
                                </div>
                                <p><strong>Alcance:</strong> 8 quadrados | <strong>Alvo:</strong> 1 Inimigo</p>
                                <p><strong>Sucesso:</strong> 12 de dano por ataque</p>
                                <p><strong>Efeito:</strong> Se o alvo se mover, sofre 3 de dano adicional.</p>
                                <p><strong>Fracasso:</strong> 5 de dano.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-secondary text-light p-3 mb-2">
                        <h5>Nome: {{$campeao->funcao->passiva}}</h5>
                        <h5>Gatilho: {{$campeao->funcao->gatilho}}</h5>
                        <h5>Resposta{{$campeao->funcao->resposta}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</body>

@include('layouts.footer')
