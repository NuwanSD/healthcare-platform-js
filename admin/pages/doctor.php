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
    <title>Admin Dashboard</title>
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
    <link rel="stylesheet" href="./doctor.css" />
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
                <a class="nav-link active" href="./doctor.php">Doctor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./record.php">Record</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./contact.php">Contact</a>
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

    <section class="doctor">
      <div class="header">
        <h3>Doctors' Detials</h3>
        <button
          type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          New Doctor +
        </button>
      </div>

        <?php
        $sql = "SELECT MBBS_No, Doctor_Surname, Age, Gender, Speciality, Doctor_NIC, Email, Available_time, Available_date FROM doctor";
        $result = $conn->query($sql);
        
        ?>

      <div class="table-data">

      <?php
          
          if ($result->num_rows > 0) {
              // Display the table header
              echo '<table class="table table-bordered">
                      <thead>
                          <tr>
                              <th scope="col">MBBS No</th>
                              <th scope="col">Name</th>
                              <th scope="col">Age</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Speciality</th>
                              <th scope="col">NIC</th>
                              <th scope="col">Email</th>
                              <th scope="col">Time</th>
                              <th scope="col">Date</th>
                          </tr>
                      </thead>
                      <tbody>';
              
              // Fetch and display each row
              while ($row = $result->fetch_assoc()) {
                  echo '<tr>
                          <td>' . ($row["MBBS_No"]) . '</td>
                          <td>' . ($row["Doctor_Surname"]) . '</td>
                          <td>' . ($row["Age"]) . '</td>
                          <td>' . ($row["Gender"]) . '</td>
                          <td>' . ($row["Speciality"]) . '</td>
                          <td>' . ($row["Doctor_NIC"]) . '</td>
                          <td>' . ($row["Email"]) . '</td>
                          <td>' . ($row["Available_time"]) . '</td>
                          <td>' . ($row["Available_date"]) . '</td>
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
                Add New Doctor
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
                    id="doctorName"
                    placeholder="name@example.com"
                    name="doctorName"
                  />
                  <label for="doctorName">Doctor Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="doctortNIC"
                    placeholder="name@example.com"
                    name="doctorNIC"
                  />
                  <label for="doctorNIC" class="form-label">Doctor NIC</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    placeholder="address"
                    name="address"
                  />
                  <label for="mbbs" class="form-label">MBBS No</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="mbbs"
                    placeholder="mbbs"
                    name="mbbs"
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
                      type="radio"
                      name="gender"
                      id="flexRadioDefault1"
                      value="male"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="flexRadioDefault2"
                      value="female"
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
                $sql = "SELECT Speciality FROM Doctor";
                $result = $conn->query($sql);
                
                
                ?>
                <div class="mb-3">
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    name="speciality"
                  >
                  
                    <?php
                  
                  if ($result->num_rows > 0) {
                    echo "<option selected>Select Speciality</option>";
                    while($row = $result->fetch_assoc()) {
                      echo "<option value=". $row["Speciality"]."> ". $row["Speciality"]."</option>";
                      //echo "id: " . $row["MBBS_No"]. " - Name: " . $row["Doctor_Initials"]. " " . $row["Doctor_Surname"]. "-" . $row["Speciality"]. "<br>";
                    }
                  } else {
                    echo "<option selected>No Slots Available</option>";
                  }

                  ?>
                  </select>
                </div>

                <div class="form-floating mb-3">
                  <input
                    type="date"
                    class="form-control"
                    id="avDate"
                    placeholder="avDate"
                    name="avDate"
                  />
                  <label for="avDate" class="form-label"
                    >Available Date</label
                  >
                </div>

                <div class="form-floating mb-3">
                  <input
                    type="time"
                    class="form-control"
                    id="avTime"
                    placeholder="avTime"
                    name="avTime"
                  />
                  <label for="avTime" class="form-label"
                    >Available Time</label
                  >
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


      if (isset($_POST["doctorNIC"])) {
        $Doctor_NIC=$_POST['doctorNIC'];
        $Doctor_Name=$_POST['doctorName'];
        $Address=$_POST['address'];
        $Gender=$_POST['gender'];
        $Age=$_POST['age'];
        $Speciality=$_POST['speciality'];
        $Email=$_POST['email'];
        $Contact_No=$_POST['phone'];
        $Mbbs_No=$_POST['mbbs'];
        $Available_Time=$_POST['avTime'];
        $Available_Date=$_POST['avDate'];
        
        $sql = "INSERT INTO doctor (MBBS_No, Doctor_Surname, Age, Gender, Speciality, Doctor_NIC, Email, Available_Time, Available_Date) VALUES ('$Mbbs_No', '$Doctor_Name', '$Age', '$Gender', '$Speciality', '$Doctor_NIC', '$Email', '$Available_Time', '$Available_Date')";
      
        if (mysqli_query($conn, $sql)) {
          echo "<script>alert('New record added successfully')</script>";
        } else {
          $errorMessage = mysqli_error($conn);
          echo "<script>alert('Error updating record: " . addslashes($errorMessage) . "');</script>";
        }
      }
  
      ?>
</html>