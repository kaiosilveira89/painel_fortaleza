@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Cadastrar Novo Dado</h1>
@stop

@section('content')


    <form action="{{ route('dashall.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="id_equip">Equipamento:</label>
            <select id="inputEquip" class="form-control" name="id_equip">
                <option value="0">Selecione o equipamento...</option>
                <option value="7">CRAS BARRA DO CEARÁ</option>
                <option value="8">CRAS JACARECANGA</option>
                <option value="9">CRAS LAGAMAR</option>
                <option value="10">CRAS PRAIA DO FUTURO</option>
                <option value="11">CRAS MUCURIPE</option>
                <option value="12">CRAS SERVILUZ</option>
                <option value="13">CRAS BELA VISTA</option>
                <option value="14">CRAS QUINTINO CUNHA</option>
                <option value="15">CRAS ANTONIO BEZERRA</option>
                <option value="16">CRAS PRESIDENTE KENNEDY</option>
                <option value="17">CRAS JOAO XXIII</option>
                <option value="18">CRAS MESSEJANA</option>
            </select>
        </div>

        <div class="form-group">
            <label for="id_task">Idicador a ser alimentado:</label>
            <select id="id_task" name="id_task" class="form-control">
                <option value="0">Selecione um indicador...</option>
                <option value="2">Vale-Gás</option>
            </select>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="value">Valor a ser atribuído:</label>
                <input id="value" type="interger" class="form-control" name="value">
            </div>

            <div class="form-group col-md-2">
                <label for="data">Data</label>
                <input for="data" type="date" class="form-control" name="data">
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>

    </form>


@stop
