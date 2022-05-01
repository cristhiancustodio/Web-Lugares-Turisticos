<?php



include("./model/conexion.php");

$bd = new Conection();

class DaoWeb {

    function verDepartamentos(){
        try{
            global $bd;
            $filas = $bd->sentencia("select * from departamentos");
            return $filas;
        }
        catch(Exception $e){
            echo "Error en la consulta ". $e->getMessage();

        }
    }
    function verUnicoDepartamento($id){
        global $bd;
        return $bd->sentencia_unica(sprintf("select * from departamentos where id_departamento = %s",$id));
    }
    function verLugaresTuristicos($id_depa){
        global $bd;
        return $bd->sentencia(sprintf("select * from sitios where id_departamento = %s",$id_depa));
    }
}
?>