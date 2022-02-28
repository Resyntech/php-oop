let grConcat = '<h1>Get your Grades</h1>'
const grForm = document.querySelector('#gradesForm')
// const grNames = []
// const grTypes = []
// const grLabels = []

// const grIsLabelActive = (reference) => 
//     event.target.value === undefined || event.target.value.trim() === ""
//     ? document.querySelector(reference).classList.replace('active', 'inactive')
//     : document.querySelector(reference).classList.replace('inactive', 'active')

// for (let index = 0; index < grNames.length; index++) {
//     grConcat += `<div class="textfield">
//         <label class="label inactive" id="${grNames[index]+grTypes[index]}">${grLabels[index]}</label>
//         <input class="input" name=${grNames[index]} type=${grTypes[index]}
//             onblur="grIsLabelActive('${'#'+grNames[index]+grTypes[index]}')"
//             onfocus="document.querySelector('${'#'+grNames[index]+grTypes[index]}').classList.replace('inactive', 'active')" />
//     </div>`
// }

grForm.innerHTML = grConcat