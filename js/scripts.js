const checkMenu = document.querySelector("#menu");
checkMenu.addEventListener("click", () => {
    const menu = document.querySelector("#menu-left");
    if (checkMenu.checked) {
        menu.style.left = "0";
    } else {
        menu.style.left = "-400px";
    }
})
const input = document.querySelectorAll(".campo-formulario");
const span = document.querySelectorAll(".contador-letras-contato")
const limite = 255;
const inputSubmit = document.querySelector("#botao-contato")
const formContato = document.querySelector("#form-contato")
span.forEach((el, i) => {
    el.innerHTML = "0/" + limite;
})
input.forEach((el, i) => {
    el.addEventListener("input", () => {
        const valorSplitado = el.value.split("");
        span[i].innerHTML = valorSplitado.length + "/" + limite;
        if (valorSplitado.length == 0) {
            span[i].classList.remove("permitido-contato")
            span[i].classList.remove("negado-contato")
            inputSubmit.disabled = false
        } else if (valorSplitado.length > limite) {
            span[i].classList.remove("permitido-contato")
            span[i].classList.remove("proximo-contato")
            span[i].classList.add("negado-contato")
            inputSubmit.disabled = true
        } else if (valorSplitado.length >= limite - 2 && valorSplitado.length != limite + 1) {
            span[i].classList.add("proximo-contato")
            span[i].classList.remove("permitido-contato")
            span[i].classList.remove("negado-contato")
            inputSubmit.disabled = false
        } else {
            span[i].classList.add("permitido-contato")
            span[i].classList.remove("negado-contato")
            span[i].classList.remove("proximo-contato")
            inputSubmit.disabled = false
        }
    })
})

formContato.addEventListener("submit", (e) => {
    e.preventDefault()
})

const titulo = document.querySelector("#titulo-banner");
function typeWriter(element) {

    const textoArray = element.innerHTML.split("")
    element.innerHTML = ""
    textoArray.forEach((letra, ind) => {
        setTimeout(() => {
            setTimeout(() => {
                element.innerHTML += letra
            }, 120 * ind);
        }, 500);
    })
}

typeWriter(titulo)
inputSubmit.addEventListener("submit", () => {
    setTimeout(() => {
        const alertBox = document.querySelector(".alert-box")
        alertBox.style.display = "none"
        console.log(alertBox)
    }, 400)
})

/*slider*/
const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1, //quantos aparecem quando muda
    pagination: {
        el: '.swiper-pagination' //qual o elemento da paginacao
    },
    mousewheel: true,
    keyboard: true,
    breakpoints: {
        767: {
            slidesPerView: 3,
            setWrapperSize: true
        }
    }
})
/*scroll reaveal */
const scrollReveal = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 700,
    reset: true //quando aixar td ele vai aparecer, confuso.
})
scrollReveal.reveal(
    `.habilidades .cards,
    .sobre .foto-sobre,
    .sobre .texto-sobre,
    .projetos .projetos-container,
    .contato form
    `,
    { interval: 100 }
)