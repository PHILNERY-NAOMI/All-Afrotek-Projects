<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Afrotek — Empowering Women in Tech</title>
<style>
  :root{
    --bg:#1a0b1f; --card:#1a0b1faa; --muted:#d8a7ca;
    --accent:#e879f9; --accent-2:#f472b6; --glass: rgba(255, 255, 255, 0.93);
    --glass-2: rgba(248,114,182,0.04);
    --max-width:1200px;
  }
  *{box-sizing:border-box;margin:0;padding:0}
  html,body{height:100%}
  body{
    font-family:Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    background:linear-gradient(180deg,#2d1b4e 0%, #fdf2f8 100%);
    color:#fce7f3; -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale;
    line-height:1.45;
  }

  /* NAV */
  .nav{
    position:sticky; top:0; z-index:60;
    backdrop-filter: blur(6px);
    background:linear-gradient(180deg, rgba(45,27,78,0.6), rgba(45,27,78,0.3));
    border-bottom:1px solid rgba(248,114,182,0.08);
  }
  .nav .wrap{max-width:var(--max-width);margin:0 auto;display:flex;align-items:center;justify-content:space-between;padding:14px 20px;gap:16px}
  .brand{display:flex;gap:12px;align-items:center;font-weight:700}
  .logo {
    width:40px;height:40px;border-radius:10px;
    background:linear-gradient(135deg,var(--accent),var(--accent-2));display:inline-flex;align-items:center;justify-content:center;font-weight:800;color:white;
    box-shadow:0 6px 18px rgba(232,121,249,0.25);
  }
  .nav-links{display:flex;gap:18px;align-items:center}
  .nav-links a{color:var(--muted);font-weight:600;font-size:14px;padding:8px;border-radius:8px}
  .nav-links a:hover{color:#fff;background:rgba(248,114,182,0.08)}
  .cta-btn{background:linear-gradient(90deg,var(--accent),#ec4899);padding:8px 14px;border-radius:10px;color:white;font-weight:700;font-size:14px;border:none;cursor:pointer}
  .hamburger{display:none;background:none;border:none;color:#fff;cursor:pointer;font-size:24px;padding:8px}

  /* Mobile Menu */
  .mobile-menu{
    display:none;position:absolute;top:100%;left:0;right:0;
    background:linear-gradient(180deg, rgba(45,27,78,0.95), rgba(45,27,78,0.9));
    backdrop-filter:blur(10px);border-top:1px solid rgba(248,114,182,0.1);
    padding:20px;flex-direction:column;gap:16px;
  }
  .mobile-menu.active{display:flex}
  .mobile-menu a{color:var(--muted);font-weight:600;padding:12px 16px;border-radius:8px;text-align:center}
  .mobile-menu a:hover{color:#fff;background:rgba(248,114,182,0.08)}

  /* HERO */
  .hero{
    max-width:var(--max-width);margin:28px auto 60px;padding:32px;border-radius:18px;overflow:hidden;
    display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center;
    background:linear-gradient(180deg, rgba(248,114,182,0.06), rgba(232,121,249,0.04));
    border:1px solid rgba(248,114,182,0.08);
    box-shadow: 0 12px 40px rgba(45,27,78,0.6);
  }
  .hero-left{padding:24px}
  .kicker{display:inline-block;background:linear-gradient(90deg,#f472b6 0%, #ec4899 100%);padding:6px 10px;border-radius:999px;color:#ffffff;font-weight:700;font-size:12px;margin-bottom:16px}
  h1{font-size:40px;line-height:1.02;margin-bottom:12px;color:#fdf2f8}
  p.lead{color:var(--muted);margin-bottom:20px;font-size:16px;max-width:58ch}
  .hero-acts{display:flex;gap:12px;flex-wrap:wrap}
  .btn-primary{background:linear-gradient(90deg,var(--accent),#ec4899);color:white;padding:12px 18px;border-radius:12px;border:none;font-weight:700;cursor:pointer;box-shadow:0 10px 30px rgba(232,121,249,0.2)}
  .btn-ghost{padding:12px 18px;border-radius:12px;border:1px solid rgba(248,114,182,0.15);color:var(--muted);background:transparent;cursor:pointer}

  /* right column card */
  .hero-card{background:linear-gradient(180deg, rgba(248,114,182,0.06), rgba(232,121,249,0.04));padding:18px;border-radius:12px;border:1px solid rgba(248,114,182,0.08)}
  .stat{display:flex;align-items:center;gap:12px;margin-bottom:12px}
  .stat .n{font-size:22px;font-weight:800;color:#fdf2f8}
  .stat .t{color:var(--muted);font-size:13px}

  /* VIDEO HERO (full-screen card like hero) */
  .video-hero{
    margin:40px auto; max-width:var(--max-width);
    position:relative;height:72vh;border-radius:18px;overflow:hidden;border:1px solid rgba(248,114,182,0.08);
    background:var(--glass-2); box-shadow: 0 18px 60px rgba(45,27,78,0.6);
  }
  .video-hero video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transform:scale(1.02)}
  .video-hero .overlay{
    position:absolute;inset:0;background:linear-gradient(180deg, rgba(45,27,78,0.15) 0%, rgba(45,27,78,0.55) 70%);display:flex;flex-direction:column;justify-content:center;align-items:flex-start;padding:48px;gap:12px;
  }
  .video-hero h2{font-size:34px;color:#ffffff;margin-bottom:6px}
  .video-hero p{color:rgba(241,232,247,0.9);max-width:60ch}
  .video-controls{position:absolute;right:18px;bottom:18px;display:flex;gap:10px;z-index:40}
  .icon-btn{background:rgba(26,15,38,0.8);border:1px solid rgba(192,132,252,0.2);padding:10px;border-radius:10px;color:#f1e8f7;cursor:pointer;backdrop-filter:blur(6px)}

  /* BOOTCAMP: gallery + interest form */
  .section{max-width:var(--max-width);margin:60px auto;padding:24px}
  .section h3{font-size:26px;margin-bottom:12px;color:#ffffff}
  .boot-wrap{display:grid;grid-template-columns:1fr 420px;gap:20px;align-items:start}
  .gallery{background:linear-gradient(180deg, rgba(192,132,252,0.06), rgba(217,70,239,0.04));padding:14px;border-radius:12px;border:1px solid rgba(192,132,252,0.1)}
  .carousel{position:relative;overflow:hidden;border-radius:12px;height:360px}
  .carousel .track{display:flex;transition:transform 0.6s cubic-bezier(.2,.9,.2,1)}
  .carousel img{width:100%;height:360px;object-fit:cover;border-radius:8px;flex:0 0 100%}
  .carousel .nav {
    position: absolute;
    top: 90%; /* Changed from 50% to 60% */
    transform: translateY(-50%);
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 12px;
}
  .dot-row{display:flex;gap:8px;justify-content:center;margin-top:10px}
  .dot{width:10px;height:10px;border-radius:999px;background:rgba(192,132,252,0.3);cursor:pointer}
  .dot.active{background:linear-gradient(90deg,var(--accent),var(--accent-2));box-shadow:0 8px 20px rgba(192,132,252,0.3)}

  .interest-card{background:linear-gradient(180deg, rgba(97, 51, 143, 0.08), rgba(217,70,239,0.05));padding:18px;border-radius:12px;border:1px solid rgba(192,132,252,0.15)}
  .interest-card label{display:block;font-size:13px;color:white;margin-bottom:6px}
  .interest-card input,.interest-card select,.interest-card textarea{width:100%;padding:10px;border-radius:10px;border:1px solid rgba(128, 67, 189, 0.2);background:transparent;color:black;margin-bottom:12px;font-size:14px}
  .interest-card .small{font-size:13px;color:black;margin-bottom:10px}

  /* TEAM */
  .team-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:16px;margin-top:18px}
  .team-card{background:linear-gradient(180deg, rgba(192,132,252,0.08), rgba(217,70,239,0.05)); margin-top:160px;  padding:14px;border-radius:12px;border:1px solid rgba(192,132,252,0.15);text-align:center}
  .team-card img{width:96px;height:96px;border-radius:999px;object-fit:cover;margin:0 auto 12px;display:block}
  .team-card h4{font-size:16px;margin-bottom:6px;color:#ffffff}
  .team-card p{color:var(--muted);font-size:13px}

  /* CONTACT */
  .contact-grid{display:grid;grid-template-columns:1fr 360px;gap:18px;align-items:start}
  .contact-form input,.contact-form textarea{width:100%;padding:12px;border-radius:10px;border:1px solid rgba(192,132,252,0.2);background:transparent;color:#f1e8f7;margin-bottom:12px;font-size:15px}
  .contact-cta{background:linear-gradient(90deg,var(--accent),var(--accent-2));padding:12px;border-radius:12px;border:none;color:white;font-weight:700;cursor:pointer}

  /* FOOTER */
  footer{max-width:var(--max-width);margin:40px auto;padding:20px;color:var(--muted);text-align:center;font-size:14px}

  /* COMPREHENSIVE RESPONSIVE DESIGN */

  /* Large Desktop (1400px+) */
  @media (min-width: 1400px) {
    :root { --max-width: 1400px; }
    .hero { grid-template-columns: 1fr 480px; gap: 40px; padding: 48px; }
    .hero-left { padding: 32px; }
    h1 { font-size: 48px; }
    .video-hero h2 { font-size: 42px; }
    .boot-wrap { grid-template-columns: 1fr 480px; gap: 32px; }
    .contact-grid { grid-template-columns: 1fr 420px; gap: 24px; }
    .section { padding: 32px; }
  }

  /* Desktop (1200px - 1399px) - Default styles above */

  /* Medium Desktop/Laptop (1024px - 1199px) */
  @media (max-width: 1199px) {
    .nav .wrap { padding: 12px 16px; }
    .hero { margin: 20px auto 40px; padding: 28px; gap: 24px; }
    .hero { grid-template-columns: 1fr 380px; }
    h1 { font-size: 36px; }
    .video-hero { margin: 32px auto; height: 68vh; }
    .video-hero h2 { font-size: 30px; }
    .boot-wrap { grid-template-columns: 1fr 380px; gap: 18px; }
    .contact-grid { grid-template-columns: 1fr 320px; }
  }

  /* Tablet Landscape (980px - 1023px) */
  @media (max-width: 1023px) {
    .hero { grid-template-columns: 1fr; padding: 24px; text-align: center; }
    .hero-left { padding: 16px; }
    .boot-wrap { grid-template-columns: 1fr; gap: 24px; }
    .contact-grid { grid-template-columns: 1fr; gap: 20px; }
    .video-hero { height: 60vh; }
    .video-hero .overlay { padding: 32px; }
    .team-grid { grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); }
  }

  /* Tablet Portrait (768px - 979px) */
  @media (max-width: 979px) {
    .nav .wrap { padding: 12px 16px; }
    .nav-links { gap: 12px; }
    .nav-links a { font-size: 13px; padding: 6px; }
    .cta-btn { padding: 6px 12px; font-size: 13px; }
    
    h1 { font-size: 32px; line-height: 1.1; }
    .video-hero h2 { font-size: 26px; }
    .section h3 { font-size: 24px; }
    .carousel { height: 320px; }
    .carousel img { height: 320px; }
    
    .team-grid { grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 14px; }
    .team-card img { width: 80px; height: 80px; }
    .team-card h4 { font-size: 15px; }
    .team-card p { font-size: 12px; }
  }

  /* Large Mobile (600px - 767px) */
  @media (max-width: 767px) {
    .nav-links { display: none; }
    .hamburger { display: block; }
    
    .hero { margin: 16px auto 32px; padding: 20px; }
    .hero-left { padding: 12px; }
    h1 { font-size: 28px; }
    .kicker { font-size: 11px; padding: 5px 8px; }
    p.lead { font-size: 15px; margin-bottom: 16px; }
    .hero-acts { justify-content: center; }
    
    .video-hero { 
      height: 50vh; 
      border-radius: 12px; 
      margin: 24px auto;
    }
    .video-hero .overlay { padding: 24px; text-align: center; }
    .video-hero h2 { font-size: 22px; }
    .video-hero p { font-size: 14px; }
    .video-controls { right: 12px; bottom: 12px; gap: 8px; }
    .icon-btn { padding: 8px; font-size: 14px; }
    
    .section { margin: 40px auto; padding: 16px; }
    .section h3 { font-size: 22px; }
    
    .carousel { height: 280px; }
    .carousel img { height: 280px; }
    .carousel .nav { padding: 0 8px; }
    
    .interest-card { padding: 16px; }
    .contact-form input, .contact-form textarea { padding: 10px; font-size: 14px; }
    
    .team-grid { 
      grid-template-columns: repeat(2, 1fr); 
      gap: 12px; 
    }
    .team-card { padding: 12px; }
    .team-card img { width: 72px; height: 72px; }
    .team-card h4 { font-size: 14px; }
    .team-card p { font-size: 11px; }
    
    footer { padding: 16px; font-size: 13px; }
  }

  /* Medium Mobile (480px - 599px) */
  @media (max-width: 599px) {
    .nav .wrap { padding: 10px 12px; }
    .logo { width: 36px; height: 36px; }
    .brand div:first-child { font-size: 16px; }
    .brand div:last-child { font-size: 11px; }
    
    h1 { font-size: 24px; }
    .hero { padding: 16px; margin: 12px auto 24px; }
    .hero-left { padding: 8px; }
    p.lead { font-size: 14px; }
    .btn-primary, .btn-ghost { padding: 10px 14px; font-size: 14px; }
    
    .video-hero { height: 45vh; margin: 16px auto; }
    .video-hero .overlay { padding: 20px; }
    .video-hero h2 { font-size: 20px; }
    
    .carousel { height: 240px; }
    .carousel img { height: 240px; }
    
    .stat .n { font-size: 20px; }
    .stat .t { font-size: 12px; }
    
    .interest-card { padding: 14px; }
    .contact-cta, .btn-primary { padding: 10px; font-size: 14px; }
  }

  /* Small Mobile (360px - 479px) */
  @media (max-width: 479px) {
    .nav .wrap { padding: 8px 10px; gap: 8px; }
    .logo { width: 32px; height: 32px; }
    .hamburger { font-size: 20px; }
    .cta-btn { padding: 5px 8px; font-size: 12px; }
    
    h1 { font-size: 22px; line-height: 1.15; }
    .hero { padding: 12px; margin: 8px auto 20px; }
    p.lead { font-size: 13px; max-width: none; }
    .btn-primary, .btn-ghost { padding: 8px 12px; font-size: 13px; }
    
    .video-hero { 
      height: 40vh; 
      margin: 12px auto; 
      border-radius: 10px;
    }
    .video-hero .overlay { padding: 16px; }
    .video-hero h2 { font-size: 18px; line-height: 1.2; }
    .video-hero p { font-size: 13px; }
    
    .section { margin: 32px auto; padding: 12px; }
    .section h3 { font-size: 20px; }
    
    .carousel { height: 200px; }
    .carousel img { height: 200px; }
    
    .team-grid { 
      grid-template-columns: repeat(2, 1fr); 
      gap: 8px; 
    }
    .team-card { padding: 8px; }
    .team-card img { width: 60px; height: 60px; margin-bottom: 8px; }
    .team-card h4 { font-size: 13px; margin-bottom: 4px; }
    .team-card p { font-size: 10px; line-height: 1.3; }
    
    .interest-card, .hero-card { padding: 12px; }
    .interest-card input, .interest-card select, .interest-card textarea { padding: 8px; font-size: 13px; }
    .contact-form input, .contact-form textarea { padding: 8px; font-size: 13px; }
    
    footer { padding: 12px; font-size: 12px; line-height: 1.4; }
  }

  /* Extra Small Mobile (320px - 359px) */
  @media (max-width: 359px) {
    .nav .wrap { padding: 6px 8px; }
    .brand { gap: 8px; }
    .logo { width: 28px; height: 28px; font-size: 14px; }
    .hamburger { padding: 6px; }
    
    h1 { font-size: 20px; }
    .hero { padding: 10px; }
    .kicker { font-size: 10px; padding: 4px 6px; }
    
    .video-hero { height: 35vh; margin: 10px auto; }
    .video-hero .overlay { padding: 12px; }
    .video-hero h2 { font-size: 16px; }
    .video-hero p { font-size: 12px; }
    .video-controls { right: 8px; bottom: 8px; gap: 6px; }
    .icon-btn { padding: 6px; font-size: 12px; }
    
    .section { padding: 10px; margin: 24px auto; }
    .section h3 { font-size: 18px; }
    
    .carousel { height: 180px; }
    .carousel img { height: 180px; }
    
    .team-card img { width: 50px; height: 50px; }
    .team-card h4 { font-size: 12px; }
    .team-card p { font-size: 9px; }
    
    .btn-primary, .btn-ghost, .contact-cta { 
      padding: 6px 10px; 
      font-size: 12px; 
      border-radius: 8px;
    }
    
    .stat .n { font-size: 18px; }
    .stat .t { font-size: 11px; }
  }

  /* Landscape orientation adjustments for mobile */
  @media (max-height: 500px) and (orientation: landscape) {
    .video-hero { height: 80vh; }
    .hero { margin: 16px auto; }
    .section { margin: 32px auto; }
  }

  /* High DPI / Retina displays */
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    body { -webkit-font-smoothing: subpixel-antialiased; }
  }

  /* Accessibility: Reduced motion */
  @media (prefers-reduced-motion: reduce) {
    .carousel .track { transition: none; }
    .fade-in { animation: none; opacity: 1; transform: none; }
    * { scroll-behavior: auto !important; }
  }

  /* Dark mode support */
  @media (prefers-color-scheme: dark) {
    /* Already dark by default, but could add overrides here */
  }

  /* small touches */
  .muted{color:var(--muted)}
  .fade-in{opacity:0;transform:translateY(8px);animation:enter .6s ease forwards}
  @keyframes enter{to{opacity:1;transform:none}}
</style>
</head>
<body>

  <!-- NAV -->
  <nav class="nav">
    <div class="wrap">
      <div class="brand">
        <div class="logo">A</div>
        <div>
          <div style="font-weight:800">Afrotek</div>
          <div style="font-size:12px;color:var(--muted)">Five women • Software • Bootcamps</div>
        </div>
      </div>

      <div style="display:flex;gap:18px;align-items:center">
        <div class="nav-links">
          <a href="#about">About</a>
          <a href="#bootcamp">Bootcamp</a>
          <a href="#team">Team</a>
          
        </div>
        <button class="cta-btn" onclick="document.querySelector('#contact input[name=name]').focus()">Express Interest</button>
        <button class="hamburger" onclick="toggleMobileMenu()">☰</button>
      </div>
      
      <div class="mobile-menu" id="mobileMenu">
        <a href="#about" onclick="toggleMobileMenu()">About</a>
        <a href="#bootcamp" onclick="toggleMobileMenu()">Bootcamp</a>
        <a href="#team" onclick="toggleMobileMenu()">Team</a>
        <a href="#contact" onclick="toggleMobileMenu()">Contact</a>
        <button class="cta-btn" onclick="document.querySelector('#contact input[name=name]').focus(); toggleMobileMenu();" style="margin-top:8px;">Express Interest</button>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <main>
    <section class="hero fade-in" aria-labelledby="hero-title">
      <div class="hero-left">
        <div class="kicker">AFRICA • WOMEN • TECH</div>
        <h1 id="hero-title">Afrotek — building the future with brilliant women</h1>
        <p class="lead">We're a team of five young women engineers who design beautiful products, mentor the next generation, and run hands-on bootcamps across Cameroon. Join our community or collaborate with us.</p>
        <div class="hero-acts">
          <button class="btn-primary" onclick="document.getElementById('bootcamp').scrollIntoView({behavior:'smooth'})">Join Bootcamp</button>
        </div>
      </div>

      <aside class="hero-card">
        <div class="stat"><div class="n">12+</div><div class="t">Bootcamp graduates</div></div>
        <div class="stat"><div class="n">5</div><div class="t">Founders / Engineers</div></div>
        <div class="stat"><div class="n">10+</div><div class="t">Projects shipped</div></div>
        <div style="margin-top:10px;color:var(--muted);font-size:13px">We offer Product Design, Web & Mobile Dev, Data & AI, and Mentorship.</div>
      </aside>
    </section>

    <!-- VIDEO HERO (hero-like video) -->
    <section class="video-hero" id="videoHero" aria-label="Bootcamp video">
      <!-- Replace the src below with your file when ready -->
      <video id="bgVideo" preload="auto" playsinline loop>
        <source src="images/vid.mp4" type="video/mp4">
        <!-- fallback image -->
      </video>
      
      <div class="overlay">
        <br><br><br><br><br><br><br><br><br><br><br>
        <h2>Afrotek's (Kelden Tech) Bootcamp — Real skills, real projects</h2>
        <p class="muted">An immersive program where participants build production-ready applications, get mentorship from Afrotek engineers, and launch portfolio projects.</p>
        <div style="margin-top:18px">
          <button class="btn-primary" onclick="document.getElementById('interest-name').focus()">Express Interest</button>
          <button class="btn-ghost" style="margin-left:10px" onclick="document.getElementById('carousel').scrollIntoView({behavior:'smooth'})">See Highlights</button>
        </div>
      </div>

      <div class="video-controls" role="group" aria-label="Video controls">
        <button id="muteBtn" class="icon-btn" title="Mute / Unmute" aria-pressed="false">🔊</button>
        <button id="playBtn" class="icon-btn" title="Play / Pause">⏯</button>
      </div>
    </section>

    <!-- BOOTCAMP SECTION -->
    <section id="bootcamp" class="section">
      <h3>Bootcamp Highlights</h3>
      <p class="muted" style="margin-bottom:18px">Gallery of this year's bootcamp. Use the form to express interest — we'll follow up on WhatsApp.</p>

      <div class="boot-wrap">
        <div class="gallery">
          <div class="carousel" id="carousel" aria-roledescription="carousel">
            <div class="track" id="track">
              <img src="images/boot1.jpg" alt="bootcamp-1">
              <img src="images/boot2.jpg" alt="bootcamp-2">
              <img src="images/boot3.jpg" alt="bootcamp-3">
              <img src="images/boot7.jpg" alt="bootcamp-4">
            </div>  
            
            <div class="nav">
              <button class="icon-btn" id="prev" aria-label="Previous slide">‹</button>
              <button class="icon-btn" id="next" aria-label="Next slide">›</button>
            </div>
          </div>
          <div class="dot-row" id="dots"></div>
        </div>

        <aside class="interest-card">
          <div style="font-weight:800;font-size:18px;margin-bottom:6px">Express interest</div>
          <div class="small muted">Tell us a little about you — we'll reach out on WhatsApp</div>
          <label for="interest-name">Full name</label>
          <input id="interest-name" placeholder="Your full name" type="text" />
          <label for="interest-email">Email</label>
          <input id="interest-email" placeholder="you@mail.com" type="email" />
          <label for="interest-role">Interested in</label>
          <select id="interest-role"><option>Full bootcamp</option><option>Short workshop</option><option>Mentorship</option> <option>Work with us</option></select>
          <label for="interest-msg">Short message</label>
          <textarea id="interest-msg" rows="4" placeholder="Tell us why you want to join"></textarea>
          <button class="btn-primary" id="interest-submit">Contact via WhatsApp</button>
          <div style="font-size:13px;color:var(--muted);margin-top:12px">Or email us at <strong style="color:#fff">keldentech98@gmail.com</strong></div>
        </aside>
      </div>
    </section>

    <!-- TEAM -->
    <section id="team" class="section">
      <h1>Meet the Team</h1>
      <p class="muted">Five founders. One mission — empower makers across Africa.</p>
      <div class="team-grid" style="margin-top:16px">
        <div class="team-card">
          <img src="images/quin.jpg" alt="Ada">
          <h4>Ngwina Quinstarics — Founder/General cordinator</h4>
          <p><a href="#">See portfolio</a></p>
        </div> 
        <div class="team-card">
          <img src="images/ange.jpg" alt="Zara">
          <h4>Azangue Ange — Founder/Assistant Coordinator</h4>
          <p><a href="#">See portfolio</a></p>
        </div>
        <div class="team-card">
          <img src="images/alex.jpg" alt="Nia">
          <h4>Alexine Manyuy — Founder/Finance Manager</h4>
          <p><a href="#">See portfolio</a></p>
        </div>
        <div class="team-card">
          <img src="images/becks.jpg" alt="Lina">
          <h4>Njimkooh Beckline — Founder/Technical support</h4>
          <p><a href="#">See portfolio</a></p>
        </div>
        <div class="team-card">
          <img src="images/nene.jpg" alt="Sade">
          <h4>Philnery-Naomi — Founder/Media and public relations</h4>
          <p><a href="#">See portfolio</a></p>
        </div>
      </div>
    </section>
         
    <!-- CONTACT -->
    <section id="contact" class="section">
      <h3>Additional info</h3>
      <div class="contact-grid" >
        <aside class="interest-card">
          <div style="font-weight:800">Office</div>
          <div class="muted" style="margin:8px 0">Yaounde, Cameroon • Remote</div>
          <div style="font-size:14px;color:var(--muted)">Follow us</div>
          <div style="display:flex;gap:10px;margin-top:10px">
            <a class="icon-btn" href="https://www.facebook.com/profile.php?id=61577142366455" aria-label="Facebook">T</a>
            <a class="icon-btn" href="https://www.linkedin.com/in/kelden-tech-tech-group-52297736a/?originalSubdomain=cm" aria-label="LinkedIn">in</a>
            <a class="icon-btn" href="https://www.instagram.com/kelden_tech?igsh=MWxyZHhpeHhjNjZtcg%3D%3D&utm_source=qr" aria-label="Instagram">ig</a>
          </div>
        </aside>
      </div>
    </section>
  </main>

  <footer>
    © 2025 Afrotek • Built with ❤️ • <span class="muted">Five founders — empowering the next generation</span>
  </footer>

<script>
  /* Mobile menu toggle */
  function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('active');
  }

  // Close mobile menu when clicking outside
  document.addEventListener('click', (e) => {
    const menu = document.getElementById('mobileMenu');
    const hamburger = document.querySelector('.hamburger');
    if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
      menu.classList.remove('active');
    }
  });

  /* Smooth scroll for nav anchors */
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click', e=>{
      e.preventDefault();
      const id = a.getAttribute('href').slice(1);
      const el = document.getElementById(id);
      if(el) el.scrollIntoView({behavior:'smooth', block:'start'});
    });
  });

  /* Carousel */
  (function(){
    const track = document.getElementById('track');
    const imgs = track.querySelectorAll('img');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    const dotsWrap = document.getElementById('dots');
    let idx = 0, len = imgs.length;

    function go(i){
      idx = (i + len) % len;
      track.style.transform = `translateX(${-idx * 100}%)`;
      updateDots();
    }
    function updateDots(){
      dotsWrap.innerHTML = '';
      for(let j=0;j<len;j++){
        const d = document.createElement('div');
        d.className = 'dot' + (j===idx ? ' active' : '');
        d.addEventListener('click',()=>go(j));
        dotsWrap.appendChild(d);
      }
    }
    prev.addEventListener('click',()=>go(idx-1));
    next.addEventListener('click',()=>go(idx+1));
    updateDots();
    let timer = setInterval(()=>go(idx+1),4000);
    [prev,next,track].forEach(el=>el.addEventListener('mouseenter',()=>clearInterval(timer)));
    [prev,next,track].forEach(el=>el.addEventListener('mouseleave',()=>timer = setInterval(()=>go(idx+1),4000)));
  })();

  /* Video autoplay when in view + mute/unmute + play/pause */
  (function(){
    const video = document.getElementById('bgVideo');
    const videoSection = document.querySelector('.video-hero');
    const muteBtn = document.getElementById('muteBtn');
    const playBtn = document.getElementById('playBtn');

    // START WITH SOUND ON - Change this to false if you want sound by default
    video.muted = false;
    
    // Try to play with sound first, if it fails due to autoplay policies, mute and try again
    video.play().catch(()=>{
      // If autoplay with sound fails, mute and try again
      video.muted = true;
      video.play().catch(()=>{ /* ignore if this also fails */ });
      updateMuteUI();
    });

    // IntersectionObserver to play/pause when visible
    const io = new IntersectionObserver(entries=>{
      entries.forEach(en=>{
        if(en.isIntersecting){
          video.play().catch(()=>{});
        } else {
          video.pause();
        }
      });
    }, {threshold: 0.5});
    io.observe(videoSection);

    // Mute toggle
    function updateMuteUI(){
      muteBtn.textContent = video.muted ? '🔇' : '🔊';
      muteBtn.setAttribute('aria-pressed', String(!video.muted));
    }
    muteBtn.addEventListener('click', ()=>{
      video.muted = !video.muted;
      // try to play with sound if unmuting
      if(!video.muted){ video.play().catch(()=>{/* if autoplay blocked */}) }
      updateMuteUI();
    });
    updateMuteUI();

    // Play / pause control
    function updatePlayUI(){
      playBtn.textContent = video.paused ? '▶️' : '⏸';
    }
    playBtn.addEventListener('click', ()=>{
      if(video.paused) video.play().catch(()=>{});
      else video.pause();
      updatePlayUI();
    });
    video.addEventListener('play', updatePlayUI);
    video.addEventListener('pause', updatePlayUI);

    // Click anywhere on video to toggle play/pause (optional)
    videoSection.addEventListener('click', (e) => {
      // Don't trigger if clicking on control buttons
      if (!e.target.closest('.video-controls')) {
        if(video.paused) {
          video.play().catch(()=>{});
        } else {
          video.pause();
        }
      }
    });

    // Hover: show overlay text (handled by CSS :hover)
  })();

  /* Interest form -> WhatsApp (replace number) */
  /* Interest form -> WhatsApp */
(function(){
    const phone = "678934073"; // Your phone number
    const btn = document.getElementById('interest-submit');
    btn.addEventListener('click', ()=>{
        const name = document.getElementById('interest-name').value.trim();
        const email = document.getElementById('interest-email').value.trim();
        const role = document.getElementById('interest-role').value;
        const msg = document.getElementById('interest-msg').value.trim();
        
        // Build the message with all form data
        const text = `Hello Afrotek! 
        
Name: ${name || 'Not provided'}
Email: ${email || 'Not provided'}
Interest: ${role}
Message: ${msg || 'No additional message'}

I'm interested in your bootcamp programs. Please contact me with more information.`;
        
        const url = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;
        window.open(url, '_blank');
    });
})();

  /* Contact form -> WhatsApp */
  (function(){
    const phone = "YOUR_PHONE_NUMBER"; // same replacement
    const btn = document.getElementById('contact-submit');
    btn.addEventListener('click', ()=>{
      const name = document.getElementById('contact-name').value.trim();
      const email = document.getElementById('contact-email').value.trim();
      const msg = document.getElementById('contact-message').value.trim();
      const text = `Hello Afrotek! I am ${name || '[no name]'} (${email || 'no-email'}). ${msg}`;
      const url = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;
      window.open(url,'_blank');
    });
  })();

  /* small accessibility: focus visible on keyboard nav */
  document.addEventListener('keydown', (e)=>{ if(e.key === 'Tab') document.documentElement.classList.add('show-focus'); });
</script>
</body>
</html>