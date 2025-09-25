<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Name — Portfolio</title>
  <meta name="description" content="Personal portfolio showcasing projects, skills and contact details.">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header class="sidebar">
  <a class="brand" href="#">
    <div class="logo">KM</div>
    <div>
      <div style="font-weight:700">Cheledi Kabelo Manala</div>
    </div>
  </a>

  <nav aria-label="Primary">
  <a href="index.php">Home</a>
  <a href="projects.html">Projects</a>
  <a href="about.html">About</a>
  <a href="contact.html" class="btn secondary">Contact</a>
</nav>

</header>
    </header>

    <main>
      <section class="hero">
        <div class="hero-card">
          <h1>Hi — I’m <span id="typed-name" style="color:var(--accent)"></span><span class="cursor">|</span></h1>
          <p>I’m a software engineer who enjoys building practical, secure, and user-friendly applications. I possess a strong understanding of software development lifecycle (SDLC). I approach each project with a balance of technical precision and creativity.</p>
          <div class="cta">
            <a class="btn" href="#projects">See my work</a>
          </div>

          <div style="margin-top:18px;display:flex;gap:12px;align-items:center">
            <div style="flex:1">
              <div class="card" style="padding:12px">
                <div style="font-size:12px;color:var(--muted)">Current focus</div>
                <div style="font-weight:700">Building secure web-based applications.</div>
              </div>
            </div>
            <div style="width:120px;text-align:right;color:var(--muted);font-size:13px">
            </div>
          </div>
        </div>

        <aside class="profile">
          <img class="avatar" src="assets/Career.jpg" alt="Career image">
          <h3>Honours Computer Sciences</h3>
          <p class="muted">Junior Software Engineer • Entry-Level</p>
          <div style="margin-top:12px;display:flex;gap:8px;justify-content:center">
            <a class="btn" href="#contact">Contact me</a>
            <a class="btn secondary" href="#" download>Download CV</a>
          </div>
        </aside>
      </section>

      <section id="projects" class="section">
        <h2>Projects & Research</h2>
        <div class="projects">
            <article class="projects">
             <h4>Personal Portfolio website</h4>
             <p class="muted">A responsive web portfolio built to showcase my skills, projects, and experience as a software developer. The site highlights my proficiency in front-end development and design.</p>
             <div classs="tags"><span class="tag"> • HTML</span><span class="tag"> • CSS</span><span class="tag"> • Php</span><span class="tag"> • Apache Netbeans IDE 27</span></div>   
            </article>
            
          <article class="project">
            <h4>GBV App</h4>
            <p class="muted">My team and I developed a web-based app designed to address crime and suicide rates. The application enables users to report incidents and engage with law enforcement and relevant professionals.</p>
            <div class="tags"><span class="tag"> • HTML</span><span class="tag"> • CSS</span><span class="tag"> • JavaScript</span><span class="tag"> • Visual Studio Code</span></div>
          </article>

          <article class="project">
            <h4>To do list App</h4>
            <p class="muted">A simple and efficient To-Do List application that helps users organize tasks, set priorities, and track progress. Built with a clean interface and responsive design, it allows adding, editing, marking as complete, and deleting tasks for improved productivity.</p>
            <div class="tags"><span class="tag">• HTML</span><span class="tag"> • CSS</span><span class="tag"> • JavaScript</span><span class="tag"> • Visual Studio Code</span></div>
          </article>

          <article class="project">
              <h4>Research Project</h4>
              <li>Title: The design and optimization of cross-layer protocol for network and transport layers in wireless sensor networks.</li>
              <p class="muted">Designed and optimized cross-layer protocol for network and transport layers to mitigate the shortcomings Wireless Sensor Networks.</p>
            <div class="tags"><span class="tag"> • Omnet++ </span><span class="tag">  • C++</span><span class="tag"> • NED</span><span class="tag"> • .ini</span></div>
          </article>

          <!-- Add more project cards here -->
        </div>
      </section>

      <section class="section columns">
        <div>
          <div class="card">
            <h2 id="about">About</h2>
            <p class="muted">As a software engineer, I approach development as both a technical craft and a problem-solving discipline. My work is guided by the principle that software should not only function efficiently but also create meaningful experiences for users. I am driven by curiosity and the desire to understand how systems interact, which allows me to design solutions that are both scalable and adaptable to change. Over time, I’ve developed a strong appreciation for writing maintainable code, documenting processes, and applying best practices that make collaboration smoother in team settings.

Beyond the technical side, I value continuous growth, whether that’s learning a new framework, contributing to open-source projects, or experimenting with different architectures to see how they impact scalability. My goal is to contribute to projects that not only solve immediate challenges but also lay the groundwork for future innovation.</p>

            <h3 style="margin-top:12px">Experience</h3>
            <ul>
              <li><strong>Lab Assistant</strong> — University of Limpopo (01/2022 - 11/2022)</li>
              <li><strong>Trainee Learner</strong> — Nedbank Limited (08/2024)</li>
              <li><strong>Lab Assistant</strong> — University of Limpopo (01/2024 - 11/2024)</li>
              <li><strong>IT Support & Systems Administrator</strong> — WGH Consult (11/2024 - 07/2025)</li>
            </ul>

            <h3 style="margin-top:12px">Education & Certifications</h3>
            <ul>
              <li>Grade 12 — Rantobeng Secondary School (2014)</li>
              <li>Lab Assistant certificate (2022)</li>
              <li>BSc Mathematical Sciences (2023)</li>
              <li>Lab Assistant certificate (2024)</li>
              <li>Honours Computer Sciences (2024)</li>
              <li>C# Microsoft certificate (2025)</li>
            </ul>
          </div>

          <div class="card" style="margin-top:12px">
            <h2 id="skills">Skills & Languages</h2>
            <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:10px">
              <div class="tag">• C#</div>
              <div class="tag">• JavaScript</div>
              <div class="tag">• HTML</div>
              <div class="tag">• CSS</div>
              <div class="tag">• MSSQL</div>
              <div class="tag">• MS365 Admin</div>
              <div class="tag">• Linux</div>
            </div>
          </div>
        </div>

        <aside>
          <div class="card">
            <h2>Contact</h2>
            <p class="muted">Want to work together or have a question? Send a message.</p>
            <form style="margin-top:12px;display:grid;gap:8px">
              <input placeholder="Your name" style="padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit">
              <input placeholder="Email" style="padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit">
              <textarea placeholder="Message" rows="4" style="padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit"></textarea>
              <div style="display:flex;gap:8px">
                <button type="submit" class="btn" style="flex:1">Send</button>
                <a href="#" class="btn secondary" style="display:inline-block;padding:10px 12px">Email</a>
              </div>
            </form>
          </div>

          <div class="card" style="margin-top:12px">
            <h3>Quick Links</h3>
            <ul style="margin-top:8px">
              <li><a href="#projects" class="muted">Projects</a></li>
              <li><a href="#skills" class="muted">Skills</a></li>
              <li><a href="#contact" class="muted">Contact</a></li>
            </ul>
          </div>
        </aside>
      </section>

    </main>

    <footer>
      <div class="muted">© <span id="year"></span> Your Name. All rights reserved.</div>
      <div class="socials">
        <a href="#">GitHub</a>
        <a href="#">LinkedIn</a>
        <a href="#">Twitter</a>
      </div>
    </footer>
  </div>

  <script>
    // small enhancements
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
  
  
 <script>
const name = "Cheledi Kabelo Manala"; // Text to type
const typedElement = document.getElementById("typed-name");
let index = 0;
let typing = true; // true = typing, false = deleting

function typeLoop() {
  if (typing) {
    typedElement.textContent += name.charAt(index);
    index++;
    if (index === name.length) {
      typing = false;
      setTimeout(typeLoop, 1000); // pause before deleting
    } else {
      setTimeout(typeLoop, 150);
    }
  } else {
    typedElement.textContent = typedElement.textContent.slice(0, -1);
    index--;
    if (index === 0) {
      typing = true;
      setTimeout(typeLoop, 500); // pause before typing again
    } else {
      setTimeout(typeLoop, 100);
    }
  }
}

// Start typing loop on page load
window.addEventListener("DOMContentLoaded", typeLoop);
</script>

<section class="hero">
  <div class="hero-card">
    <!-- Typed text, paragraphs, buttons, etc. -->
  </div>

  <aside class="profile">
    <!-- Profile image, info, CV link -->
  </aside>
</section>



</body>
</html>
