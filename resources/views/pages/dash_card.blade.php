@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <form class="form-group row">
        <input type="date" class="form-control col-lg-2" name="d">
        <button class="form-control col-lg-1 ml-1" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </form>
@stop

@section('content')
    @include("layouts.alert")
    <div class="row">

        <?php
        function	traduz_equip($codigo)
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
        function	traduz_task($codigo)
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
        ?>

        @foreach($actions as $action )



                <div class="col-lg-3 col-6">
                    @if( $action->value >= 700)
                        <div class="small-box bg-gradient-green">
                            <div class="inner">
                                <h3>{{ traduz_equip($action->id_equip) }}</h3>
                                <p>Total de {{ traduz_task($action->id_task) }}</p>
                                <h3>{{ $action->value }}</h3>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-magnifying-glass">{{ ($action->value / 1000)*100 . "%"  }}</i>
                            </div>
                            <a href="/dashall/{{$action->id_equip}}" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    @elseif ($action->value >= 300)
                        <div class="small-box bg-gradient-yellow">
                            <div class="inner">
                                <h3>{{ traduz_equip($action->id_equip) }}</h3>
                                <p>Total de {{ traduz_task($action->id_task) }}</p>
                                <h3>{{ $action->value }}</h3>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-magnifying-glass">{{ ($action->value / 1000)*100 . "%"  }}</i>
                            </div>
                            <a href="/dashall/{{$action->id_equip}}" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    @else
                        <div class="small-box bg-gradient-red">
                            <div class="inner">
                                <h3>{{ traduz_equip($action->id_equip) }}</h3>
                                <p>Total de {{ traduz_task($action->id_task) }}</p>
                                <h3>{{ $action->value }}</h3>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-magnifying-glass"> {{ ($action->value / 1000)*100 . "%"  }}</i>
                            </div>
                            <a href="/dashall/{{$action->id_equip}}" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    @endif
                </div>
        @endforeach
    </div>






    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">


    @stop

    @section('js')

    @stop

