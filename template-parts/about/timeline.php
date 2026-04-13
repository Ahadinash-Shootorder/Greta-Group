<?php
// Timeline Data Array
$timeline_events = [
  [
    'year' => '1996',
    'title' => 'Kusum Metal Founded',
    'position' => 'above'
  ],
  [
    'year' => '2001',
    'title' => 'Global Metcorp Incorporated',
    'position' => 'below'
  ],
  [
    'year' => '2008',
    'title' => 'Biomass Power Initiative',
    'position' => 'above'
  ],
  [
    'year' => '2010',
    'title' => 'Group Establishment',
    'position' => 'below'
  ],
  [
    'year' => '2015',
    'title' => 'Shriram Food Incorporated',
    'position' => 'above'
  ],
  [
    'year' => '2022',
    'title' => 'Greta Metals DMCC',
    'position' => 'below'
  ],
  [
    'year' => '2024',
    'title' => 'Australia Exploration Assets',
    'position' => 'above'
  ],
  [
    'year' => '2024',
    'title' => 'UK Recycling Acquisition',
    'position' => 'below'
  ],
  [
    'year' => '2025',
    'title' => 'Integrated Green Steel',
    'position' => 'above'
  ],
  [
    'year' => '2025',
    'title' => 'Exploration Expansion',
    'position' => 'below'
  ],
  [
    'year' => '2025',
    'title' => 'CSR Initiatives Launched',
    'position' => 'above'
  ]
];
?>

<style>
  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  :root {
    --gold-lightest: rgb(220, 175, 95);
    --gold-light: rgb(180, 140, 70);
    --gold-mid: rgb(150, 115, 55);
    --gold-dark: rgb(121, 96, 51);
    --brown-deep: rgb(52, 50, 47);
    --black: #000000;
    --card-bg: rgba(18, 14, 6, 0.95);
    --text-bright: #f5edd8;
    --text-muted: #9a8460;

    /* ---- geometry ---- */
    --card-w: 172px;
    --track-h: 560px;
    --mid: 280px;
    /* = track-h / 2 */
    --dot-r: 24px;
    /* dot radius */
    --dot-d: 48px;
    /* dot diameter = 2*dot-r */
    --conn-h: 38px;
  }

  html {
    scroll-behavior: smooth;
  }

  body {
    background: var(--black);
    color: var(--text-bright);
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
    min-height: 100vh;
  }

  body::after {
    content: '';
    position: fixed;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  }

  /* Timeline Heading */
  .timeline-heading {
    position: relative;
    z-index: 1;
    text-align: center;
    padding: 40px 24px 12px;
  }

  .timeline-heading::before {
    content: '';
    position: absolute;
    inset: 0;
    pointer-events: none;
    background: radial-gradient(ellipse 68% 58% at 50% 0%,
        rgba(121, 96, 51, 0.26) 0%, transparent 70%);
  }

  .timeline-eyebrow {
    display: inline-block;
    font-family: 'Poppins', sans-serif;
    font-style: italic;
    font-weight: 300;
    font-size: 1.5rem;
    letter-spacing: 0.38em;
    color: var(--gold-light);
    text-transform: uppercase;
    margin-bottom: 16px;
    opacity: 0;
    animation: fadeUp .9s ease .15s forwards;
  }

  .timeline-heading h1 {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(2rem, 4vw, 4rem);
    font-weight: 700;
    line-height: 1.0;
    letter-spacing: -0.01em;
    background: linear-gradient(140deg,
        var(--gold-dark) 0%, var(--gold-lightest) 45%,
        var(--gold-mid) 80%, var(--gold-dark) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    opacity: 0;
    animation: fadeUp .9s ease .35s forwards;
  }

  .timeline-sub {
    margin-top: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    /* gap: 18px; */
    opacity: 0;
    animation: fadeUp .8s ease .55s forwards;
  }

  .timeline-sub::before,
  .timeline-sub::after {
    content: '';
    display: block;
    height: 1px;
    width: 87px;
  }

  .timeline-sub::before {
    background: linear-gradient(90deg, transparent, var(--gold-mid));
  }

  .timeline-sub::after {
    background: linear-gradient(90deg, var(--gold-mid), transparent);
  }

  .timeline-sub p {
    font-style: italic;
    font-size: 1.05rem;
    color: var(--text-muted);
    letter-spacing: 0.14em;
    white-space: nowrap;
  }

  .chevrons {
    display: flex;
    gap: 5px;
  }

  .chevrons i {
    display: block;
    width: 7px;
    height: 7px;
    border-right: 1.5px solid var(--gold-mid);
    border-bottom: 1.5px solid var(--gold-mid);
    transform: rotate(-45deg);
    animation: cPulse 1.5s ease-in-out infinite;
  }

  .chevrons i:nth-child(2) {
    animation-delay: .18s;
    opacity: .65;
  }

  .chevrons i:nth-child(3) {
    animation-delay: .36s;
    opacity: .35;
  }

  /* TIMELINE OUTER */
  .tl-outer {
    position: relative;
    z-index: 1;
    overflow-x: auto;
    overflow-y: visible;
    padding: 10px 100px 12px;
    cursor: grab;
    scrollbar-width: thin;
    scrollbar-color: var(--gold-dark) rgba(255, 255, 255, 0.04);
    -webkit-overflow-scrolling: touch;
  }

  .tl-outer:active {
    cursor: grabbing;
  }

  .tl-outer::-webkit-scrollbar {
    height: 4px;
  }

  .tl-outer::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.03);
    border-radius: 4px;
  }

  .tl-outer::-webkit-scrollbar-thumb {
    background: var(--gold-dark);
    border-radius: 4px;
  }

  /* TRACK */
  .tl-track {
    position: relative;
    display: flex;
    align-items: flex-start;
    height: var(--track-h);
    min-width: max-content;
    padding: 0 10px;
  }

  /* The golden line */
  .tl-line {
    position: absolute;
    top: var(--mid);
    left: 0;
    right: 0;
    height: 2px;
    transform: translateY(-50%);
    background: linear-gradient(90deg,
        transparent 0%,
        var(--gold-dark) 4%,
        var(--gold-light) 50%,
        var(--gold-dark) 96%,
        transparent 100%);
    box-shadow: 0 0 14px rgba(180, 140, 70, .5), 0 0 44px rgba(180, 140, 70, .18);
    pointer-events: none;
    z-index: 0;
  }

  /* ITEM */
  .item {
    position: relative;
    width: var(--card-w);
    flex-shrink: 0;
    margin: 0 30px;
    height: 100%;
    z-index: 2;
    opacity: 0;
    transform: translateY(18px);
    transition: opacity .65s ease, transform .65s ease;
  }

  .item.vis {
    opacity: 1;
    transform: translateY(0);
  }

  /* stagger */
  .item:nth-child(2) {
    transition-delay: .05s
  }

  .item:nth-child(3) {
    transition-delay: .10s
  }

  .item:nth-child(4) {
    transition-delay: .15s
  }

  .item:nth-child(5) {
    transition-delay: .20s
  }

  .item:nth-child(6) {
    transition-delay: .25s
  }

  .item:nth-child(7) {
    transition-delay: .30s
  }

  .item:nth-child(8) {
    transition-delay: .35s
  }

  .item:nth-child(9) {
    transition-delay: .40s
  }

  .item:nth-child(10) {
    transition-delay: .45s
  }

  .item:nth-child(11) {
    transition-delay: .50s
  }

  /* DOT */
  .dot {
    position: absolute;
    left: 50%;
    top: var(--mid);
    transform: translate(-50%, -50%);
    width: var(--dot-d);
    height: var(--dot-d);
    border-radius: 50%;
    background: var(--black);
    border: 2px solid var(--gold-mid);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 4;
    transition: border-color .3s, box-shadow .3s, transform .3s;
  }

  .dot::before {
    content: '';
    position: absolute;
    inset: 6px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--gold-dark), var(--gold-lightest));
    opacity: .65;
    transition: opacity .3s;
  }

  .item:hover .dot {
    border-color: var(--gold-lightest);
    box-shadow: 0 0 0 7px rgba(180, 140, 70, .12), 0 0 24px rgba(180, 140, 70, .38);
    transform: translate(-50%, -50%) scale(1.16);
  }

  .item:hover .dot::before {
    opacity: 1;
  }

  .dot-year {
    position: relative;
    z-index: 1;
    font-family: 'Poppins', sans-serif;
    font-size: 0.6rem;
    font-weight: 700;
    letter-spacing: 0.03em;
    line-height: 1;
    color: var(--text-bright);
    white-space: nowrap;
  }

  /* CONNECTOR */
  .conn {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 1px;
    z-index: 3;
    pointer-events: none;
  }

  .item.above .conn {
    top: calc(var(--mid) - var(--dot-r) - var(--conn-h));
    height: var(--conn-h);
    background: linear-gradient(to bottom, rgba(150, 115, 55, .15), var(--gold-mid));
  }

  .item.above .card {
    bottom: calc(var(--track-h) - var(--mid) + var(--dot-r) + var(--conn-h));
    left: 50%;
    transform: translateX(-50%);
  }

  .item.below .conn {
    top: calc(var(--mid) + var(--dot-r));
    height: var(--conn-h);
    background: linear-gradient(to bottom, var(--gold-mid), rgba(150, 115, 55, .15));
  }

  .item.below .card {
    top: calc(var(--mid) + var(--dot-r) + var(--conn-h));
    left: 50%;
    transform: translateX(-50%);
  }

  /* CARD */
  .card {
    position: absolute;
    width: var(--card-w);
    background: var(--card-bg);
    border: 1px solid rgba(150, 115, 55, .3);
    border-radius: 14px;
    padding: 20px 16px;
    text-align: center;
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    overflow: hidden;
    transition: border-color .3s, box-shadow .3s, transform .3s;
    cursor: default;
    z-index: 3;
  }

  .item:hover .card {
    border-color: var(--gold-light);
    box-shadow: 0 0 32px rgba(180, 140, 70, .22), inset 0 0 20px rgba(180, 140, 70, .04);
  }

  .item.above:hover .card {
    transform: translateX(-50%) translateY(-5px);
  }

  .item.below:hover .card {
    transform: translateX(-50%) translateY(5px);
  }

  /* corner accent */
  .card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, rgba(180, 140, 70, .18) 0%, transparent 65%);
    border-radius: 14px 0 0 0;
  }

  /* shine sweep */
  .card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(115deg, transparent 30%, rgba(210, 170, 90, .07) 50%, transparent 70%);
    transform: translateX(-120%);
    transition: transform .55s ease;
    pointer-events: none;
  }

  .item:hover .card::after {
    transform: translateX(120%);
  }

  .card-year {
    font-family: 'Poppins', sans-serif;
    font-size: 1.3rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    background: linear-gradient(135deg, var(--gold-dark), var(--gold-lightest));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 8px;
  }

  .card-divider {
    width: 38px;
    height: 1px;
    margin: 0 auto 10px;
    background: linear-gradient(90deg, transparent, var(--gold-mid), transparent);
  }

  .card-title {
    font-family: 'Poppins', sans-serif;
    font-size: 1.02rem;
    font-weight: 600;
    line-height: 1.45;
    color: var(--text-bright);
    letter-spacing: 0.02em;
  }

  /* FOOTER */
  .timeline-footer {
    text-align: center;
    padding: 8px 0 12px;
    position: relative;
    z-index: 1;
    opacity: 0;
    animation: fadeUp .9s ease 1.1s forwards;
  }

  .timeline-footer-line {
    width: 60px;
    height: 1px;
    margin: 0 auto 12px;
    background: linear-gradient(90deg, transparent, var(--gold-mid), transparent);
  }

  .timeline-footer p {
    font-style: italic;
    font-size: 0.87rem;
    letter-spacing: 0.22em;
    color: var(--text-muted);
    text-transform: uppercase;
  }

  /* KEYFRAMES */
  @keyframes fadeUp {
    from {
      opacity: 0;
      transform: translateY(18px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes cPulse {

    0%,
    100% {
      opacity: .25;
    }

    50% {
      opacity: 1;
    }
  }

  /* MOBILE */
  @media (max-width: 600px) {
    :root {
      --card-w: 148px;
      --track-h: 500px;
      --mid: 250px;
      --conn-h: 28px;
      --dot-r: 21px;
      --dot-d: 42px;
    }

    .timeline-heading h1 {
      font-size: 2.4rem;
    }

    .tl-outer {
      padding: 16px 48px 52px;
    }

    .item {
      margin: 0 18px;
    }

    .card-year {
      font-size: 1.15rem;
    }

    .card-title {
      font-size: 0.94rem;
    }
  }
</style>

<!-- HERO -->
<header class="timeline-heading">
  <p class="timeline-eyebrow">Est. 1996 - Present</p>
  <h1>Our Global Journey</h1>
  <div class="timeline-sub">
    <p>From Foundation to the Future</p>
  </div>
</header>

<!-- TIMELINE -->
<main>
  <div class="tl-outer" id="tlOuter">
    <div class="tl-track" id="tlTrack">
      <div class="tl-line"></div>

      <?php foreach ($timeline_events as $index => $event): ?>
        <!-- <?php echo $index + 1; ?> | <?php echo $event['year']; ?> | <?php echo $event['position']; ?> -->
        <div class="item <?php echo $event['position']; ?>">
          <?php if ($event['position'] === 'above'): ?>
            <div class="card">
              <div class="card-year"><?php echo $event['year']; ?></div>
              <div class="card-divider"></div>
              <div class="card-title"><?php echo $event['title']; ?></div>
            </div>
            <div class="conn"></div>
            <div class="dot"><span class="dot-year"><?php echo $event['year']; ?></span></div>
          <?php else: ?>
            <div class="dot"><span class="dot-year"><?php echo $event['year']; ?></span></div>
            <div class="conn"></div>
            <div class="card">
              <div class="card-year"><?php echo $event['year']; ?></div>
              <div class="card-divider"></div>
              <div class="card-title"><?php echo $event['title']; ?></div>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

    </div><!-- /tl-track -->
  </div><!-- /tl-outer -->
</main>

<!-- FOOTER -->
<footer class="timeline-footer">
  <div class="timeline-footer-line"></div>
  <p>A legacy built with vision & purpose</p>
</footer>

<script>
  /* fade in on scroll */
  const items = document.querySelectorAll('.item');
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('vis'); });
  }, { threshold: 0.1 });
  items.forEach(el => io.observe(el));

  /* items visible on initial load */
  window.addEventListener('load', () => {
    setTimeout(() => {
      items.forEach(el => {
        const r = el.getBoundingClientRect();
        if (r.right > 0 && r.left < window.innerWidth) el.classList.add('vis');
      });
    }, 350);
  });

  /* drag-to-scroll */
  const outer = document.getElementById('tlOuter');
  let drag = false, sx = 0, sl = 0;
  outer.addEventListener('mousedown', e => {
    drag = true; sx = e.pageX - outer.offsetLeft; sl = outer.scrollLeft;
    outer.style.userSelect = 'none';
  });
  ['mouseup', 'mouseleave'].forEach(ev => outer.addEventListener(ev, () => {
    drag = false; outer.style.userSelect = '';
  }));
  outer.addEventListener('mousemove', e => {
    if (!drag) return; e.preventDefault();
    outer.scrollLeft = sl - (e.pageX - outer.offsetLeft - sx) * 1.3;
  });

  /* auto-scroll functionality */
  let autoScrollInterval;
  let scrollDirection = 1; // 1 for right, -1 for left
  let isPaused = false;

  function startAutoScroll() {
    if (isPaused) return;

    autoScrollInterval = setInterval(() => {
      if (!isPaused && outer) {
        // Scroll to the right
        outer.scrollLeft += scrollDirection * 1;

        // Check if we've reached the end
        if (outer.scrollLeft >= outer.scrollWidth - outer.clientWidth) {
          // Reset to beginning
          outer.scrollLeft = 0;
        }
      }
    }, 30); // Adjust speed (lower = faster)
  }

  function pauseAutoScroll() {
    isPaused = true;
    setTimeout(() => {
      isPaused = false;
    }, 3000); // Resume after 3 seconds
  }

  // Start auto-scroll when page loads
  window.addEventListener('load', () => {
    setTimeout(startAutoScroll, 1000);
  });

  // Pause auto-scroll when user interacts
  outer.addEventListener('mouseenter', pauseAutoScroll);
  outer.addEventListener('mousedown', pauseAutoScroll);
  outer.addEventListener('touchstart', pauseAutoScroll);

  // Resume auto-scroll when user leaves
  outer.addEventListener('mouseleave', () => {
    setTimeout(() => {
      isPaused = false;
    }, 1000);
  });
</script>