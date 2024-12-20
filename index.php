<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medicare</title>
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
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <main>
      <section>
        <nav class="navbar navbar-expand-lg bg-body-secondary px-3 py-4">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
              <img src="./images/logo-2.png" alt="" height="62px" />
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
                    href="index.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./pages/appointment.php"
                    >Appointment</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./pages/about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./pages/services.html"
                    >Service</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./pages/contact.php"
                    >Contact</a
                  >
                </li>
              </ul>

            </div>
          </div>
        </nav>
      </section>

      <section>
        <div
          id="carouselExampleInterval"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner" style="height: 32rem">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="./images/img-06.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="./images/img-07.jpg " class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="./images/img-08.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="./images/img-05.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <section class="about">
        <div>
          <h1 style="font-size: 28px">Welcome to Medicare Hospital</h1>
          <h3 style="font-weight: 400">Caring for You Every Step of the Way</h3>
          <span style="color: var(--clr-primary-5); font-weight: bold"
            >Commitment to Compassion, Innovation, and Excellence</span
          >
          <p>
            Since our establishment in 2020, Medicare Hospital has been a
            regional leader in medical excellence and pioneering healthcare.
            Guided by a core belief—that our community's well-being is enhanced
            by both passion and compassion, we strive to set the highest
            standards in patient care.
          </p>
          <p>
            Our facilities include spacious, modern rooms and are fully equipped
            with advanced critical care units. At Medicare, our leading
            consultants, specialists, and dedicated teamwork tirelessly to
            achieve exceptional clinical outcomes while ensuring the highest
            levels of patient satisfaction.
          </p>
        </div>
      </section>

      <section class="service">
        <div class="title">
          <h2 style="text-align: center">Our Services</h2>
          <div class="underline"></div>
        </div>
        <div class="text-center">
          <div class="row">
            <div class="col">
              <div class="card">
                <img src="./images/img-01.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Emergency Care</h5>
                  <p class="card-text">
                    Our 24/7 emergency department is equipped to handle critical
                    situations, including accidents, heart attacks, strokes, and
                    other life-threatening conditions.
                  </p>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="./images/img-05.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Diagnostic Services</h5>
                  <p class="card-text">
                    We offer state-of-the-art imaging facilities, including
                    X-rays, MRIs, CT scans, and ultrasounds, to provide accurate
                    diagnoses and guide effective treatments.
                  </p>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="./images/img-07.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Surgical Services</h5>
                  <p class="card-text">
                    From general surgeries to advanced laparoscopic and robotic
                    procedures, our skilled surgeons and advanced operating
                    rooms ensure precision and safety.
                  </p>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="./images/img-08.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Cardiology Services</h5>
                  <p class="card-text">
                    Specializing in heart health, our cardiology department
                    offers consultations, diagnostic tests, and treatments for
                    conditions such as hypertension, arrhythmia, and heart
                    failure.
                  </p>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="accordion-section">
        <div class="title">
          <h2 style="text-align: center">General Health Tips</h2>
          <div class="underline"></div>
        </div>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                How much water should I drink daily?
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                It's recommended to drink about 8-10 glasses (2-3 liters) of
                water per day to stay hydrated. Adjust your intake based on
                activity level, climate, and personal health conditions.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                How often should I exercise to maintain good health?
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Aim for at least 150 minutes of moderate aerobic activity, such
                as brisk walking or cycling, every week. Combine it with
                strength training exercises at least twice a week.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                What are the best foods to boost immunity?
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Include citrus fruits, garlic, ginger, spinach, yogurt, and
                almonds in your diet. Foods rich in vitamins C, D, and zinc help
                strengthen your immune system.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour"
              >
                How can I reduce stress naturally?
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Practice deep breathing, engage in physical activity, maintain a
                regular sleep schedule, and try relaxation techniques like yoga
                or meditation.
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonial">
        <div class="title">
          <h2 style="text-align: center">Our Reviews</h2>
          <div class="underline"></div>
        </div>
        <!-- review -->
        <article class="review">
          <div class="img-container">
            <img src="person-1.jpeg" id="person-img" alt="" />
          </div>
          <h4 id="author">sara jones</h4>
          <p id="job">ux designer</p>
          <p id="info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
            asperiores debitis incidunt, eius earum ipsam cupiditate libero?
            Iste, doloremque nihil?
          </p>
          <!-- prev next buttons-->
          <div class="button-container">
            <button class="prev-btn">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="next-btn">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
          <!-- random button -->
          <button class="random-btn">surprise me</button>
        </article>
      </section>

      <section class="footer">
       
          <div class="row">
            <div class="col">
              <img src="./images/logo-2.png" alt="" height="62px" />
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
      <script type="module" src="app.js"></script>
    </main>
  </body>
</html>
