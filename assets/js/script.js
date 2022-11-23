// Seleciona o elemento que contém as animacoes
let elem = document.querySelector('.col-sm-12.col-md-12.col-lg-12.col-xl-12.two');

// Função auxiliar que verifica se o scroll esta sob o elemento

let isScrolledIntoView = (elem) => {
    let docViewTop = window.scrollY;
    let docViewBottom = docViewTop + window.innerHeight;

    let elemTop = elem.offsetTop;
    let elemBottom = elemTop + elem.clientHeight;

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

// Variavel auxiliar par previnir varias execuções
let executed = false; 

window.addEventListener('scroll', () => {
  if(isScrolledIntoView(elem)) {
    if(!executed) {     
      // Marca como executado
      executed = true;

      (() => {
        // Código sendo executado

        const tempo_intervalo = 4; //ms -> define a velocidade da animação
        const tempo = 2000; //ms -> define o tempo total da animaçao

        document.querySelectorAll('.counter-up').forEach((e) => {
          let number = document.getElementById("counter");
          
          let count_to = parseInt(number.getAttribute('data-count-to'));
          
          let intervalos = tempo / tempo_intervalo; //quantos passos de animação tem
          let incremento = count_to / intervalos; //quanto cada contador deve aumentar
          let valor = 0;
          

          let timer = setInterval(() => {
            if(valor >= count_to) {
              valor = count_to;
              clearInterval(timer);
            }

            let texto = valor.toFixed(0).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
            number.innerHTML = texto;
            valor += incremento;
          }, tempo_intervalo);

        })

      })();
    }
  }
});


let divImgs = document.querySelector('.col-sm-12.col-md-12.col-lg-12.col-xl-12.one');
let imgs = document.querySelectorAll("img.animate");
let executou = false;

window.addEventListener('scroll', () => {
  if(isScrolledIntoView(divImgs)) {
    
    if(!executou) {

      executou = true;
      imgs.forEach((e) => {
        
        e.style.animation = "zoom .9s";
      }) 


    } 
  }
});

let btn = document.querySelector('a.btn-green2');
let exe = false;

window.addEventListener('scroll', () => {
  if(isScrolledIntoView(btn)) {

    if(!exe) {
      exe = true;
      btn.style.animation = 'pulse 1s';

    } 
  }
});

let video = document.getElementById('video');
if(window.innerWidth < 768) {
  video.setAttribute('src', 'assets/video/Curso Cosméticos Artesanais - Enkanto Nature.mp4');
} else {
  video.setAttribute('src', 'assets/video/Curso Cosméticos Artesanais - Enkanto Nature novo.mp4');
}