<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //devolvendo todos os dados de uma tabela SELECT * FROM clients
        //$this->showRawData($clients);
        //$clients = DB::table('clients')->get();
        //$this->showDataTable($clients);

        //apresentar num array associativo
        //$clients = DB::table('clients')->get()->toArray();


        //apresentar num array de arrays associativo
        // $result = DB::table('products')->get()->map(function($item){
        //     return (array) $item;
        // });

        //apresentar os dados a partir dos resultados
        // $products = DB::table('products')->get();
        // foreach ($products as $product){
        //     echo $product->product_name . '<br>';

        // }
        //obter apenas colunas
        // $products = DB::table('products')->get(['product_name', 'price']);

        //pluck - obter de forma simples uma dados de coluna expecifico
        // $results = DB::table('products')->pluck('product_name');

        //devolver a primeira e ultimolinha de um resultado
        //$results = DB::table('products')->get()->first();
        //$results = DB::table('products')->get()->last();

        //SELECT * from products Where id =10
        $results = DB::table('products')->find(10);
         $this->showRawData($results);

    }

    private function showRawData($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    private function showDataTable($data)
    {
        echo '<table border="1"';
        // header
        echo '<tr>';
        foreach ($data[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '<tr>';
        // body
        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $key => $value) {
                echo '<td>' . $value . '</th>';
            }
        }

        echo '<tr>';
        echo '</table>';
    }
}
