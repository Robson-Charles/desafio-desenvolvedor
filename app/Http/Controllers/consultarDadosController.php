<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadDoArquivo;

class consultarDadosController extends Controller
{
    public function consultarDados(Request $request)
    {
        // pega todos os parametros enviados na url
        $parametros = $request->all();

        // verifica se pelo menos passou um parametros
        if (empty($parametros)) {
            return response()->json(['error' => 'Nenhum parâmetro de busca fornecido.'], 401);
        }

        // cria uma query baseada nos parametros enviado
        $query = UploadDoArquivo::query();
        foreach ($parametros as $campo => $valor) {
            // Adicione uma condição where para cada parâmetro
            $query->where($campo, $valor);
        }

        // Execute a query 
        $resultados = $query->get();

        // Retorne os resultados como JSON
        return response()->json($resultados);
    }
}
