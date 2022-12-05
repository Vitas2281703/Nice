var minusBtn = document.querySelectorAll('.amount-input_btn-minus');
var plusBtn = document.querySelectorAll('.amount-input_btn-plus');
var input = document.querySelectorAll('.amount-input');
var subtotals = document.querySelectorAll('.service-list_item-subtotal');
var prices = document.querySelectorAll('.service-list_item-price_new');
var bonusInput = document.querySelector('#bonus-input');
var totalInput = document.querySelector('#totalInput');

function sumTotal(bonus){
    let sum = 0;
    let s = 0;
    for (let i = 1; i<subtotals.length; i++){
        s = subtotals[i].innerText.replace(' ₽', '');
        sum += parseInt(s);
    }
    if(bonus !== 0) {
        sum -= bonus;
    }
    totalInput.value = sum;
    document.getElementById('order-total').innerText = 'Итого: ' + sum + ' ₽';
}

function getAmount(){
    let amountsArray = Array.from(input, v=>v.value);
    let amountsInputs = document.getElementsByName('amounts[]');
    for(let i = 0; i < amountsInputs.length; i++){
        amountsInputs[i].value = amountsArray[i];
    }

}


window.onload = function (){
    for(let i = 0; i < input.length; i++) {
        input[i].value = 1
    }
    for(let i = 0; i < prices.length-2; i++) {
        subtotals[i+1].innerText = prices[i+2].innerText;
    }

    sumTotal(0);
    getAmount();
}

for(let i = 0; i < input.length; i++) {
    let subtotal = 0;
    let price = 0;
    minusBtn[i].onclick = function () {
        let val = parseInt(input[i].value);
        if (val > 1) {
            input[i].value = val - 1;
            subtotal = parseInt(subtotals[i+1].innerText.replace(' ₽', ''));
            price = parseInt(prices[i+2].innerText.replace(' ₽', ''));
            subtotal -= price;
            subtotals[i+1].innerText = subtotal + ' ₽';
            sumTotal(0);
            getAmount();
        }
    }

    plusBtn[i].onclick = function () {
        let val = parseInt(input[i].value);
        if (val < 10) {
            input[i].value = val + 1;
            subtotal = parseInt(subtotals[i+1].innerText.replace(' ₽', ''));
            price = parseInt(prices[i+2].innerText.replace(' ₽', ''));
            subtotal += price;
            subtotals[i+1].innerText = subtotal + ' ₽';
            sumTotal(0);
            getAmount();
        }
    }
}


document.querySelector('.preorder_btn').onclick = function (){
    document.querySelector('.preorder-form').submit();
}

bonusInput.oninput = function (){
    let val = parseInt(bonusInput.value);
    let max = parseInt(bonusInput.max);
    if (val > max){
        bonusInput.value = bonusInput.max;
        val = max;
    }
    if (isNaN(val)){
        val = 0;
    }
    document.getElementById('bonuses').value = val;
    sumTotal(val);
}
