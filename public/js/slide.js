function page(){
    let btnsc = document.querySelector(".ici");
    let btnsc1 = document.querySelector(".ici1")
    let btnsc3 = document.querySelector(".ici2")
    let con = document.querySelector(".seco");
    let select = document.querySelector(".seco1");
    let sec2 = document.querySelector(".seco2");
    let btnsec2 = document.querySelector('.admin');

    btnsc.addEventListener("click",()=>{
        con.classList.add('active');
        select.classList.add('active');
    });
    btnsc1.addEventListener("click", ()=>{
        con.classList.remove('active');
        select.classList.remove('active');
    })
    btnsec2.addEventListener("click", ()=>{
        sec2.classList.add('active');
        select.classList.add('miakatra');
    });
    btnsc3.addEventListener("click", ()=>{
        con.classList.remove('active');
        select.classList.remove('active');
        sec2.classList.remove('active');
        select.classList.remove('miakatra');
    })


}setInterval(page,100);

// function slide(){
// let img = document.querySelector('img');
// let img1 = document.querySelector('.img2');
// let btnleft = document.querySelector('.left');
// let btnright = document.querySelector('.right');

// btnleft.addEventListener("click", ()=>{
//     img.classList.add('next');
//     img1.classList.add('and');
// });

// }setInterval(slide,100);
// function click(){
//     let img = document.querySelector('img');
//     let img1 = document.querySelector('.img2');
//     let btnright = document.querySelector('.right');

//     btnright.addEventListener("click", ()=>{
//         img.classList.remove('next');
//         img1.classList.remove('and');
//     });

// }setInterval(click,100);

function fen(){
    let sec = document.querySelectorAll('.list');
    let btn = document.querySelectorAll('.a-voit');
    btn.forEach((element,index)=>{
        element.addEventListener("click",()=>{
            btn.forEach((e,i)=>{
                if(element != e){
                    sec[i].classList.remove('active');
                }
                else{
                    sec[i].classList.add(('active'));
                }
            });
        });
    })
}setInterval(fen,100);

