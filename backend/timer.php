<?php 

    class Timer {
        public $timer;
        public $modality;

        public function __construct($timer, $modality) {
            $this->timer = $timer;
            $this->modality = $modality;
        }
    }

?>