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

    <div class="container">

        <h2>Série Histórica</h2>
        <p class="text-info">Filtrar por campo</p>
        <input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">
        <br>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>UNIDADE</th>
                <th>AÇÃO</th>
                <th>DATA</th>
                <th>QUANTIDADE</th>
                <th>AÇÃO</th>
                {{--                        <th>TESTE</th>--}}
                {{--                        <th>TESTE 2</th>--}}
            </tr>
            </thead>
            <tbody id="myTable">
            @foreach($actions->sortByDesc('data') as $action)
                @if($action->id_equip == $id)

                    <tr>
                        <td class="equipamento">{{ traduz_equip($action->id_equip) }}</td>
                        <td class="task">{{ traduz_task($action->id_task) }}</td>
                        <td class="data">{{ implode('/',array_reverse(explode('-', $action->data))) }}</td>
                        <td class="valor">{{ $action->value }}</td>
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#staticBackdrop">EDITAR&ensp;<i class="fa fa-pencil" aria-hidden="true"></i>
                        </button></td>
                        {{--                        <td>{{latitude($action->id_equip)}}</td>--}}
                        {{--                        <td>{{$action->id_equip}}</td>--}}
                    </tr>
                @else
                @endif
            @endforeach

            </tbody>
        </table>
    </div>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Editar Valor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="inputEquipamento">Equipamento</label>
                  <input type="text" class="form-control" id="inputEquipamento" disabled>
                </div>
                <div class="form-group">
                  <label for="inputTask">Ação</label>
                  <input type="text" class="form-control" id="inputTask" disabled>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputData">Data</label>
                        <input type="date" class="form-control" id="inputData" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputValor">Valor</label>
                        <input type="number" class="form-control" id="inputValor">
                    </div>
                </div>
                
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  </div>


@stop
@endif
@endforeach



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://kit.fontawesome.com/d8e2fcabdf.js" crossorigin="anonymous"></script>

    
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
   
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });


    $(document).on("click", ".btn-warning", function(){
        var equipamento = $(this).closest('tr').find(".equipamento").text();
        var task = $(this).closest('tr').find(".task").text();
        var data = $(this).closest('tr').find(".data").text();
        var valor = $(this).closest('tr').find(".valor").text();
        var array = {
            equipamento: equipamento,
            task: task,
            data: data,
            valor: valor
        }
        
        //Gambiarra pra botar a data no input
        let dataFormatada = data.substr(6,4)+'-'+data.substr(3,2)+'-'+data.substr(0,2);


        $('#inputEquipamento').val(equipamento);    
        $('#inputTask').val(task);
        $('#inputData').val(dataFormatada); 
        $('#inputValor').val(valor);
    });

    $(document).on("click", ".btn-primary", function() {
        alert(dataFormatada);
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

