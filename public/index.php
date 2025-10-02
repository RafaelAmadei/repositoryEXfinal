<?php require_once("./includes/page-top.php") ?>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/hamburguer-h500.png" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/hotdog1.webp" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/btt.jpg" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/petiscos1.jpg" class="d-block w-50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<main class="container p-3">
  <div class="row">

    <div class="col">
      <div class="card text-white bg-warning">
        <img class="card-img-top" src="./img/hamburguer-h500.png" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Um hambúrguer suculento, com blend especial de carnes selecionadas, pão artesanal e 
            ingredientes frescos. Cada mordida é uma explosão de sabor — feito com carinho, servido com orgulho.</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card text-white bg-warning">
        <img class="card-img-top" src="./img/hotdog1.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Crocantes, douradas e levemente temperadas com ervas. Nossas batatas rústicas são 
            o acompanhamento perfeito para qualquer prato — simples, mas cheias de personalidade.</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card text-white bg-warning">
        <img class="card-img-top" src="./img/petiscos1.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Nosso hot dog vai além do comum: pão macio, salsicha especial e um mix de molhos e 
            toppings que elevam esse clássico a outro nível. Surpreenda seu paladar com cada detalhe.</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card text-white bg-warning">
        <img class="card-img-top" src="./img/btt.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Ideais para compartilhar ou saborear sozinho, nossos petiscos combinam variedade e qualidade.
             De queijos a cortes especiais, cada porção é pensada para harmonizar sabor e prazer.</p>
        </div>
      </div>
    </div>

  </div>
</main>

<?php require_once("./includes/page-botton.php") ?>