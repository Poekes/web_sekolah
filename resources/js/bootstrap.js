import axios from "axios";
import "../css/app.css";
import "quill/dist/quill.snow.css";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
