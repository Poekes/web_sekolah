import "./bootstrap";
import Alpine from "alpinejs";
import EventScrollNavbar from "./func/EventScrollNavbar";

window.Alpine = Alpine;

Alpine.start();

window.onscroll = (event) => {
    EventScrollNavbar(event);
};
