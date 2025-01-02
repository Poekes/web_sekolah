const mdn = document.getElementById("menuDropdown"),
    sdn = document.getElementById("searchDropdown"),
    navbar = document.getElementById("navbar");
let mdnfocus = false,
    lastPosScroll = 0;
mdn.onfocus = () => (mdnfocus = true);
mdn.onblur = () => (mdnfocus = false);

sdn.onfocus = () => (mdnfocus = true);
sdn.onblur = () => (mdnfocus = false);

const hiddenNavbarDom = () => {
    // navbar akan menghilang ke atas
    navbar.style.top = "-200px";
};
const OnNavbarDom = () => {
    // navbar akan turun
    navbar.style.top = "0.25rem";
};

export default function EventScrollNavbar(event) {
    if (mdnfocus) return; // ketika posisi dropdown muncul tidak terjadi event ini { Menu Dropdown }

    if (window.scrollY > lastPosScroll)
        hiddenNavbarDom(); // ketika scroll ke atas
    else OnNavbarDom(); //ketika scroll kebawah

    lastPosScroll = window.scrollY;
}
