const alert = document.querySelectorAll('.alert');
for (let i = 0; i < alert.length; i++) {
    setTimeout(() => {
        alert[i].classList.add('active');
    }, 1000);
    setTimeout(() => {
        alert[i].style.display = 'none';
    }, 3600);
}





