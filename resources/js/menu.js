const menuBtns = [...document.querySelectorAll(".menu__btn")];

menuBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        let target = btn.getAttribute("data-dropdown");
        target = document.querySelector(`#${target}`);
        target.classList.toggle("menu__list-active");
    })
})