<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Restaurant;

class HistoryController extends Controller
{
    //Get History
    function getHistory()
    {
        $history_datas = History::selectRaw('DATE(datetime) AS date_value, TIME(datetime) AS time_value, rest_id AS rest_id')
            ->where('cust_id', session('user_id'))
            ->orderBy('datetime', 'desc')
            ->get();

        foreach ($history_datas as $data) {
            $rest_data = Restaurant::where('rest_id',$data->rest_id)->first();
            $data->rest_name = $rest_data->rest_name;
        }
        
        // Group the data by date value
        $groupedData = $history_datas->groupBy('date_value');
        return view('custHistoryPage',['groupedData'=>$groupedData]);
    }
}
