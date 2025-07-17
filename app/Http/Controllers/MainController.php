<?php

namespace App\Http\Controllers;

use App\Models\Client;

class MainController extends Controller
{

    public function index(){

    }

     public function OneToOne(){

        //buscar telefone de um cliente
        // $client1 = Client::find(12)->phone;
        // echo "Telefone do cliente ID:" . $client1->client_id . ": " .$client1->phone_number;

        //todos os dados de cliente e o telefone dele
        // $client2 = Client::find(12);
        // $phone = $client2->phone->phone_number;
        // echo "<br>";
        // echo "Nome do cliente: " . $client2->client_name . "<br>";
        // echo "Telefone do cliente: " . $phone;
        // echo '<hr>';

        //se queseres buscar um conjunto de clientes e seus telefones
        $clients = Client::with('phone')->get();
        foreach($clients as $client){
            echo '<br>';
            echo "Nome de cliente: ".$client->client_name. "- Telefone: " .$client->phone->phone_number;
        }

    }

    public function OneToMany(){
       //todos os dados de cliente e o telefone dele
        $client1 = Client::find(10);
        $phones = $client1->phones;
        echo "<br>";
        // echo "Nome do cliente: " . $client1->client_name . "<br>";
        // echo "Telefone do cliente: <br>";
        // foreach($phones as $phone){
        //     echo $phone->phone_number . "<br>";
        // }

          //se queseres buscar um conjunto de clientes e seus telefones
         //se queseres buscar um conjunto de clientes e seus telefones
        $clients = Client::with('phone')->get();
        foreach($clients as $client){
            echo '<br>';
            echo "Nome de cliente: ".$client->client_name. "<br>";
            echo "Telefone: <br> ";
            foreach($client->phones as $phone){
                echo $phone -> phone_number. "<br>";

        }
        echo '<hr>';

    }
}




    private function showRawData($data)
    {
        echo 'Eloquement relation';
    }

    private function ArrayOfObject($data)
    {
        $temp = [];
        foreach($data as $key => $value)
        {
            $tmp[] = (object) $value;
        }
        return $tmp;

    }

    // private function showDataTable($data)
    // {
    //     echo '<table border="1"';
    //     // header
    //     echo '<tr>';
    //     foreach ($data[0] as $key => $value) {
    //         echo '<th>' . $key . '</th>';
    //     }
    //     echo '<tr>';
    //     // body
    //     foreach ($data as $row) {
    //         echo '<tr>';
    //         foreach ($row as $key => $value) {
    //             echo '<td>' . $value . '</th>';
    //         }
    //     }

    //     echo '<tr>';
    //     echo '</table>';
    // }
}
