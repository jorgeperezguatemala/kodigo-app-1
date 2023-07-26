<?php
    // Vamos a definir como viene y como luce mi informacion
    require_once './config.php';
    class Bootcamp{
        private $conn;

        public function __construct(){
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if ($this->conn->connect_error){
                die("Connection failed: " . $this->conn->connect_error);
            }
            echo 'Connection succesfully';
        }

        // OBTIENE TODOS LOS BOOTCAMPS
        public function get_bootcamps(){
            // CREO LA CONSULTA
            $sql = "SELECT * FROM bootcamps";
            // EJECUTO LA CONSULT
            $result = $this->conn->query($sql);
            $bootcamps = array();

            // TRANSFORMO A UN ARRAY
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    $bootcamps[] = $row;
                }
            }
            return $bootcamps;
        }

        public function add_bootcamp($title, $description, $start_bootcamp, $end_bootcamp, $modules){
            //CREAMOS LA CONSULTA
            $sql = "INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)";
            VALUES('$title', '$description', '$start_bootcamp', '$end_bootcamp', '$modules');

            $result = $this->conn->query($sql);
            if ($result){
                echo "New bootcamp has been added";
            } else {
                echo "Error creating new bootcamp";
            }
        }
    }

?>