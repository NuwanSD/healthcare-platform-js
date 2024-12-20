<?php
include '../db/connection.php';
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Appointments</title>
    <!-- font-awesome -->
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
    <!--styles-->
    <link rel="stylesheet" href="appointment.css" />
  </head>
  <body>
    <main>
      <section class="">
        <nav class="navbar navbar-expand-lg bg-body-secondary px-3 py-4">
          <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
              <img src="../images/logo-2.png" alt="" height="62px" />
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
                  <a class="nav-link active" href="./about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./services.html">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./contact.php">Contact</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </section>

      <section class="form-section">
        <div class="form-component">
          <h3>Book Your Appointment</h3>
          <div>
            <form method="POST" action="">
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="patientName"
                  name="patientName"
                  placeholder="name@example.com"
                />
                <label for="patientName">Patient Name</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="patientNIC"
                  placeholder="name@example.com"
                  name="patientNIC"
                />
                <label for="patientNIC" class="form-label">Patient NIC</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  placeholder="address"
                  name="address"
                />
                <label for="address" class="form-label">Address</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="email"
                  name="email"
                />
                <label for="email" class="form-label">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="phone"
                  placeholder="phone"
                  name="phone"
                />
                <label for="phone" class="form-label">Contact Number</label>
              </div>
              <div class="mb-3" style="display: flex">
                <label for="gender" class="form-label me-4">Gender</label>
                <div class="form-check me-4">
                  <input
                    class="form-check-input"
                    value="male"
                    type="radio"
                    name="gender"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    value="female"
                    type="radio"
                    name="gender"
                    id="flexRadioDefault2"
                    checked
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
                </div>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="number"
                  class="form-control"
                  id="age"
                  placeholder="age"
                  name="age"
                />
                <label for="age" class="form-label">Age</label>
              </div>
              <?php
                $sql = "SELECT MBBS_No, Doctor_Surname, Speciality FROM Doctor";
                $result = $conn->query($sql);
                
                
                ?>
              <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="select">
                  <?php
                  
                  if ($result->num_rows > 0) {
                    echo "<option selected>Select Doctors</option>";
                    while($row = $result->fetch_assoc()) {
                      echo "<option value=". $row["MBBS_No"].">". $row["Doctor_Surname"]. "-" . $row["Speciality"]."</option>";
                      //echo "id: " . $row["MBBS_No"]. " - Name: " . $row["Doctor_Initials"]. " " . $row["Doctor_Surname"]. "-" . $row["Speciality"]. "<br>";
                    }
                  } else {
                    echo "<option selected>No Doctors Available</option>";
                  }

                  ?>

                </select>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text">Description</span>
                <textarea
                  class="form-control"
                  aria-label="With textarea"
                  name="description"
                ></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div class="form-image">
          <img src="../images/img-02.jpg" alt="" width="100%" />
        </div>
      </section>

      <section class="footer">
        
          <div class="row">
            <div class="col">
              <img src="../images/logo-2.png" alt="" height="62px" />
              <p>
                Medicare Hospital is a private hospital committed to delivering
                exceptional healthcare across a range of specialties for more
                than 75 years.
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
      <!--javascript-->
      <script type="module" src="appointment.js"></script>
    </main>
  </body>
  <?php




      if (isset($_POST["patientNIC"])) {
        $Patient_NIC=$_POST['patientNIC'];
        $Patient_Name=$_POST['patientName'];
        $Address=$_POST['address'];
        $Gender=$_POST['gender'];
        $Age=$_POST['age'];
        $Email=$_POST['email'];
        $Contact_No=$_POST['phone'];
        $Select=$_POST['select'];
        $Description=$_POST['description'];
        $sql = "INSERT INTO appointment (Patient_NIC, Patient_Name, Age, Address, Gender, Email, Contact_No, Doctor, Description) VALUES ('$Patient_NIC', '$Patient_Name', '$Age', '$Address', '$Gender', '$Email', '$Contact_No', '$Select', '$Description')";
      
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }

      ?>
</html>
