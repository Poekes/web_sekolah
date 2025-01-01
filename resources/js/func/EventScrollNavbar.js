const mdn = document.getElementById("menuDropdown");
const sdn = document.getElementById("searchDropdown");
const navbar = document.getElementById("navbar");
let mdnfocus = false,
    lastPosScroll = 0;
mdn.onfocus = () => (mdnfocus = true);
mdn.onblur = () => (mdnfocus = false);

sdn.onfocus = () => (mdnfocus = true);
sdn.onblur = () => (mdnfocus = false);

const hiddenNavbarDom = () => {
    navbar.style.top = "-200px";
};
const OnNavbarDom = () => {
    navbar.style.top = "0.25rem";
};

function EventScrollNavbar(event) {
    if (mdnfocus) return; // ketika posisi dropdown muncul tidak terjadi event ini { Menu Dropdown }
    // window.scrollY;

    if (window.scrollY > lastPosScroll) {
        console.log("kebawah");
        hiddenNavbarDom();
    } else {
        console.log("atas");
        OnNavbarDom();
    }

    lastPosScroll = window.scrollY;

    // return "test";
}

export default EventScrollNavbar;
