<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carto;
use DB;

class WebApp extends Controller
{
    public function index(){
        $cards = Carto::all();
        $percentuais = DB::table('covids')->select(DB::raw('covids.*,(last_available_confirmed/estimated_population)*100 as porcentagem'))
        ->get()->sortByDesc('porcentagem')->take(10);

        $percentuaisG = DB::table('covid_gazetas')->select(DB::raw('covid_gazetas.*,(casos_total/populacao)*100 as porcentagem'))
        ->get()->sortByDesc('porcentagem')->take(10);
        

        return view('webapp')->with(compact('cards','percentuais','percentuaisG'));
    }
}
