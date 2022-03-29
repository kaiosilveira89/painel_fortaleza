@extends('adminlte::page')

@section('title', 'Dashboard')

<?php
function traduz_equip($codigo)
{
    $id_equip	=	'';

    switch	($codigo)	{
        case	1:
            $id_equip	=	'EHC PARANGABA';
            break;
        case	2:
            $id_equip	=	'EHC CENTRO';
            break;
        case	3:
            $id_equip	=	'EHC DOM MANOEL';
            break;
        case	4:
            $id_equip	=	'POUSADA SOCIAL 1';
            break;
        case	5:
            $id_equip	=	'POUSADA SOCIAL 2';
            break;
        case	6:
            $id_equip	=	'REFEITÓRIO SOCIAL';
            break;
        case	7:
            $id_equip	=	'CRAS BARRA DO CEARÁ';
            break;
        case	8:
            $id_equip	=	'CRAS JACARECANGA';
            break;
        case	9:
            $id_equip	=	'CRAS LAGAMAR';
            break;
        case	10:
            $id_equip	=	'CRAS PRAIA DO FUTURO';
            break;
        case	11:
            $id_equip	=	'CRAS MUCURIPE';
            break;
        case	12:
            $id_equip	=	'CRAS SERVILUZ';
            break;
        case	13:
            $id_equip	=	'CRAS  BELA VISTA';
            break;
        case	14:
            $id_equip	=	'CRAS QUINTINO CUNHA';
            break;
        case	15:
            $id_equip	=	'CRAS ANTONIO BEZERRA';
            break;
        case	16:
            $id_equip	=	'CRAS PRESIDENTE KENNEDY';
            break;
        case	17:
            $id_equip	=	'CRAS JOAO XXIII';
            break;
        case	18:
            $id_equip	=	'CRAS MESSEJANA';
            break;
        case	19:
            $id_equip	=	'CRAS';
            break;
        case	20:
            $id_equip	=	'CRAS';
            break;
        case	21:
            $id_equip	=	'CRAS';
            break;
        case	22:
            $id_equip	=	'CRAS';
            break;
        case	23:
            $id_equip	=	'CRAS';
            break;
        case	24:
            $id_equip	=	'CRAS';
            break;
        case	25:
            $id_equip	=	'CRAS';
            break;
        case	26:
            $id_equip	=	'CRAS';
            break;
        case	27:
            $id_equip	=	'CRAS';
            break;
        case	28:
            $id_equip	=	'CRAS';
            break;
        case	29:
            $id_equip	=	'CRAS';
            break;
        case	30:
            $id_equip	=	'CRAS';
            break;
        case	32:
            $id_equip	=	'CRAS';
            break;
        case	33:
            $id_equip	=	'CRAS';
            break;
        case	34:
            $id_equip	=	'CRAS';
            break;

    }
    return $id_equip;
}
?>
<?php
function traduz_task($codigo)
{
    $traduz_task	=	'';
    switch	($codigo)	{
        case	1:
            $traduz_task	=	'FORNECIMENTO DE REFEIÇÕES';
            break;
        case	2:
            $traduz_task	=	'DISTRIBUIÇÃO DE VALE-GAS';
            break;
    }
    return $traduz_task;
}
?>
@foreach($actions as $action )
    @if( $action->id_equip == $id)
@section('content_header')



    <h1>DEMONSTRATIVO</h1>
    <h1>AÇÃO: {{ traduz_task($action->id_task) }}</h1>
    <h1>{{ traduz_equip($action->id_equip) }}</h1>


@stop

@section('content')


    <div style="display:flex; margin-bottom:30px">
        <canvas style="height:400px !important; flex-grow: 1" id="myChart"></canvas>
    </div>

@stop
@endif
@endforeach

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">


@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>



    <script>
        const labels = [@foreach($actions->sortBy('data') as $action )
            @if( $action->id_equip == $id)
            '{{ implode('/',array_reverse(explode('-', $action->data))) }}',
            @endif
            @endforeach];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Número de Ações Realizadas',
                data: [
                    @foreach($actions->sortBy('data') as $action )
                        @if( $action->id_equip == $id)
                        {{ $action->value }},
                    @endif
                    @endforeach
                ],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1,
            }]
        };

        const config = {
            type: 'line',
            data: data,
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@stop

