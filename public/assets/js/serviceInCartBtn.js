window.onload = function (){
    let buttons = document.getElementsByClassName('service-list_item-btn-a');
    for(let i = 0; i < buttons.length; i++){
        if (buttons[i].innerText === 'В КОРЗИНЕ'){
            buttons[i].style = 'pointer-events: none;';
            console.log(buttons[i].firstChild);
            buttons[i].firstChild.nextSibling.style = 'background-color: var(--green);';
        }
    }
}
