@extends('layouts.master')
@section('title') Insight @endsection

@section('top-styles')
<style type="text/css">
    .im{
        margin-left: 20px;
    }
    input[type="file"] {
    display: none;
}
    .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius: 8px;
}
@media (min-width: 1600px) {
    .selectricc-border-none{
        margin-left: 10rem;
    } 
    #bannerimages {
        height: 22rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #mainhead{
        color: rgb(11, 44, 61);
    }
}

@media (min-device-width: 1250px) and (max-device-width: 1500px) {
    #bannerimages {
        height: 22rem;
    }  
    #bannerimages .absolute{
        top: 30%;
    }   
    
    #mainhead{
        color: rgb(11, 44, 61);
    }
}

@media (max-width: 800px) {
    #bannerimages {
        height: 8rem;
    }
    #bannerimages .absolute{
        top: 70%;
    }
    #mainhead{
        color: rgb(255, 255, 255);
    }
}
</style>
        <!-- <link href="css2/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" /> -->
        <!-- <link href="css2/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="css2/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" /> -->
@endsection

@section('content')   
    <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] lg:h-[350px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[50%]" style="background-image: url('{{url('')}}/assets/images/breadcrumb/sale.png');" id="bannerimages">
            <div class="container">
                <div class="grid grid-cols-1 ">
                    <div class="col-span-12 ">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <!-- <div class="mb-5"><span class="text-base block sm:text-[35px]">Sale</span></div> -->
                            <h1 class="font-lora text-[25px] sm:text-[25px] md:text-[25px] lg:text-[25px] leading-tight font-medium md:mt-[-0rem]">
                                Dubai Property Market Performance 2022  
                            </h1>

                            <!-- <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                                Huge number of propreties availabe here for buy and sell
                                also you can find here co-living properties  as you like
                            </p> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Hero section end -->

        <!-- Popular Area start -->
        <section class="popular-properties md:py-[80px] lg:py-[120px]">
            <!-- <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between ">
                            <div>
                                <h2 class="font-lora text-primary text-[25px] sm:text-[25px] capitalize font-medium">
                                    <b>Dubai property market summary 2022 (YTD)</b><span class="text-secondary">.</span></h2>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-5 grid md:grid-cols-4 w-auto gap-4 sm:grid-cols-none ">
                    <div class="swiper-slide text-center area">
                        <div class="relative group" style="border-radius: 20px; background-color: white; box-shadow: 5px 5px 5px 5px #D3D3D3;">
                            <div class="text-center" style="padding: 2rem;">
                                <p style="font-size: 45px; color: rgb(11, 44, 61);">51</p>
                                <h2 style="font-size: 25px;">Projects Delivered</h2>                                
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group" style="border-radius: 20px; background-color: white; box-shadow: 5px 5px 5px 5px #D3D3D3;">
                            <div class="text-center" style="padding: 2rem;">
                                <p style="font-size: 45px; color: rgb(11, 44, 61);">51</p>
                                <h2 style="font-size: 25px;">Projects Delivered</h2>                                
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group" style="border-radius: 20px; background-color: white; box-shadow: 5px 5px 5px 5px #D3D3D3;">
                            <div class="text-center" style="padding: 2rem;">
                                <p style="font-size: 45px; color: rgb(11, 44, 61);">51</p>
                                <h2 style="font-size: 25px;">Projects Delivered</h2>                                
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group" style="border-radius: 20px; background-color: white; box-shadow: 5px 5px 5px 5px #D3D3D3;">
                            <div class="text-center" style="padding: 2rem;">
                                <p style="font-size: 45px; color: rgb(11, 44, 61);">51</p>
                                <h2 style="font-size: 25px;">Projects Delivered</h2>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br> -->
            <div class="container md:px-[12rem] lg:px-[12rem] mb-10">
                <h1 class="text-[25px] font-lora text-primary capitalize font-medium">Top 5 performing areas 2022 (YTD)</h1>
                <div class="mt-2" style="position: relative;">
                <canvas id="bar" height="300" ></canvas></div>
            </div>
            
            <div class="container md:px-[12rem] lg:px-[12rem] mb-10">
                <h1 class="text-[25px] font-lora text-primary capitalize font-medium">Monthly property sales value 2022 vs. 2021</h1>
                <div class="chart-container">
                    <div class="" style="height:320px" id="user_type_bar"></div>
                </div>
            </div>
            
            <div class="container md:px-[12rem] lg:px-[12rem] ">
                <h1 class="text-[25px] font-lora text-primary capitalize font-medium">Monthly property price per sq.ft in 2022 vs. 2021</h1>
                <div id="line-chart-alt" class="mt-3" style="height:320px;">
                </div>
            </div>
           

        </section>
        <!-- Popular Area end -->
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')
<script src="ins/js/vendor.min.js"></script>

        <!--C3 Chart-->
        <!-- <script src="ins/libs/d3/d3.min.js"></script> -->
        <!-- <script src="ins/libs/c3/c3.min.js"></script> -->
        <script src="ins/libs/chart-js/Chart.bundle.min.js"></script>

        <script src="ins/js/pages/chartjs.init.js"></script>


        <script src="ins/libs/echarts/echarts.min.js"></script>

        <!-- <script src="ins/js/pages/dashboard.init.js"></script> -->

        <!-- App js -->
        <!-- <script src="ins/js/app.min.js"></script> -->
        <!-- <script src="ins/js/vendor.min.js"></script> -->

        <script src="ins/libs/flot-charts/jquery.flot.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.pie.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.stack.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.orderBars.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.crosshair.js"></script>
        <script src="ins/libs/flot-charts/curvedLines.js"></script>
        <script src="ins/libs/flot-charts/jquery.flot.axislabels.js"></script>

        <script src="ins/js/pages/flot.init.js"></script>

<script type="text/javascript">
    

! function($) {
    "use strict";
  var Echart = window.Echart || {};
  Echart.dashboardEcharts = function() {
  }

    var FlotChart = function() {
        this.$body = $("body")
        this.$realData = []
    };

    /*-------------- Chart 2 ---------------*/
    if($("#user_type_bar").length){
      // Initialize after dom ready
      var myChart = echarts.init(document.getElementById('user_type_bar'));

      var option = {

        // Setup grid
        grid: {
          zlevel: 0,
          x: 50,
          x2: 50,
          y: 20,
          y2: 20,
          borderWidth: 0,
          backgroundColor: 'rgba(0,0,0,0)',
          borderColor: 'rgba(0,0,0,0)',
        },

        // Add tooltip
        tooltip: {
          trigger: 'axis',
          axisPointer: {
            type: 'shadow', // line|shadow
            lineStyle:{color: 'rgba(0,0,0,.5)', width: 1},
            shadowStyle:{color: 'rgba(0,0,0,.1)'}
          }
        },

        // Add legend
        legend: {
          data: []
        },
        toolbox: {
          orient: 'vertical',
          show : true,
          showTitle: true,
          color : ['#bdbdbd','#bdbdbd','#bdbdbd','#bdbdbd'],
          feature : {
            mark : {show: false},
            dataZoom : {
              show : false,
              title : {
                dataZoom : 'Data Zoom',
                dataZoomReset : 'Reset Zoom'
              }
            },
            dataView : {show: false, readOnly: true},
            magicType : {
              show: false,
              title : {
                bar : 'Bar',
                line : 'Area',
                stack : 'Stacked Bar',
                tiled: 'Tiled Bar'
              },
              type: ['bar','line','stack','tiled']
            },
            restore : {show: false},
            saveAsImage : {show: false,title:'Save as Image'}
          }
        },

        // Enable drag recalculate
        calculable: true,

        // Horizontal axis
        xAxis: [{
          type: 'category',
          boundaryGap: false,
          data: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
          axisLine: {
            show: true,
            onZero: true,
            lineStyle: {
              color: '#98a6ad',
              type: 'solid',
              width: '2',
              shadowColor: 'rgba(0,0,0,0)',
              shadowBlur: 5,
              shadowOffsetX: 3,
              shadowOffsetY: 3,
            },
          },
          axisTick: {
            show: false,
          },
           axisLabel: {
            color: '#98a6ad'
          },
          splitLine: {
            show: false,
            lineStyle: {
              color: '#fff',
              type: 'solid',
              width: 0,
              shadowColor: 'rgba(0,0,0,0)',
            },
          },
        }],

        // Vertical axis
        yAxis: [{
          type: 'value',
          splitLine: {
            show: false,
            lineStyle: {
              color: 'fff',
              type: 'solid',
              width: 0,
              shadowColor: 'rgba(0,0,0,0)',
            },
          },
          
          axisLabel: {
            show: false,
          },
          axisTick: {
            show: false,
          },
          
          axisLine: {
            show: false,
            onZero: true,
            lineStyle: {
              color: '#98a6ad',
              type: 'solid',
              width: '0',
              shadowColor: 'rgba(0,0,0,0)',
              shadowBlur: 5,
              shadowOffsetX: 3,
              shadowOffsetY: 3,
            },
          },


        }],

        // Add series
        series: [
          {
            name: '2021',
            type: 'bar',
            smooth: true,
            symbol:'none',
            symbolSize:2,
            showAllSymbol: true,
            barWidth:10,
            barGap:'10%',
            itemStyle: {
              normal: {
                color:'#64c5b1',
                borderWidth:2, borderColor:'#64c5b1',
                areaStyle: {color:'#64c5b1', type: 'default'}
              }
            },

            data: [
            {{ $property_val_2021['dataAmountJan22'] }},
            {{ $property_val_2021['dataAmountFeb22'] }},
            {{ $property_val_2021['dataAmountMar22'] }},
            {{ $property_val_2021['dataAmountApr22'] }},
            {{ $property_val_2021['dataAmountMay22'] }},
            {{ $property_val_2021['dataAmountJun22'] }},
            {{ $property_val_2021['dataAmountJul22'] }},
            {{ $property_val_2021['dataAmountAug22'] }},
            {{ $property_val_2021['dataAmountSep22'] }},
            {{ $property_val_2021['dataAmountOct22'] }},
            {{ $property_val_2021['dataAmountNov22'] }},
            {{ $property_val_2021['dataAmountDec22'] }},
            ]
          },
          {
            name: '2022',
            type: 'bar',
            smooth: true,
            symbol:'none',
            symbolSize:2,
            showAllSymbol: true,
            barWidth:10,
            barGap:'10%',
            itemStyle: {
              normal: {
                color:'rgb(0,181,226)',
                borderWidth:2, borderColor:'rgb(0,181,226)',
                areaStyle: {color:'rgb(0,181,226)', type: 'default'}
              }
            },

            data: [
            {{ $property_val_2022['dataAmountJan21'] }},
            {{ $property_val_2022['dataAmountFeb21'] }},
            {{ $property_val_2022['dataAmountMar21'] }},
            {{ $property_val_2022['dataAmountApr21'] }},
            {{ $property_val_2022['dataAmountMay21'] }},
            {{ $property_val_2022['dataAmountJun21'] }},
            {{ $property_val_2022['dataAmountJul21'] }},
            {{ $property_val_2022['dataAmountAug21'] }},
            {{ $property_val_2022['dataAmountSep21'] }},
            {{ $property_val_2022['dataAmountOct21'] }},
            {{ $property_val_2022['dataAmountNov21'] }},
            {{ $property_val_2022['dataAmountDec21'] }},]
          },
        ]
      };

      // Load data into the ECharts instance
      myChart.setOption(option);

    }
 

    //returns some random data
    FlotChart.prototype.randomData = function() {
        var totalPoints = 300;
        if (this.$realData.length > 0)
            this.$realData = this.$realData.slice(1);

        // Do a random walk
        while (this.$realData.length < totalPoints) {

            var prev = this.$realData.length > 0 ? this.$realData[this.$realData.length - 1] : 50,
                y = prev + Math.random() * 10 - 5;

            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }

            this.$realData.push(y);
        }

        // Zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < this.$realData.length; ++i) {
            res.push([i, this.$realData[i]])
        }

        return res;
    }, FlotChart.prototype.createRealTimeGraph = function(selector, data, colors) {
        var plot = $.plot(selector, [data], {
            colors : colors,
            series : {
                grow : {
                    active : false
                }, //disable auto grow
                shadowSize : 0, // drawing is faster without shadows
                lines : {
                    show : true,
                    fill : true,
                    lineWidth : 2,
                    steps : false
                }
            },
            grid : {
                show : true,
                aboveData : false,
                color : '#dcdcdc',
                labelMargin : 15,
                axisMargin : 0,
                borderWidth : 0,
                borderColor : null,
                minBorderMargin : 5,
                clickable : true,
                hoverable : true,
                autoHighlight : false,
                mouseActiveRadius : 20
            },
            tooltip : true, //activate tooltip
            tooltipOpts : {
                content : "Value is : %y.0" + "%",
                shifts : {
                    x : -30,
                    y : -50
                }
            },
            yaxis : {
                axisLabel: "Response Time (ms)",
                min : 0,
                max : 100,
                tickColor : 'rgba(104, 115, 142, 0.1)',
                font : {
                    color : '#98a6ad'
                }
            },
            xaxis : {
                axisLabel: "Point Value (1000)",
                show : true,
                tickColor : 'rgba(104, 115, 142, 0.1)',
                font : {
                    color : '#98a6ad'
                }
            }
        });

        return plot;
    },

    //creates Line Chart
    FlotChart.prototype.createLineGraph = function(selector, ticks, colors, data) {
        var options = {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            legend : {
                position : "ne",
                margin : [0, -32],
                noColumns : 0,
                labelBoxBorderColor : null,
                backgroundColor: "transparent",
                labelFormatter : function(label, series) {
                    // just add some space to labes
                    return '' + label + '&nbsp;&nbsp;';
                },
                width : 30,
                height : 2
            },
            yaxis : {
                tickColor : 'rgba(104, 115, 142, 0.1)',
                font : {
                    color : '#98a6ad'
                }
            },
            xaxis : {
                tickColor : 'rgba(104, 115, 142, 0.1)',
                font : {
                    color : '#98a6ad'
                }
            },

            colors: colors,
            grid: {
                hoverable: true,
                borderColor: 'rgba(104, 115, 142, 0.1)',
                borderWidth: 1,
                backgroundColor: "transparent",
            },
            tooltip: true, //activate tooltip
            tooltipOpts: {
                content: "%s : %y.0",
                shifts: {
                    x: -30,
                    y: -50
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
                min: 1,
                max: 60,
                tickColor: '#f5f5f5',
                font : {
                    color : '#bdbdbd'
                }
            },
            x: {
                tickColor: '#f5f5f5',
                font : {
                    color : '#bdbdbd'
                }
            }
        };

        //sample data
        var sin = [],
            cos = [];
        var offset = 0;

        let months = ['january','february','march','april','may','june','july','august','september','october','november','december'];
        months.forEach(getvalue);
        function getvalue(item) {
            let x = item;
            sin.push([item]);

        }

        for (var i = 1; i <= 12; i += 1 ) {
            switch (i){
                case 1:
                sin.push([i, {{ $per_sqft_2021['dataPersqftJan21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftJan22'] }}]);
                break;

                case 2:
                sin.push([i, {{ $per_sqft_2021['dataPersqftFeb21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftFeb22'] }}]);
                break;

                case 3:
                sin.push([i, {{ $per_sqft_2021['dataPersqftMar21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftMar22'] }}]);
                break;

                case 4:
                sin.push([i, {{ $per_sqft_2021['dataPersqftApr21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftApr22'] }}]);
                break;

                case 5:
                sin.push([i, {{ $per_sqft_2021['dataPersqftMay21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftMay22'] }}]);
                break;

                case 6:
                sin.push([i, {{ $per_sqft_2021['dataPersqftJun21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftJun22'] }}]);
                break;

                case 7:
                sin.push([i, {{ $per_sqft_2021['dataPersqftJul21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftJul22'] }}]);
                break;

                case 8:
                sin.push([i, {{ $per_sqft_2021['dataPersqftAug21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftAug22'] }}]);
                break;

                case 9:
                sin.push([i, {{ $per_sqft_2021['dataPersqftSep21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftSep22'] }}]);
                break;

                case 10:
                sin.push([i, {{ $per_sqft_2021['dataPersqftOct21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftOct22'] }}]);
                break;

                case 11:
                sin.push([i, {{ $per_sqft_2021['dataPersqftNov21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftNov22'] }}]);
                break;

                case 12:
                sin.push([i, {{ $per_sqft_2021['dataPersqftDec21'] }}]);
                cos.push([i, {{ $per_sqft_2022['dataPersqftDec22'] }}])
                break;

            }
           
        }
        var line_data = [
            {
                data: sin,
                label: "Price (AED) in 2021 " ,
            },
            {
                data: cos,
                label: "Price (AED) in 2022 "
            }
        ];
        this.createLineGraph("#line-chart-alt", line_ticks, ["#f5707a", "#188ae2"], line_data);
    },

    //init flotchart
    $.FlotChart = new FlotChart, $.FlotChart.Constructor =
    FlotChart


    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        Chart.defaults.global.defaultFontColor="#98a6ad",
        Chart.defaults.scale.gridLines.color="rgba(104, 115, 142, 0.1)";
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        // $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {
        //barchart
        var barChart = {
            labels: ["{{ $best_perfrming_areas[0][0][0] }}", "{{ $best_perfrming_areas[1][0][0] }}", "{{ $best_perfrming_areas[2][0][0] }}", "{{ $best_perfrming_areas[3][0][0] }}", "{{ $best_perfrming_areas[4][0][0] }}"],
            datasets: [
                {
                    label: "Popularity",
                    backgroundColor: "rgb(0,181,226)",
                    borderColor: "rgb(0,181,226)",
                    borderWidth: 2,
                    hoverBackgroundColor: "#0083A3",
                    hoverBorderColor: "#0083A3",

                    data: [{{ $best_perfrming_areas[0][0][1] }}, {{ $best_perfrming_areas[1][0][1] }}, {{ $best_perfrming_areas[2][0][1] }}, {{ $best_perfrming_areas[3][0][1] }}, {{ $best_perfrming_areas[4][0][1] }}]
                    
                }
            ],
            options:{
                responsive: true,
                maintainAspectRatio: false,
                resizeDelay: 0
            }
        };
        this.respChart($("#bar"),'Bar',barChart);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery)
,

//initializing flotchart
function($) {
    "use strict";
    $.FlotChart.init()
    $.ChartJs.init()

}(window.jQuery);
</script>
@endsection
