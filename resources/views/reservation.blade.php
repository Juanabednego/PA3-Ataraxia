<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reservasi Restoran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
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
      width: 100%;
      margin-top: 20px;
    }

    .btn-primary {
      background: #ffc107;
      border: none;
    }
  </style>
</head>

<body>
@include('layouts.Navbar')
  <div class="reservation-container">
    <div class="step-indicator">
      <div class="step" id="step-label-1">
        <div class="step-number">1</div>
        <div>Reservation</div>
      </div>
      <div class="step inactive" id="step-label-2">
        <div class="step-number">2</div>
        <div>Information</div>
      </div>
    </div>

    <!-- Step 1 -->
    <div id="step1">
      <form>
        <div class="mb-3">
          <label class="form-label">Adults</label>
          <select class="form-select">
          <option selected>0 Adult</option>
            <option>1 Adult</option>
            <option >2 Adults</option>
            <option>3 Adults</option>
            <option>4 Adult</option>
            <option >5 Adults</option>
            <option>6 Adults</option>
            <option>7 Adult</option>
            <option >8 Adults</option>
            <option>9 Adults</option>
            <option>10 Adults</option>
          </select>
        </div>
        <div class="mb-3">  
          <label class="form-label">Children</label>
          <select class="form-select">
            <option selected>0 Child</option>
            <option>1 Child</option>
            <option>2 Children</option>
            <option>3 Child</option>
            <option>4 Children</option>
            <option>5 Child</option>
            <option>6 Children</option>
            <option>7 Child</option>
            <option>8 Children</option>
            <option>9 Child</option>
            <option>10 Children</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Date</label>
          <input type="date" class="form-control" value="2025-04-11" />
        </div>
        <div class="mb-3">
          <label class="form-label">Time</label>
          <input type="time" class="form-control" value="12:00" />
        </div>

        <div class="house-rules mb-3">
          <strong>House Rules:</strong>
          <ul>
            <li>Restaurant dining time is limited to 2 hours</li>
            <li><strong>Please state your preferred dining area (smoking/non-smoking)</strong> in the special request box. This request is not guaranteed and subject to availability.</li>
            <li>Reservation will be held for 15 minutes past booking time</li>
            <li>For groups above 10 people, please contact us directly on WhatsApp</li>
          </ul>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" checked />
          <label class="form-check-label">I have read and agree to the above terms and conditions.</label>
        </div>
        <div class="d-flex justify-content-between">
          <a href="/" class="btn btn-secondary" >Back</a>
          <button type="button" class="btn btn-primary" onclick="showStep(2)">Next</button>
        </div>
      </form>
    </div>

    <!-- Step 2 -->
    <div id="step2" style="display: none">
      <form>
        <h5 class="mb-4">
          We have a table for you at <strong>Ataraxia</strong>
        </h5>

        <div class="row mb-3">
          <div class="col-md-2">
            <select class="form-select">
              <option>Mr.</option>
              <option>Mrs.</option>
              <option>Ms.</option>
            </select>
          </div>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="First Name" required />
          </div>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Last Name" />
          </div>
        </div>

        <div class="mb-3">
          <input type="email" class="form-control" placeholder="Email Address" required />
        </div>

        <div class="mb-3 row">
          <div class="col-md-3">
            <input type="text" class="form-control" value="+62" disabled />
          </div>
          <div class="col-md-9">
            <input type="tel" class="form-control" placeholder="Phone Number" required />
          </div>
        </div>

        <div class="mb-3">
          <textarea class="form-control" maxlength="85" placeholder="Message (Maximum 85 characters.)"></textarea>
        </div>


        <div class="form-check mb-4">
          <input class="form-check-input" type="checkbox" />
          <label class="form-check-label">
            I’d love to receive personalised dining recommendations and deals!
          </label>
        </div>

        <div class="d-flex justify-content-between">
          <button type="button" class="btn btn-secondary" onclick="showStep(1)">Back</button>
          <button type="submit" class="btn btn-primary">Confirm Booking</button>
        </div>
      </form>
    </div>
  </div>
   <!-- Modal Konfirmasi -->
   <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Berhasil Mengirimkan Permintaan</h5>
                </div>
                <div class="modal-body text-center">
                    <p>Anda akan mendapatkan notifikasi jika sudah dikonfirmasi</p>
                </div>
                <div class="modal-footer">
                    <a href="/" class="btn btn-success w-100">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
@include('layouts.footer')
  <script>
    function showStep(step) {
      document.getElementById("step1").style.display = step === 1 ? "block" : "none";
      document.getElementById("step2").style.display = step === 2 ? "block" : "none";
      document.getElementById("step-label-1").classList.toggle("inactive", step !== 1);
      document.getElementById("step-label-2").classList.toggle("inactive", step !== 2);
    }

    document.addEventListener("DOMContentLoaded", function () {
  const formStep2 = document.querySelector("#step2 form");
  formStep2.addEventListener("submit", async function (e) {
    e.preventDefault();

    const data = {
      name: document.querySelector('input[placeholder="First Name"]').value + ' ' +
            document.querySelector('input[placeholder="Last Name"]').value,
      email: document.querySelector('input[placeholder="Email Address"]').value,
      phone: document.querySelector('input[placeholder="Phone Number"]').value,
      date: document.querySelector('input[type="date"]').value,
      time: document.querySelector('input[type="time"]').value,
      people: document.querySelectorAll("select.form-select")[0].value + ', ' +
              document.querySelectorAll("select.form-select")[1].value,
      note: document.querySelector("textarea").value
    };

    try {
      const response = await fetch("/reservation", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify(data)
      });

      if (response.ok) {
        const modal = new bootstrap.Modal(document.getElementById("confirmationModal"));
        modal.show();
      } else {
        alert("Failed to save reservation.");
      }
    } catch (error) {
      console.error("Error submitting reservation:", error);
      alert("An error occurred.");
    }
  });
});


  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
