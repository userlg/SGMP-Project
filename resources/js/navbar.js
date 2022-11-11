

const btn = document.getElementById("navbarButton");

const navbar = document.getElementById("navbarSupportedContent");

var sw = false;

btn.addEventListener("click", () => {

    if (!sw) {
        sw = true;
        navbar.classList.remove("collapse");
        navbar.classList.add("visible");
    }
    else {
        sw = false;
        navbar.classList.remove("visible");
        navbar.classList.add("collapse");
    }
})