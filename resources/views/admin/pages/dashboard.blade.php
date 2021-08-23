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
        })
        function showCovid(res){
            var positif = parseInt(res.positif);
            var sembuh = parseInt(res.sembuh);
            var meninggal = parseInt(res.meninggal);
            var dirawat = parseInt(res.dirawat);
            var total = positif+sembuh+meninggal+dirawat;
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
                        "Meninggal", "Positif", "Sembuh","Dirawat"
                    ],
                    datasets: [
                        {
                            data: [meninggal, positif, sembuh,dirawat],
                            backgroundColor: [ "#ff000e", "#4867fc", "#4ecc48","#fffd59"],
                            hoverBackgroundColor: [ "#ef5350", "#4867fc", "#4ecc48","#fffd59"],
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
