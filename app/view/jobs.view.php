<?php

class JobsView{


    function showWorkers($workers){
        foreach ($workers as $worker){
            echo $worker->apellido_nombre;
            echo "<br>";
        }
    }
}