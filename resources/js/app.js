//require('./bootstrap');

// require("bootstrap");
import Alpine from "alpinejs";
const bootstrap = require("bootstrap");

Alpine.data("inputCounter", (maxCount = 1) => ({
    count: 1,
    init() {},

    validateCounter() {
        if (this.count > maxCount) {
            this.count = maxCount;
        } else if (this.count < 1) {
            this.count = 1;
        }
    },
    increase() {
        if (this.count < maxCount) this.count++;
    },
    decrease() {
        if (this.count > 1) this.count--;
    },
}));

window.Alpine = Alpine;

Alpine.start();

const toastEl = document.getElementById("toast");

const toast1 = new bootstrap.Toast(toastEl);

Livewire.on("toast", (a) => {
    console.log(a);
    toastEl.getElementsByClassName("toast-body")[0].textContent = a;
    toast1.show();
});

const title = document.querySelector("#title");
const slug = document.querySelector("#slug");

title.addEventListener("change", function () {
    fetch("/seller/myproducts/checkSlug?title=" + title.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
});

function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");
    const divImgProduct = document.querySelector("#div-img-product");

    imgPreview.style.display = "block";

    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
        if (imgPreview.src != "") {
            divImgProduct.classList.remove("bg-plus-icon");
        }
    };

    console.log(inputImage.value);
}

const inputImage = document.querySelector("#image");
const divImgProduct = document.querySelector("#div-img-product");
const imgPreview = document.querySelector(".img-preview");

// inputImage.addEventListener('change', function(e) {
//   if (e.target.value != '' && e.target.value != null) {
//     divImgProduct.classList.remove('bg-plus-icon');
//   } else {
//     divImgProduct.classList.add('bg-plus-icon');
//   }
// });
