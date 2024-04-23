document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
  }

  window.onload = function() {
    const navItems = document.querySelectorAll("nav ul li a");

    navItems.forEach(item => {
        item.addEventListener("mouseover", function() {
            this.style.color = "red";
            this.style.transition = "color 0.3s ease";
        });

        item.addEventListener("mouseout", function() {
            this.style.color = "white";
            this.style.transition = "color 0.3s ease";
        });
    });
};
