export default function form(){
    const form = document.querySelector('.contact-form__form');
    
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(e.target);
        const searchParams = new URLSearchParams();
        for(let input of formData){
            searchParams.append(input[0], input[1]);
        }
        const structureRes = {
            method: "POST",
            body: searchParams,
        };

        try {
            const res = await fetch(`./Source/sendForm.php`, structureRes);

            if(res.ok){ // FAZER VALIDAÇÃO EM Js
                alert('Sucesso!');

                // Cleaning the inputs:
                for(let index = 0; index <= 3; index++){
                    e.target[index].value = '';
                    console.log(index);
                }
            } else {
                alert('Ocorreu algum erro!');
            }
        } catch(error) {
            console.error(error);
        } 
    });
}