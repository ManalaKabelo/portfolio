<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cheledi Kabelo Manala — Portfolio</title>
  <meta name="description" content="Personal portfolio showcasing projects, skills and contact details.">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="index-page">
  <div class="container">
    
    <!-- Sidebar -->
    <header class="sidebar">
      <a class="brand" href="#">
        <div class="logo">KM</div>
        <div><div style="font-weight:700">Cheledi Kabelo Manala</div></div>
      </a>

      <nav aria-label="Primary">
        <a href="index.php">Home</a>
        <a href="projects.html">Projects</a>
        <a href="about.html">About</a>
        <a href="contact.html" class="btn secondary">Contact</a>
      </nav>
    </header>
    <!-- Main -->
    <main>
      <section class="hero">
        <div class="hero-card">
          <h1>Hi — I’m <span id="typed-name" style="color:var(--accent)"></span><span class="cursor">|</span></h1>
          <p>I’m a software engineer who enjoys building practical, secure, and user-friendly applications. I possess a strong understanding of software development lifecycle (SDLC). I approach each project with a balance of technical precision and creativity.</p>
          <div class="cta">
            <a class="btn" href="projects.html">See my work</a>
          </div>

          <div style="margin-top:18px;display:flex;gap:12px;align-items:center">
            <div style="flex:1">
              <div class="card" style="padding:12px">
                <div style="font-size:12px;color:var(--muted)">Current focus:</div>
                <div style="font-weight:700">Building secure web-based applications.</div>
              </div>
            </div>
          </div>
        </div>

        <aside class="profile">
          <img class="avatar" src="assets/Career.jpg" alt="Career image">
          <h3>Honours Computer Sciences</h3>
          <p class="muted">Junior Software Engineer • Entry-Level</p>
          <div style="margin-top:12px;display:flex;gap:8px;justify-content:center">
            <a class="btn" href="contact.html">Contact me</a>
            <a class="btn secondary" href="assets/2025OctoberCV.pdf" download>Download CV</a>
          </div>
        </aside>
      </section>
    </main>

    <!-- Footer -->
    <footer>
      <div class="card">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="https://github.com/ManalaKabelo" class="muted">GitHub</a></li>
          <li><a href="https://linkedin.com/in/kabelo-manala-025ab4257" class="muted">LinkedIn</a></li>
          <li><a href="#contact" class="muted">Twitter</a></li>
        </ul>
      </div>
      <div class="muted">© <span id="year"></span> Cheledi Kabelo Manala. All rights reserved.</div>
    </footer>

  </div>

  <script>
    // dynamic year
    document.getElementById('year').textContent = new Date().getFullYear();

    // typing animation
    const name = "Cheledi Kabelo Manala"; 
    const typedElement = document.getElementById("typed-name");
    let index = 0;
    let typing = true;

    function typeLoop() {
      if (typing) {
        typedElement.textContent += name.charAt(index);
        index++;
        if (index === name.length) {
          typing = false;
          setTimeout(typeLoop, 1000);
        } else {
          setTimeout(typeLoop, 150);
        }
      } else {
        typedElement.textContent = typedElement.textContent.slice(0, -1);
        index--;
        if (index === 0) {
          typing = true;
          setTimeout(typeLoop, 500);
        } else {
          setTimeout(typeLoop, 100);
        }
      }
    }
    window.addEventListener("DOMContentLoaded", typeLoop);
  </script>
</body>
</html>
