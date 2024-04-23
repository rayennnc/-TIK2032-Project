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
