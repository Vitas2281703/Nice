let serviceFilterForm = document.getElementById('serviceFilterForm');

let serviceFilterFormSelect = serviceFilterForm.getElementsByTagName('select');

for(let i = 0; i < serviceFilterFormSelect.length; i++){
    serviceFilterFormSelect[i].oninput = function (){
        if (i === 0){
            serviceFilterFormSelect[1].value = '0';
            serviceFilterFormSelect[2].value = '0';
        }
        if (i === 1){
            serviceFilterFormSelect[2].value = '0';
        }

        console.log(serviceFilterFormSelect[0].value);
        console.log(serviceFilterFormSelect[1].value);
        console.log(serviceFilterFormSelect[2].value);
        serviceFilterForm.submit();
    }
}

let resetFormBtn = document.getElementById('reset-filter-btn');

resetFormBtn.onclick = function (){
    for(let i = 0; i < serviceFilterFormSelect.length; i++){
        serviceFilterFormSelect[i].value = '0';
    }
    serviceFilterForm.submit();
}
