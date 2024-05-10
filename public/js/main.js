// let word = document.querySelector(".world").value
// let lang = document.querySelector(".lang").value
// let result= document.querySelector(".result")
// let btn = document.querySelector(".btn")
// let api = async()=>{
//     try{
//         let res = await fetch ("https://api.dictionaryapi.dev/api/v2/entries/en/tsisy");

//         let data = await res.json();
//         return data;
//     }
//     catch (error){
//         console.log(error);
//     }
// }

// let resultat = api().then(e=>{
//     e.forEach(element => {
//         console.log(element.phonetics[0]);
//         result.src=element.phonetics[0].audio
//     });
// })
function connect(){
    let connexion = document.querySelector('.connect');
    let page = document.querySelector('.connexion');
    let body = document.querySelector('body');

    connexion.addEventListener("click",()=>{
        page.classList.add('mis');
        body.classList.add('mis');
    })
}setTimeout(connect,100);

function exit(){
    let body = document.querySelector('body');
    let page = document.querySelector('.connexion');
    let exit = document.querySelector('.ikisa');

    exit.addEventListener("click", ()=>{
        body.classList.remove('mis');
        page.classList.remove('mis');
    })

}setTimeout(exit,100);

function navclick(){
let nav = document.querySelector('.nav');
let navsmall = document.querySelector('.nav-small');

nav.addEventListener("click", ()=>{
    navsmall.classList.add('active');
});

}setTimeout(navclick,100);


function scroll(){
    let scrolY = window.scrollY;
    let w = window.innerWidth;
    let sec = document.querySelector('.dif');
        if(scrolY>450){
            sec.classList.add('active');

        }
        else{
            sec.classList.remove('active');
        }
}setInterval(scroll,100);

// function price(){
//     let place = document.querySelector('input[place]');
//     let total = document.querySelector('input[total]');
//     let val = total.value;
//     let placeval = place.value

//     if (placeval === 1) {
//         totalval = val;
//     } else{
//         totalval = val*placeval
//         totalval.appendChild(total.value);
//     }
// }setInterval(price,100);
