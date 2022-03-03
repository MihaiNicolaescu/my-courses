<?php
    class Course{
        private $name;
        private $professor;
        private $type;
        private $start_hour;
        private $time;

        function __constructor($name, $professor, $type, $start_hour, $time){
            $this->name = $name;
            $this->professor = $professor;
            $this->type = $type;
            $this->start_hour = $start_hour;
            $this->time = $time;
        }

        function getName(){
            return $this->name;
        }
        function getProfessor(){
            return $this->professor;
        }
        function getType(){
            return $this->type;
        }
        function getStart_hour(){
            return $this->start_hour;
        }
        function getTime(){
            return $this->time;
        }

        function setName($name){
             $this->name = $name;
        }
        function setProfessor($professor){
            $this->professor = $professor;
        }
        function setType($type){
            $this->type = $type;
        }
        function setStart_hour($start_hour){
            $this->start_hour = $start_hour;
        }
        function setTime($start_hour){
            $this->time = $start_hour;
        }
    }
?>