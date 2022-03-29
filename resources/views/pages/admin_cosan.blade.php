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
                <option value="1">[PARANGABA] Espaço De Higiene Cidadã</option>
                <option value="2">[CENTRO] Espaço De Higiene Cidadã</option>
                <option value="3">[DOM MANOEL] Espaço De Higiene Cidadã</option>
                <option value="4">Pousada Social 1</option>
                <option value="5">Pousada Social 2</option>
                <option value="6">Refeitório Social</option>
            </select>
        </div>

        <div class="form-group">
            <label for="id_task">Idicador a ser alimentado:</label>
            <select id="id_task" name="id_task" class="form-control">
                <option value="0">Selecione um indicador...</option>
                <option value="1">[Almoço] Entrega de refeição</option>
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
