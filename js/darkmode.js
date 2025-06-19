let darkmode = localStorage.getItem("darkmode");
const themeSwitch = document.getElementById("theme-switch");
const nav1 = document.getElementById("nav1");

const enableDarkmode = () => {
    document.body.classList.add("darkmode");
    localStorage.setItem("darkmode", "active");
    // document.getElementsByTagName("hr").style.borderTop="100px solid #fff";
    nav1.classList.add("navbar-dark");
};

const disableDarkmode = () => {
    document.body.classList.remove("darkmode");
    localStorage.setItem("darkmode", null);
    // document.getElementsByTagName("hr").style.borderTop="100px solid #000";
    nav1.classList.remove("navbar-dark");
};

if (darkmode === "active") enableDarkmode();

themeSwitch.addEventListener("click", () => {
    darkmode = localStorage.getItem("darkmode");
    darkmode !== "active" ? enableDarkmode() : disableDarkmode();
});
