<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulário xml em php</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- cabeçalho (header) -->
    <header>
      <h1>Signos</h1>
      <img src="data:image/png;base64,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">
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="signos.html">Confira cada periodo</a></li>
        </ul>
       </nav>
    </header>
    <!-- formulário de pesquisa -->
    <form method="_GET" action="signos.html">
        <label for="diaa">Informe a data do seu aniversário:</label>
        <input type="date" id="q" name="diaa" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
          <button class="btn-submit" type="submit" name="button">Buscar</button>
    </form>
    <section class="grid-box">

      <div class="img-signos">
              <img src="https://img.icons8.com/ios/50/000000/aries.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/taurus.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/gemini.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/cancer.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/leo.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/virgo.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/libra.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/scorpio.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/sagittarius.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/capricorn.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/pisces.png"/>
      </div>
      <div class="img-signos">
              <img src="https://img.icons8.com/ios/100/000000/aquarius.png"/>
      </div>
    </section>
  </body>
  <!-- footer -->
  <footer>
    <p>©Copyright 2022 <em>Liniker Nogueira Machado</em> todos os direitos reservados.</p>
  </footer>
</html>
