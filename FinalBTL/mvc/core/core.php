<?php 
    // xử lý phần giao diện và csdl
    class core {
        public function view($view, $data=[]) {
            require_once "./mvc/views/".$view.".php";
        }

        public function model($model) {
            require_once './mvc/models/'.$model.".php";
            return new $model;
        }
    }
?>