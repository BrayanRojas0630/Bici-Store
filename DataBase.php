    <?php

class DataBase {

    private $servidor;
    private $usuario;
    private $clave;
    private $nombreBD;
//COLOCAN EL NOMBRE DE LA BD, EN ESTE CASO bici$tore
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

    function insertar($fila = array(), $tabla) {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . "'" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysql_query("insert into " . $tabla . " values(" . $valoresFila . ");")or die("la consulta fallo" . mysql_error());
    }

    //ESTUDIEN BIEN ESTE CODIGO, ES PARA CONSULTAR, SIRVE PARA TODAS LAS CONSULTAS
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


}

?>