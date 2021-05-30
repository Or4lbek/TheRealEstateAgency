<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    //

    public function index(){
        $alatauskij = DB::select('select * from posts where district_id = 1;'); //1
        shuffle($alatauskij);

        $almalinskij = DB::select('select * from posts where district_id = 2;'); //2
        shuffle($almalinskij);

        $aujezovskij = DB::select('select * from posts where district_id = 3;'); //3
        shuffle($aujezovskij);

        $bostandykskij = DB::select('select * from posts where district_id = 4;'); //4
        shuffle($bostandykskij);

        $medeuskij = DB::select('select * from posts where district_id = 5;'); //5
        shuffle($medeuskij);

        $nauryzbajskiy = DB::select('select * from posts where district_id = 6;'); //6
        shuffle($nauryzbajskiy);

        $turksibskij = DB::select('select * from posts where district_id = 8;'); //7
        shuffle($turksibskij);

        $zhetysuskij = DB::select('select * from posts where district_id = 9;'); //8
        shuffle($zhetysuskij);


        $almaty = DB::select('select * from posts;'); //utf-8
        shuffle($almaty);


        return view('main',['almaty'=>$almaty, 
                            'alatauskij'=>$alatauskij, 
                            'almalinskij'=>$almalinskij,
                            'aujezovskij'=>$aujezovskij,
                            'bostandykskij'=>$bostandykskij,
                            'medeuskij'=>$medeuskij,
                            'nauryzbajskiy'=>$nauryzbajskiy,
                            'turksibskij'=>$turksibskij,
                            'zhetysuskij'=>$zhetysuskij,
                            ]);
    }


    public function indexStatistics() {
        $info = DB::select('select name, price_for_one_room, price_for_two_room, price_for_three_room, avg_for_all, max_price, min_price from districts d, statistics s where d.id = s.district_id');
        $chartData = "['Statistics',";
        
        foreach ($info as $list) {
            $chartData = $chartData . " '".$list->name."',";
        }
        $chartData = rtrim($chartData, ',');
        $chartData .= "],['1-комнатные'";


        foreach ($info as $list) {
            $chartData.=", ".$list->price_for_one_room."" ;
        }
        $chartData .= "],['2-комнатные'";



        foreach ($info as $list) {
            $chartData.=", ".$list->price_for_two_room."" ;
        }

        $chartData .= "],['3-комнатные'";



        foreach ($info as $list) {
            $chartData.=", ".$list->price_for_three_room."" ;
        }


        $chartData .= "],['В среднем'";



        foreach ($info as $list) {
            $chartData.=", ".$list->avg_for_all."" ;
        }
        $chartData .= "],";


        // district info
        $districtsInfo = DB::select('select * from districts');


        // table data 



        $arr['chartData'] = rtrim($chartData, ',');
        $arr['districtsInfo'] = $districtsInfo;

        $tableData = '';

        foreach ($info as $i) {
            $max_format = number_format($i->max_price, 0, '', ' ') . " ₸";
            $min_format = number_format($i->min_price, 0, '', ' ') . " ₸";
            $tableData.="['$i->name', {v: $i->max_price, f: '$max_format'}, {v: $i->min_price, f: '$min_format'}],";
        }

        $arr['tableData'] = rtrim($tableData, ',');



        // m^2 price 

        function random_color_part() {
            return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
        }
        
        function random_color() {
            return random_color_part() . random_color_part() . random_color_part();
        }
        

        $barDB = DB::select('select name, avg_price_per_square_meter from districts d, statistics s where d.id = s.district_id;');


        $barData = "";

        foreach ($barDB as $list) {
            $barData.= "['".$list->name."',".$list->avg_price_per_square_meter.",'#".random_color()."'],";
        }

        // return $barData;

        $arr['barData'] = rtrim($barData, ',');

        return view('statistics',$arr); 
    }



    public function indexApply(){
        $districts = DB::select('select * from districts');
        return view('apply', ['districts'=>$districts]);
    }
}
