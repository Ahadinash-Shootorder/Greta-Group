<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Info Boxes</title>


<style>

.info-section {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 20px;
  padding: 40px;
  max-width: 1200px;
  margin: auto;
}

.info-box {
  position: relative;
  background: #003f6b;
  color: #fff;
  padding: 35px 25px;
  border-radius: 6px;
  overflow: hidden;
  min-height: 170px;
}

.info-box h3 {
  font-size: 22px;
  margin-bottom: 10px;
  font-weight: 600;
  color:#fff;
}

.info-box p {
  font-size: 15px;
  line-height: 1.6;
  opacity: 0.95;
}

/* Icon Background */
.info-box i {
  position: absolute;
  top: 50%;
  right: 20%;
  font-size: 70px;
  color: rgba(255, 255, 255, 0.12);
}

/* Different colors */
.bg-blue { background: #004f86; }
.bg-darkblue { background: #00345f; }
.bg-navy { background: #002f55; }
.bg-teal { background: #004d66; }

@media (max-width: 768px) {
  .info-box {
    text-align: left;
  }
}
</style>
</head>

<body>

<div class="info-section">

  <div class="info-box bg-blue">
    <i class="fas fa-map-marker-alt"></i>
    <h3>Office Address</h3>
    <p>
10 Anson Road, 30-10 International Plaza, Singapore 079903</p>
  </div>

  <div class="info-box bg-darkblue">
    <i class="fas fa-phone-alt"></i>
    <h3>Phone Number</h3>
    <p>T: (+65) 6223 0152 <br> F: (+65) 6223 0243 </p>
  </div>

  <div class="info-box bg-navy">
    <i class="fas fa-envelope"></i>
    <h3>Email Address</h3>
    <p>info@greta.sg</p>
  </div>

  <!--<div class="info-box bg-teal">-->
  <!--  <i class="fas fa-paper-plane"></i>-->
  <!--  <h3>Subscribe</h3>-->
  <!--  <p>Get latest updates and offers</p>-->
  <!--</div>-->

</div>

</body>
</html>
