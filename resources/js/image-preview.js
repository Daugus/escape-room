"use strict";

const fileChanged = document.querySelector('[name="fileChanged"]');

const changePreview = () => {
    const [file] = inputFile.files;
    if (!file) return;

    fileChanged.value = "true";

    const preview = document.querySelector("#image-preview");

    if (preview) return (preview.src = URL.createObjectURL(file));

    const img = document.createElement("img");
    img.src = URL.createObjectURL(file);
    img.id = "image-preview";
    img.classList.add("h-32");
    document.querySelector("#preview-container").appendChild(img);
};

const inputFile = document.querySelector('[type="file"]');

inputFile.addEventListener("input", changePreview);

if (document.querySelector("#image-preview")) {
    changePreview();
    fileChanged.value = "false";
}
