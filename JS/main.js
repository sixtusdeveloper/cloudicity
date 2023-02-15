function fetch_user_url() {
  window.location.href = 'about.html'
}

// Get the navbar element
const navbar = document.querySelector('#navbar')

window.onscroll = () => {
  if (window.scrollY > 20) {
    navbar.classList.add('sticky')
  } else {
    navbar.classList.remove('sticky')
  }
}
