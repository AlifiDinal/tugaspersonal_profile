<!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="templates_userr/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="templates_userr/assets/vendor/php-email-form/validate.js"></script>
  <script src="templates_userr/assets/vendor/aos/aos.js"></script>
  <script src="templates_userr/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="templates_userr/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="templates_userr/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="templates_userr/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="templates_userr/assets/js/main.js"></script>

  <!-- Bagian HTML kamu -->
<section class="ftco-section" id="skill">
    ...
</section>

<!-- ✅ Tambahkan JavaScript di sini, sebelum penutup body -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.read-more-btn');

    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const shortText = this.previousElementSibling.previousElementSibling;
            const fullText = this.previousElementSibling;

            if (fullText.classList.contains('d-none')) {
                fullText.classList.remove('d-none');
                shortText.classList.add('d-none');
                this.textContent = 'Tampilkan Lebih Sedikit';
            } else {
                fullText.classList.add('d-none');
                shortText.classList.remove('d-none');
                this.textContent = 'Baca Selengkapnya';
            }
        });
    });
});
</script>

</body>
</html>


</body>

</html>