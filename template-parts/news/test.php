<?php
// You can replace this with dynamic data from DB later
$slides = [
  [
    "image" => "img/news/banners/1.webp",
    "title" => "Greta Group Recognised as Asia’s Rising Star Award",
    "text"  => "",
    "link"  => "https://www.mid-day.com/buzz/article/greta-group-recognised-as-asia-s-rising-star-award-at-the-asian-brand-and-leadership-conclave-2025-by-the-brand-story-8449"
  ],
//   [
//     "image" => "https://via.placeholder.com/400x300/ffcc00",
//     "title" => "Slide Two Title",
//     "text"  => "This is description for slide two. Add your content here.",
//     "link"  => "#"
//   ],
//   [
//     "image" => "https://via.placeholder.com/400x300/00ccff",
//     "title" => "Slide Three Title",
//     "text"  => "This is description for slide three. Add your content here.",
//     "link"  => "#"
//   ]
];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Infinite Carousel</title>

<style>
/* ===== BACKGROUND ===== */
.carousel-wrapper {
  width: 100%;
  height: 450px;
  /*background: url("https://images.unsplash.com/photo-1503264116251-35a269479413") center/cover no-repeat;*/
  background: #f9f9f9;
  overflow: hidden;
  position: relative;
}

/* ===== SLIDER TRACK ===== */
.carousel-track {
  display: flex;
  height: 100%;
  transition: transform 0.8s ease-in-out;
}

/* ===== SLIDE ===== */
.carousel-slide {
  min-width: 100%;
  display: flex;
  align-items: center;
  padding: 40px;
  justify-content:center;
  box-sizing: border-box;
}

/* LEFT IMAGE */
.slide-image img {
  width: 400px;
  height: 300px;
  object-fit: cover;
  border-radius: 12px;
}

/* RIGHT CONTENT */
.slide-content {
  margin-left: 50px;
  max-width: 500px;
  color: #fff;
}

.slide-content h2 {
  font-size: 32px;
  margin-bottom: 15px;
}

.slide-content p {
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 20px;
}

.slide-content a {
  display: inline-block;
  padding: 12px 24px;
  background: #ffffff;
  color: #000;
  text-decoration: none;
  font-weight: 600;
  border-radius: 30px;
  transition: 0.3s;
}

.slide-content a:hover {
  background: #000;
  color: #fff;
}

/* Responsive */
@media (max-width: 768px) {
  .carousel-slide {
    flex-direction: column;
    text-align: center;
  }

  .slide-image img {
    width: 100%;
    height: auto;
  }

  .slide-content {
    margin-left: 0;
    margin-top: 20px;
  }
}

.list-of-links{
    display:flex;
    padding:50px;
}

.list-of-links-image{
    max-width:300px;
}
.list-of-links-div{
    display:flex;
    gap:40px;
    padding: 50px;
}
</style>
</head>

<body>

<div class="carousel-wrapper">
  <div class="carousel-track" id="carouselTrack">

    <?php foreach ($slides as $slide): ?>
      <div class="carousel-slide">
        <div class="slide-image">
          <img src="<?= $slide['image']; ?>" alt="">
        </div>
        <div class="slide-content">
          <h2><?= $slide['title']; ?></h2>
          <p><?= $slide['text']; ?></p>
          <a href="<?= $slide['link']; ?>">Read More</a>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- Duplicate first slide for smooth infinite loop -->
    <div class="carousel-slide">
      <div class="slide-image">
        <img src="<?= $slides[0]['image']; ?>" alt="">
      </div>
      <div class="slide-content">
        <h2><?= $slides[0]['title']; ?></h2>
        <p><?= $slides[0]['text']; ?></p>
        <a href="<?= $slides[0]['link']; ?>">Read More</a>
      </div>
    </div>

  </div>
</div>



<div class="list-of-links-div">
    <div>
        <img class="list-of-links-image" src=" img/news/list-of-links/2.webp " >
    </div>
    
    <div class="list-of-links">
    <ul>
        <li>
            <a href="https://energy.economictimes.indiatimes.com/news/coal/greta-minerals-doubles-exploration-landholding-in-western-australia-eyes-lithium-supply-for-india/124334837"> https://energy.economictimes.indiatimes.com/news/coal/greta-minerals-doubles-exploration-landholding-in-western-australia-eyes-lithium-supply-for-india/124334837</a>
        </li>
    </ul>
</div>
</div>
<div class="list-of-links-div">
    <div>
        <img class="list-of-links-image" src=" img/news/list-of-links/3.webp " >
    </div>
    
    <div class="list-of-links">
    <ul>
        <li>
            <a href="https://www.constructionworld.in/policy-updates-and-economic-news/greta-minerals-doubles-wa-exploration-land--targets-lithium-supply-for-india/79674"> https://www.constructionworld.in/policy-updates-and-economic-news/greta-minerals-doubles-wa-exploration-land--targets-lithium-supply-for-india/79674</a>
        </li>
    </ul>
</div>
</div>
<div class="list-of-links-div">
    <div>
        <img class="list-of-links-image" src=" img/news/list-of-links/4.webp " >
    </div>
    
    <div class="list-of-links">
    <ul>
        <li>
            <a href="https://www.business-standard.com/content/press-releases-ani/greta-minerals-secures-lithium-and-ree-assets-in-western-australia-124071100472_1.html"> https://www.business-standard.com/content/press-releases-ani/greta-minerals-secures-lithium-and-ree-assets-in-western-australia-124071100472_1.html</a>
        </li>
    </ul>
</div>
</div>

<script>
let index = 0;
const track = document.getElementById("carouselTrack");
const slides = document.querySelectorAll(".carousel-slide");
const totalSlides = slides.length;

setInterval(() => {
  index++;
  track.style.transition = "transform 0.8s ease-in-out";
  track.style.transform = `translateX(-${index * 100}%)`;

  if (index === totalSlides - 1) {
    setTimeout(() => {
      track.style.transition = "none";
      track.style.transform = "translateX(0)";
      index = 0;
    }, 800);
  }
}, 4000);
</script>

</body>
</html>
