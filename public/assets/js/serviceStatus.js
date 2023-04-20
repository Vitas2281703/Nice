var statusPaymentList = document.getElementsByClassName('status-payment');
var statusProgressList = document.getElementsByClassName('status-progress');
var statusPaymentBtnList = document.getElementsByClassName('service-list_item-btn');
window.onload = function (){
    for (i = 0; i<statusPaymentList.length; i++ ){
         switch (statusPaymentList[i].innerText){
             case 'Оплачен':
                 statusPaymentList[i].style = 'color: var(--green);';
                 statusPaymentBtnList[i].innerText = 'Оплачено'
                 statusPaymentBtnList[i].style = 'pointer-events: none; background-color: var(--green);'
                 break;
             case 'Не оплачено':
                 statusPaymentList[i].style = 'color: var(--red);';
                 break;
             case 'Возврат':
                 statusPaymentList[i].style = 'color: var(--blue);';
                 statusPaymentBtnList[i].innerText = 'Возврат'
                 statusPaymentBtnList[i].style = 'pointer-events: none; background-color: var(--grey-dark);'
                 break;
        }
    }
    for (i = 0; i<statusProgressList.length; i++ ){
        switch (statusProgressList[i].innerText){
            case 'Создан':
                statusProgressList[i].style = 'color: var(--blue);';
                statusPaymentBtnList[i].style = 'pointer-events: none; background-color: var(--grey-dark);';
                break;
            case 'Принят':
                statusProgressList[i].style = 'color: var(--blue);';
                statusPaymentBtnList[i].style = 'pointer-events: none; background-color: var(--grey-dark);';
                break;
            case 'Обработан':
                statusProgressList[i].style = 'color: var(--blue);';
                statusPaymentBtnList[i].style = 'pointer-events: none; background-color: var(--grey-dark);';
                break;
            case 'В работе':
                statusProgressList[i].style = 'color: var(--blue);';
                statusPaymentBtnList[i].style = 'pointer-events: none; background-color: var(--grey-dark);';
                break;
            case 'Готов к выдаче':
                statusProgressList[i].style = 'color: var(--green);';
                break;
            case 'Завершен':
                statusProgressList[i].style = 'color: var(--green);';
                break;
            case 'Отменен':
                statusProgressList[i].style = 'color: var(--red);';
                statusPaymentBtnList[i].style = 'pointer-events: none; background-color: var(--grey-dark);';
                break;


        }
    }
}
