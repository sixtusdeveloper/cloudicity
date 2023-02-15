function fetch_user_url() {
  window.location.href = 'about.html'
}

// Get the navbar element
const navbar = document.querySelector('#navbar')

// Get the offset position of the navbar
const navbarOffset = navbar.offsetTop

// Add a scroll event listener to the window
window.addEventListener('scroll', () => {
  // Check if the user has scrolled past the navbar
  if (window.pageYOffset >= navbarOffset) {
    // Add the 'scrolled' class to the navbar
    navbar.classList.add('sticky')
  } else {
    // Remove the 'scrolled' class from the navbar
    navbar.classList.remove('sticky')
  }
})
