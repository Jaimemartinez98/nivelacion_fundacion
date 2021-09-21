<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\Pruebas;

class EmpresasController extends Controller
{
    public function index(){
        //Traera una colección de datos ordenada

        $pruebas = Pruebas::get();

        dd($pruebas);



        return view('empresas.index');
    }

    public function create(){
        //Muestra un formulario donde luego se almacenaran datos
        return view('empresas.crear_empresa');
    }

    public function store(){
        //Almacena un registro en la base de datos y recolecta los datos provenientes del create
    }

    public function show(){
        //Muestra un registro o toda una tabla de la base de datos pero únicamente puede dar lectura
    }

    public function edit($id){
        //Muestra un formulario de edición de un registro en la db
    }

    public function update($id){
        //Recoge los datos del formulario edit y actualiza el registro
    }

    public function delete($id){
        //Elimina un registro de la base datos
    }

}
