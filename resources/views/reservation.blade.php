<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Reservasi Restoran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f9f9f9;
      padding: 40px 20px;
    }

    .reservation-container {
      background: #fff;
      border-radius: 15px;
      padding: 30px;
      max-width: 700px;
      margin: auto;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .step-indicator {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
    }

    .step {
      text-align: center;
      flex: 1;
    }

    .step-number {
      background: #ffc107;
      color: #fff;
      font-weight: bold;
      width: 40px;
      height: 40px;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      margin-bottom: 5px;
    }

    .step.inactive .step-number {
      background: #ddd;
    }

    .house-rules {
      background: #f1f1f1;
      padding: 15px;
      border-radius: 10px;
      font-size: 14px;
    }

    .btn-primary,
    .btn-secondary {
      background: #F44336;
      width: 100%;
      margin-top: 20px;
    }

    .btn-primary {
      background: #4CAF50;
      border: none;
    }
  </style>
</head>

<body>
  <div class="reservation-container">
    <div class="step-indicator">
      <div class="step" id="step-label-1">
        <div class="step-number">1</div>
        <div>Reservasi</div>
      </div>
      <div class="step inactive" id="step-label-2">
        <div class="step-number">2</div>
        <div>Detail</div>
      </div>
    </div>

    <!-- Step 1 -->
    <div id="step1">
      <form>
        <div class="mb-3">
          <label class="form-label">Dewasa</label>
          <input type="number" class="form-control" id="adults" value="0" min="0" max="75" placeholder=""
            onfocus="clearZero(this)" />
        </div>

        <div class="mb-3">
          <label class="form-label">Anak-Anak</label>
          <input type="number" class="form-control" id="children" value="0" min="0" max="75" placeholder=""
            onfocus="clearZero(this)" />
        </div>

        <div class="mb-3">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date" />
        </div>
        <div class="mb-3">
          <label class="form-label">Waktu</label>
          <input type="time" class="form-control" id="time" />
        </div>

        <div class="house-rules mb-3">
          <strong>Peraturan :</strong>
          <ul>
            <li>Datang lah Tepat Waktu</li>
            <li><strong>Telat 30 menit tanpa konfirmasi dianggap Batal</strong></li>
            <li>Dilarang membawa makanan dari luar</li>
            <li>Untuk Konfirmasi lebih lanjut silahkan hubungi kontak kami</li>
          </ul>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="agree" />
          <label class="form-check-label">Saya telah membaca dan menyetujui syarat dan ketentuan di atas.</label>
        </div>

        <div class="d-flex justify-content-between">
          <a href="/" class="btn btn-secondary">Kembali</a>
          <button type="button" class="btn btn-primary" onclick="validateStep1()">Berikutnya</button>
        </div>
      </form>
    </div>

    <!-- Step 2 -->
    <div id="step2" style="display: none">
      <form>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="Masukkan Nama anda" id="email" required />
        </div>

        <div class="mb-3 row">
          <div class="col-md-3">
            <input type="text" class="form-control" value="+62" disabled />
          </div>
          <div class="col-md-9">
            <input type="tel" class="form-control" placeholder="Nomor Telepon" id="phone" required />
          </div>
        </div>

        <div class="mb-3">
          <textarea class="form-control" maxlength="85" placeholder="Pesan (Maksimal 85 karakter.)"></textarea>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" type="checkbox" id="promotions" />
          <label class="form-check-label">Saya ingin sekali menerima rekomendasi dan penawaran tempat makan yang dipersonalisasi!</label>
        </div>

        <div class="d-flex justify-content-between">
          <button type="button" class="btn btn-secondary" onclick="showStep(1)">Kembali</button>
          <button type="button" class="btn btn-primary" onclick="validateStep2()">Konfirmasi Booking</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function showStep(step) {
      document.getElementById("step1").style.display = step === 1 ? "block" : "none";
      document.getElementById("step2").style.display = step === 2 ? "block" : "none";
      document.getElementById("step-label-1").classList.toggle("inactive", step !== 1);
      document.getElementById("step-label-2").classList.toggle("inactive", step !== 2);
    }

    function clearZero(input) {
      if (input.value === "0") input.value = "";
    }

    function validateStep1() {
      const adults = document.getElementById("adults").value;
      const children = document.getElementById("children").value;
      const date = document.getElementById("date").value;
      const time = document.getElementById("time").value;
      const agree = document.getElementById("agree").checked;

      // Validasi semua field harus diisi
      if (!adults || !children || !date || !time) {
        alert("Harap lengkapi semua kolom.");
        return;
      }

      // Validasi minimal 1 orang (dewasa atau anak)
      if (parseInt(adults) === 0 && parseInt(children) === 0) {
        alert("Harap masukkan jumlah minimal 1 orang (dewasa atau anak-anak).");
        return;
      }

      // Validasi persetujuan
      if (!agree) {
        alert("Harap centang persetujuan syarat dan ketentuan.");
        return;
      }

      // Validasi tanggal tidak boleh di masa lalu
      const selectedDate = new Date(date);
      const today = new Date();
      today.setHours(0, 0, 0, 0);
      if (selectedDate < today) {
        alert("Tanggal tidak boleh di masa lalu.");
        return;
      }

      showStep(2);
    }

    function validateStep2() {
      const name = document.getElementById("email").value.trim(); // Sebenarnya ini field nama, bukan email
      const phone = document.getElementById("phone").value.trim();
      const message = document.querySelector("#step2 textarea").value.trim();

      // Validasi semua field wajib
      if (!name || !phone) {
        alert("Nama dan nomor telepon wajib diisi.");
        return;
      }

      // Validasi format nomor telepon (minimal 9 digit, maksimal 15 digit)
      const phoneRegex = /^[0-9]{9,15}$/;
      if (!phoneRegex.test(phone)) {
        alert("Nomor telepon hanya boleh angka (9-15 digit).");
        return;
      }

      // Validasi panjang pesan (opsional)
      if (message.length > 85) {
        alert("Pesan maksimal 85 karakter.");
        return;
      }

      // Jika semua validasi berhasil
      alert("Reservasi berhasil dikonfirmasi!");
      
      // Di sini bisa tambahkan kode untuk submit form atau redirect
      // Contoh: document.forms[0].submit();
    }
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
