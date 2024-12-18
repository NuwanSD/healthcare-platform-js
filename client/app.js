// local reviews data
const reviews = [
  {
    id: 1,
    name: "Sarah Johnson",
    job: "Teacher",
    img: "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883334/person-1_rfzshl.jpg",
    text: "The care and attention I received at this hospital were exceptional. From the friendly staff at reception to the skilled doctors who treated me, every step of my recovery journey was seamless. I highly recommend their outpatient services!",
  },
  {
    id: 2,
    name: "James Anderson",
    job: "Software Engineer",
    img: "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883409/person-2_np9x5l.jpg",
    text: "The emergency care team saved my life after a serious accident. Their quick response, advanced facilities, and compassionate care made a stressful situation much easier. Thank you for being there when I needed help the most!",
  },
  {
    id: 3,
    name: "Maria Gonzalez",
    job: "Small Business Owner",
    img: "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883417/person-3_ipa0mj.jpg",
    text: "I chose this hospital for my maternity care, and it was the best decision I could have made. The doctors and nurses were so supportive, and the NICU team took great care of my premature baby. Forever grateful!",
  },
  {
    id: 4,
    name: "Robert Wilson",
    job: "Retired Veteran",
    img: "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883423/person-4_t9nxjt.jpg",
    text: "The cardiology department here is second to none. The team explained every detail of my treatment plan clearly and ensured my comfort throughout my surgery and recovery. I feel much healthier and confident now.",
  },
];

// select items
const img = document.getElementById("person-img");
const author = document.getElementById("author");
const job = document.getElementById("job");
const info = document.getElementById("info");

const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
const randomBtn = document.querySelector(".random-btn");

// set starting item
let currentItem = 0;

// load initial item
window.addEventListener("DOMContentLoaded", function () {
  const item = reviews[currentItem];
  img.src = item.img;
  author.textContent = item.name;
  job.textContent = item.job;
  info.textContent = item.text;
});

// show person based on item
function showPerson(person) {
  const item = reviews[person];
  img.src = item.img;
  author.textContent = item.name;
  job.textContent = item.job;
  info.textContent = item.text;
}
// show next person
nextBtn.addEventListener("click", function () {
  currentItem++;
  if (currentItem > reviews.length - 1) {
    currentItem = 0;
  }
  showPerson(currentItem);
});
// show prev person
prevBtn.addEventListener("click", function () {
  currentItem--;
  if (currentItem < 0) {
    currentItem = reviews.length - 1;
  }
  showPerson(currentItem);
});
// show random person
randomBtn.addEventListener("click", function () {
  console.log("hello");

  currentItem = Math.floor(Math.random() * reviews.length);
  showPerson(currentItem);
});

//for navigation bar
const navToggle = document.querySelector(".nav-toggle");
const links = document.querySelector(".links");

navToggle.addEventListener("click", function () {
  // console.log(links.classList);
  // console.log(links.classList.contains("random"));
  // console.log(links.classList.contains("links"));
  // if (links.classList.contains("show-links")) {
  //   links.classList.remove("show-links");
  // } else {
  //   links.classList.add("show-links");
  // }
  links.classList.toggle("show-links");
});
