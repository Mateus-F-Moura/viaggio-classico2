<?php include './components/header.php'; ?>

<body>
    <main>
        <section class="hero">
            <div class="hero-banner">
                <div id="carouselExampleAutoplaying" class="carousel slide mt-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/img/visita2.jpg" class="d-block w-100" alt="Itália">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/visita.jpg" class="d-block w-100" alt="Passeio em Veneza">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/visita3.jpg" class="d-block w-100" alt="Vista pro mar">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="hero-content">
                <h2 class="hero-title mt-0">Sobre Nós</h2>
                <div class="hero-text">
                    <p>Bem-vindo ao Viaggio Classico! Somos especialistas apaixonados por mostrar o melhor da Itália para você.
                        Com mais de 15 anos de experiência e conhecimento profundo das cidades, cultura, gastronomia e história italianas,
                        nosso objetivo é proporcionar viagens inesquecíveis e autênticas que tocam a alma e criam memórias duradouras.</p>
                    <p>Nossa equipe é formada por profissionais italianos e brasileiros que conhecem cada cantinho especial do país.
                        Trabalhamos com os melhores guias locais, hotéis selecionados e restaurantes tradicionais para garantir que sua experiência seja única.</p>
                    <a href="./pages/forms.php" class="btn btn-primary mt-2">Viaje e crie sua história</a>
                </div>
            </div>
        </section>

        <section class="destinos m-auto mt-5">
            <h2 class="section-subtitle">Confira Nossos Destinos</h2>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/img/roma.jpg" class="card-img-top" alt="roma">
                        <div class="card-body">
                            <h5 class="card-title">Roma</h5>
                            <p class="card-text">A capital da Itália e um museu a céu aberto. Lar do Coliseu, Fórum Romano e Vaticano.</p>
                            <a href="./pages/roma.php" class="btn btn-primary">Vá a Roma</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/img/veneza.jpg" class="card-img-top" alt="veneza">
                        <div class="card-body">
                            <h5 class="card-title">Veneza</h5>
                            <p class="card-text">Cidade única construída sobre canais. Conhecida por gôndolas e a Praça de São Marcos.</p>
                            <a href="./pages/veneza.php" class="btn btn-primary">Vá a Veneza</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/img/milão.jpg" class="card-img-top" alt="milão">
                        <div class="card-body">
                            <h5 class="card-title">Milão</h5>
                            <p class="card-text">Centro da moda e do design italiano. Abriga a famosa Catedral de Milão.</p>
                            <a href="./pages/milan.php" class="btn btn-primary">Vá a Milão</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/img/napoli.jpg" class="card-img-top" alt="napoli">
                        <div class="card-body">
                            <h5 class="card-title">Nápoles</h5>
                            <p class="card-text">Berço da pizza e porta de entrada para a Costa Amalfitana.</p>
                            <a href="./pages/napoli.php" class="btn btn-primary">Vá a Nápoles</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<?php include './components/footer.php'; ?>