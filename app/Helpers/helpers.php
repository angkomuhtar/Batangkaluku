<?php
if (!function_exists('tanggal')){
    function tanggal($tanggal, $cetak_hari = false)
    {
        $lang = request()->query('lang','id');
        $tanggal = date('Y-m-d', strtotime($tanggal));
        if ($lang == 'id') {
            if ($tanggal) {
                $hari = array(1 => 'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat',
                    'Sabtu',
                    'Minggu'
                );

                $bulan = array(1 => 'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
                $split = explode('-', $tanggal);
                $tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

                if ($cetak_hari) {
                    $num = date('N', strtotime($tanggal));
                    return $hari[$num] . ', ' . $tgl_indo;
                }
                return $tgl_indo;
            }
            return null;
        }
        if ($cetak_hari){
            return date('l, d F Y ');
        }
        return date('d F Y ');
    }

    if (!function_exists('isPast')){
        function isPast($date){
            return (new \Carbon\Carbon($date))->isPast();
        }
    }

    if (!function_exists('numberToCurrency')){
        function numberToCurrency($number){
            return number_format($number,0,',','.');
        }
    }

    if (!function_exists('instaImg')){
        
        function ends_with( $haystack, $needle ) {
            return substr($haystack, -strlen($needle))===$needle;
        }

        function instaImg($url){
             
            if (!$url || substr($url, 0, 4) != 'http') {
                die('Please, provide correct URL');
            }
            
            $parsed = parse_url($url);
            
            if ((!ends_with($parsed['host'], 'cdninstagram.com') && !ends_with($parsed['host'], 'fbcdn.net')) || !ends_with($parsed['path'], 'jpg')) {
                die('Please, provide correct URL');
            }
            
            // instagram only has jpeg images for now..
            header("Content-type: image/jpeg");
            return readfile( $url );
        }


    }
}
