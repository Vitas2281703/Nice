let serviceFilterForm = document.getElementById('serviceFilterForm');

let serviceFilterFormSelect = serviceFilterForm.getElementsByTagName('select');
console.log(serviceFilterFormSelect)

for(let i = 0; i < serviceFilterFormSelect.length; i++){
    serviceFilterFormSelect[i].oninput = function (){
        serviceFilterForm.submit();
    }
}


