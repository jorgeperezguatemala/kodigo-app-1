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
}

?>