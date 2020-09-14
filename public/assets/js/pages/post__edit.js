//LazyLoading
const images = document.querySelectorAll("[data-style]");
const posts = document.querySelectorAll(".posts");
const Options = {
    root: null,
    threshold: 0,
    rootMargin: "0px 0px 100px 0px"
};

function preload(el) {
    const src = el.getAttribute("data-style");

    if (!src) {
        return;
    } else {
        el.style = src;
    }
}
const ImgOberserver = new IntersectionObserver((entries, ImgOberserver) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            preload(entry.target);
            ImgOberserver.unobserve(entry.target);
        }
    });
}, Options);

images.forEach(image => {
    ImgOberserver.observe(image);
});

const scrollOpt = {
    rootMargin: "0px 0px -100px 0px"
};
const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add("post--scrolled");
            appearOnScroll.unobserve(entry.target);
        }
    });
}, scrollOpt);

posts.forEach(post => {
    appearOnScroll.observe(post);
});
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
//Dropdown

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


//flash


const noti__box = document.querySelector(".noti");


window.addEventListener("load", () => {
    noti__box.classList.add("noti--get");

    setTimeout(() => {
        noti__box.classList.remove("noti--get");
    }, 2000);
});



