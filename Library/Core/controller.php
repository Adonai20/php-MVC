<?php

    class Controller
    {
        public function __construct()
        {
            $this->loadModel();
        }

        public function loadModel()
        {
            $model = get_class($this)."Models";
            $routClass ='Models/'.$model.'.php';
            if(file_exists($routClass))
            {
                require_once($routClass);
                $this->model = new $model();
            }
        }
        
    }

?>