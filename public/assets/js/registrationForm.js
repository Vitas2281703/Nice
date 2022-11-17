var inputs = document.querySelectorAll('.form-auth_input');
var btn = document.querySelector('.form-auth_btn');
var flags = [0, 0, 0, 0, 0];

for(let i = 0; i < inputs.length; i++){
    inputs[i].oninput = function (){
        switch (i){
            case 0:
                if (inputs[i].value.length > 0){
                    inputs[i].style = 'border: 1px solid var(--green);'
                    flags[i] = 1;
                }else {
                    inputs[i].style = 'border: 1px solid var(--grey-dark);'
                }
                break;
            case 1:
                console.log(inputs[i].value.length)
                if (inputs[i].value.length > 15){
                    inputs[i].style = 'border: 1px solid var(--green);'
                    flags[i] = 1;
                }
                else {
                    if (inputs[i].value.length == 0){
                        inputs[i].style = 'border: 1px solid var(--grey-dark);'
                        flags[i] = 0;
                    }else {
                        inputs[i].style = 'border: 1px solid var(--red);'
                        flags[i] = 0;
                    }
                }
                break;
            case 2:
                if (inputs[i].value.length > 5 && inputs[i].value.includes('@')){
                    inputs[i].style = 'border: 1px solid var(--green);'
                    flags[i] = 1;
                }else {
                    if (inputs[i].value.length == 0) {
                        inputs[i].style = 'border: 1px solid var(--grey-dark);'
                        flags[i] = 0;
                    }else {
                        inputs[i].style = 'border: 1px solid var(--red);'
                        flags[i] = 0;
                    }
                }
                break;
            case 3:
                if (inputs[i].value.length > 7){
                    inputs[i].style = 'border: 1px solid var(--green);'
                    flags[i] = 1;
                    if (inputs[i].value === inputs[i+1].value){
                        inputs[i+1].style = 'border: 1px solid var(--green);'
                        flags[i+1] = 1;
                    }
                }else {
                    if (inputs[i].value.length == 0) {
                        inputs[i].style = 'border: 1px solid var(--grey-dark);'
                        flags[i] = 0;
                    }else {
                        inputs[i].style = 'border: 1px solid var(--red);'
                        inputs[i+1].style = 'border: 1px solid var(--red);'
                        flags[i] = 0;
                        flags[i+1] = 0;
                    }
                }
                break;
            case 4:
                if (inputs[i].value === inputs[i-1].value){
                    inputs[i].style = 'border: 1px solid var(--green);'
                    flags[i] = 1;
                }else {
                    if (inputs[i].value.length == 0) {
                        inputs[i].style = 'border: 1px solid var(--grey-dark);'
                        flags[i] = 0;
                    }else {
                        inputs[i].style = 'border: 1px solid var(--red);'
                        flags[i] = 0;
                    }
                }
                break;
        }
        console.log(flags)
        if (
            flags[0] == 1 &&
            flags[1] == 1 &&
            flags[2] == 1 &&
            flags[3] == 1 &&
            flags[4] == 1 &&
            btn.classList.contains('disabled-btn')
           ){
                btn.classList.remove('disabled-btn');
            }
        else {
                btn.classList.add('disabled-btn');
            }
        }
    }
