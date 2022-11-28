let serviceFilterForm = document.getElementById('serviceFilterForm');

let serviceFilterFormSelect = serviceFilterForm.getElementsByTagName('select');

serviceFilterForm.onload = function (){
    if (serviceFilterFormSelect[0].value !== '0'){
        serviceFilterFormSelect[1].disabled = false;
    }
}

for(let i = 0; i < serviceFilterFormSelect.length; i++){
    serviceFilterFormSelect[i].oninput = function (){
        serviceFilterForm.submit();
    }
}


