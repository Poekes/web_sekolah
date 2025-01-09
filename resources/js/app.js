import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.store("window", {
    FuncOnScroll: [],

    onscroll(callback) {
        this.FuncOnScroll.push(callback);
    },
});

Alpine.start();
window.onscroll = (event) => {
    Alpine.store("window").FuncOnScroll.forEach((element) => {
        element(event);
    });
};
