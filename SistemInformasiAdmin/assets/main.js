document.addEventListener("DOMContentLoaded", function () {
    var sidebar = document.querySelector(".sidebar");
    var toggle_button = document.querySelector(".toggle-button");

    toggle_button.addEventListener("click", () => {
        toggle_button.classList.toggle("__active");
        sidebar.classList.toggle("__active");
        let title_elem = document.querySelectorAll(".title");
        for (let i = 0; i < title_elem.length; i++) {
            title_elem[i].classList.toggle("__active");
        }
    });

    var list = document.querySelectorAll(".sidebar-list");

    for (let i = 0; i < list.length; i++) {
        list[i].addEventListener("click", function () {
            let x = 0;
            while (x < list.length) {
                list[x++].className = "sidebar-list";
            }
            list[i].className = "sidebar-list __active";
        });
    }
})

