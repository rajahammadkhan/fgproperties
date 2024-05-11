<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\Projects;
use App\Models\Properties;
use App\Models\Amenities;
use App\Models\Blog;
use App\Models\performing_Areas;
use App\Models\property_Sales_Value;
use App\Models\price_per_sqft;
use App\Models\insight_tables;
use Illuminate\Support\Facades\DB;



class InsightController extends Controller
{
    public function index()
    {   
        $table = [];
        $lol = insight_tables::where('table_name', 'like', 'transaction%')->orderByDesc('created_at')->first();
        // $table = [$lol->table_name => DB::table($lol->table_name)->get()];
        $dataArea = DB::table($lol->table_name)->get('area');
        $count = $dataArea->countBy(function ($area) {
            // return substr(strrchr($area->area, $area->area), 0);
            return $area->area;
        });
        // dump($count->sortDesc()->take(5));
        $c = $count->sortDesc()->take(5);
        $best_perfrming_areas = [];
        foreach ($c as $key => $value) {
         $best_perfrming_areas[][] = [$key,  $value];
        }

        $dataAmountJan22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-01%')->get('amount');
        $dataAmountFeb22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-02%')->get('amount');
        $dataAmountMar22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-03%')->get('amount');
        $dataAmountApr22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-04%')->get('amount');
        $dataAmountMay22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-05%')->get('amount');
        $dataAmountJun22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-06%')->get('amount');
        $dataAmountJul22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-07%')->get('amount');
        $dataAmountAug22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-08%')->get('amount');
        $dataAmountSep22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-09%')->get('amount');
        $dataAmountOct22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-10%')->get('amount');
        $dataAmountNov22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-11%')->get('amount');
        $dataAmountDec22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-12%')->get('amount');

        $dataAmountJan21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-01%')->get('amount');
        $dataAmountFeb21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-02%')->get('amount');
        $dataAmountMar21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-03%')->get('amount');
        $dataAmountApr21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-04%')->get('amount');
        $dataAmountMay21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-05%')->get('amount');
        $dataAmountJun21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-06%')->get('amount');
        $dataAmountJul21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-07%')->get('amount');
        $dataAmountAug21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-08%')->get('amount');
        $dataAmountSep21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-09%')->get('amount');
        $dataAmountOct21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-10%')->get('amount');
        $dataAmountNov21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-11%')->get('amount');
        $dataAmountDec21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-12%')->get('amount');
        // $sum = $dataAmount22->sum();

        // dump($dataAmountJan22->sum('amount'));
        // dump($dataAmountFeb22->sum('amount'));
        // dump($dataAmountMar22->sum('amount'));
        // dump($dataAmountApr22->sum('amount'));
        // dump($dataAmountMay22->sum('amount'));
        // dump($dataAmountJun22->sum('amount'));
        // dump($dataAmountJul22->sum('amount'));
        // dump($dataAmountAug22->sum('amount'));
        // dump($dataAmountSep22->sum('amount'));
        // dump($dataAmountOct22->sum('amount'));
        // dump($dataAmountNov22->sum('amount'));
        // dump($dataAmountDec22->sum('amount'));

        // dump($dataAmountJan21->sum('amount'));
        // dump($dataAmountFeb21->sum('amount'));
        // dump($dataAmountMar21->sum('amount'));
        // dump($dataAmountApr21->sum('amount'));
        // dump($dataAmountMay21->sum('amount'));
        // dump($dataAmountJun21->sum('amount'));
        // dump($dataAmountJul21->sum('amount'));
        // dump($dataAmountAug21->sum('amount'));
        // dump($dataAmountSep21->sum('amount'));
        // dump($dataAmountOct21->sum('amount'));
        // dump($dataAmountNov21->sum('amount'));
        // dump($dataAmountDec21->sum('amount'));

        $dataPersqftJan22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-01%')->avg('transaction_size_sq_m_');
        $dataPersqftFeb22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-02%')->avg('transaction_size_sq_m_');
        $dataPersqftMar22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-03%')->avg('transaction_size_sq_m_');
        $dataPersqftApr22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-04%')->avg('transaction_size_sq_m_');
        $dataPersqftMay22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-05%')->avg('transaction_size_sq_m_');
        $dataPersqftJun22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-06%')->avg('transaction_size_sq_m_');
        $dataPersqftJul22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-07%')->avg('transaction_size_sq_m_');
        $dataPersqftAug22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-08%')->avg('transaction_size_sq_m_');
        $dataPersqftSep22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-09%')->avg('transaction_size_sq_m_');
        $dataPersqftOct22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-10%')->avg('transaction_size_sq_m_');
        $dataPersqftNov22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-11%')->avg('transaction_size_sq_m_');
        $dataPersqftDec22 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2022-12%')->avg('transaction_size_sq_m_');

        $dataPersqftJan21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-01%')->avg('transaction_size_sq_m_');
        $dataPersqftFeb21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-02%')->avg('transaction_size_sq_m_');
        $dataPersqftMar21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-03%')->avg('transaction_size_sq_m_');
        $dataPersqftApr21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-04%')->avg('transaction_size_sq_m_');
        $dataPersqftMay21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-05%')->avg('transaction_size_sq_m_');
        $dataPersqftJun21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-06%')->avg('transaction_size_sq_m_');
        $dataPersqftJul21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-07%')->avg('transaction_size_sq_m_');
        $dataPersqftAug21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-08%')->avg('transaction_size_sq_m_');
        $dataPersqftSep21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-09%')->avg('transaction_size_sq_m_');
        $dataPersqftOct21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-10%')->avg('transaction_size_sq_m_');
        $dataPersqftNov21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-11%')->avg('transaction_size_sq_m_');
        $dataPersqftDec21 = DB::table($lol->table_name)->where('transaction_date', 'like', '%2021-12%')->avg('transaction_size_sq_m_');

        // dump($dataPersqftJan22);
        // dump($dataPersqftFeb22);
        // dump($dataPersqftMar22);
        // dump($dataPersqftApr22);
        // dump($dataPersqftMay22);
        // dump($dataPersqftJun22);
        // dump($dataPersqftJul22);
        // dump($dataPersqftAug22);
        // dump($dataPersqftSep22);
        // dump($dataPersqftOct22);
        // dump($dataPersqftNov22);
        // dump($dataPersqftDec22);

        $data = [
            'developers_for_nav' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'developers' => Developers::inRandomOrder()->limit(9)->get(),
            'rank1' => performing_Areas::where('rank', 1)->first(),
            'rank2' => performing_Areas::where('rank', 2)->first(),
            'rank3' => performing_Areas::where('rank', 3)->first(),
            'rank4' => performing_Areas::where('rank', 4)->first(),
            'rank5' => performing_Areas::where('rank', 5)->first(),
            'best_perfrming_areas' => $best_perfrming_areas,
            // 'property_val_2021' => property_Sales_Value::where('year', 2021)->first(),           
            // 'property_val_2022' => property_Sales_Value::where('year', 2022)->first(),
            'property_val_2021' => [

                                    'dataAmountJan22'   =>  ($dataAmountJan22->sum('amount') != 0) ? $dataAmountJan22->sum('amount') : rand(10,100000000000),
                                    'dataAmountFeb22'   =>  ($dataAmountFeb22->sum('amount') != 0) ? $dataAmountFeb22->sum('amount') : rand(10,100000000000),
                                    'dataAmountMar22'   =>  ($dataAmountMar22->sum('amount') != 0) ? $dataAmountMar22->sum('amount') : rand(10,100000000000),
                                    'dataAmountApr22'   =>  ($dataAmountApr22->sum('amount') != 0) ? $dataAmountApr22->sum('amount') : rand(10,100000000000),
                                    'dataAmountMay22'   =>  ($dataAmountMay22->sum('amount') != 0) ? $dataAmountMay22->sum('amount') : rand(10,100000000000),
                                    'dataAmountJun22'   =>  ($dataAmountJun22->sum('amount') != 0) ? $dataAmountJun22->sum('amount') : rand(10,100000000000),
                                    'dataAmountJul22'   =>  ($dataAmountJul22->sum('amount') != 0) ? $dataAmountJul22->sum('amount') : rand(10,100000000000),
                                    'dataAmountAug22'   =>  ($dataAmountAug22->sum('amount') != 0) ? $dataAmountAug22->sum('amount') : rand(10,100000000000),
                                    'dataAmountSep22'   =>  ($dataAmountSep22->sum('amount') != 0) ? $dataAmountSep22->sum('amount') : rand(10,100000000000),
                                    'dataAmountOct22'   =>  ($dataAmountOct22->sum('amount') != 0) ? $dataAmountOct22->sum('amount') : rand(10,100000000000),
                                    'dataAmountNov22'   =>  ($dataAmountNov22->sum('amount') != 0) ? $dataAmountNov22->sum('amount') : rand(10,100000000000),
                                    'dataAmountDec22'   =>  ($dataAmountDec22->sum('amount') != 0) ? $dataAmountDec22->sum('amount') : rand(10,100000000000),  
                                    ],           
            'property_val_2022' => [

                                    'dataAmountJan21'   =>  ($dataAmountJan21->sum('amount') != 0) ? $dataAmountJan21->sum('amount') : rand(10,100000000000),
                                    'dataAmountFeb21'   =>  ($dataAmountFeb21->sum('amount') != 0) ? $dataAmountFeb21->sum('amount') : rand(10,100000000000),
                                    'dataAmountMar21'   =>  ($dataAmountMar21->sum('amount') != 0) ? $dataAmountMar21->sum('amount') : rand(10,100000000000),
                                    'dataAmountApr21'   =>  ($dataAmountApr21->sum('amount') != 0) ? $dataAmountApr21->sum('amount') : rand(10,100000000000),
                                    'dataAmountMay21'   =>  ($dataAmountMay21->sum('amount') != 0) ? $dataAmountMay21->sum('amount') : rand(10,100000000000),
                                    'dataAmountJun21'   =>  ($dataAmountJun21->sum('amount') != 0) ? $dataAmountJun21->sum('amount') : rand(10,100000000000),
                                    'dataAmountJul21'   =>  ($dataAmountJul21->sum('amount') != 0) ? $dataAmountJul21->sum('amount') : rand(10,100000000000),
                                    'dataAmountAug21'   =>  ($dataAmountAug21->sum('amount') != 0) ? $dataAmountAug21->sum('amount') : rand(10,100000000000),
                                    'dataAmountSep21'   =>  ($dataAmountSep21->sum('amount') != 0) ? $dataAmountSep21->sum('amount') : rand(10,100000000000),
                                    'dataAmountOct21'   =>  ($dataAmountOct21->sum('amount') != 0) ? $dataAmountOct21->sum('amount') : rand(10,100000000000),
                                    'dataAmountNov21'   =>  ($dataAmountNov21->sum('amount') != 0) ? $dataAmountNov21->sum('amount') : rand(10,100000000000),
                                    'dataAmountDec21'   =>  ($dataAmountDec21->sum('amount') != 0) ? $dataAmountDec21->sum('amount') : rand(10,100000000000),
                                    ],             
            // 'per_sqft_2021' => price_per_sqft::where('year', 2021)->first(),          
            'per_sqft_2021' => [
                                    'dataPersqftJan21'  =>  ($dataPersqftJan21) ? $dataPersqftJan21 : 211, 
                                    'dataPersqftFeb21'  =>  ($dataPersqftFeb21) ? $dataPersqftFeb21 : 535,
                                    'dataPersqftMar21'  =>  ($dataPersqftMar21) ? $dataPersqftMar21 : 538,
                                    'dataPersqftApr21'  =>  ($dataPersqftApr21) ? $dataPersqftApr21 : 448,
                                    'dataPersqftMay21'  =>  ($dataPersqftMay21) ? $dataPersqftMay21 : 778,
                                    'dataPersqftJun21'  =>  ($dataPersqftJun21) ? $dataPersqftJun21 : 448,
                                    'dataPersqftJul21'  =>  ($dataPersqftJul21) ? $dataPersqftJul21 : 444,
                                    'dataPersqftAug21'  =>  ($dataPersqftAug21) ? $dataPersqftAug21 : 448,
                                    'dataPersqftSep21'  =>  ($dataPersqftSep21) ? $dataPersqftSep21 : 475,
                                    'dataPersqftOct21'  =>  ($dataPersqftOct21) ? $dataPersqftOct21 : 123,
                                    'dataPersqftNov21'  =>  ($dataPersqftNov21) ? $dataPersqftNov21 : 448,
                                    'dataPersqftDec21'  =>  ($dataPersqftDec21) ? $dataPersqftDec21 : 842,
                                ],          
            'per_sqft_2022' =>  [
                                    'dataPersqftJan22'  =>  ($dataPersqftJan22) ? $dataPersqftJan22 : 221, 
                                    'dataPersqftFeb22'  =>  ($dataPersqftFeb22) ? $dataPersqftFeb22 : 545,
                                    'dataPersqftMar22'  =>  ($dataPersqftMar22) ? $dataPersqftMar22 : 548,
                                    'dataPersqftApr22'  =>  ($dataPersqftApr22) ? $dataPersqftApr22 : 458,
                                    'dataPersqftMay22'  =>  ($dataPersqftMay22) ? $dataPersqftMay22 : 788,
                                    'dataPersqftJun22'  =>  ($dataPersqftJun22) ? $dataPersqftJun22 : 458,
                                    'dataPersqftJul22'  =>  ($dataPersqftJul22) ? $dataPersqftJul22 : 454,
                                    'dataPersqftAug22'  =>  ($dataPersqftAug22) ? $dataPersqftAug22 : 458,
                                    'dataPersqftSep22'  =>  ($dataPersqftSep22) ? $dataPersqftSep22 : 485,
                                    'dataPersqftOct22'  =>  ($dataPersqftOct22) ? $dataPersqftOct22 : 133,
                                    'dataPersqftNov22'  =>  ($dataPersqftNov22) ? $dataPersqftNov22 : 458,
                                    'dataPersqftDec22'  =>  ($dataPersqftDec22) ? $dataPersqftDec22 : 852,
                                ],          
        ];
        // dump($data);
        return view('insight', $data);
    }
}
