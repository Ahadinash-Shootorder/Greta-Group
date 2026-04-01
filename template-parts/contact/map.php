<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Location Map</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #f3f3f3;
}

/* Section container */
.map-section {
  max-width: 1200px;
  margin: 60px auto;
  padding: 25px;
  background: #f2dfd3;
  border-radius: 12px;
}

/* Map container */
#map {
  width: 100%;
  height: 450px;
  border-radius: 10px;
  overflow: hidden;
}
</style>
</head>

<body>

<div class="map-section">
  <div style="width:100%; max-width:1200px; margin:40px auto; border-radius:12px; overflow:hidden;">
  <iframe 
  src="https://www.google.com/maps?q=10+Anson+Road,+30-10+International+Plaza,+Singapore+079903&output=embed"
  width="100%"
  height="450"
  style="border:0;"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>

</div>

</div>


</body>
</html>
