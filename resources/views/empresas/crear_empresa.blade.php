@extends('plantilla')

<link rel="stylesheet" href="{{ asset('css/estilos_personalisados.css') }}">

@section('contenido')

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-12">
                <label for="nombre_empresa" class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa">
            </div>
            <div class="col-4">
                <label for="nit_empresa" class="form-label">NIT</label>
                <input type="text" class="form-control" id="nit_empresa" name="nit_empresa">
            </div>
            <div class="col-4">
                <label for="numero_contacto" class="form-label">Télefono contacto</label>
                <input type="text" class="form-control" id="numero_contacto" name="numero_contacto">
            </div>
            <div class="col-4">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="col-6">
                <label for="correo_electronico" class="form-label">Correo electronico</label>
                <input type="text" class="form-control" id="correo_electronico" name="correo_electronico">
            </div>
            <div class="col-6">
                <label for="button_send" class="form-label">Send</label>

                <button id="button_send" name="button_send" type="submit"
                    class="form-control btn btn-success estilo_boton_enviar">Enviar</button>
            </div>



        </div>

    </form>

@endsection
