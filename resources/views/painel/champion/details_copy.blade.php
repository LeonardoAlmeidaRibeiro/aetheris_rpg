@include('layouts.header')

<body style="padding-top: 70px;">
    @include('layouts.menu')
    <div class="container">
        <div class="row d-flex align-items-stretch" style="height: 100%;">
            <div class="col-6 d-flex align-items-stretch">
                <div class="w-100">
                    <img src="{{ url('imagens/draven_full.jfif') }}" class="img-fluid w-100 h-100" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-6 d-flex align-items-stretch">
                <div class="w-100">
                    <div class="bg-dark text-light p-3 mb-2">
                        <h5>Nome: Draven</h5>
                        <h6>Função: Atirador</h6>
                    </div>
                    <div class="bg-dark text-light p-3 mb-2">
                        <h5>Atributos</h5>
                        <div class="mb-2">
                            <label>Vida: 55</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>Ataque: 8</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>Defesa: 6</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>Movimento: 5</label>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
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

                    <div class="bg-danger text-light p-3 mb-2" style="border: 2px solid white;">
                        <h5 class="text-center bg-light text-dark p-2">Ataques Ultimatos</h5>
                        <div class="d-flex align-items-stretch">
                            <div class="bg-dark text-light w-50 pe-2 d-flex flex-column" style="border: 2px solid white; padding: 10px;">
                                <div class="bg-secondary text-light text-center p-2">
                                    <h6>Revolução do Machado</h6>
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
                        <h5>Nome</h5>
                        <h5>Gatilho</h5>
                        <h5>Resposta</h5>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</body>

@include('layouts.footer')
