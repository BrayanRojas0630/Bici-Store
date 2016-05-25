    <?php

class DataBase {

    private $servidor;
    private $usuario;
    private $clave;
    private $nombreBD;

    public function DataBase($nombreBD) {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->clave = "";
        $this->nombreBD = $nombreBD;
    }
    
    function getServidor() {
        return $this->servidor;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function getNombreBD() {
        return $this->nombreBD;
    }

    function getMiDataBase() {
        return $this->miDataBase;
    }

    function setServidor($servidor) {
        $this->servidor = $servidor;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNombreBD($nombreBD) {
        $this->nombreBD = $nombreBD;
    }

    function setMiDataBase($miDataBase) {
        $this->miDataBase = $miDataBase;
    }

    
    function conectar() {
        $link = mysql_connect($this->servidor, $this->usuario, $this->clave);
        mysql_select_db($this->nombreBD, $link);

        return $link;
    }

    function insertar1($fila = array(), $tabla) {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . "'" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysql_query("insert into " . $tabla . " values(" . $valoresFila . ");")or die("la consulta fallo" . mysql_error());
    }

    function insertar($tabla, $nombre, $documento, $telefono, $direccion, $password, $ciudad, $correo, $rol) {

        mysql_query(" insert into " . $tabla . "(Nombre,Documento,Telefono,Direccion,Password,Ciudad,Correo,Rol) values ('" . $nombre . "','" . $documento . "','" . $telefono . "','" . $direccion . "','" . $password . "','" . $ciudad . "','" . $correo . "','" . $rol . "');")
                or die("la consulta fallo" . mysql_error());

        $tabla = "password";
        mysql_query(" insert into " . $tabla . "(DocumentoUsuario,Password,Rol) values ('" . $documento . "','" . $password . "','" . $rol . "');")
                or die("la consulta fallo" . mysql_error());

//     
    }

    function consultar($campo1, $tabla, $valor, $campo2) {
        if ($campo2 == "") {
            $result = mysql_query("select * FROM " . $tabla . ";");
        } else if ($valor == "") {
            $result = mysql_query("select " . $campo2 . " from " . $tabla . ";");
        } else if ($campo1 == "") {
            $result = mysql_query('select * from ' . $tabla . ' where ' . $campo2 . '="' . $valor . '";');
        } else {
            $result = mysql_query('select ' . $campo1 . ' from ' . $tabla . ' where ' . $campo2 . '="' . $valor . '";');
        }

        return $result;
    }

    function actualizar($nombre, $descripcion, $costo, $nroPersonas, $hospedaje, $alimentacion, $destino, $transporte, $fecha, $tabla, $id) {

        mysql_query("update " . $tabla . " set nombre='" . $nombre . "', descripcion='" . $descripcion . "', costo='" . $costo. "', nroPersonas='" . $nroPersonas . "', hospedaje='" . $hospedaje . "', alimentacion='" . $alimentacion . "', destino='" . $destino . "', transporte='" . $transporte ."', fechaLimite='" . $fecha."' where IdServicio=" . $id . ";")or die("la consulta fallo" . mysql_error());
    }

    function eliminar($id) {

        $tabla = "servicios";

        mysql_query("delete from " . $tabla . " where idServicio = " . $id . ";")or die("la consulta fallo" . mysql_error());
    }

    function insertarServicios($tabla, $documentoProveedor, $tipo, $nombre, $descripcion, $costo, $nroPersonas, $hospedaje, $alimentacion, $destino, $transporte, $fecha,$estado) {

        mysql_query(" insert into " . $tabla . "(documentoProveedor,tipo,nombre,descripcion,costo,nroPersonas,hospedaje,alimentacion,destino,transporte,fechaLimite,estado) values ('" . $documentoProveedor . "','" . $tipo . "','" . $nombre . "','" . $descripcion . "','" . $costo . "','" . $nroPersonas . "','" . $hospedaje . "','" . $alimentacion . "','" . $destino . "','" . $transporte . "','" . $fecha ."','".$estado. "');")
                or die("la consulta fallo" . mysql_error());
    }

    function insertarImagenesServicio($tabla, $idServicio, $imagen) {

        mysql_query(" insert into " . $tabla . "(idServicio,foto) values ('" . $idServicio . "','" . $imagen . "');")
                or die("la consulta fallo" . mysql_error());
    }
    
    function insertarImagenesServicioUnica($tabla,$idServicio,$imagen){
        mysql_query("update ".$tabla." set imagen='".$imagen."' where idServicio=".$idServicio.";");
    }
    function insertarSoporte($tabla, $id, $descripcion) {

        $time = time();
        mysql_query(" insert into " . $tabla . " (documentoCliente,fechaEnviado,Descripcion,Activo) values('" . $id . "','" . date("Y-m-d ", $time) . "','" . $descripcion . "','1');")or die("la consulta fallo" . mysql_error());
        echo '<script>alert("Soporte enviado!!!")</script>';
         echo"<script language='javascript'>
    window.location = 'enviarSoporte.php?doc=".$id."';
</script>";
    }
     function actualizarSoporte($descripcion, $id) {
 
        $time = time();
 
        mysql_query("update soportes set fechaRespondido='" . date("Y-m-d ", $time) . "', Respuesta='" . $descripcion . "', Activo ='0' where id =" . $id . ";")or die("la consulta fallo" . mysql_error());

        echo '<script>alert("Soporte actualizado!!!")</script>';
        echo'<script language="javascript">
             window.location = "verRespuestas.php";
        </script>';
       
    }
    function calificacion($tabla, $numero, $id, $descripcion,$idc) {

        mysql_query(" insert into " . $tabla . " (documentoProveedor,descripcion,calificacion) values('" . $id . "','" . $descripcion . "','" . $numero . "');")or die("la consulta fallo" . mysql_error());
        echo '<script>alert("Calificacion enviada!!!")</script>';
         echo"<script language='javascript'>
             window.location = 'calificarServicio.php?doc=".$idc."';
        </script>'";
    }



}

?>