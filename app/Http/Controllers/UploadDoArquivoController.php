<?php

namespace App\Http\Controllers;

use App\Imports\DadosUploadImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
#use Illuminate\Support\Facades\Storage;

class UploadDoArquivoController extends Controller
{
    public function uploadFile(Request $request)
    {
        
        /*$validated = $request->validate([
            'file' => 'required|file|mimes:csv,xlsx,xls|max:512000',
        ]);*/

        $file = $request->file('file');

        $fileName = $file->getClientOriginalName();
       
        if ($file) {
            
            Excel::import(new DadosUploadImport($fileName), $file); //esa a bliblioteca excel para ler os dados e importar para o db

            return response()->json(['success' => 'Arquivo importado com sucesso!']);
        } else {
            return response()->json(['error' => 'Erro ao carregar o arquivo.'], 402);
        }
    }


    
    public function teste(){
        return response()->json([
            'message' => 'Arquivo processado e dados inseridos no banco de dados com sucesso!',
        ], 200);
    }
    
        
    
}
