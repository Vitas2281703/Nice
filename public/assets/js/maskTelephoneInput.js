document.addEventListener('DOMContentLoaded', () => {

    const inputElement = document.querySelector('.form-auth_input-telephone') // ищем наш единственный input
    const maskOptions = { // создаем объект параметров
        mask: '+{7}(000)000-00-00' // задаем единственный параметр mask
    }
    IMask(inputElement, maskOptions) // запускаем плагин с переданными параметрами

})
