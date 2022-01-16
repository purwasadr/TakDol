//require('./bootstrap');

require('bootstrap');

const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

title.addEventListener('change', function () {
    fetch('/seller/myproducts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
});

function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    const divImgProduct = document.querySelector('#div-img-product');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
        if (imgPreview.src != "") {
            divImgProduct.classList.remove('bg-plus-icon');
        }
    }

    console.log(inputImage.value);
}

const inputImage = document.querySelector('#image');
const divImgProduct = document.querySelector('#div-img-product');
const imgPreview = document.querySelector('.img-preview');

// inputImage.addEventListener('change', function(e) {
//   if (e.target.value != '' && e.target.value != null) {
//     divImgProduct.classList.remove('bg-plus-icon');
//   } else {
//     divImgProduct.classList.add('bg-plus-icon');
//   }
// });
