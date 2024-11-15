@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@section('content')
<style>
    /*
	dark green: 48542e
	light green: c7c7b0
	background: e7e5d3
	at-will: 5b8f62
	encounter: 811c32
	daily: 414342
	power gradient beginning: dad9c7
	power gradient end: ffffff
*/

    /* whole table */
    table.power,
    table.monster {
        padding: 0 0 0 0;
        margin: 0 0 0 0;
        font-family: helvetica;
        width: 500px;
    }

    table.monster {
        background-color: #e7e5d3;
    }

    /* Headings  */
    table.monster thead {
        background-color: #48542e;
        color: #ffffff;
    }

    thead.atwill {
        background-color: #5b8f62;
        color: #ffffff;
    }

    thead.encounter {
        background-color: #811c32;
        color: #ffffff;
    }

    thead.daily {
        background-color: #414342;
        color: #ffffff;
    }

    /* Applies to everything */
    table.monster span,
    table.power span {
        display: block;
        text-indent: -15px;
        margin-left: 22.5px;
        margin-right: 5px;
    }

    /* also applies to everything */
    table.monster td,
    table.power td {
        vertical-align: top;
    }

    /* name  line */
    span.name {
        font-weight: bold;
        color: #ffffff;
    }

    /* role  line */
    span.role {
        font-weight: bold;
        color: #ffffff;
        float: right;
    }

    /* type  line */
    span.type {
        color: #ffffff;
    }

    /* exp  line */
    span.exp {
        float: right;
        color: #ffffff;
    }

    /* embedded tables */
    table table {
        padding: 0 0 0 0;
        margin: 0 0 0 0;
        width: 100%;
    }

    /* first block of stats */
    tr.mainstats {}

    /* heading of powers */
    tr.powerhead {
        background-color: #c7c7b0;
    }

    /* body of powers */
    tr.powerbody {}

    /* seconda block of stats */
    tr.secondstats {
        background-color: #c7c7b0;
    }

    /* equipment */
    tr.equipment {}

    span.class {
        float: right;
        color: #ffffff;
    }

    tr.color,
    tr.indentcolor {
        background-color: #dad9c7;
    }

    tr.backpng,
    tr.indentbackpng {
        background-image: url(powerback.png);
        background-repeat: repeat-y;
    }

    tr.backgif,
    tr.indentbackgif {
        background-image: url(powerback.gif);
        background-repeat: repeat-y;
    }

    tr.indent span,
    tr.indentcolor span,
    tr.indentbackpng span,
    tr.indentbackgif span {
        margin-left: 35px;
    }

    span.flavortext {
        font-style: italic;
    }

    span.action,
    span.powertype {
        font-weight: bold;
    }

</style>

<div style="border: 3px solid gold; padding: 5px; background-image: url('{{ url('imagens/fundo.png') }}'); background-size: cover; background-position: center; width: 836px; height: 596px; overflow: hidden;">
    <div class="container h-100">
        <div class="row h-100" style="margin: 0; padding: 0;">
            <div class="col-6 d-flex align-items-center justify-content-center" style="border: 3px solid red; flex-direction: column;">
                <div class="w-100 h-75" style="border: 3px solid rgb(157, 255, 0); margin-top: 17px; display: flex; justify-content: center; align-items: center;">
                    <img src="{{ url('imagens/draven_full.jpg') }}" style="max-width: 75%; max-height: 100%; object-fit: contain;">
                </div>

                <div class="w-100 h-25" style="border: 3px solid rgb(0, 191, 255);margin-bottom: 17px;">
                    Passiva
                </div>
            </div>
            <div class="col-6 d-flex flex-column align-items-stretch justify-content-center" style="border: 3px solid blue; height: 100%;">
                <div class="row" style="height: 5%;margin-top: 17px; display: flex;">
                    <!-- Ajuste a altura conforme necessário -->
                    <div class="col-12 col-md-8" style="border: 1px solid black;">.DRAVEM</div>
                    <div class="col-6 col-md-4" style="border: 1px solid black;">.ATIRADOR</div>
                </div>

                <div class="row" style="height: 5%;">
                    <!-- Ajuste a altura conforme necessário -->
                    <div class="col-3 col-md-3" style="border: 1px solid black;">VIDA</div>
                    <div class="col-3 col-md-3" style="border: 1px solid black;">ATAQUE</div>
                    <div class="col-3 col-md-3" style="border: 1px solid black;">DEFESA</div>
                    <div class="col-3 col-md-3" style="border: 1px solid black;">MOVE</div>
                </div>

                <div class="row" style="height: 22.5%;">
                    <div class="col-12" style="border: 1px solid black; height: 100%; overflow: hidden; padding: 10px;">
                        <!-- Título -->
                        <div class="d-flex justify-content-between" style="width: 100%; flex-wrap: nowrap; font-size: 12px;">Poder</div>

                        <!-- Container flex para Alcance e Alvo -->
                        <div class="d-flex justify-content-between" style="width: 100%; flex-wrap: nowrap;">
                            <p class="flex-grow-1 text-truncate" style="margin: 0; padding-right: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size: 12px;">
                                Alcance: xxxxxxxx
                            </p>
                            <p class="flex-grow-1 text-truncate" style="margin: 0; padding-left: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size: 12px;">
                                Alvo: xxxxxxxx
                            </p>
                        </div>
                        <div class="d-flex justify-content-between" style="width: 100%; flex-wrap: nowrap; font-size: 12px;">
                            Benefício/Prejuízo: xxxxxxxx
                        </div>
                        <div class="d-flex justify-content-between" style="width: 100%; flex-wrap: nowrap; font-size: 12px;">
                            Sucesso: xxxxxxxx
                        </div>
                        <div class="d-flex justify-content-between" style="width: 100%; flex-wrap: nowrap; font-size: 12px;">
                            Efeito: xxxxxxxx
                        </div>
                        <div class="d-flex justify-content-between" style="width: 100%; flex-wrap: nowrap; font-size: 12px;">
                            Fracasso: xxxxxxxx
                        </div>
                    </div>
                </div>


                <div class="row" style="height: 22.5%;">
                    <div class="col-12" style="border: 1px solid black; overflow: hidden;">.col-6</div>
                </div>
                <div class="row" style="height: 22.5%;">
                    <div class="col-12" style="border: 1px solid black; overflow: hidden;">.col-6</div>
                </div>
                <div class="row" style="height: 22.5%;margin-bottom: 17px;">
                    <div class="col-12" style="border: 1px solid black; overflow: hidden;">.col-6</div>
                </div>


            </div>

        </div>
    </div>
</div>


</div>
@endsection
