<?php
include '../../db/connection.php';

// Logout functionality
if (isset($_POST['logout'])) {
  // Destroy the session (this will log the user out)
  session_start();
  session_destroy();
  header("Location: ../login.php"); // Redirect to login page
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./record.css" />
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg bg-body-secondary px-3 py-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">
            <img src="../logo-2.png" alt="" height="62px" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="../index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./appointment.php"
                  >Appointment</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./record.php">Record</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./profile.html">Profile</a>
              </li>
            </ul>
            <!-- Logout Button -->
            <form class="d-flex" method="POST">
              <button class="btn btn-outline-danger" name="logout" type="submit">
                Logout
              </button>
            </form>
          </div>
        </div>
      </nav>
    </section>

    <section class="record">
      <div class="header">
        <h3>Patient Records</h3>

        <button
          type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          New Record +
        </button>
      </div>

      
      <?php
        $sql = "SELECT Patient_NIC, MBBS_No, Diagnosis, Treatment, Record_Date, Prescription FROM medical_record";
        $result = $conn->query($sql);
        
        ?>
        
      <div class="table-data">

      <?php
          
          if ($result->num_rows > 0) {
              // Display the table header
              echo '<table class="table table-bordered">
                      <thead>
                          <tr>
                              <th scope="col">Patient NIC</th>
                              <th scope="col">MBBS No</th>
                              <th scope="col">Diagnosis</th>
                              <th scope="col">Treatment</th>
                              <th scope="col">Date</th>
                              <th scope="col">Prescription</th>
                              
                          </tr>
                      </thead>
                      <tbody>';
              
              // Fetch and display each row
              while ($row = $result->fetch_assoc()) {
                  echo '<tr>
                          <td>' . ($row["Patient_NIC"]) . '</td>
                          <td>' . ($row["MBBS_No"]) . '</td>
                          <td>' . ($row["Diagnosis"]) . '</td>
                          <td>' . ($row["Treatment"]) . '</td>
                          <td>' . ($row["Record_Date"]) . '</td>
                          <td>' . ($row["Prescription"]) . '</td>
                        </tr>';
              }
          
          
              echo '</tbody>
                  </table>';
          } else {
              
              echo "<p>No results found</p>";
          }
          
          
        ?>
        
      </div>
    </section>

    <section>
      <!-- Modal -->
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Add Medical Record
              </h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form action="" method="POST">
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="mbbsNo"
                    placeholder="mbbsno"
                    name="mbbs"
                  />
                  <label for="patinetName">MBBS NO</label>
                </div>

                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="patientNIC"
                    placeholder="patient_NIC"
                    name="patientNIC"
                  />
                  <label for="patientNIC" class="form-label">Patient NIC</label>
                </div>

                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="diagnosis"
                    placeholder="diagnosis"
                    name="diagnosis"
                  />
                  <label for="diagnosis" class="form-label">Diagnosis</label>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text">Treatment</span>
                  <textarea
                    class="form-control"
                    aria-label="With textarea"
                    name="treat"
                  ></textarea>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text">Prescription</span>
                  <textarea
                    class="form-control"
                    aria-label="With textarea"
                    name="prescription"
                  ></textarea>
                </div>

                <div class="form-floating mb-3">
                  <input
                    type="date"
                    class="form-control"
                    id="date"
                    placeholder="date"
                    name="date"
                  />
                  <label for="phone" class="form-label">Record Date</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button type="button" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      
        <div class="row">
          <div class="col">
            <img src="../logo-2.png" alt="" height="62px" />
            <p>
              Medicare Hospital is a private hospital committed to delivering
              exceptional healthcare across a range of specialties for more than
              75 years.
            </p>
          </div>

          <div class="col">
            <h4>Address</h4>
            <p>Medicare Hospital (Pvt) Ltd</p>
            <p>232/1,Evergreen Park Rd</p>
            <p>Narahenpita, Colombo 05</p>
          </div>

          <div class="col">
            <h4>Contact Us</h4>
            <p>medicare@gmail.com</p>
            <p>+124563789</p>
            <p>+124563789</p>
          </div>

          <div class="col">
            <h4>Location</h4>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126734.45919258721!2d79.93157764248046!3d6.955905724675635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1730910033779!5m2!1sen!2slk"
              width="100%"
              height="182"
              style="border: 0"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
     
    </section>
  </body>
  <?php




      if (isset($_POST["patientNIC"])) {
        $MBBS_No=$_POST['mbbs'];
        $Patient_NIC=$_POST['patientNIC'];
        $Diagnosis=$_POST['diagnosis'];
        $Treatment=$_POST['treat'];
        $Prescription=$_POST['prescription'];
        $Date=$_POST['date'];
        
        $sql = "INSERT INTO medical_record (Patient_NIC,	MBBS_No,	Diagnosis,	Treatment,	Record_Date,	Prescription) VALUES ('$MBBS_No', '$Patient_NIC', '$Diagnosis', '$Treatment', '$Date', '$Prescription')";
      
        if (mysqli_query($conn, $sql)) {
          echo "<script>alert('New record created successfully');</script>";
        } else {
          $error = mysqli_real_escape_string($conn, mysqli_error($conn)); // Escape error message for safety
          echo "<script>alert('Error: $error');</script>";
        }
      }

      ?>
</html>