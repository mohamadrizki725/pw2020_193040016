const keyword = document.querySelector('#keyword');
const tombolCari = document.querySelector('#btnCari');
const bungkus = document.querySelector('#bungkus');

tombolCari.style.display = 'none';

keyword.addEventListener('keyup', function () {

  fetch('../ajax/ajax_admin.php?key=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (bungkus.innerHTML = response));
});
