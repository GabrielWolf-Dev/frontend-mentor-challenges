export default function form(){
    const form = document.querySelector('.contact-form__form');
    const inputRequire = document.querySelectorAll('input[required]');
    const subBtn = document.querySelector('.contact-form__submit');
    const spinLoadBox = document.querySelector('.contact-form__box-loading');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(e.target);
        const searchParams = new URLSearchParams();
        for(let input of formData){
            searchParams.append(input[0], input[1]);
        }
        const nameValidated = nameValidation(inputRequire[0].value);
        const emailValidated = emailValidation(inputRequire[1].value);
        const phoneValidated = phoneValidation(inputRequire[2].value);
        
        if(nameValidated && emailValidated && phoneValidated) {
            const request = new XMLHttpRequest();
            request.open('POST', './Source/sendForm.php', true);
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            request.onloadstart = () => {
                subBtn.classList.add('contact-form__submit--active');
                spinLoadBox.classList.add('contact-form__box-loading--active');
            }

            request.onloadend = () => {
                subBtn.classList.remove('contact-form__submit--active');
                spinLoadBox.classList.remove('contact-form__box-loading--active');

                for(let index = 0; index <= 3; index++){
                    e.target[index].value = '';
                }
            }
            request.onerror = () => {
                console.error('Ocorreu algum erro na requisição');
            }

            request.send(searchParams);
        }
    });

    function nameValidation(name){
        const regExpName = /^([A-Z]{1}[a-z]+\s?){2,}$/;
    
        if(!regExpName.test(name) === true){
            inputRequire[0].setCustomValidity('Please, insert your first name and nickname, starting upper case');
            showErrorIcon(0);
            return false;
        }else {
            showCheckIcon(0);
            inputRequire[0].setCustomValidity('');
            return true;
        }
    }
    
    function phoneValidation(phone) {
        const regExpPhone = /^(\(\d{2}\))\s?(\d{5}-\d{4})$/;
    
        if(!regExpPhone.test(phone) === true){
            inputRequire[2].setCustomValidity('Please insert your correctly phone number. Example: +44 (12) 76323-3321');
            showErrorIcon(2);
            return false;
        }else {
            showCheckIcon(2);
            inputRequire[2].setCustomValidity('');
            return true;
        }
    }
    
    function emailValidation(email){
        const regExpEmail = /^(\w+)@(gmail|hotmail|outlook|uol)(\.com|\.com\.br|\.net|\.org)$/;
    
        if(!regExpEmail.test(email) === true){
            inputRequire[1].setCustomValidity('Please, insert your correctly email. Only accept: hotmail, gmail, outlook or uol');
            showErrorIcon(1);
            return false;
        }else {
            showCheckIcon(1);
            inputRequire[1].setCustomValidity('');
            return true;
        }
    }

    function showErrorIcon(index) {
        inputRequire[index].classList.add('contact-form__input--error');
        inputRequire[index].classList.remove('contact-form__input--check');
    }
    
    function showCheckIcon(index) {
        inputRequire[index].classList.remove('contact-form__input--error');
        inputRequire[index].classList.add('contact-form__input--check');
    }
}