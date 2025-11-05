<?php
error_reporting(E_ALL & ~E_NOTICE);

function obterCoordenadas($cidade) {
    $cidadeCodificada = urlencode($cidade);
    $url = "https://geocoding-api.open-meteo.com/v1/search?name={$cidadeCodificada}&count=1&language=pt&format=json";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Meu App de Clima/1.0');
    $resposta = curl_exec($ch);
    curl_close($ch);

    $dados = json_decode($resposta);
    if (isset($dados->results[0]) && $dados->results[0]->country_code == 'IT') {
        return ['latitude' => $dados->results[0]->latitude, 'longitude' => $dados->results[0]->longitude];
    }
    return null;
}

function obterIconeClima($codigo) {
    if (in_array($codigo, [0, 1])) {
        return 'bi-sun-fill';
    }
    if (in_array($codigo, [2])) {
        return 'bi-cloud-sun-fill';
    }
    if (in_array($codigo, [3])) {
        return 'bi-cloud-fill';
    }
    if (in_array($codigo, [45, 48])) {
        return 'bi-cloud-fog2-fill';
    }
    if (in_array($codigo, [51, 53, 55, 61, 63, 65, 80, 81, 82])) {
        return 'bi-cloud-rain-heavy-fill';
    }
    if (in_array($codigo, [71, 73, 75, 77])) {
        return 'bi-snow';
    }
    if (in_array($codigo, [95, 96, 99])) {
        return 'bi-cloud-lightning-rain-fill':
    }
    return 'bi-question-circle';
}


function obterClima($latitude, $longitude) {
    $url = "https://api.open-meteo.com/v1/forecast?latitude={$latitude}&longitude={$longitude}&current=temperature_2m,relative_humidity_2m,apparent_temperature,weather_code&timezone=Europe/Rome";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Meu App de Clima/1.0');
    $resposta = curl_exec($ch);
    curl_close($ch);

    return json_decode($resposta);
}

function traduzirCodigoClima($codigo) {
    $mapaClima = [
        0 => "Céu limpo", 1 => "Principalmente limpo", 2 => "Parcialmente nublado", 3 => "Nublado",
        45 => "Nevoeiro", 48 => "Nevoeiro com geada", 51 => "Chuvisco leve", 53 => "Chuvisco moderado",
        55 => "Chuvisco denso", 61 => "Chuva leve", 63 => "Chuva moderada", 65 => "Chuva forte",
        71 => "Neve leve", 73 => "Neve moderada", 75 => "Neve forte", 77 => "Grãos de neve",
        80 => "Pancadas de chuva leves", 81 => "Pancadas de chuva moderadas", 82 => "Pancadas de chuva violentas",
        95 => "Trovoada", 96 => "Trovoada com granizo leve", 99 => "Trovoada com granizo forte",
    ];
    return $mapaClima[$codigo] ?? "Condição desconhecida";
}
?>
