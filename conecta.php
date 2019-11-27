<?php
$conexao = mysqli_connect('mysql03.quattoracademia.com.br','quattoracademia2','platao7777','quattoracademia2');

function listaAulasGinastica($conexao){
        $dia = date('w');
        $aulas = array();
        $resultado = mysqli_query($conexao, "select * from ginastica where hora >= CURTIME() and dia = '{$dia}' order by hora");
        while ($aula = mysqli_fetch_assoc($resultado)){
            array_push($aulas, $aula);
    }
        return $aulas;
}

// function listaAulasDia($conexao,$dia){
//         $dia = $dia;
//         $aulas = array();
//         $resultado = mysqli_query($conexao, "select * from ginastica where dia = '{$dia}' order by hora");
//         while ($aula = mysqli_fetch_assoc($resultado)){
//             array_push($aulas, $aula);
//     }
//         return $aulas;
// }

