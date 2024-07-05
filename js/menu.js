const navMenu = document.getElementById('nav-menu');
const navToggle = document.getElementById('nav-toggle');
const navClose = document.getElementById('nav-close');
const navLink = document.querySelectorAll('.nav__link');
const btn = document.querySelectorAll('.btn');

/*~~~~~~~~~~~~~~~ DARK LIGHT THEME ~~~~~~~~~~~~~~~*/
const themebutton = document.getElementById('theme-button');

if (localStorage.getItem('mode') == 'dark') {
   darkmode();
} else {
   lightmode();
}

themebutton.addEventListener('click', (e) => {
   if (localStorage.getItem('mode') == 'light') {
      darkmode();
   } else {
      lightmode();
   }
});

function darkmode() {
   document.body.classList.add('dark-theme');
   themebutton.classList.replace('fa-moon', 'fa-sun');
   localStorage.setItem('mode', 'dark');
}

function lightmode() {
   document.body.classList.remove('dark-theme');
   themebutton.classList.replace('fa-sun', 'fa-moon');
   localStorage.setItem('mode', 'light');
}

btn.addEventListener('click', () => {
   btn.classList.toggle('active');
});
