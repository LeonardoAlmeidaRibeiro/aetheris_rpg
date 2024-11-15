@extends('layouts.app')

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
table.power, table.monster {
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
table.monster span, table.power span {
	display:block;
	text-indent: -15px;
	margin-left: 20px;
	margin-right: 5px;
}

/* also applies to everything */
table.monster td, table.power td {
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
tr.mainstats {
}

/* heading of powers */
tr.powerhead {
	background-color: #c7c7b0;
}

/* body of powers */
tr.powerbody {
}

/* seconda block of stats */
tr.secondstats {
	background-color: #c7c7b0;
}

/* equipment */
tr.equipment {
}

span.class {
	float: right;
	color: #ffffff;
}

tr.color, tr.indentcolor {
	background-color: #dad9c7;
}
tr.backpng, tr.indentbackpng {
	background-image: url(powerback.png);
	background-repeat: repeat-y;
}
tr.backgif, tr.indentbackgif {
	background-image: url(powerback.gif);
	background-repeat: repeat-y;
}
tr.indent span, tr.indentcolor span, tr.indentbackpng span, tr.indentbackgif span {
	margin-left: 35px;
}

span.flavortext {
	font-style:italic;
}

span.action, span.powertype {
	font-weight: bold;
}
</style>
<div class="container" style="border: 5px solid gold; padding: 5px;">
    <img src="{{ url('imagens/draven_full.jfif') }}" class="img-fluid w-100 h-100" style="object-fit: cover;">
    <div class="row">
        <!-- Coluna da Tabela à Direita -->
        <table cellpadding=0 cellspacing=0 class=power>
            <thead class=atwill>
                <tr>
                    <td>
                        <table cellpadding=0 cellspacing=0>
                            <tr>
                                <td><span class=name>NAME</span></td>
                                <td><span class=class>CLASS TYPE N</span></td>
                            </tr>
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
        <br>
        <table cellpadding=0 cellspacing=0 class=power>
            <thead class=atwill>
                <tr>
                    <td>
                        <table cellpadding=0 cellspacing=0>
                            <tr>
                                <td><span class=name>NAME</span></td>
                                <td><span class=class>CLASS TYPE N</span></td>
                            </tr>
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
        <br>
        <table cellpadding=0 cellspacing=0 class=power>
            <thead class=encounter>
                <tr>
                    <td>
                        <table cellpadding=0 cellspacing=0>
                            <tr>
                                <td><span class=name>NAME</span></td>
                                <td><span class=class>CLASS TYPE N</span></td>
                            </tr>
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
        <br>
        <table cellpadding=0 cellspacing=0 class=power>
            <thead class=encounter>
                <tr>
                    <td>
                        <table cellpadding=0 cellspacing=0>
                            <tr>
                                <td><span class=name>NAME</span></td>
                                <td><span class=class>CLASS TYPE N</span></td>
                            </tr>
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
    </div>
</div>

@endsection
