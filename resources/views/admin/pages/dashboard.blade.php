@extends('admin.app')
@section('meta-title',$title ?? 'BBPP Batangkaluku')
{{--@section('meta-keywords','');--}}
{{--@section('meta-author','');--}}
{{--@section('meta-description','');--}}
@push('addon-style')
@endpush
@section('content')
    <div class="d-none d-xxxl-block col-xxxl-3">
        <div class="element-wrapper">
            <h6 class="element-header">
                Jumlah Kasus Covid di Indonesia
            </h6>
            <div class="element-box less-padding">
                <div class="el-chart-w">
                    <canvas height="120" id="donutChartCovid" width="120"></canvas>
                    <div class="inside-donut-chart-label">
                        <strong id="total-kasus">0</strong><span>Kasus</span>
                    </div>
                </div>
                <div class="el-legend condensed">
                    <div class="row">
                        <div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto">
                            <div class="legend-value-w">
                                <div class="legend-pin legend-pin-squared" style="background-color: #6896f9;"></div>
                                <div class="legend-value">
                                    <span>Positif</span>
                                    <div class="legend-sub-value">
                                        <strong id="persen-positif">0</strong> %, <strong id="jumlah-positif">0</strong> Kasus
                                    </div>
                                </div>
                            </div>
                            <div class="legend-value-w">
                                <div class="legend-pin legend-pin-squared" style="background-color: #85c751;"></div>
                                <div class="legend-value">
                                    <span>Sembuh</span>
                                    <div class="legend-sub-value">
                                        <strong id="persen-sembuh">0</strong> %, <strong id="jumlah-sembuh">0</strong> Kasus
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 d-none d-xxxxl-block">
                            <div class="legend-value-w">
                                <div class="legend-pin legend-pin-squared" style="background-color: #d97b70;"></div>
                                <div class="legend-value">
                                    <span>Meninggal</span>
                                    <div class="legend-sub-value">
                                        <strong id="persen-meninggal">0</strong> %, <strong id="jumlah-meninggal">0</strong> Kasus
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('addon-script')
    <script>
        $(document).ready(function (){
            showCovid({
                positif : 1348749,
                sembuh : 177374,
                meninggal : 471291
             })
            $.get('{{route('dashboard.ajax.covid')}}')
                .then(function (res){
                    showCovid(res)
                })
        })
        function showCovid(res){
            var positif = parseInt(res.positif);
            var sembuh = parseInt(res.sembuh);
            var meninggal = parseInt(res.meninggal);
            var total = positif+sembuh+meninggal;
            $('#total-kasus').html(total.toLocaleString());
            $('#jumlah-positif').html(positif.toLocaleString());
            $('#jumlah-sembuh').html(sembuh.toLocaleString());
            $('#jumlah-meninggal').html(meninggal.toLocaleString());

            $('#persen-positif').html(Math.round(positif/total * 100));
            $('#persen-sembuh').html(Math.round(sembuh/total * 100));
            $('#persen-meninggal').html(Math.round(meninggal/total * 100));

            if($("#donutChartCovid").length){

                var donutChartCovid = $("#donutChartCovid");

                // donut chart data
                var data1 = {
                    labels: [
                        "Meninggal", "Positif", "Sembuh"
                    ],
                    datasets: [
                        {
                            data: [meninggal, positif, sembuh],
                            backgroundColor: [ "#ff000e", "#4867fc", "#4ecc48"],
                            hoverBackgroundColor: [ "#ef5350", "#4867fc", "#4ecc48"],
                            borderWidth: 6,
                            hoverBorderColor: 'transparent'
                        }]
                };

                // -----------------
                // init donut chart
                // -----------------
                new Chart(donutChartCovid, {
                    type: 'doughnut',
                    data: data1,
                    options: {
                        legend: {
                            display: false
                        },
                        animation:{
                            animateScale:true
                        },
                        cutoutPercentage: 80
                    }
                });

            }
        }
    </script>
@endpush
