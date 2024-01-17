<?php

    namespace app\models;
    use \PDO;

    if(file_exists(__DIR__."/../../config/server.php")) {
        require_once __DIR__."/../../config/server.php";
    }

    class mainModel {

        private $server = DB_SERVER;
        private $db = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASS;
        
		/*----------  Funcion conectar a BD  ----------*/
		protected function conectar(){
			$conexion = new PDO("mysql:host=".$this->server.";dbname=".$this->db,$this->user,$this->pass);
			$conexion->exec("SET CHARACTER SET utf8");
			return $conexion;
		}
        /*----------  Funcion ejecutar consultas  ----------*/
		protected function ejecutarConsulta($consulta){
			$sql=$this->conectar()->prepare($consulta);
			$sql->execute();
			return $sql;
		}

        public function limpiarcadena($cadena) {
            $palabras=["<script>","</script>","<script src","<script type=","SELECT * FROM","SELECT "," SELECT ","DELETE FROM","INSERT INTO","DROP TABLE","DROP DATABASE","TRUNCATE TABLE","SHOW TABLES","SHOW DATABASES","<?php","?>","--","^","<",">","==","=",";","::"];

            $cadena=trim($cadena);
            //función trim=elimina los espcaios en blanco.
            $cadena=stripslashes($cadena);
            //funcion stripslashes = elimina las barras de un string con comillas escapadas.

            foreach($palabras as $palabra){
				$cadena=str_ireplace($palabra, "", $cadena);
			}

			$cadena=trim($cadena);
			$cadena=stripslashes($cadena);

			return $cadena;
        }

        protected function verificarDatos($filtro,$cadena) {
            if(preg_match("/^".$filtro."$/", $cadena)) {
                return false;
            } else {
                return true;
            }
        }

        /*----------  Funcion para ejecutar una consulta INSERT preparada  ----------*/
    }