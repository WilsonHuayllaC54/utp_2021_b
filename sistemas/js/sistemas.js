const logo_prevnc = document.querySelector('.logo_sis')
const prevencionbot = document.querySelector('.sistemas')


logo_prevnc.addEventListener('click', ()=>{
    prevencionbot.classList.toggle("spread3")
})

window.addEventListener('click', e =>{
    if(prevencionbot.classList.contains('spread3') 
        && e.target != prevencionbot && e.target != logo_prevnc){
        console.log('close')
        prevencionbot.classList.toggle("spread3")
    }
})