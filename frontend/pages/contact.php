<section id="contact" class="contact section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Contac</h2>
      <h6 class="fw-bold">Hubungin kami jika ingin bertanya/mengasih saran.</h6>
    </div>

    <div class="row gy-4">
      <!-- Kiri: Info Kontak -->
      <div class="col-lg-4">
        <div class="d-flex mb-4" data-aos="fade-up">
          <div class="icon-circle me-3">
            <i class="bi bi-geo-alt-fill text-warning"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-1">Alamat</h5>
            <p class="mb-0">Kweden Trirenggo Bantul. </p>
          </div>
        </div>

        <div class="d-flex mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-circle me-3">
            <i class="bi bi-telephone-fill text-warning"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-1">Contact</h5>
            <p class="mb-0">+62 895-1809-2195</p>
          </div>
        </div>

        <div class="d-flex mb-3" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-circle me-3">
            <i class="bi bi-envelope-fill text-warning"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-1">Email</h5>
            <p class="mb-0">alifidinalmaul@gmail.com</p>
          </div>
        </div>
      </div>

      <!-- Kanan: Form -->
      <div class="col-lg-8">
        <form action="./actions/contact.php" method="post" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder=" Masukan Nama...." required>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder=" Masukan Email...." required>
            </div>
            <div class="col-md-12">
              <input type="text" name="subject" class="form-control" placeholder=" Masukuan Judul/Pesan...." required>
            </div>
            <div class="col-md-12">
              <textarea name="message" rows="6" class="form-control" placeholder="Pesan...." required></textarea>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit" name="tombol" class="btn btn-primary">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
