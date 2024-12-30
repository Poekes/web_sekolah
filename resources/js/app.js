import "./bootstrap";
import Quill from "quill";
const toolbarOptions = [
    [{ size: ["small", false, "large", "huge"] }], // custom dropdown
    [{ header: [1, 2, 3, 4, 5, 6, false] }],
    [{ header: 1 }, { header: 2 }], // custom button values

    ["bold", "italic", "underline", "strike"], // toggled buttons
    ["blockquote", "code-block"],

    [{ align: [] }],
    [{ color: [] }, { background: [] }], // dropdown with defaults from theme
    [{ font: [] }],

    [{ list: "ordered" }, { list: "bullet" }, { list: "check" }],
    [{ script: "sub" }, { script: "super" }], // superscript/subscript
    [{ indent: "-1" }, { indent: "+1" }], // outdent/indent
    [{ direction: "rtl" }], // text direction

    ["link", "image", "video"],
    ["clean"], // remove formatting button
];

// Modifikasi Blot Blockquote
const Blockquote = Quill.import("formats/blockquote");

// Tambahkan Custom Class
Blockquote.create = function () {
    const node = document.createElement("blockquote");
    node.className = "blockqoute";
    node.setAttribute(
        "style",
        " padding-left: 10px; padding:10px; margin:5px 0 5px 0; border-color :#cdcdcdf1; "
    );
    return node;
};

Quill.register(Blockquote, true); // Register format yang telah dimodifikasi

const quill = new Quill("#editor", {
    modules: {
        toolbar: {
            container: toolbarOptions,
            handlers: {
                // image: function () {
                //     const input = document.createElement("input");
                //     input.setAttribute("type", "file");
                //     input.setAttribute("accept", "image/*");
                //     input.click();
                //     input.onchange = async () => {
                //         console.log(input.files[0]);
                //     };
                // },
            },
        },
    },

    theme: "snow",
});
document.getElementById("result").onclick = (e) => {
    const wadah = document.getElementById("wadah");
    wadah.innerHTML = quill.root.innerHTML;
};

quill.on("text-change", (e) => {
    const wadah = document.getElementById("wadah");
    wadah.innerHTML = quill.root.innerHTML;
    console.log(quill.root.innerHTML);
    // quill.root.querySelectorAll("blockquote").forEach((v, i) => {
    //     const p = document.createElement("p");
    //     p.innerHTML = `${v.innerHTML} | ${v}`;
    //     v.appendChild(p);
    // });
});

quill.on("editor-change", (event, obj) => {
    console.log(event);
});
