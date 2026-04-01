<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Company Timeline</title>

<style>
/* Timeline Heading */
.timeline-heading {
  text-align: center;
  padding: 60px 20px 20px;
}

.timeline-heading h2 {
  font-size: 36px;
  font-weight: 700;
  color: #222;
  margin: 0;
}

/* Timeline Wrapper */
.timeline-wrapper {
  position: relative;
  padding: 220px 40px;
  overflow-x: auto;
  white-space: nowrap;
}

/* Center Line */
.timeline-line {
  position: absolute;
  top: 50%;
  left: 0;
  height: 4px;
  width: 100%;
  background: #ccc;
  transform: translateY(-50%);
}

/* Timeline Item */
.timeline-item {
  position: relative;
  display: inline-block;
  
  margin: 0 5px;
  text-align: center;
}

/* Circle */
.circle {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  border: 4px solid var(--clr);
  color: var(--clr);
  font-weight: bold;
  font-size: 18px;
  line-height: 62px;
  background: #fff;
  margin: auto;
  position: relative;
  z-index: 2;
}

/* Content Box */
.content {
  width: 150px;
  background: #fff;
  border: 2px solid var(--clr);
  border-radius: 10px;
  padding: 15px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

.content h4 {
  margin: 0 0 6px;
  font-size: 16px;
  color: var(--clr);
  text-wrap:auto;
}

.content p {
  font-size: 13px;
  margin: 0;
  color: #555;
  max-width: 200px;
    text-wrap: auto;
}

/* Top & Bottom positioning */
.top .content {
  bottom: 180%;
}

.bottom .content {
  top: 180%;
}

/* Connector Line */
.content::before {
  content: "";
  position: absolute;
  width: 2px;
  height: 100px;
  background: var(--clr);
  left: 50%;
  transform: translateX(-50%);
}

.top .content::before {
  bottom: -100px;
}

.bottom .content::before {
  top: -100px;
}
.timeline-section {
  width: 100%;
  display: flex;
  justify-content: center;
  overflow-x: auto;
}


/* ================================
   MOBILE – TRUE VERTICAL TIMELINE
================================ */
@media (max-width: 768px) {

  /* Disable horizontal scrolling completely */
  body, html {
    overflow-x: hidden;
  }

  .timeline-section {
    width: 100%;
    overflow-x: hidden;
  }

  .timeline-wrapper {
    position: relative;
    width: 100%;
    padding: 60px 0;
    white-space: normal; /* IMPORTANT */
  }

  /* Vertical center line */
  .timeline-line {
    left: 80%;
    transform: translateX(-50%);
    top: 0;
    height: 100%;
    width: 4px;
  }

  /* Each timeline block stacked vertically */
  .timeline-item {
    width: 100%;
    margin: 20px 0;
    position: relative;
  }

  /* Center the year circle */
  .circle {
    position: absolute;
    left: 80%;
    transform: translateX(-50%);
    z-index: 5;
  }

  /* COMMON CONTENT STYLE */
  .content {
    width: 180px;
    position: relative;
    top: 0;
    padding:10px;
  }

  /* LEFT SIDE BOX */
  .timeline-item.top .content {
    left: 25%;
    margin-left: 5%;
    text-align: right;
  }

  /* RIGHT SIDE BOX */
  .timeline-item.bottom .content {
    left: 30%;
    right: 0;
    margin-right: 5%;
    text-align: left;
  }

  /* CONNECTING LINE */
  .content::before {
    content: "";
    position: absolute;
    top: 50%;
    left:100%;
    width: 66px;
    height: 2px;
    background: var(--clr);
    transform: translateY(-50%);
  }

  .timeline-item.top .content::before {
    right: -40px;
  }

  .timeline-item.bottom .content::before {
    left: 100%;
  }
  .bottom .content::before{
      top:36px;
  }
  .timeline-heading h2 {
    font-size: 26px;
  }
  .timeline-heading {
    text-align: center;
    padding: 0px 20px 40px;
}
}

</style>
</head>

<body>
    <div class="timeline-heading">
  <h2>Our Global Journey</h2>
</div>

<div class="timeline-section">
    
<div class="timeline-wrapper">
  <div class="timeline-line"></div>

  <div class="timeline-item top" style="--clr:#e74c3c;">
    <div class="circle">1996</div>
    <div class="content">
      <h4>Kusum Metal Founded</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item bottom" style="--clr:#3498db;">
    <div class="circle">2001</div>
    <div class="content">
      <h4>Global Metcorp Incorporated</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item top" style="--clr:#9b59b6;">
    <div class="circle">2008</div>
    <div class="content">
      <h4>Biomass Power Initiative</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item bottom" style="--clr:#1abc9c;">
    <div class="circle">2010</div>
    <div class="content">
      <h4>Group Establishment</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item top" style="--clr:#f39c12;">
    <div class="circle">2015</div>
    <div class="content">
      <h4>Shriram Food Incorporated</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item bottom" style="--clr:#2ecc71;">
    <div class="circle">2022</div>
    <div class="content">
      <h4>Greta Metals DMCC</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item top" style="--clr:#e84393;">
    <div class="circle">2024</div>
    <div class="content">
      <h4>Australia Exploration Assets</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item bottom" style="--clr:#00cec9;">
    <div class="circle">2024</div>
    <div class="content">
      <h4>UK Recycling Acquisition</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item top" style="--clr:#6c5ce7;">
    <div class="circle">2025</div>
    <div class="content">
      <h4>Integrated Green Steel</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item bottom" style="--clr:#fd79a8;">
    <div class="circle">2025</div>
    <div class="content">
      <h4>Exploration Expansion</h4>
      <p></p>
    </div>
  </div>

  <div class="timeline-item top" style="--clr:#e17055;">
    <div class="circle">2025</div>
    <div class="content">
      <h4>CSR Initiatives Launched</h4>
      <p></p>
    </div>
  </div>

  <!--<div class="timeline-item bottom" style="--clr:#0984e3;">-->
  <!--  <div class="circle">2024</div>-->
  <!--  <div class="content">-->
  <!--    <h4>Future Ready</h4>-->
  <!--    <p>Scaling with advanced technologies.</p>-->
  <!--  </div>-->
  <!--</div>-->

</div>
</div>
</body>
</html>
