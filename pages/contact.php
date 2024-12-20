<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
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
    <link rel="stylesheet" href="contact.css" />
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

      <!-- Contact Section -->
      <section style="min-height: 50vh">
        <h3 style="text-align: center; margin-top: 5rem">Contact Us</h3>
        <div class="container">
          <!-- Contact Form -->
          <div class="contact-form">
            <h3>Send Us a Message</h3>
            <form
              action=""
              method="post"
              class="appointment-form"
            >
              <input type="text" name="name" placeholder="Your Name" required />
              <input
                type="text"
                name="phone"
                placeholder="Phone Number"
                required
              />
              <input
                type="email"
                name="email"
                placeholder="Your Email"
                required
              />
              <textarea
                name="message"
                rows="5"
                placeholder="Your Message"
                required
              ></textarea>
              <button type="submit">Send Message</button>
            </form>
          </div>
          <div class="contact-details">
            <div class="left">

              <p>
                <strong>Address:</strong>
                Medicare Hospital (Pvt) Ltd, 232/1, Evergreen Park Rd,
                Narahenpita, Colombo 05
              </p>
              <p><strong>Phone:</strong> +124563789</p>
              <p>
                <strong>Email:</strong>
                <a href="mailto:medicare@gmail.com">medicare@gmail.com</a>
              </p>
              <p>
                Since our establishment in 2020, Medicare Hospital has been a
                regional leader in medical excellence and pioneering healthcare.
                Guided by a core belief—that our community's well-being is
                enhanced by both passion and compassion, we strive to set the
                highest standards in patient care.
              </p>
              <p>
                Our facilities include spacious, modern rooms and are fully
                equipped with advanced critical care units. At Medicare, our
                leading consultants, specialists, and dedicated teamwork
                tirelessly to achieve exceptional clinical outcomes while
                ensuring the highest levels of patient satisfaction
              </p>
            </div>
          </div>
          <!-- Google Maps -->
        </div>
      </section>

      <section>
        <iframe
          class="base-map"
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126734.45919258721!2d79.93157764248046!3d6.955905724675635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1730910033779!5m2!1sen!2slk"
          width="100%"
          height="500"
          style="border: 0"
          allowfullscreen
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        >
        </iframe>
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
      <script type="module" src="contact.js"></script>
    </main>
  </body>
  <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "medicare";
    
          $conn = mysqli_connect($servername, $username, $password, $database);
    
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          

          if (isset($_POST["name"])) {
            $Patient_Name=$_POST['name'];
            $Contact_No=$_POST['phone'];
            $Email=$_POST['email'];
            $Description=$_POST['message'];
            $sql = "INSERT INTO contact (patient_name, phone_no, email, description) VALUES('$Patient_Name', '$Contact_No', '$Email', '$Description')";
          
            if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
          }
          
  ?>
</html>
