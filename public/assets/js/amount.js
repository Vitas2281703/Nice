var minusBtn = document.querySelectorAll('.amount-input_btn-minus');
var plusBtn = document.querySelectorAll('.amount-input_btn-plus');
var input = document.querySelectorAll('.amount-input');

console.log(minusBtn);
console.log(plusBtn);
console.log(input);

window.onload = function (){
    for(let i = 0; i < input.length; i++) {
        input[i].value = 1
    }
}

for(let i = 0; i < input.length; i++) {
    minusBtn[i].onclick = function () {
        console.log(i)
        let val = parseInt(input[i].value);
        console.log(val)
        if (val > 1) {
            input[i].value = val - 1;
        }
    }

    plusBtn[i].onclick = function () {
        console.log(i)
        let val = parseInt(input[i].value);
        console.log(val)
        if (val < 10) {
            input[i].value = val + 1;
        }
    }
}


document.querySelector('.preorder_btn').onclick = function (){
    document.querySelector('.preorder-form').submit();
}
