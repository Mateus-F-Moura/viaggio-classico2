<div class="clima-card">
    <h2><?php echo htmlspecialchars($climaInfo['nome']); ?></h2>

    <?php if (isset($climaInfo['erro'])): ?>
        <p class="erro"><?php echo htmlspecialchars($climaInfo['erro']); ?></p>
    <?php else: ?>
        <p class="temperatura"><?php echo $climaInfo['temperatura']; ?>°C</p>
        <p class="descricao"><?php echo htmlspecialchars($climaInfo['descricao']); ?></p>
        <p>Sensação térmica: <?php echo $climaInfo['sensacao']; ?>°C</p>
        <p>Umidade: <?php echo $climaInfo['umidade']; ?>%</p>
    <?php endif; ?>
</div>