<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class Crawller extends Controller
{
    //
    private $resultados = array();
   //Carrega a url abaixo e raspa os dados sobre a covid. Foi criado um array com as keys que serão
   // adicionada a um segundo array que conterá as keys do array01 e os dados do Covid.
    private $itemNome = array('confirmados','mortos','recuperados');
    private $index =0;
    public function index(){
        $cliente = new Client();
        $url = 'https://www.worldometers.info/coronavirus/';
        $pagina = $cliente->request('GET', $url);
        $pagina->filter(selector:'#maincounter-wrap')->each(function($item){
                $i=0;
                $this->resultados[$this->itemNome[$this->index++]] = $item->filter('.maincounter-number')->text();
            
        });
        
        $crawller = array();
        $crawller = $this->resultados;
      // $crawller =(string)$crawller['confirmados'];
      
        return view('welcome')->with(compact('crawller'));
    }
}
