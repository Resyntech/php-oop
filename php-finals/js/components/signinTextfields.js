let siConcat = '<h1>Sign In</h1>'
const signinForm = document.querySelector('#signinForm')
const siNames = ["email", "pwd"]
const siTypes = ["email", "password"]
const siLabels = ["email", "Password"]

const siIsLabelActive = (reference) => 
    event.target.value === undefined || event.target.value.trim() === ""
    ? document.querySelector(reference).classList.replace('active', 'inactive')
    : document.querySelector(reference).classList.replace('inactive', 'active')

for (let index = 0; index < siNames.length; index++) {
    siConcat += `<div class="textfield">
        <label class="label inactive" id="${siNames[index]+siTypes[index]}">${siLabels[index]}</label>
        <input class="input" name=${siNames[index]} type=${siTypes[index]}
            onblur="siIsLabelActive('${'#'+siNames[index]+siTypes[index]}')"
            onfocus="document.querySelector('${'#'+siNames[index]+siTypes[index]}').classList.replace('inactive', 'active')" />
    </div>`
}

signinForm.innerHTML = siConcat