const modal = document.querySelector('.window-notifications'),
      bell = document.querySelector('.notifications'),
      close = document.querySelector('.close');
let active = false;
function openModal(){
    modal.style.display ='block';
}
function closeModal(){
    modal.style.display = 'none';
}

bell.addEventListener('click',(e) =>{
    if(active === false)
    {
        active = true;
        openModal();
    }else{
        active = false;
        close.addEventListener('click',() => {
            closeModal();
        });
    }
});


