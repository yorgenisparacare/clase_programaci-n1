<?php
require_once 'Conexion.php';
require_once 'Empleados.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formularios
 *
 * @author javier
 */
class Formularios extends Conexion {
    
    public function getSexo()
    {
    $result = $this->_db->query('select * from sexo where estado=1');  
    $sexos = $result->fetch_all(MYSQLI_ASSOC);
    $radio='<div class="form-group"><span class="glyphicon glyphicon-user"></span>
                    <label >Sexo:</label>';
        foreach ($sexos as $row):
            $radio=$radio.'<div class="radio">
  <label for="sexo"><input type="radio" name="sexo" value="'.$row['id_sexo'].'">'.$row['nombreSexo'].'</label>
</div>';
        
        endforeach;
        $radio=$radio.'</div>';
        echo $radio;
    }
    public function getDepartamento() {
    $result = $this->_db->query('select * from Departamento where estado=1');  
    $dep = $result->fetch_all(MYSQLI_ASSOC);
    $lista='<div class="form-group">
                    <label for="dep">Departamento:</label>
                    <select class="form-control" name="dep" id="dep">';
            $lista=$lista.'<option>';
            foreach ($dep as $row):
            $lista=$lista.'<option value="'.$row['id_departamento'].'">'.$row['nombreDep'].'</option>';    
            endforeach;
            $lista=$lista.'</select>';
            $lista=$lista.'</div>';
    echo $lista;
    }
    public function getSalario() {
    $result = $this->_db->query('select * from salario where estado=1');  
    $salario = $result->fetch_all(MYSQLI_ASSOC);
    $lista='<div class="form-group">
                    <label for="salario">Salario:</label>
                    <select class="form-control" name="salario" id="salario">';
            $lista=$lista.'<option>';
            foreach ($salario as $row):
            $lista=$lista.'<option value="'.$row['id_salario'].'">'.$row['montoSalario'].'</option>';    
            endforeach;
            $lista=$lista.'</select>';
            $lista=$lista.'</div>';
    echo $lista;
    }
    public function getCargo() {
    $result = $this->_db->query('select * from Cargos where estado=1');  
    $cargos = $result->fetch_all(MYSQLI_ASSOC);
    $lista='<div class="form-group">
                    <label for="cargo">Cargo:</label>
                    <select class="form-control" name="cargo" id="cargo">';
            $lista=$lista.'<option>';
            foreach ($cargos as $row):
            $lista=$lista.'<option value="'.$row['id_cargo'].'">'.$row['nombreCargo'].'</option>';    
            endforeach;
            $lista=$lista.'</select>';
            $lista=$lista.'</div>';
    echo $lista;
    }
}
