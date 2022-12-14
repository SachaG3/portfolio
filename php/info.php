<?php
    function nomprenom(){
        $data=yaml_parse_file("yaml/info.yaml");
        return '<h1>'.$data['prenom'].' '.$data['nom'].'</h1>';
    };
?>