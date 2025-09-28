<?php
// Adiciona a nova função de ícone à informação do clima
$climaInfo['icone'] = obterIconeClima($dadosAtuais->weather_code ?? 0);
?>

<div class="clima-widget">
    <div class="d-flex align-items-center">
        <i class="bi <?php echo $climaInfo['icone']; ?> me-3 widget-icon"></i>
        
        <div>
            <div class="widget-temp"><?php echo $climaInfo['temperatura']; ?>°C</div>
            <div class="widget-desc"><?php echo $climaInfo['descricao']; ?></div>
        </div>
    </div>
</div>