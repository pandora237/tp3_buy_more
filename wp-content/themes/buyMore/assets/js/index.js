
// start message 
const containerChat = document.querySelector('#chat-container')
const boxChat = containerChat.querySelector('#chat-box')
const closeChat = containerChat.querySelector('#close-btn')
const chatToggle = containerChat.querySelector('#chatToggle')


closeChat.addEventListener('click', (e) => {
    if (!boxChat.classList.contains('hide-chat')) {
        boxChat.classList.add('hide-chat')
    }
})

chatToggle.addEventListener('click', (e) => {
    if (boxChat.classList.contains('hide-chat')) {
        boxChat.classList.remove('hide-chat')
    }
})
// end messages


// validation
function validation(val, type) {
    switch (type) {
        case 'email': {
            const regex = /^[\w.-]+@[\w.-]+\.\w{2,}$/;
            if (!regex.test(val)) {
                return {
                    isValid: false,
                    messages: 'Adresse e-mail invalide.'
                };
            }
            return {
                isValid: true,
                messages: 'Adresse e-mail valide.'
            };
        }

        case 'phone': {
            const regex = /^(?:\+?\d{1,3})?[ .-]?\d{6,14}$/;
            if (!regex.test(val)) {
                return {
                    isValid: false,
                    messages: 'Numéro de téléphone invalide.'
                };
            }
            return {
                isValid: true,
                messages: 'Numéro de téléphone valide.'
            };
        }

        case 'password': {
            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            if (!regex.test(val)) {
                return {
                    isValid: false,
                    messages: 'Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un symbole.'
                };
            }
            return {
                isValid: true,
                messages: 'Mot de passe valide.'
            };
        }

        default: {
            if (!val || val.length < 2) {
                return {
                    isValid: false,
                    messages: 'Ce champ doit contenir au moins 2 caractères.'
                };
            }
            return {
                isValid: true,
                messages: 'Valeur valide.'
            };
        }
    }
}

function HtmlValidate(input) {
    const parentDiv = input.parentElement
    const description = parentDiv.querySelector('.description-form')
    const dataType = input.getAttribute('data-type')
    const val = input.value
    const resultat = validation(val, dataType)

    if (input.tagName.toLowerCase() == 'select') {
        resultat.messages = 'choix invalide.'
    }
    description.innerHTML = resultat.messages
    if (resultat.isValid) {
        parentDiv.classList.remove('error-validation')
        return true
    }
    parentDiv.classList.add('error-validation')
    return false
}

function isSubmittable(inputs) {
    let isValid = true
    inputs?.forEach(input => {
        if (!HtmlValidate(input)) {
            isValid = false
            return
        }
    })
    if (isValid) {
        return true
    }
    return false
}





