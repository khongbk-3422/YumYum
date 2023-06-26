<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    //Get History
    function getHistory()
    {
        $history_datas = History::selectRaw('DATE(datetime) AS date_value, TIME(datetime) AS time_value')
            ->where('cust_id', session('user_id'))
            ->orderBy('datetime', 'asc')
            ->get();

        // Group the data by date value
        $groupedData = $history_datas->groupBy('date_value');
        return $groupedData;
    }
}
