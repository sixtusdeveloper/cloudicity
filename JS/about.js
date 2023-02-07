const redirect = document.querySelector('#about-more')
let assoc_url =
  'http://localhost/xampp/PHP-NEW-PROJECT/Cloud-Website/index.html'

function get_url(event) {
  event.preventDefault()
  window.location.replace(assoc_url)
}

redirect.addEventListener('click', function (event) {
  get_url(event)
})

function set_user_url() {
  window.location.href = 'index.php'
}

function redirect_url_doc() {
  window.location.href = 'docs.php'
}

function get_url_assoc() {
  window.location.href = 'index.php'
}

function contact_form() {
  window.location.href = 'index.php'
}
