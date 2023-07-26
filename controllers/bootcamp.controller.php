<?php
// EL controllador funciona interviniendo entre mis vistas y mis modelos
class BootcampController{

    public $bootcamp;

    public function __construct(){
        $this->bootcamp = new Bootcamp();
    }

    public function index(){
        // Controlo modelos
        $bootcamps = $this->bootcamp->get_bootcamps();

        // Controlar las vistas
        include './views/bootcamp.view.php';
    }

    public function add(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $start_bootcamp  = $_POST ['start_bootcamp'];
            $end_bootcamp  = $_POST ['end_bootcamp'];
            $modules = $_POST ['modules'];
            $this->bootcamp->add_bootcamp( $title, $description,  $start_bootcamp, $end_bootcamp, $modules);
        }
        include './views/add_bootcamp.view.php';
    }
}

?>