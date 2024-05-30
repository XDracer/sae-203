const form = document.querySelector('form');
const inputs = document.querySelectorAll('input[type="text"], input[type="pw"]');
console.log(inputs, form);
function shakeInputs(e) {

    inputs.forEach((input) => {
        if (!input.value) {
            input.classList.add('shake');
            e.preventDefault();
        }
    });
}

if(form != null){
    form.addEventListener('submit', (e) => shakeInputs(e));
}