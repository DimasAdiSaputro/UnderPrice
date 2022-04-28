// Menganimasikan Ketika Hanger (induk kategori) Diklik
document.querySelectorAll(".hanger")[0].addEventListener("click", () => {
  let home = document.querySelectorAll(".home")[0];
  let warrior = document.querySelectorAll(".warrior")[0];
  let ventela = document.querySelectorAll(".ventela")[0];
  let pantrobas = document.querySelectorAll(".pantrobas")[0];

  // Mengalihkan Semua Kelas Element "hide-category" di Lingkaran Navigasi Kategori
  home.classList.toggle("hide-category");
  warrior.classList.toggle("hide-category");
  ventela.classList.toggle("hide-category");
  pantrobas.classList.toggle("hide-category");

  // Mengalihkan Semua Kelas Element "<category>-active" di Lingkaran Navigasi Kategori
  home.classList.toggle("home-active");
  warrior.classList.toggle("warrior-active");
  ventela.classList.toggle("ventela-active");
  pantrobas.classList.toggle("pantrobas-active");
  // AnimateCategory()
});
// Mengambil Gambar dari Tautan dan Mengubah innerHTML Element dengan Gambar yang Telah Diambil
fetch("../images/brand-assets/home-ico.svg")
  .then((e) => e.text())
  .then((res) => (document.querySelector("#home").innerHTML = res));
// Mengambil Gambar dari Tautan dan Mengubah innerHTML Element dengan Gambar yang Telah Diambil
fetch("../images/brand-assets/hanger-ico.svg")
  .then((e) => e.text())
  .then((res) => (document.querySelector("#hanger").innerHTML = res));

fetch("../images/brand-assets/warrior-logo.svg")
  .then((e) => e.text())
  .then((res) => (document.querySelector("#warrior").innerHTML = res));

fetch("../images/brand-assets/ventela-logo.svg")
  .then((e) => e.text())
  .then((res) => (document.querySelector("#ventela").innerHTML = res));

fetch("../images/brand-assets/pantrobas-logo.svg")
  .then((e) => e.text())
  .then((res) => (document.querySelector("#pantrobas").innerHTML = res));

// Mencegah Form Resubmission
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

// Mengubah Session "post" Ketika Kartu Produk Diklik
let cards = Array.prototype.slice.call(document.getElementsByClassName("card"));
cards.forEach((e) => {
  e.addEventListener("click", () => {
    sessionStorage.setItem("posY", window.pageYOffset);
  });
});

// Gulir Otomatis Halaman Saat Menyegarkan(refresh) ke Posisi Terakhir yang Disimpan di Session
document.addEventListener(
  "DOMContentLoaded",
  function () {
    if (sessionStorage.getItem("posY")) {
      window.scrollTo(0, sessionStorage.getItem("posY"));
    }
  },
  false
);