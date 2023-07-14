<?php 

    class Timer {
        private $timer;
        private $modality;

        public function __construct($timer, $modality) {
            $this->timer = $timer;
            $this->modality = $modality;
        }

        public function __get($name) {
            return $this->$name;
        }
    }

?>