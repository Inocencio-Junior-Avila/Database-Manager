<?php
/* 2021-0836 Inocencio Junior Avila Gonzalez */
function asg_filaa(){
    $final = "<div class='row' style='margin-top:10px;'>";

    $n = 12 / func_num_args();
    foreach(func_get_args() as $arg){
        $final .="<div class='col-md-{$n}'>$arg</div>";
    }
    $final .="</div>";

    return $final;
}

function asg_input($id, $label, $obj, $opts=[]){

    $type ='text';
    $class= 'form-control';
    $placeholder = '';
    $value = '';
    $required = 'required';

    extract($opts);

    if (isset($obj->$id)){
        $value = $obj->$id;
    }

    $rs = <<<CODIGO
    <div class="input-group">
    <span class="input-group-addon" id="sizing-addon2">{$label}</span>
    <input {$required} value="{$value}" name="{$id}" type="{$type}" class="{$class}" placeholder="{$placeholder}" aria-describedby="sizing-addon2">
    CODIGO;
    return $rs;
}

function mostrar_tabla($rs = []){

    if(count($rs) == 0){
        return "<h3>No hay ningun registro</h3>";
    }

    $final = "<table>
        <thead>
            <tr>";

    $fila = $rs [0];
    foreach($fila as $key => $values){
        $final .= "<th>{$key}</th>";
    }
    $final .= "</tr><tbody>";
    
    foreach($rs as $fila){
        $final .= "<tr>";
        foreach($fila as $key => $value){
            $final .="<td>{$key}</td>";
        }
        $final .= "</tr>";
    }
    $final .= "</thead></table>";

    return $final;
}