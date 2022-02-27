let suConcat = '<h1>Sign Up</h1>'
const signupForm = document.querySelector('#signupForm')
const suNames = ["course", "firstname", "lastname", "pwd", "cpwd"]
const suTypes = ["text", "text", "text", "password", "password"]
const suLabels = ["course", "first name", "last name", "password", "confirm password"]

const suIsLabelActive = (reference) => 
    event.target.value === undefined || event.target.value.trim() === ""
    ? document.querySelector(reference).classList.replace('active', 'inactive')
    : document.querySelector(reference).classList.replace('inactive', 'active')

for (let index = 0; index < suNames.length; index++) {
    suConcat += `<div class="textfield">
        <label class="label inactive" id="${suNames[index]+suTypes[index]}">${suLabels[index]}</label>
        <input class="input" name=${suNames[index]} type=${suTypes[index]}
            onblur="suIsLabelActive('${'#'+suNames[index]+suTypes[index]}')"
            onfocus="document.querySelector('${'#'+suNames[index]+suTypes[index]}').classList.replace('inactive', 'active')" />
    </div>`
}

signupForm.innerHTML = suConcat