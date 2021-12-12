const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

title.addEventListener('change', function() {
  fetch('/seller/myproducts/checkSlug?title=' + title.value)
  .then(response => response.json())
  .then(data => slug.value = data.slug)
});

function previewImage() {
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();

  oFReader.readAsDataURL(image.files[0]);
  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}