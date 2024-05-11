@php

use App\Models\insight_tables;
$lol = insight_tables::where('table_name', 'like', 'transaction%')->first();

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
$per_sqft_2021 = [
'dataPersqftJan21' => ($dataPersqftJan21) ? $dataPersqftJan21 : 211,
'dataPersqftFeb21' => ($dataPersqftFeb21) ? $dataPersqftFeb21 : 535,
'dataPersqftMar21' => ($dataPersqftMar21) ? $dataPersqftMar21 : 538,
'dataPersqftApr21' => ($dataPersqftApr21) ? $dataPersqftApr21 : 448,
'dataPersqftMay21' => ($dataPersqftMay21) ? $dataPersqftMay21 : 778,
'dataPersqftJun21' => ($dataPersqftJun21) ? $dataPersqftJun21 : 448,
'dataPersqftJul21' => ($dataPersqftJul21) ? $dataPersqftJul21 : 444,
'dataPersqftAug21' => ($dataPersqftAug21) ? $dataPersqftAug21 : 448,
'dataPersqftSep21' => ($dataPersqftSep21) ? $dataPersqftSep21 : 475,
'dataPersqftOct21' => ($dataPersqftOct21) ? $dataPersqftOct21 : 123,
'dataPersqftNov21' => ($dataPersqftNov21) ? $dataPersqftNov21 : 448,
'dataPersqftDec21' => ($dataPersqftDec21) ? $dataPersqftDec21 : 842,
];
$per_sqft_2022 = [
'dataPersqftJan22' => ($dataPersqftJan22) ? $dataPersqftJan22 : 221,
'dataPersqftFeb22' => ($dataPersqftFeb22) ? $dataPersqftFeb22 : 545,
'dataPersqftMar22' => ($dataPersqftMar22) ? $dataPersqftMar22 : 548,
'dataPersqftApr22' => ($dataPersqftApr22) ? $dataPersqftApr22 : 458,
'dataPersqftMay22' => ($dataPersqftMay22) ? $dataPersqftMay22 : 788,
'dataPersqftJun22' => ($dataPersqftJun22) ? $dataPersqftJun22 : 458,
'dataPersqftJul22' => ($dataPersqftJul22) ? $dataPersqftJul22 : 454,
'dataPersqftAug22' => ($dataPersqftAug22) ? $dataPersqftAug22 : 458,
'dataPersqftSep22' => ($dataPersqftSep22) ? $dataPersqftSep22 : 485,
'dataPersqftOct22' => ($dataPersqftOct22) ? $dataPersqftOct22 : 133,
'dataPersqftNov22' => ($dataPersqftNov22) ? $dataPersqftNov22 : 458,
'dataPersqftDec22' => ($dataPersqftDec22) ? $dataPersqftDec22 : 852,
];
@endphp

<!-- <div class="rounded-[20px] bg-[#F5F9F8] border-solid border-[1px] pt-[1rem] pb-[1rem] pl-[1rem] pr-[1rem] mt-4"> -->

<div class="container rounded-[20px] bg-[#F5F9F8] border-solid border-[1px] pt-[1rem] pb-[1rem] pl-[1rem] pr-[1rem] mt-4 bg-[#F5F9F8]">
    <h1 class="text-[25px] font-lora text-primary capitalize font-medium">Monthly property price per sq.ft in 2022 vs. 2021</h1>
    <div id="line-chart-alt" class="mt-3" style="height:320px;">
    </div>
</div>
<!-- </div> -->

<script src="{{url('')}}/ins/js/vendor.min.js"></script>

<!--C3 Chart-->
<script src="{{url('')}}/ins/libs/d3/d3.min.js"></script>
<script src="{{url('')}}/ins/libs/c3/c3.min.js"></script>
<script src="{{url('')}}/ins/libs/chart-js/Chart.bundle.min.js"></script>

<script src="{{url('')}}/ins/js/pages/chartjs.init.js"></script>


<script src="{{url('')}}/ins/libs/echarts/echarts.min.js"></script>

<!-- <script src="{{url('')}}/ins/js/pages/dashboard.init.js"></script> -->

<!-- App js -->
<script src="{{url('')}}/ins/js/app.min.js"></script>
<script src="{{url('')}}/ins/js/vendor.min.js"></script>

<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.time.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.resize.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.pie.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.selection.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.stack.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.orderBars.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.crosshair.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/curvedLines.js"></script>
<script src="{{url('')}}/ins/libs/flot-charts/jquery.flot.axislabels.js"></script>

<script src="{{url('')}}/ins/js/pages/flot.init.js"></script>

<script type="text/javascript">
    ! function($) {
        "use strict";
        var Echart = window.Echart || {};
        Echart.dashboardEcharts = function() {}

        var FlotChart = function() {
            this.$body = $("body")
            this.$realData = []
        };

        //creates Line Chart
        FlotChart.prototype.createLineGraph = function(selector, ticks, colors, data) {
                var options = {
                    series: {
                        lines: {
                            show: true
                        }
                        , points: {
                            show: true
                        }
                    }
                    , legend: {
                        position: "ne"
                        , margin: [0, -32]
                        , noColumns: 0
                        , labelBoxBorderColor: null
                        , backgroundColor: "transparent"
                        , labelFormatter: function(label, series) {
                            // just add some space to labes
                            return '' + label + '&nbsp;&nbsp;';
                        }
                        , width: 30
                        , height: 2
                    }
                    , yaxis: {
                        tickColor: 'rgba(104, 115, 142, 0.1)'
                        , font: {
                            color: '#98a6ad'
                        }
                    }
                    , xaxis: {
                        tickColor: 'rgba(104, 115, 142, 0.1)'
                        , font: {
                            color: '#98a6ad'
                        }
                    },

                    colors: colors
                    , grid: {
                        hoverable: true
                        , borderColor: 'rgba(104, 115, 142, 0.1)'
                        , borderWidth: 1
                        , backgroundColor: "transparent"
                    , }
                    , tooltip: true, //activate tooltip
                    tooltipOpts: {
                        content: "%s : %y.0"
                        , shifts: {
                            x: -30
                            , y: -50
                        }
                    }
                };
                return $.plot($(selector), data, options);
            },


            //initializing various charts and components
            FlotChart.prototype.init = function() {


                //creating line chart
                var line_ticks = {
                    y: {
                        min: 1
                        , max: 60
                        , tickColor: '#f5f5f5'
                        , font: {
                            color: '#bdbdbd'
                        }
                    }
                    , x: {
                        tickColor: '#f5f5f5'
                        , font: {
                            color: '#bdbdbd'
                        }
                    }
                };

                //sample data
                var sin = []
                    , cos = [];
                var offset = 0;

                let months = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
                months.forEach(getvalue);

                function getvalue(item) {
                    let x = item;
                    sin.push([item]);

                }

                for (var i = 1; i <= 12; i += 1) {
                    switch (i) {
                        case 1:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftJan21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftJan22']
                                }
                            }]);
                            break;

                        case 2:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftFeb21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftFeb22']
                                }
                            }]);
                            break;

                        case 3:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftMar21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftMar22']
                                }
                            }]);
                            break;

                        case 4:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftApr21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftApr22']
                                }
                            }]);
                            break;

                        case 5:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftMay21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftMay22']
                                }
                            }]);
                            break;

                        case 6:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftJun21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftJun22']
                                }
                            }]);
                            break;

                        case 7:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftJul21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftJul22']
                                }
                            }]);
                            break;

                        case 8:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftAug21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftAug22']
                                }
                            }]);
                            break;

                        case 9:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftSep21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftSep22']
                                }
                            }]);
                            break;

                        case 10:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftOct21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftOct22']
                                }
                            }]);
                            break;

                        case 11:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftNov21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftNov22']
                                }
                            }]);
                            break;

                        case 12:
                            sin.push([i, {
                                {
                                    $per_sqft_2021['dataPersqftDec21']
                                }
                            }]);
                            cos.push([i, {
                                {
                                    $per_sqft_2022['dataPersqftDec22']
                                }
                            }])
                            break;

                    }

                }
                var line_data = [{
                        data: sin
                        , label: "Price (AED) in 2021 "
                    , }
                    , {
                        data: cos
                        , label: "Price (AED) in 2022 "
                    }
                ];
                this.createLineGraph("#line-chart-alt", line_ticks, ["#f5707a", "#188ae2"], line_data);
            },

            //init flotchart
            $.FlotChart = new FlotChart, $.FlotChart.Constructor =
            FlotChart

    }(window.jQuery),

    //initializing flotchart
    // function($) {
    // "use strict";
    $.FlotChart.init()


    // }(window.jQuery);

</script>
