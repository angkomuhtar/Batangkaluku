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
                        <strong id="total-kasus">0</strong><span>Kasus</span><br>
                        <span>{{now()}}</span>
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
                                <div class="legend-pin legend-pin-squared" style="background-color: #ffdc00;"></div>
                                <div class="legend-value">
                                    <span>Dirawat</span>
                                    <div class="legend-sub-value">
                                        <strong id="persen-dirawat">0</strong> %, <strong id="jumlah-dirawat">0</strong> Kasus
                                    </div>
                                </div>
                            </div>
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
    <div class="d-none d-xxxl-block col-xxxl-3">
        <div class="element-wrapper">
            <h6 class="element-header">
                Rating Website
            </h6>
            <div class="element-box less-padding">
                <div class="el-chart-w">
                    <canvas height="120" id="donutChartRating" width="120"></canvas>
                    <div class="inside-donut-chart-label">
                        <strong id="total-rating">0</strong><span>Rating</span><br>
                        <span>{{now()}}</span>
                    </div>
                </div>
                <div class="el-legend condensed">
                    <div class="row">
                        <div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto">
                            <div class="legend-value-w">
                                <div class="legend-pin legend-pin-squared" style="background-color: #ef5350;"></div>
                                <div class="legend-value">
                                    <span>Kurang Baik</span>
                                    <div class="legend-sub-value">
                                        <strong id="persen-rate_1">0</strong> %, <strong id="jumlah-rate_1">0</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="legend-value-w">
                                <div class="legend-pin legend-pin-squared" style="background-color: #4867fc;"></div>
                                <div class="legend-value">
                                    <span>Cukup</span>
                                    <div class="legend-sub-value">
                                        <strong id="persen-rate_2">0</strong> %, <strong id="jumlah-rate_2">0</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 d-none d-xxxxl-block">
                            <div class="legend-value-w">
                                <div class="legend-pin legend-pin-squared" style="background-color: #ffdc00;"></div>
                                <div class="legend-value">
                                    <span>Baik</span>
                                    <div class="legend-sub-value">
                                        <strong id="persen-rate_3">0</strong> %, <strong id="jumlah-rate_3">0</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="legend-value-w">
                                <div class="legend-pin legend-pin-squared" style="background-color: #6eff53;"></div>
                                <div class="legend-value">
                                    <span>Sangat Baik</span>
                                    <div class="legend-sub-value">
                                        <strong id="persen-rate_4">0</strong> %, <strong id="jumlah-rate_4">0</strong>
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
            $.get('{{route('ajax.covid')}}')
                .then(function (res){
                    res.positif = parseInt(res.positif.replace(/,/g,""))
                    res.sembuh = parseInt(res.sembuh.replace(/,/g,""))
                    res.meninggal = parseInt(res.meninggal.replace(/,/g,""))
                    res.dirawat = parseInt(res.dirawat.replace(/,/g,""))
                    localStorage.setItem('covid',res);
                    showCovid(res)
                },function (){
                    var covid = localStorage.getItem('covid');
                    showCovid(covid)
                })
            $.get('{{route('ajax.rating')}}')
                .then(function (res){
                    showRating(res);
                },function (){
                })
        })
        function showCovid(res){
            var positif = parseInt(res.positif);
            var sembuh = parseInt(res.sembuh);
            var meninggal = parseInt(res.meninggal);
            var dirawat = parseInt(res.dirawat);
            // var total = positif+sembuh+meninggal+dirawat;
            var total = positif;
            $('#total-kasus').html(total.toLocaleString('id-ID'));
            $('#jumlah-positif').html(positif.toLocaleString('id-ID'));
            $('#jumlah-sembuh').html(sembuh.toLocaleString('id-ID'));
            $('#jumlah-meninggal').html(meninggal.toLocaleString('id-ID'));
            $('#jumlah-dirawat').html(dirawat.toLocaleString('id-ID'));

            $('#persen-positif').html(Math.round(positif/total * 100));
            $('#persen-sembuh').html(Math.round(sembuh/total * 100));
            $('#persen-dirawat').html(Math.round(dirawat/total * 100));
            $('#persen-meninggal').html(Math.round(meninggal/total * 100));

            if($("#donutChartCovid").length){

                var donutChartCovid = $("#donutChartCovid");

                // donut chart data
                var data1 = {
                    labels: [
                        // "Meninggal", "Positif", "Sembuh","Dirawat"
                        "Meninggal", "Sembuh","Dirawat"
                    ],
                    datasets: [
                        {
                            // data: [meninggal, positif, sembuh,dirawat],
                            data: [meninggal, sembuh,dirawat],
                            // backgroundColor: [ "#ff000e", "#4867fc", "#4ecc48","#fffd59"],
                            backgroundColor: [ "#ff000e", "#4ecc48","#fffd59"],
                            // hoverBackgroundColor: [ "#ef5350", "#4867fc", "#4ecc48","#fffd59"],
                            hoverBackgroundColor: [ "#ef5350", "#4ecc48","#fffd59"],
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
        function showRating(res){
            var rate_1 = parseInt(res.rate_1);
            var rate_2 = parseInt(res.rate_2);
            var rate_3 = parseInt(res.rate_3);
            var rate_4 = parseInt(res.rate_4);
            var total = rate_1+rate_2+rate_3+rate_4;
            $('#total-rating').html(total.toLocaleString('id-ID'));
            $('#jumlah-rate_1').html(rate_1.toLocaleString('id-ID'));
            $('#jumlah-rate_2').html(rate_2.toLocaleString('id-ID'));
            $('#jumlah-rate_3').html(rate_3.toLocaleString('id-ID'));
            $('#jumlah-rate_4').html(rate_4.toLocaleString('id-ID'));

            $('#persen-rate_1').html(Math.round(rate_1/total * 100));
            $('#persen-rate_2').html(Math.round(rate_2/total * 100));
            $('#persen-rate_3').html(Math.round(rate_3/total * 100));
            $('#persen-rate_4').html(Math.round(rate_4/total * 100));

            if($("#donutChartRating").length){

                var donutChartRating = $("#donutChartRating");

                // donut chart data
                var data1 = {
                    labels: [
                        // "Meninggal", "Positif", "Sembuh","Dirawat"
                        "Meninggal", "Sembuh","Dirawat"
                    ],
                    datasets: [
                        {
                            // data: [meninggal, positif, sembuh,dirawat],
                            data: [rate_4, rate_3,rate_2, rate_1],
                            backgroundColor: [ "#33ff91", "#efd100", "#008cff","#ff0012"],
                            hoverBackgroundColor: [ "#33ff91", "#58ff00", "#008cff","#ff000e"],
                            borderWidth: 6,
                            hoverBorderColor: 'transparent'
                        }]
                };

                // -----------------
                // init donut chart
                // -----------------
                new Chart(donutChartRating, {
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
