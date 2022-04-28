if ((new URL(window.location.href)).searchParams.get('done_send')) {
    document.querySelector('.alert').style.display = 'block'
    let form = document.querySelector('.form-container')
    window.scrollTo(0, form.offsetTop)
}
// Mengubah URL ketika tombol close pada alert ditekan
document.querySelector('.closebtn').addEventListener('click', function () {
    this.parentElement.style.display = 'none';
    window.history.pushState({}, null, window.location.href.split('?')[0])
})