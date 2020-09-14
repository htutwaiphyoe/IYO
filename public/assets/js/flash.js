const noti__box = document.querySelector(".noti");


window.addEventListener("load", () => {
    noti__box.classList.add("noti--get");

    setTimeout(() => {
        noti__box.classList.remove("noti--get");
    }, 2000);
});
