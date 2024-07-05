<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notaController extends Controller
{
    public function index()
    {
        $resultado = [
            "nota" => "",
            "media" => ""
        ];

        return view("nota.index")->with('media', $Media);
    }
}

function calcularMedia($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media;
}

// Função para determinar a situação do aluno
function verificarAprovacao($media) {
    if ($media >= 7.0) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

// Exemplo de uso das funções
$nota1 = 8.5;
$nota2 = 7.2;
$nota3 = 6.8;

$media = calcularMedia($nota1, $nota2, $nota3);
$situacao = verificarAprovacao($media);

echo "Notas: $nota1, $nota2, $nota3 <br>";
echo "Média: $media <br>";
echo "Situação: $situacao";
