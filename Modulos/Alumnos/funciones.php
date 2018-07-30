<?php
include("conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$grado = $_POST["grado"];
$salon = $_POST["salon"];
$tipo = $_POST["tipo"];
$fecha = $_POST["fecha"];
$doc = $_POST["doc"];
$rh = $_POST["rh"];
$eps = $_POST["eps"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$padre = $_POST["padre"];
$madre = $_POST["madre"];
$p_ocupacion = $_POST["p_ocupacion"];
$m_ocupacion = $_POST["m_ocupacion"];
$acudiente = $_POST["acudiente"];
$emergencia = $_POST["emergencia"];
$estado = $_POST["estado"];
$matricula = $_POST["matricula"];
$opcion =$_POST['opcion'];

function modificar($id, $nombre, $grado, $salon, $tipo, $fehca, $doc, $rh, $eps, $direccion, $telefono, $padre, $madre, $p_ocupacion, $m_ocupacion, $acudiente, $emergencia, $estado, $matricula, conexion){
$query= "UPDATE alumnos SET nombre='$nombre", 
                            grado='$grado', 
                            salon='$salon', 
                            tipo='$tipo', 
                            fecha='$fecha', 
                            doc='$doc', 
                            rh='$rh',
                            eps='$eps',
                            direccion='$direccion',
                            telefono='$telefono',
                            padre='$padre',
                            madre='$madre',
                            p_ocupacion='$p_ocupacion',
                            m_ocupacion='$m_ocupacion',
                            acudiente='$acudiente',
                            emergencia='$emergencia',
                            estado='$estado',
                            matricula='$matricula'
                     WHERE  id='$id'
                     $resultado = mysqli_query($conexion, $squery);
                     verificar_resultado($resultado);
}

function eliminar($id, $conexion){
$query = "UPDATE" alumnos SET estado = 0 WHERE id = $'id';
$resultado = mysqli_query(conexion, query);
verificar_resultado($resultado);
cerrar($conexion) ;
}

?>