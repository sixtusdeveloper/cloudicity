// Vanila script Validation
const form = document.querySelector('#form')
const userName = document.querySelector('#name')
const userEmail = document.querySelector('#email')
const userCompany = document.querySelector('#company')

// When submited
form.addEventListener('submit', (event) => {
  validateForm()
  if (isFormValid() === true) {
    form.submit()
  } else {
    event.preventDefault()
  }
})

// Validating the submission process
function isFormValid() {
  const inputContainers = form.querySelectorAll('.form-control')
  let result = true
  inputContainers.forEach((container) => {
    if (container.classList.contains('error')) {
      result = false
    }
  })
  return result
}

// Form Validation
function validateForm() {
  // UserName
  if (userName.value.trim() == '') {
    setError(userName, 'Name must not be empty!')
  } else if (
    userName.value.trim().length < 3 ||
    userName.value.trim().lenghth > 20
  ) {
    setError(userName, 'Name must be min 3 and max 20 chars!')
  } else {
    setSuccess(userName)
  }

  // Email
  if (userEmail.value.trim() == '') {
    setError(userEmail, 'Provide Email address!')
  } else if (isEmailValid(userEmail.value)) {
    setSuccess(userEmail)
  } else {
    setError(userEmail, 'Provide a valid Email address!')
  }

  // UserCompany
  if (userName.value.trim() == '') {
    setError(userCompany, 'field must not be empty!')
  } else if (
    userCompany.value.trim().length < 3 ||
    userCompany.value.trim().lenghth > 20
  ) {
    setError(userCompany, 'field must not be min 3 & max 20 chars')
  } else {
    setSuccess(userCompany)
  }

  // Defining the error function
  function setError(element, errorMessage) {
    const parent = element.parentElement
    if (parent.classList.contains('success')) {
      parent.classList.remove('success')
    }
    parent.classList.add('error')
    const paragraph = parent.querySelector('#error-msg')
    paragraph.textContent = errorMessage
  }

  function setSuccess(element) {
    const parent = element.parentElement
    if (parent.classList.contains('error')) {
      parent.classList.remove('error')
    }
    parent.classList.add('success')
  }

  // Email validation
  function isEmailValid(email) {
    const reg = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
    return reg.test(email)
  }
}

function loader() {
  document.querySelector('.loader-container').classList.add('fade-out')
}

function fadeOut() {
  setInterval(loader, 3000)
}

window.onload = fadeOut()
