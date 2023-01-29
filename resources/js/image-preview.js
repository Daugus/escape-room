"use strict";

const changePreview = () => {
    const [file] = inputFile.files;
    if (!file) return;

    const preview = document.querySelector("#image-preview");

    if (preview) return (preview.src = URL.createObjectURL(file));

    const img = document.createElement("img");
    img.src = URL.createObjectURL(file);
    img.id = "image-preview";
    document.querySelector("#preview-container").appendChild(img);
};

const inputFile = document.querySelector('[type="file"]');

inputFile.addEventListener("input", changePreview);

if (document.querySelector("#image-preview")) changePreview();
