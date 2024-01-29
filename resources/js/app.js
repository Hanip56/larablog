import "./bootstrap";

import Editor from "@toast-ui/editor";
// import "codemirror/lib/codemirror.css";
import "@toast-ui/editor/dist/toastui-editor.css";
import Alpine from "alpinejs";

Alpine.start();

window.Alpine = Alpine;

const editor = new Editor({
    el: document.querySelector("#editor"),
    height: "400px",
    initialEditType: "markdown",
    placeholder: "Write something cool!",
});

const createPostForm = document.getElementById("create-post-form");

document.addEventListener("DOMContentLoaded", function () {
    const preDescription = createPostForm.querySelector("#description").value;

    if (preDescription) {
        editor.setMarkdown(preDescription);
    }
});

createPostForm.addEventListener("submit", function (e) {
    e.preventDefault();
    createPostForm.querySelector("#description").value = editor.getMarkdown();
    e.target.submit();
});
