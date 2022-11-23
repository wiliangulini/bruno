<?php
session_start();

if(!file_exists('index.html')) {
ob_start();

echo '
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=0">
    <meta name="description" content="Cosméticos Artesanais Sem Segredos Naturais e Veganos, para você e sua família" />
    <meta name="keywords" content="Cosméticos Artesanais Sem Segredos Naturais e Veganos, cosmeticos naturais, cosmeticos, cosméticos, cosméticos naturais, cosmeticos artesanais, cosméticos sem segredos, produtos naturais, produtos vegansos naturais, produtos veganos" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Wilian Gulini" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="pt-BR">
    <meta name="revisit-after" content="1 day">
    <meta name="generator" content="N/A">
    <!-- Open Graph / Facebook -->

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cursosantesanais.com/SITE">
    <meta property="og:title" content="Cosméticos Artesanais Sem Segredos Naturais e Veganos">
    <meta property="og:description" content="Cosméticos Artesanais Sem Segredos Naturais e Veganos, para você e sua família">
    <meta property="og:image" content="https://cursosantesanais.com/SITE/assets/images/51.webp">
    
    <link rel="canonical" href="index.php" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="Cosméticos Artesanais Sem Segredos Naturais e Veganos" />

    <title>Cosméticos Artesanais Sem Segredos Naturais e Veganos</title>
    <link rel="stylesheet" href="assets/css/bootstrapv4.1.3.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p class="h2"><strong>MÉTODO INOVADOR</strong></p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="title d-flex flex-column align-center justify-content-center">
          <h4><span class="rosa">APROVADO POR MAIS DE 15.467 ALUNOS EM 12 PAÍSES</span></h4>
          <h1 class="mt-2 mb-3"></span> Faça para você e ainda <span class="rosa">LUCRE</span> com isso!</h1>
          <h5 class="d-block text-center"> MÉTODO EXCLUSIVO ENSINA FORMA SIMPLES E CRIATIVA DE FONTE DE <span class="verde">RENDA EXTRA</span> COM COSMÉTICOS NATURAIS VEGANOS PROFISSIONAIS</h5>
          <h5 class="d-block text-center">SEM LARGAR O SEU TRABALHO ATUAL,</h5>
          <h5 class="d-block text-center mb-4"><span class="verde">SE DEDICANDO APENAS 1-2 HORAS POR DIA</span></h5>
            <p class="h5 mb-0">(Confira nosso vídeo abaixo!)</p>
          </div>
          <div class="video">
            <video controls poster="assets/images/video.webp">
              <source id="video" type="video/mp4" src="assets/video/Curso Cosméticos Artesanais - Enkanto Nature novo.mp4"></source>
            </video>
          </div>
          <div class="text">
            <p>🔊Por favor, verifique se o seu som está ligado.</p>
            <!-- <a href="https://go.hotmart.com/T61745037I?ap=bbc5" class="btn-yellow"><strong>QUERO COMEÇAR AGORA!</strong></a> -->
            <img src="assets/images/35.webp" alt="privacidade" loading="lazy">
            <p class="text"><strong>Compra 100% segura!</strong> Receba imediatamente seu acesso após a confirmação do pagamento.</p>
          </div>
        </div>
      </div>
      <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z"></path> </svg>
    </header>
    <main>
      
      <section class="three">
        <div class="container">
          <div class="title">
            <h2><strong>VANTAGENS DO CURSO</strong></h2>
          </div>
          <div class="row justify-content-center">
            <div class="img">
              <img src="assets/images/2.webp" loading="lazy" alt="foto do curso">
            </div>
          </div>
          <div class="row justify-content-around">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M13.97 2.196C22.49-1.72 32.5-.3214 39.62 5.778L80 40.39L120.4 5.778C129.4-1.926 142.6-1.926 151.6 5.778L192 40.39L232.4 5.778C241.4-1.926 254.6-1.926 263.6 5.778L304 40.39L344.4 5.778C351.5-.3214 361.5-1.72 370 2.196C378.5 6.113 384 14.63 384 24V488C384 497.4 378.5 505.9 370 509.8C361.5 513.7 351.5 512.3 344.4 506.2L304 471.6L263.6 506.2C254.6 513.9 241.4 513.9 232.4 506.2L192 471.6L151.6 506.2C142.6 513.9 129.4 513.9 120.4 506.2L80 471.6L39.62 506.2C32.5 512.3 22.49 513.7 13.97 509.8C5.456 505.9 0 497.4 0 488V24C0 14.63 5.456 6.112 13.97 2.196V2.196zM96 144C87.16 144 80 151.2 80 160C80 168.8 87.16 176 96 176H288C296.8 176 304 168.8 304 160C304 151.2 296.8 144 288 144H96zM96 368H288C296.8 368 304 360.8 304 352C304 343.2 296.8 336 288 336H96C87.16 336 80 343.2 80 352C80 360.8 87.16 368 96 368zM96 240C87.16 240 80 247.2 80 256C80 264.8 87.16 272 96 272H288C296.8 272 304 264.8 304 256C304 247.2 296.8 240 288 240H96z"/></svg>
              <h4><strong>MAIS DE 150 RECEITAS</strong></h4>
              <p> A apostila principal mais os bônus contam com mais de 150 receitas de  cosméticos ao todo. Receitas de shampoo sólido, condicionador, bálsamo, pomadas medicinais, sérum e muito mais...</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 112v288c0 26.51-21.49 48-48 48h-288c-26.51 0-48-21.49-48-48v-288c0-26.51 21.49-48 48-48h288C362.5 64 384 85.49 384 112zM576 127.5v256.9c0 25.5-29.17 40.39-50.39 25.79L416 334.7V177.3l109.6-75.56C546.9 87.13 576 102.1 576 127.5z"/></svg>
              <h4><strong>VÍDEO AULAS</strong></h4>
              <p> Metodologia de ensino fácil e didática, mesmo que você seja um total iniciante no assunto conseguira produzir seus cosméticos com total segurança.</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M171.7 191.1H404.3L322.7 35.07C316.6 23.31 321.2 8.821 332.9 2.706C344.7-3.409 359.2 1.167 365.3 12.93L458.4 191.1H544C561.7 191.1 576 206.3 576 223.1C576 241.7 561.7 255.1 544 255.1L492.1 463.5C484.1 492 459.4 512 430 512H145.1C116.6 512 91 492 83.88 463.5L32 255.1C14.33 255.1 0 241.7 0 223.1C0 206.3 14.33 191.1 32 191.1H117.6L210.7 12.93C216.8 1.167 231.3-3.409 243.1 2.706C254.8 8.821 259.4 23.31 253.3 35.07L171.7 191.1zM191.1 303.1C191.1 295.1 184.8 287.1 175.1 287.1C167.2 287.1 159.1 295.1 159.1 303.1V399.1C159.1 408.8 167.2 415.1 175.1 415.1C184.8 415.1 191.1 408.8 191.1 399.1V303.1zM271.1 303.1V399.1C271.1 408.8 279.2 415.1 287.1 415.1C296.8 415.1 304 408.8 304 399.1V303.1C304 295.1 296.8 287.1 287.1 287.1C279.2 287.1 271.1 295.1 271.1 303.1zM416 303.1C416 295.1 408.8 287.1 400 287.1C391.2 287.1 384 295.1 384 303.1V399.1C384 408.8 391.2 415.1 400 415.1C408.8 415.1 416 408.8 416 399.1V303.1z"/></svg>
              <h4><strong>MATERIAS NECESSÁRIOS PARA COMEÇAR</strong></h4>
              <p> Você vai aprender tudo o que é necessário para começar a produzir seus cosméticos  e montar um verdadeiro negócio.</p>
            </div>
          </div>
          <div class="row justify-content-around">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg>
              <h4><strong>LISTA DE FORNECEDORES</strong></h4>
              <p> Tenha acesso a nossa lista particular de fornecedores e descubra onde comprar matéria prima de qualidade e com bom preço.</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M152 0H154.2C186.1 0 215.7 16.91 231.9 44.45L256 85.46L280.1 44.45C296.3 16.91 325.9 0 357.8 0H360C408.6 0 448 39.4 448 88C448 102.4 444.5 115.1 438.4 128H480C497.7 128 512 142.3 512 160V224C512 241.7 497.7 256 480 256H32C14.33 256 0 241.7 0 224V160C0 142.3 14.33 128 32 128H73.6C67.46 115.1 64 102.4 64 88C64 39.4 103.4 0 152 0zM190.5 68.78C182.9 55.91 169.1 48 154.2 48H152C129.9 48 112 65.91 112 88C112 110.1 129.9 128 152 128H225.3L190.5 68.78zM360 48H357.8C342.9 48 329.1 55.91 321.5 68.78L286.7 128H360C382.1 128 400 110.1 400 88C400 65.91 382.1 48 360 48V48zM32 288H224V512H80C53.49 512 32 490.5 32 464V288zM288 512V288H480V464C480 490.5 458.5 512 432 512H288z"/></svg>
              <h4><strong>BÔNUS EXCLUSIVOS</strong></h4>
              <p> Aprenda a base neutra para shampoo e sabonete, extrato vegetal, base para creme, tinturas e muito mais...</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
              <h4><strong>SUPORTE</strong></h4>
              <p> Aprenda a base neutra para shampoo e sabonete, extrato vegetal, base para creme, tinturas e muito mais...</p>
            </div>
          </div>
          <div class="row">
            <div class="bottom">
              <h4><strong>E muito mais</strong></h4>
              <p>E ainda tem muito mais conteúdo, continue lendo e confira todos os nossos bônus.</p>
              <a href="https://go.hotmart.com/T61745037I?ap=bbc5" class="btn-green"><strong>QUERO COMEÇAR AGORA</strong></a>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"/></svg>
            </div>
          </div>
        </div>
        <svg class="svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"></path> </svg>
      </section>
      <section class="four">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M500,98.9L0,6.1V0h1000v6.1L500,98.9z"></path> </svg>
        <div class="container">
          <div class="row flex-column">
            <div class="title">
              <img src="assets/images/7.webp" loading="lazy" alt="titulo">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center align-items-center one">
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <img class="animate one" src="assets/images/3.webp" loading="lazy" alt="">
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <img class="animate two" src="assets/images/3.1.webp" loading="lazy" alt="">
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <img class="animate three" src="assets/images/3.2.webp" loading="lazy" alt="">
              </div>
            </div>
            <div class="lineStar">
              <div class="linestarInt"></div>
              <svg class="star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
              <div class="linestarInt"></div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center align-items-center two">
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex flex-column align-items-center justify-content-center">
                <svg class="svgTest" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>
                <h3><strong>TESTADO E APROVADO!</strong></h3>
                <p class="h5"> MILHARES DE ALUNOS PELO BRASIL E PELO MUNDO APROVAM NOSSO MÉTODO</p>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex flex-column align-items-center justify-content-center">
                <span class="counter-up" id="counter" data-count-to="15467" >15.467</span>
                <p class="h5 two">ALUNOS FORMADOS PELA ENKANTO NATURE</p>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex flex-column align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"/></svg>
                <h3><strong>CURSO 5 ESTRELAS</strong></h3>
                <p class="star"> ⭐⭐⭐⭐⭐ </p>
                <p class="h6">Avaliação 5,0/5,0</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="five">
        <div class="container">
          <div class="title">
            <h2><strong>MONTE SEU NEGÓCIO DE <span class="green">COSMÉTICOS ARTESANAIS</span></strong></h2>
          </div>
          <div class="row flex-column align-items-center justify-content-center">
            <div class="img">
              <img src="assets/images/1.webp" loading="lazy" alt="produtos">
            </div>
            <div class="text">
              <h2>DESCUBRA:</h2>
              <ul>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M211.8 339.8C200.9 350.7 183.1 350.7 172.2 339.8L108.2 275.8C97.27 264.9 97.27 247.1 108.2 236.2C119.1 225.3 136.9 225.3 147.8 236.2L192 280.4L300.2 172.2C311.1 161.3 328.9 161.3 339.8 172.2C350.7 183.1 350.7 200.9 339.8 211.8L211.8 339.8zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z"/></svg>
                  <span> Como escolher o seu nicho de atuação.</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M211.8 339.8C200.9 350.7 183.1 350.7 172.2 339.8L108.2 275.8C97.27 264.9 97.27 247.1 108.2 236.2C119.1 225.3 136.9 225.3 147.8 236.2L192 280.4L300.2 172.2C311.1 161.3 328.9 161.3 339.8 172.2C350.7 183.1 350.7 200.9 339.8 211.8L211.8 339.8zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z"/></svg>
                  <span>Como substituir ingredientes sem perder a eficiência do produto.</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M211.8 339.8C200.9 350.7 183.1 350.7 172.2 339.8L108.2 275.8C97.27 264.9 97.27 247.1 108.2 236.2C119.1 225.3 136.9 225.3 147.8 236.2L192 280.4L300.2 172.2C311.1 161.3 328.9 161.3 339.8 172.2C350.7 183.1 350.7 200.9 339.8 211.8L211.8 339.8zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z"/></svg>
                  <span>Conhecer as propriedades dos ingredientes utilizados e seus benefícios.</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M211.8 339.8C200.9 350.7 183.1 350.7 172.2 339.8L108.2 275.8C97.27 264.9 97.27 247.1 108.2 236.2C119.1 225.3 136.9 225.3 147.8 236.2L192 280.4L300.2 172.2C311.1 161.3 328.9 161.3 339.8 172.2C350.7 183.1 350.7 200.9 339.8 211.8L211.8 339.8zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z"/></svg>
                  <span>Como identificar as melhores matérias primas.</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M211.8 339.8C200.9 350.7 183.1 350.7 172.2 339.8L108.2 275.8C97.27 264.9 97.27 247.1 108.2 236.2C119.1 225.3 136.9 225.3 147.8 236.2L192 280.4L300.2 172.2C311.1 161.3 328.9 161.3 339.8 172.2C350.7 183.1 350.7 200.9 339.8 211.8L211.8 339.8zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z"/></svg>
                  <span>Aprender como usar óleos essenciais nos cosméticos.</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M211.8 339.8C200.9 350.7 183.1 350.7 172.2 339.8L108.2 275.8C97.27 264.9 97.27 247.1 108.2 236.2C119.1 225.3 136.9 225.3 147.8 236.2L192 280.4L300.2 172.2C311.1 161.3 328.9 161.3 339.8 172.2C350.7 183.1 350.7 200.9 339.8 211.8L211.8 339.8zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z"/></svg>
                  <span>Aprender a como conservar por mais tempo os cosméticos naturais.</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M211.8 339.8C200.9 350.7 183.1 350.7 172.2 339.8L108.2 275.8C97.27 264.9 97.27 247.1 108.2 236.2C119.1 225.3 136.9 225.3 147.8 236.2L192 280.4L300.2 172.2C311.1 161.3 328.9 161.3 339.8 172.2C350.7 183.1 350.7 200.9 339.8 211.8L211.8 339.8zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z"/></svg>
                  <span>Aprender a produzir os produtos mais usados no dia a dia.</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <svg class="svg five" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z"></path> <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z"></path> <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z"></path> </svg>
      </section>
      <section class="six">
        <div class="container">
          <div class="title">
            <h2><strong>VEJA UM POUCO DO QUE VOCÊ VAI APRENDER</strong></h2>
          </div>
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/31.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Shampoo</strong> sólido</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/32.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Condicionador</strong> em barra</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/49.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Sabonetes</strong> Artesanais</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/repelente.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Repelentes contra mosquitos</strong></p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/Demaquilante.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Demaquilante</strong></p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/47_1.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Sais de banho</strong></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/37.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Cremes e Máscaras faciais</strong></p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/52.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Produtos Linha Masculina</strong></p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/56.webp" loading="lazy" alt="cosmeticos">
              <p>Receitas <strong>Fitoterápicas e Terapêuticas </strong></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/34.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Shampoo para bebês</strong></p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/54.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Hidratantes corporais</strong></p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/63.webp" loading="lazy" alt="cosmeticos">
              <p>Receitas <strong>Secretas</strong></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/64.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Passo a Passo </strong>para começar sua <strong>produção</strong></p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/51.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Lista de Materiais</strong> necessários para sua produção</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/65.webp" loading="lazy" alt="cosmeticos">
              <p><strong>Lista de Materiais</strong> necessários para <strong>embalagens</strong> </p>
            </div>
          </div>
          <div class="row flex-column">
            <div class="title">
              <h2>+ 150 RECEITAS E DICAS EXCLUSIVAS</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex">
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <ul>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Mais de 40 Vídeo Aulas
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Dicas Exclusivas
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Grupo VIP de Alunos
                  </li>
                </ul>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <ul>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Lista de Fornecedores
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Dicas de Economia
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Descontos Exclusivos
                  </li>
                </ul>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <ul>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Suporte ao Aluno
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Guia e planilha de Custos
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    Mais de 5 Bônus Imperdíveis
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <svg class="svg bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1"></path> </svg>
      </section>
      <section class="seven">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path> </svg>
        <div class="container">
          <div class="title">
            <h2><strong>MÉTODO PERFEITO PARA INICIANTES</strong></h2>
          </div>
          <div class="row">
            <div class="text">
              <p class="h3">Este é um método perfeito para iniciantes, ou para pessoas que gostam de coisas simples. </p>
              <p class="h3"> Você não precisa de qualquer experiência para começar a criar seus próprios cosméticos com total segurança e no conforto da sua casa. </p>
              <p class="h3">Resumindo...</p>
              <p class="h3"> Este curso foi feito para você que simplesmente quer aprender tudo do zero e criar uma renda.</p>
            </div>
          </div>
        </div>
        <svg class="svg bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path> </svg>
      </section>
      <section class="eight">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path> </svg>
        <div class="container">
          <div class="title">
            <img src="assets/images/presente.webp" loading="lazy" alt=""/>
            <h2><strong>PREPARAMOS BÔNUS SENSACIONAIS PARA VOCÊ</strong></h2>
          </div>
          <div class="row justify-content-around align-items-center">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <div class="title">
                <h2><strong>BÔNUS 01</strong></h2>
              </div>
              <div class="img">
                <img src="assets/images/26.webp" loading="lazy" alt="">
              </div>
              <div class="text d-flex w-100 flex-column align-items-center justify-content-center">
                <h2><strong>LISTA COMPLETA DE FORNECEDORES</strong></h2>
                <p>Tenha acesso a nossa lista completa de fornecedores de matéria prima que vendem produtos de alta qualidade a preço acessível!</p>
              </div>
              <div class="footer">
                <img src="assets/images/rs47.webp" loading="lazy" alt="imagem de button">
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <div class="title">
                <h2><strong>BÔNUS 02</strong></h2>  
              </div>
              <div class="img">
                <img src="assets/images/66.webp" loading="lazy" alt="">
              </div>
              <div class="text d-flex w-100 flex-column align-items-center justify-content-center">
                <h2><strong>RECEITAS ESPECIAIS PARA ECONOMIZAR MUITO</strong></h2>
                <p>Tenha acesso a uma apostila secreta com receitas e formulações EXCLUSIVAS que vão te ensinar a produzir diversos tipos de base neutra e extratos vegetais para seus cosméticos.</p>
              </div>
              <div class="footer">
                <img src="assets/images/rs47.webp" loading="lazy" alt="imagem de button">
              </div>              
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <div class="title">
                <h2><strong>BÔNUS 03</strong></h2>
              </div>
              <div class="img">
                <img src="assets/images/67.webp" loading="lazy" alt="">
              </div>
              <div class="text d-flex w-100 flex-column align-items-center justify-content-center">
                <h2><strong>ETIQUETAS PARA IMPRIMIR</strong></h2>
                <p>Tenha acesso a um banco de etiquetas exclusivo da Enkanto Nature onde você pode editar e usar conforme o desejado. Kit Design completo para decolar seu negócio.</p>
              </div>
              <div class="footer">
                <img src="assets/images/rs97.webp" loading="lazy" alt="imagem de button">
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <div class="title">
                <h2><strong>BÔNUS 04</strong></h2>
              </div>
              <div class="img">
                <img src="assets/images/26.webp" loading="lazy" alt="">
              </div>
              <div class="text d-flex w-100 flex-column align-items-center justify-content-center">
                <h2><strong>GUIA BLENDS ÓLEOS ESSENCIAIS</strong></h2>
                <p>Guia completo com diversas sinergias/blends  para utilizar e usufruir dos benefícios incríveis dos óleos essenciais para vários tipos de tratamentos.</p>
              </div>
              <div class="footer">
                <img src="assets/images/rs27.webp" loading="lazy" alt="imagem de button">
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <div class="title">
                <h2><strong>BÔNUS 05</strong></h2>
              </div>
              <div class="img">
                <img src="assets/images/66.webp" loading="lazy" alt="">
              </div>
              <div class="text d-flex w-100 flex-column align-items-center justify-content-center">
                <h2><strong>PLANILHA DE PREFICICAÇÃO E GUIA DE PREÇOS</strong></h2>
                <p>Calcule todos os seus custos de preparação, valor de venda e lucros. Exatamente o que você precisa! Mesmo que você não tenha muita facilidade com números nosso guia foi criado para facilitar os cálculos para você.</p>
              </div>
              <div class="footer">
                <img class="ex" src="assets/images/rs47.webp" loading="lazy" alt="imagem de button">
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <div class="title">
                <h2><strong>BÔNUS 06</strong></h2>
              </div>
              <div class="img">
                <img src="assets/images/67.webp" loading="lazy" alt="">
              </div>
              <div class="text d-flex w-100 flex-column align-items-center justify-content-center">
                <h2><strong>ACESSO AO GRUPO VIP</strong></h2>
                <p>Grupo Vip no Telegram exclusivamente para alunos do Curso Cosmetologia Sem Segredos! No grupo VIP as possibilidades de aprendizado são infinitas, novas receitas, formulações, parcerias, possibilidades de ganhos, e muito mais...</p>
              </div>
              <div class="footer">
                <img src="assets/images/rs97.webp" loading="lazy" alt="imagem de button">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="buttons">
            <a href="https://go.hotmart.com/T61745037I?ap=bbc5" class="btn-green2"><strong>Quero Começar Agora!</strong></a>
            <p><strong>INSCREVA-SE AGORA</strong> E GARANTA TODOS OS BÔNUS!</p>
          </div>
        </div>
        <svg class="svgBottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path> </svg>
      </section>
      <section class="nine">
        <div class="container">
          <div class="title d-flex justify-content-center align-items-center flex-column">
            <h2><strong>Certificado Digital Incluso</strong></h2>
            <img src="assets/images/6.webp" class="certificado" loading="lazy" alt="certificado">
          </div>
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/24.webp" loading="lazy" alt="pessoas que fizeram o curso">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/22.webp" loading="lazy" alt="pessoas que fizeram o curso">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <img src="assets/images/23.webp" loading="lazy" alt="pessoas que fizeram o curso">
            </div>
          </div>
          <div class="row flex-column align-items-center justify-content-center">
            <div class="title">
              <h2><strong>Alguns produtos que você vai aprender...</strong></h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <img src="assets/images/10.webp" loading="lazy" alt="produtos">
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <img src="assets/images/68.webp" loading="lazy" alt="produtos">
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <img src="assets/images/8.webp" loading="lazy" alt="produtos">
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <img src="assets/images/11.webp" loading="lazy" alt="produtos">
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <img src="assets/images/12.webp" loading="lazy" alt="produtos">
              </div>
            </div>
            <div class="text">
              <p class="h5">Esses são apenas alguns dos diversos produtos que você vai aprender a fazer com nosso curso.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="ten">
        <div class="container">
          <div class="title">
            <h2><strong>Veja o que estão Falando Sobre o Curso</strong></h2>
          </div>
          <div class="row justify-content-around">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <img src="assets/images/41.webp" loading="lazy" alt="">
              <p class="h5">"Estou amando o curso, fiquei encantada com a calma e clareza ao nos explicar sobre esse universo apaixonante da cosmetologia, farei outros cursos da Enkanto Nature certamente. Tenho certeza que essa foi uma das melhores escolhas que fiz nesse ano, estou super feliz."</p>
              <div class="foto d-flex">
                <img src="assets/images/foto1.webp" loading="lazy" alt="">
                <div class="text d-flex flex-column">
                  <p><strong>Aline Viana</strong></p>
                  <p>Santos - SP</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <img src="assets/images/48.webp" loading="lazy" alt="">
              <p class="h5">"❤️❤️❤️Ameiii o curso, muito bem explicado, em passo a passo, apostilas detalhadas, amei todos os cosméticos que são ensinados! Já estou fazendo meus sabonetes e  vendendo super bem, fiz um sabonete para dar de lembrancinha na minha igreja e foi emocionante. Parabéns!!! Melhor curso que já comprei."</p>
              <div class="foto d-flex">
                <img src="assets/images/foto2.webp" loading="lazy" alt="">
                <div class="text d-flex flex-column">
                  <p><strong>Francisca Souza</strong></p>
                  <p>Recife - PE</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 card d-flex justify-content-center flex-column align-items-center">
              <img src="assets/images/43.webp" loading="lazy" alt="">
              <p class="h5">"Sou professora aposentada, estava pesquisando na internet formas de ter uma renda extra, me encantei pela possibilidade de produzir meus próprios sabonetes e cosméticos artesanais, achei esse curso e estou amando cada conteúdo, a maneira de explicar é bem simples e de fácil entendimento, recomendo muito."</p>
              <div class="foto d-flex">
                <img src="assets/images/foto3.webp" loading="lazy" alt="">
                <div class="text d-flex flex-column">
                  <p><strong>Maria Helena</strong></p>
                  <p>Vitoria - ES</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="thirteen">
        <div class="container">
          <div class="row">
            <h2><strong>A HORA É AGORA! DE TRANSFORMAR SUA VIDA!</strong></h2>
          </div>
        </div>
      </section>
      <section class="twelve">
        <div class="container">
          <div class="title d-flex flex-column align-items-center justify-content-center">
            <h2><strong>O MAIOR E MELHOR CURSO DE COSMETOLOGIA DO BRASIL COM <span class="laranja">DESCONTO DE LANÇAMENTO</span></strong></h2>
            <img src="assets/images/15.webp" loading="lazy" alt="celular">
          </div>
          <div class="row">
            <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 card d-flex flex-column align-items-center justify-content-center">
              <div class="ofert">
                <h3><strong>OFERTA IMPERDÍVEL</strong></h3>
                <p>Promoção Especial!</p>
                <p class="exclusivo">Exclusivo</p>
              </div>
              <div class="price">
                <div class="priceInt">
                  <p class="price297">R$197</p>
                  <p class="h4">R$</p>
                  <p class="h2">97</p>
                </div>
                <p class="pag">ou em 10 x de R$11,31* no cartão</p>
              </div>
              <ul>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Mais de 47 vídeo aulas 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Mais de 150 Receitas 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Passo a Passo Completo 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Certificado de Conclusão 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Bônus Exclusivos 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Grupo VIP de Alunos 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Método 100% Testado e Aprovado 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Suporte ao Aluno via WhatsApp 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Atualizações Gratuitas 
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                  Pagamento único, sem mensalidades 
                </li>
              </ul>
              <div class="bottom">
                <a href="https://go.hotmart.com/T61745037I?ap=bbc5" class="btn-green3"><strong>COMPRAR AGORA</strong></a>
                <p>Últimas Vagas!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fourteen">
        <div class="container">
          <div class="title">
            <h2><strong>7 DIAS DE GARANTIA</strong></h2>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <img src="assets/images/Selo-Satisfacao-1.webp" loading="lazy" alt="">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center">
              <p>Para que você fique tranquilo e tenha a completa segurança ao adquirir o Curso de Cosméticos Artesanais, nós vamos dar uma garantia incondicional de 7 dias. A sua satisfação ou o seu dinheiro de volta.</p>
            </div>
          </div>
          <div class="row">
            <img src="assets/images/selos-seguranca.webp" loading="lazy" alt="">
          </div>
        </div>
      </section>
      <section class="fifteen">
        <div class="container">
          <div class="title">
            <h2><strong>PERGUNTAS FREQUENTES:</strong></h2>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="talk one">
                <h4><strong>COMO FAÇO PARA COMPRAR O CURSO ?</strong></h4>
                <div class="line d-flex justify-content-start w-100"><div class="lineInt"></div></div>
                <p>Para comprar basta clicar em qualquer botão desse site e ir direto para a página de pagamento, lá é só preencher os dados e escolher a forma de pagamento que desejar.</p>
              </div>
              <div class="talk two">
                <h4><strong>QUAIS AS FORMAS DE PAGAMENTO ?</strong></h4>
                <div class="line d-flex justify-content-start w-100"><div class="lineInt"></div></div>
                <p>Aceitamos praticamente todas as formas de pagamento, cartão, PIX, boleto, transferência, paypal, samsung pay etc.</p>
              </div>
              <div class="talk three">

                <h4><strong>QUANTO TEMPO DE ACESSO AO CURSO EU TEREI ?</strong></h4>
                <div class="line d-flex justify-content-start w-100"><div class="lineInt"></div></div>
                <p>Após a compra ser confirmada, o curso é seu para sempre.  Acesso Vitalício!</p>
              </div>
              <div class="talk four">
                <h4><strong>TEM SUPORTE AO ALUNO ?</strong></h4>
                <div class="line d-flex justify-content-start w-100"><div class="lineInt"></div></div>
                <p>Sim, você terá um suporte qualificado a sua disposição para sanar todas as suas dúvidas e te ajudar na sua jornada de sucesso.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="talk five">
                <h4><strong>QUANTO CUSTA ?</strong></h4>
                <div class="line d-flex justify-content-start w-100"><div class="lineInt"></div></div>
                <p>O curso custa R$ 297 reais, porém estamos com um desconto especial onde você pode adquirir por R$147 você pode pagar no boleto quanto no cartão, podendo dividir em até 10 vezes no cartão de crédito.</p>
              </div>
              <div class="talk six">
                <h4><strong>O SITE É SEGURO ?</strong></h4>
                <div class="line d-flex justify-content-start w-100"><div class="lineInt"></div></div>
                <p>Sim, o site que gerencia nossos pagamentos é a HOTMART, que é o maior site de cursos digitais do Brasil.</p>
              </div>
              <div class="talk seven">
                <h4><strong>SÃO QUANTAS RECEITAS ?</strong></h4>
                <div class="line d-flex justify-content-start w-100"><div class="lineInt"></div></div>
                <p>Todas elas somam mais de +150 receitas, e todas elas estão em passo a passo.</p>
              </div>
              <div class="talk eight">
                <h4><strong>COMO IREI ACESSAR O CURSO?</strong></h4>
                <div class="line d-flex justify-content-start w-100"><div class="lineInt"></div></div>
                <p>Você recebe em seu email o link para acessar o curso, assistir as vídeo aulas e baixar nossas apostilas digitais.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="termos container-fluid justify-content-end d-flex">
          <div class="div mr-4 d-flex justify-content-between">
            <a href="https://enkantonature.com/termos-de-uso" target="_blank" >Termos de Uso</a>
            <p>-</p>
            <a href="https://enkantonature.com/politica-de-privacidade" target="_blank" >Política de Privacidade</a>
            <p>-</p>
            <a href="https://enkantonature.com/contato" target="_blank" >Contato</a>
          </div>
        </div>
      </section>
    </main>
    <a target="_blank" class="btn-whats" href="https://api.whatsapp.com/send?phone=5546991243184&amp;text=Entre+em+contato+agora"><svg fill="#FFF" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path></svg> Fale conosco</a>
    <footer>
      <div class="container">
        <div class="row flex-column align-items-center justify-content-center">
          <div class="img">
            <img src="assets/images/footer.webp" loading="lazy" alt="">
          </div>
          <div class="text">
            <p class="h4 "><strong>Cosméticos Artesanais Sem Segredos</strong></p>
            <p>Ao abordar questão como negócios, ganhos financeiros é de nossa responsabilidade afirmar que não há nenhuma garantia de ganho ou sucesso! O tema que é abordado neste curso é uma experiência real do seu autor, o que pode não refletir nos seus resultados. Sabendo disso, deixamos avisado por escrito que os resultados dependem do esforço e das estratégias usadas por cada um, cabendo a nós, responsáveis pelo curso, somente entregar um conteúdo de qualidade que o auxiliará na sua jornada de sucesso.</p>
            <div class="link d-flex flex-column align-items-center justify-content-center mb-4">
              <a class="mb-3" href="mailto:contato@enkantonature.com">contato@enkantonature.com</a>
              <a href="https://api.whatsapp.com/send?phone=5531998879017&text=Entre+em+contato+agora"><strong>WhatsApp (31)99887-9017</strong></a>
            </div>
            <p class="cpy">Copyright © 2021 · <a href="https://revistapegn.globo.com/Empreendedorismo/noticia/2017/08/empresa-fatura-r-24-milhoes-com-sabonetes-veganos.html" target="_blank">Enkanto Nature</a> · <strong>Todos os Direitos Reservados e Protegidos</strong></p>
          </div>
        </div>
      </div>
      <div class="lineFooter"></div>
    </footer>

    <!-- Meta Pixel Code -->
    <script>
    
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,"script",
      "https://connect.facebook.net/en_US/fbevents.js");
      fbq("init", "339560658178792");
      fbq("track", "PageView");

    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=339560658178792&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <script src="assets/js/script.js"></script>
  </body>
</html>
';

$cache = ob_get_contents();
ob_end_clean();
file_put_contents('index.html', $cache);
require('index.html');

} else {
  require('index.html');
}
?>