@include('layouts.header')


<body style="padding-top: 70px;">
    <!-- Adiciona o espaçamento -->
    @include('layouts.menu')
    <div class="container">
        <div>
            <div class="row">
                <div><img src="{{ url('imagens/draven_full.jfif') }}"></div>
                <div>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Nome</th>
                                <th scope="col" colspan="2">Função</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="2">Draven</th>
                                <th colspan="2"> Atirador</th>
                            </tr>
                        </tbody>

                        <thead>
                            <tr>
                                <th scope="col" colspan="1">Vida</th>
                                <th scope="col" colspan="1">Ataque</th>
                                <th scope="col" colspan="1">Defesa</th>
                                <th scope="col" colspan="1">Movimento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>55</th>
                                <th> 8</th>
                                <th> 6</th>
                                <th> 5</th>
                            </tr>
                        </tbody>

                        <thead>
                            <tr class="table-danger">
                                <th scope="col" colspan="2">Ataque especial 1</th>
                                <th scope="col" colspan="2">Ataque especial 2</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-danger">
                                <th colspan="2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    Alcance
                                                </div>
                                                <div class="col-sm-6">
                                                    Alvo
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Beneficio/Prejuizo
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Sucesso:
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Efeito:
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Fracasso:
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th colspan="2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    Alcance
                                                </div>
                                                <div class="col-sm-6">
                                                    Alvo
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Beneficio/Prejuizo
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Sucesso:
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Efeito:
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Fracasso:
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                        <thead>
                            <tr class="table-warning">
                                <th scope="col" colspan="2">Ataque Ultimato 1</th>
                                <th scope="col" colspan="2">Ataque Ultimato 2</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-warning">
                                <th colspan="2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    Alcance
                                                </div>
                                                <div class="col-sm-6">
                                                    Alvo
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Beneficio/Prejuizo
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Sucesso:
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Efeito:
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Fracasso:
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th colspan="2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    Alcance
                                                </div>
                                                <div class="col-sm-6">
                                                    Alvo
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Beneficio/Prejuizo
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Sucesso:
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Efeito:
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Fracasso:
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            <tr class="table-secondary">
                                <th colspan="4">Nome</th>

                            </tr>
                            <tr class="table-secondary">
                                <th colspan="4">Gatilho</th>

                            </tr>
                            <tr class="table-secondary">
                                <th colspan="4">Resposta</th>

                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

</body>

@include('layouts.footer')
