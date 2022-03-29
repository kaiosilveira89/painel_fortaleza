@extends('adminlte::page')
<?php
$green = 0;
$greenTotal = [];
$yellow = 0;
$yellowTotal = [];
$red = 0;
$redTotal = [];
$task = 0;
$dia = '';

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
function longitude($codigo)
{
    $longitude	=	0;

    switch	($codigo)	{
        case	1:
            $longitude	=	-3.8194423921191865;
            break;
        case	2:
            $longitude	=	-3.7316686997449953;
            break;
        case	3:
            $longitude	=	-3.7347853581545647;
            break;
        case	4:
            $longitude	=	-3.731642281619976;
            break;
        case	5:
            $longitude	=	-3.7279103684955057;
            break;
        case	6:
            $longitude	=	-3.722551885721232;
            break;
        case	7:
            $longitude	=	-3.7077136537489066;
            break;
        case	8:
            $longitude	=	-3.7209897738400373;
            break;
        case	9:
            $longitude	=	-3.7613576942245985;
            break;
        case	10:
            $longitude	=	-3.7644305437410313;
            break;
        case	11:
            $longitude	=	-3.7163742;
            break;
        case	12:
            $longitude	=	-3.7519851;
            break;
        case	13:
            $longitude	=	-3.7318696;
            break;
        case	14:
            $longitude	=	-3.7374242;
            break;
        case	15:
            $longitude	=	-3.7291766;
            break;
        case	16:
            $longitude	=	-3.7746614;
            break;
        case	17:
            $longitude	=	-3.8306437;
            break;
        case	18:
            $longitude	=	-3.7291766;
            break;
        case	19:
            $longitude	=	-3.000;
            break;
        case	20:
            $longitude	=	-3.000;
            break;
        case	21:
            $longitude	=	-3.000;
            break;
        case	22:
            $longitude	=	-3.000;
            break;
        case	23:
            $longitude	=	-3.000;
            break;
        case	24:
            $longitude	=	-3.000;
            break;
        case	25:
            $longitude	=	-3.000;
            break;
        case	26:
            $longitude	=	-3.000;
            break;
        case	27:
            $longitude	=	-3.000;
            break;
        case	28:
            $longitude	=	-3.000;
            break;
        case	29:
            $longitude	=	-3.000;
            break;
        case	30:
            $longitude	=	-3.000;
            break;
        case	31:
            $longitude	=	-3.000;
            break;
        case	32:
            $longitude	=	-3.000;
            break;
        case	33:
            $longitude	=	-3.000;
            break;
        case	34:
            $longitude	=	-3.000;
            break;

    }
    return $longitude;
}
function latitude($codigo)
{
    $latitude = 0;

    switch	($codigo)	{
        case	1:
            $latitude	=	-38.57802800288683;
            break;
        case	2:
            $latitude	=	-38.53201738012684;
            break;
        case	3:
            $latitude	=	-38.52347370228183;
            break;
        case	4:
            $latitude	=	-38.5224584734467;
            break;
        case	5:
            $latitude	=	-38.53443684461173;
            break;
        case	6:
            $latitude	=	-38.53675450228174;
            break;
        case	7:
            $latitude	=	-38.580116746025524;
            break;
        case	8:
            $latitude	=	-38.53909492504664;
            break;
        case	9:
            $latitude	=	-38.51108527144671;
            break;
        case	10:
            $latitude	=	-38.44041180213015;
            break;
        case	11:
            $latitude	=	-38.4778337;
            break;
        case	12:
            $latitude	=	-38.4651728;
            break;
        case	13:
            $latitude	=	-38.5639419;
            break;
        case	14:
            $latitude	=	-38.6008863;
            break;
        case	15:
            $latitude	=	-38.5902629;
            break;
        case	16:
            $latitude	=	-38.5705202;
            break;
        case	17:
            $latitude	=	-38.580733;
            break;
        case	18:
            $latitude	=	-38.4676208;
            break;
        case	19:
            $latitude	=	-38.000;
            break;
        case	20:
            $latitude	=	-38.000;
            break;
        case	21:
            $latitude	=	-38.000;
            break;
        case	22:
            $latitude	=	-38.000;
            break;
        case	23:
            $latitude	=	-38.000;
            break;
        case	24:
            $latitude	=	-38.000;
            break;
        case	25:
            $latitude	=	-38.000;
            break;
        case	26:
            $latitude	=	-38.000;
            break;
        case	27:
            $latitude	=	-38.000;
            break;
        case	28:
            $latitude	=	-38.000;
            break;
        case	29:
            $latitude	=	-38.000;
            break;
        case	30:
            $latitude	=	-38.000;
            break;
        case	31:
            $latitude	=	-38.000;
            break;
        case	32:
            $latitude	=	-38.000;
            break;
        case	33:
            $latitude	=	-38.000;
            break;
        case	34:
            $latitude	=	-38.000;
            break;

    }
    return $latitude;
}
function traduz_task($codigo)
{
    $traduz_task	=	'';
    switch	($codigo)	{
        case	1:
            $traduz_task	=	'Almoços';
            break;
        case	2:
            $traduz_task	=	'Vale-Gás';
            break;
    }
    return $traduz_task;
}

function filtraAlto($codigo)
    {
        $green = [];


        if($codigo >= 70){
            array_push($green, $codigo);
            return count($green);
        }
        else {

        }
    }
function filtraMedio($codigo)
{

    $yellow = [];


    if ($codigo >= 30 && $codigo < 70){
        array_push($yellow, $codigo);
        return count($yellow);
    }
    else {

    }
}
function filtraBaixo($codigo)
{

    $red = [];

    if($codigo < 30){
        array_push($red, $codigo);
        return count($red);
    }
    else {

    }
}

foreach($actions as $action ){
if($action->data == request("d")){

    if($action->id_task == 1)
        {
            $dia = $action->data;
            $task = $action->id_task;
            if ($action->value >= 70)
            {
                $green++;
                array_push($greenTotal, $action->value);
            }
            elseif ($action->value >= 30 && $action->value < 70)
            {
                $yellow++;
                array_push($yellowTotal, $action->value);
            }
            else
            {
                $red++;
                array_push($redTotal, $action->value);
            }
        }
    elseif ($action->id_task == 2)
        {
            $dia = $action->data;
            $task = $action->id_task;
            if ($action->value >= 700)
                {
                    $green++;
                    array_push($greenTotal, $action->value);
                }
            elseif ($action->value >= 300 && $action->value < 700)
                {
                    $yellow++;
                    array_push($yellowTotal, $action->value);
                }
            else
                {
                    $red++;
                    array_push($redTotal, $action->value);
                }
        }
    else {    }
    }else {    }
}

?>

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <form class="form-group row">


        <select id="id_task" name="t" class="form-control col-lg-3">
        <option value="0">Selecione um indicador...</option>
        <option value="1">Entrega de refeição</option>
        <option value="2">Vale-Gás</option>
        </select>

        <input type="date" class="form-control col-lg-3" name="d">

        <button class="form-control col-lg-1 ml-1" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>

    </form>
@stop

@section('content')

        <p>Painel de sala de situação</p>

            <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $actions->sum('value') }}</h3>
                    <p>Total de {{ traduz_task($task) }} Fornecidos em {{implode('/',array_reverse(explode('-', $dia)))}}</p>
                </div>

                <div class="icon">
                    <i class="fa fa-thumb-tack"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>


        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}

                   <h3>{{$green}}</h3>


                    <p>Locais com Ótimo Desempenho</p>
                </div>
                <div class="icon">
                    <i class="fas fa-arrow-alt-circle-up"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $yellow }}</h3>
                    <p>Locais com Médio Desempenho</p>
                </div>
                <div class="icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$red}}</h3>
                    <p>Locais com Baixo Desempenho</p>
                </div>
                <div class="icon">
                    <i class="fas fa-arrow-alt-circle-down"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>
    <div class="row">

        <section class="col-lg-7 connectedSortable ui-sortable">

            <div class="card bg-gradient-light">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa fa-map mr-1"></i>
                        Visualização em mapa
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-light btn-sm" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div id="map" style="width: auto; height: 500px"></div>

                    </div>
                </div>
            </div>

        </section>


        <section class="col-lg-5 connectedSortable ui-sortable">

            <div class="card bg-gradient-light">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        Visualização gráfica
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-light btn-sm" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body">
                    <div>
                        <canvas style="height:400px !important;" id="myChart"></canvas>
                    </div>
                </div>

            </div>


{{--             <div class="card bg-gradient-primary">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa-th mr-1"></i>
                        Sales Graph
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn bg-primary btn-sm" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn bg-primary btn-sm" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">


                </div>

            </div> --}}

        </section>

        <div class="container">

            <h2>Filtrar por campo</h2>

            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>UNIDADE</th>
                        <th>AÇÃO</th>
                        <th>DATA</th>
                        <th>QUANTIDADE</th>
{{--                        <th>TESTE</th>--}}
{{--                        <th>TESTE 2</th>--}}
                    </tr>
                </thead>
                <tbody id="myTable">
                @foreach($actions as $action)
                    @if($action->data == request("d"))

                    <tr>
                        <td>{{ traduz_equip($action->id_equip) }}</td>
                        <td>{{ traduz_task($action->id_task) }}</td>
                        <td>{{ implode('/',array_reverse(explode('-', $action->data))) }}</td>
                        <td>{{ $action->value }}</td>
{{--                        <td>{{latitude($action->id_equip)}}</td>--}}
{{--                        <td>{{$action->id_equip}}</td>--}}
                    </tr>
                    @else
                    @endif
                @endforeach

                </tbody>
            </table>
        </div>


    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />

    @stop

        @section('js')

                <script src="https://kit.fontawesome.com/d8e2fcabdf.js" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin="">
        </script>

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
            const data = {
                labels: [
                    'Baixo',
                    'Alto',
                    'Médio'
                ],
                datasets: [{
                    data: [{{array_sum($redTotal)}}, {{array_sum($greenTotal)}}, {{array_sum($yellowTotal)}}],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(96, 209, 120)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 20
                }]
            };

            const config = {
                type: 'pie',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: {
                        padding: 20
                    },
                    plugins: {
                        legend: {
                            display: true,
                            fontSize: 30
                        }

                    }

                }

            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>

        <script>

            var greenIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });
            var orangeIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });
            var redIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var parangaba, bandeira, manoel, social1, social2, refeitorio, barra, jacarecanga, lagamar, futuro, mucuripe, serviluz, bela_vista, quintino_cunha,
                ant_bezerra, pres_kennedy, joao_23, messejana;

            @foreach($actions as $action)
            @if($action->data == request("d"))

            @switch($action->id_equip)
                    @case(1)
                        @if ($action->value >= 70)
                            var parangaba = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 70 && $action->value >= 30)
                            var parangaba = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var parangaba = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(2)
                        @if ($action->value >= 70)
                            var bandeira = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 70 && $action->value >= 30)
                            var bandeira = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var bandeira = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(3)
                        @if ($action->value >= 70)
                            var manoel = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 70 && $action->value >= 30)
                            var manoel = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var manoel = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(4)
                        @if ($action->value >= 70)
                            var social1 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 70 && $action->value >= 30)
                            var social1 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var social1 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(5)
                        @if ($action->value >= 70)
                            var social2 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 70 && $action->value >= 30)
                            var social2 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var social2 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(6)
                        @if ($action->value >= 70)
                            var refeitorio = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 70 && $action->value >= 30)
                            var refeitorio = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var refeitorio = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(7)
                        @if ($action->value >= 700)
                            var barra = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                            var barra = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var barra = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(8)
                        @if ($action->value >= 700)
                            var jacarecanga = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                            var jacarecanga = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var jacarecanga = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(9)
                        @if ($action->value >= 700)
                            var lagamar = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                            var lagamar = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var lagamar = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(10)
                        @if ($action->value >= 700)
                            var futuro =  L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                            var futuro = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var futuro = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(11)
                        @if ($action->value >= 700)
                           var mucuripe = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                          var mucuripe = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                          var mucuripe = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(12)
                        @if ($action->value >= 700)
                          var serviluz = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                          var serviluz = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                          var serviluz = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(13)
                        @if ($action->value >= 700)
                           var bela_vista = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                          var bela_vista = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                          var bela_vista = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(14)
                        @if ($action->value >= 700)
                           var quintino_cunha = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                           var quintino_cunha = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var quintino_cunha = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(15)
                        @if ($action->value >= 700)
                           var ant_bezerra = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                           var ant_bezerra = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                           var ant_bezerra = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(16)
                        @if ($action->value >= 700)
                           var pres_kennedy = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                            var pres_kennedy = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var pres_kennedy = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(17)
                        @if ($action->value >= 700)
                           var joao_23 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                            var joao_23 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                           var joao_23 = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @case(18)
                        @if ($action->value >= 700)
                            var messejana = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: greenIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @elseif ($action->value < 700 && $action->value >= 300)
                            var messejana = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: orangeIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @else
                            var messejana = L.marker([{{longitude($action->id_equip)}}, {{latitude($action->id_equip)}}], {icon: redIcon}).bindPopup('{{traduz_equip($action->id_equip)}}')
                        @endif
                    @break
                    @default
                @endswitch
                        @else
                        @endif
            @endforeach


            var layoutMap = L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=UnzREsu8qEQLLAK8XZGn', {
                    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
                });

            @foreach($actions as $action)
            @if($action->data == request("d"))
            @switch($action->id_task)
            @case(1)
                var map = L.map('map', {
                    //center: [-3.76838, -38.535683],
                    center: [-3.771421, -38.538151],
                    zoom: 12,
                    layers: [layoutMap, parangaba, bandeira, manoel, social1, social2, refeitorio]
                });
            @break
            @case(2)
            var map = L.map('map', {
                //center: [-3.76838, -38.535683],
                center: [-3.771421, -38.538151],
                zoom: 12,
                layers: [layoutMap, barra, jacarecanga, lagamar, futuro, mucuripe, serviluz, bela_vista, quintino_cunha,
                    ant_bezerra, pres_kennedy, joao_23, messejana]
            });
            @break
            @endswitch
            @else
            @endif
            @endforeach

                var baseMaps = {
                    "OpenStreetMap": layoutMap

                };

                var overlayMaps = {
                    "<strong>EQUIPAMENTOS</strong>": equip,
                };

                L.control.layers(baseMaps, overlayMaps).addTo(map);
        </script>
    @stop


    {{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
