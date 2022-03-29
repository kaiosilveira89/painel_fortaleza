@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Cadastrar Dados - CREAS</h1>
@stop

@section('content')



    {{-- With label, invalid feedback disabled and form group class --}}
    <div class="row">
        <x-adminlte-input name="iLabel" label="Label" placeholder="placeholder" fgroup-class="col-md-6"
            disable-feedback />
    </div>

    <form>
        <div class="form-group">
            <label for="inputState">Informação 1</label>
            <select id="inputState" class="form-control">
                <option value="0">Selecione...</option>
                <option value="1" selected>CRAS</option>
                <option value="2">CREAS</option>
                <option value="3">Acolhimentos</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Informação 2</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Informação 3</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Informação 4</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Informação 5</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Info 6</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Info 7</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Info 8</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>


@stop

<script>
    console.log('oiiiiiiii');
</script>
