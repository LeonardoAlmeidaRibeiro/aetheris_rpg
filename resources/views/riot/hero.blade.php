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
<div class="card text-white bg-secondary mb-3" style="width: 100%; height: 100%;">
    <div class="row no-gutters" style="height: 100%;">
        <div class="col-md-4" style="height: 100%;">
            <img src="{{ url('imagens/draven_full.jpg') }}" class="card-img" alt="..." style="height: 100%; object-fit: cover;">
        </div>
        <div class="col-md-8" style="height: 100%;">
            <div class="card-body" style="height: 100%; display: flex; flex-direction: column;">
                <h5 class="card-title">Draven</h5>
                <p>frase Principal</p>
                <div style="flex: 1; border: 1px solid #ddd;">
                    <table class="table table-sm table-dark" style="margin: 0; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th scope="col">Vida</th>
                                <th scope="col">Ataque</th>
                                <th scope="col">Defesa</th>
                                <th scope="col">Movimento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">55</th>
                                <td>8</td>
                                <td>6</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-sm table-dark" style="margin: 0; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th scope="col">Passiva</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Gatilho:</th>
                            </tr>
                            <tr>
                                <th scope="row">Resposta:</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div style="display: flex; gap: 1%; border: 1px solid #ddd;">
                    <table cellpadding="0" cellspacing="0" class="power" style="flex: 1;">
                        <!-- Conteúdo da primeira tabela -->
                        <table cellpadding=0 cellspacing=0 class=power>
                            <thead class=atwill>
                                <tr>
                                    <td>
                                        <table cellpadding=0 cellspacing=0>
                                            <tr>
                                                <td style="display: flex; align-items: center;">
                                                    <img src="{{ url('imagens/DravenSpinning.png') }}" style="width: 64px; height: 64px;object-fit: cover; margin-right: 10px;">
                                                    <span class="name" style="font-weight: bold;">Revolução do Machado</span>
                                                </td>
                                                <td><span class="class">CLASS TYPE N</span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tr class=backpng>
                                <td><span class=flavortext>FLAVOR TEXT</span></td>
                            </tr>
                            <tr>
                                <td><span class=powertype>At-Will &#x2666; Keyword, Keyword</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding=0 cellspacing=0>
                                        <tr>
                                            <td><span class=action>ACTION</span></td>
                                            <td><span class=range><b>RANGE</b> N</span></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td><span class=target><b>Target:</b> TARGET</span></td>
                            </tr>
                            <tr>
                                <td><span class=attack><b>Attack:</b> ABILITY vs. DEFENSE</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=hitspan><b>Hit:</b> EFFECT</span></td>
                            </tr>
                            <tr>
                                <td><span class=miss><b>Miss:</b> EFFECT</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=effect><b>Effect:</b> EFFECT</span></td>
                            </tr>
                            <tr>
                                <td><span class=sustain><b>Sustain ACTION:</b> EFFECT</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=special><b>Special:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=target><b>Target:</b> TARGET</span></td>
                            </tr>
                            <tr class=indentbackpng>
                                <td><span class=attack><b>Attack:</b> ABILITY vs. DEFENSE</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=hitspan><b>Hit:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indentbackgif>
                                <td><span class=miss><b>Miss:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=effect><b>Effect:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indentcolor>
                                <td><span class=sustain><b>Sustain ACTION:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=special><b>Special:</b> EFFECT</span></td>
                            </tr>
                        </table>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="power" style="flex: 1;">
                        <!-- Conteúdo da segunda tabela -->
                        <table cellpadding=0 cellspacing=0 class=power>
                            <thead class=atwill>
                                <tr>
                                    <td>
                                        <table cellpadding=0 cellspacing=0>
                                            <td style="display: flex; align-items: center;">
                                                <img src="{{ url('imagens/Wicked_Blades.webp') }}"" style="width: 64px; height: 64px; object-fit: cover; margin-right: 10px;">
                                                <span class="name" style="font-weight: bold;">NAME</span>
                                            </td>
                                            <td><span class="class">CLASS TYPE N</span></td>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tr class=backpng>
                                <td><span class=flavortext>FLAVOR TEXT</span></td>
                            </tr>
                            <tr>
                                <td><span class=powertype>At-Will &#x2666; Keyword, Keyword</span>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding=0 cellspacing=0>
                                        <tr>
                                            <td><span class=action>ACTION</span></td>
                                            <td><span class=range><b>RANGE</b> N</span></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td><span class=target><b>Target:</b> TARGET</span></td>
                            </tr>
                            <tr>
                                <td><span class=attack><b>Attack:</b> ABILITY vs. DEFENSE</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=hitspan><b>Hit:</b> EFFECT</span></td>
                            </tr>
                            <tr>
                                <td><span class=miss><b>Miss:</b> EFFECT</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=effect><b>Effect:</b> EFFECT</span></td>
                            </tr>
                            <tr>
                                <td><span class=sustain><b>Sustain ACTION:</b> EFFECT</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=special><b>Special:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=target><b>Target:</b> TARGET</span></td>
                            </tr>
                            <tr class=indentbackpng>
                                <td><span class=attack><b>Attack:</b> ABILITY vs. DEFENSE</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=hitspan><b>Hit:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indentbackgif>
                                <td><span class=miss><b>Miss:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=effect><b>Effect:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indentcolor>
                                <td><span class=sustain><b>Sustain ACTION:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=special><b>Special:</b> EFFECT</span></td>
                            </tr>
                        </table>
                    </table>
                </div>
                <br>
                <div style="display: flex; gap: 1%; border: 1px solid #ddd;">
                    <table cellpadding="0" cellspacing="0" class="power" style="flex: 1;">
                        <!-- Conteúdo da primeira tabela -->
                        <table cellpadding=0 cellspacing=0 class=power>
                            <thead class=atwill>
                                <tr>
                                    <td>
                                        <table cellpadding=0 cellspacing=0>
                                            <td style="display: flex; align-items: center;">
                                                <img src="{{ url('imagens/machado.jpeg') }}"" style="width: 64px; height: 64px; object-fit: cover; margin-right: 10px;">
                                                <span class="name" style="font-weight: bold;">NAME</span>
                                            </td>
                                            <td><span class="class">CLASS TYPE N</span></td>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tr class=backpng>
                                <td><span class=flavortext>FLAVOR TEXT</span></td>
                            </tr>
                            <tr>
                                <td><span class=powertype>At-Will &#x2666; Keyword, Keyword</span>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding=0 cellspacing=0>
                                        <tr>
                                            <td><span class=action>ACTION</span></td>
                                            <td><span class=range><b>RANGE</b> N</span></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td><span class=target><b>Target:</b> TARGET</span></td>
                            </tr>
                            <tr>
                                <td><span class=attack><b>Attack:</b> ABILITY vs. DEFENSE</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=hitspan><b>Hit:</b> EFFECT</span></td>
                            </tr>
                            <tr>
                                <td><span class=miss><b>Miss:</b> EFFECT</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=effect><b>Effect:</b> EFFECT</span></td>
                            </tr>
                            <tr>
                                <td><span class=sustain><b>Sustain ACTION:</b> EFFECT</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=special><b>Special:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=target><b>Target:</b> TARGET</span></td>
                            </tr>
                            <tr class=indentbackpng>
                                <td><span class=attack><b>Attack:</b> ABILITY vs. DEFENSE</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=hitspan><b>Hit:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indentbackgif>
                                <td><span class=miss><b>Miss:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=effect><b>Effect:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indentcolor>
                                <td><span class=sustain><b>Sustain ACTION:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=special><b>Special:</b> EFFECT</span></td>
                            </tr>
                        </table>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="power" style="flex: 1;">
                        <!-- Conteúdo da segunda tabela -->
                        <table cellpadding=0 cellspacing=0 class=power>
                            <thead class=atwill>
                                <tr>
                                    <td>
                                        <table cellpadding=0 cellspacing=0>
                                            <td style="display: flex; align-items: center;">
                                                <img src="{{ url('imagens/DravenRCast.png') }}" style="width: 64px; height: 64px; object-fit: cover; margin-right: 10px;">
                                                <span class="name" style="font-weight: bold;">NAME</span>
                                            </td>
                                            <td><span class="class">CLASS TYPE N</span></td>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tr class=backpng>
                                <td><span class=flavortext>FLAVOR TEXT</span></td>
                            </tr>
                            <tr>
                                <td><span class=powertype>At-Will &#x2666; Keyword, Keyword</span>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding=0 cellspacing=0>
                                        <tr>
                                            <td><span class=action>ACTION</span></td>
                                            <td><span class=range><b>RANGE</b> N</span></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td><span class=target><b>Target:</b> TARGET</span></td>
                            </tr>
                            <tr>
                                <td><span class=attack><b>Attack:</b> ABILITY vs. DEFENSE</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=hitspan><b>Hit:</b> EFFECT</span></td>
                            </tr>
                            <tr>
                                <td><span class=miss><b>Miss:</b> EFFECT</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=effect><b>Effect:</b> EFFECT</span></td>
                            </tr>
                            <tr>
                                <td><span class=sustain><b>Sustain ACTION:</b> EFFECT</span></td>
                            </tr>
                            <tr class=color>
                                <td><span class=special><b>Special:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=target><b>Target:</b> TARGET</span></td>
                            </tr>
                            <tr class=indentbackpng>
                                <td><span class=attack><b>Attack:</b> ABILITY vs. DEFENSE</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=hitspan><b>Hit:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indentbackgif>
                                <td><span class=miss><b>Miss:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=effect><b>Effect:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indentcolor>
                                <td><span class=sustain><b>Sustain ACTION:</b> EFFECT</span></td>
                            </tr>
                            <tr class=indent>
                                <td><span class=special><b>Special:</b> EFFECT</span></td>
                            </tr>
                        </table>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


</div>
@endsection
