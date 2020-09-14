//Hamburger Toggle
const wrapper = document.querySelector(".main");
const hamburger = document.querySelector(".nav-toggle");

hamburger.addEventListener("click", () => {
    document.querySelector(".hamburger").classList.toggle("is-active");
    wrapper.classList.toggle("is-active");
});

//Dark Mode

let darkMode = localStorage.getItem("darkMode");
const darkModeToggle = document.querySelector(".darkmode");
const darkModeButton = document.querySelector(".darkmode-toggler");
const theme = document.querySelector(".item-text");
const enableDarkMode = () => {
    document.body.classList.add("dark");
    document.body.classList.remove("light");
    darkModeToggle.classList.add("toggle-clicked");
    localStorage.setItem("darkMode", "enabled");
};

const disableDarkMode = () => {
    document.body.classList.remove("dark");
    document.body.classList.add("light");
    darkModeToggle.classList.remove("toggle-clicked");
    localStorage.setItem("darkMode", null);
};

if (darkMode === "enabled") {
    enableDarkMode();
    theme.textContent = "Dark Theme: On";
} else {
    document.body.classList.add("light");
    theme.textContent = "Dark Theme: Off";
}

darkModeToggle.addEventListener("click", () => {
    darkMode = localStorage.getItem("darkMode");

    if (darkMode != "enabled") {
        enableDarkMode();
        theme.textContent = "Dark Theme: On";
    } else {
        disableDarkMode();
        theme.textContent = "Dark Theme: Off";
    }
});
const dropdown = document.querySelectorAll(".dropdown");
const dropdown__list = document.querySelectorAll(".dropdown--list");
const dropdown__list_arr = Array.from(dropdown__list);
const arrow = document.querySelectorAll(".arrow");
const arrow_arr = Array.from(arrow);
const dropdown_arr = Array.from(dropdown);
for (let i = 0; i < dropdown_arr.length; i++) {
    dropdown_arr[i].addEventListener("click", () => {
        console.log("clicked");
        arrow[i].classList.toggle("arrow--clicked");
        dropdown__list[i].classList.toggle("dropdown--clicked");
    });
}

//Smooth Scroll

/*function smoothScroll(target_element, duration) {
    let target = document.querySelector(target_element);
    let targetPosition = target.offsetTop;
    console.log(targetPosition);
    let startPosition = window.pageYOffset;
    let distance = targetPosition - startPosition;
    let startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        let timeElasped = currentTime - startTime;
        let run = ease(timeElasped, startPosition, distance, duration);
        window.scrollTo(0, run);

        if (timeElasped < duration) {
            window.requestAnimationFrame(animation);
        }
    }

    function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return (c / 2) * t * t + b;
        t--;
        return (-c / 2) * (t * (t - 2) - 1) + b;
    }
    console.log(`${targetPosition} ${distance}`);
    window.requestAnimationFrame(animation);
}

const shit = document.querySelector('.shit');
console.log(shit);
shit.addEventListener('click', () => {
    smoothScroll('.footer', 1000);
    console.log('clicked');
}); */

//Cursor
const cursor = document.querySelector(".cursor");

document.addEventListener("mousemove", e => {
    cursor.setAttribute(
        "style",
        "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;"
    );
});

document.addEventListener("click", () => {
    cursor.classList.add("expand");

    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500);
});