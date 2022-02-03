export default function validate(){
    const form = document.querySelector('.form-contact');
    const inputPhone = document.querySelector('#phone');
    
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const form = e.target;
        const datas = new FormData(form);

        const name = datas.get('name');
        const email = datas.get('email');
        const phone = datas.get('phone');
        const message = datas.get('msg');

        console.log(name, email, phone, message)
    });

    inputPhone.addEventListener('blur', (e) => {
        let value = e.target.value;

        const isCel = value.length === 13;
        let textAdjusted;

        if(value.length === 0)
            return e.target.value = '';

        if(isCel) {
            const part1 = value.slice(0,3);
            const part2 = value.slice(3,9);
            const part3 = value.slice(9,13);

            textAdjusted = `${part1}${part2}-${part3}`;        
        } else {
            const part1 = value.slice(0,3);
            const part2 = value.slice(3,8);
            const part3 = value.slice(8,12);

            textAdjusted = `${part1}${part2}-${part3}`;
        }
    
        e.target.value = textAdjusted;
    });

    inputPhone.addEventListener('focus', (e) => {
        const value = e.target.value;
        const textAdjusted = value.replace(/\-/g, '');

        e.target.value = textAdjusted;
    })
}