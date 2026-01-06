<?php 
session_start();
include 'includes/header.php'; 
?>

    <main>
      <section class="section columns">
        <div>
          <div class="card">
            <h2 style="color: #ffd700;">About</h2>
            <p class="muted">
              As a software engineer, I approach development as both a technical craft and a problem-solving discipline. My work is guided by the principle that software should not only function efficiently but also create meaningful experiences for users. I am driven by curiosity and the desire to understand how systems interact, which allows me to design solutions that are both scalable and adaptable to change. Over time, I’ve developed a strong appreciation for writing maintainable code, documenting processes, and applying best practices that make collaboration smoother in team settings. Beyond the technical side, I value continuous growth, whether that’s learning a new framework, contributing to open-source projects, or experimenting with different architectures to see how they impact scalability. My goal is to contribute to projects that not only solve immediate challenges but also lay the groundwork for future innovation.
            </p>

            <h2 style="margin-top:12px; color: #ffd700;">Experience</h2>
            <ul>
              <li><strong>Lab Assistant</strong> — University of Limpopo (01/2022 - 11/2022)</li>
              <li><strong>Trainee Learner</strong> — Nedbank Limited (08/2024)</li>
              <li><strong>Lab Assistant</strong> — University of Limpopo (01/2024 - 11/2024)</li>
              <li><strong>IT Support & Systems Administrator</strong> — WGH Consult (11/2024 - 08/2025)</li>
              <li><strong>Software Developer</strong> — LEDA (Limpopo Connexion) (09/2024 - Present)</li>
            </ul>

            <h2 style="margin-top:12px; color: #ffd700;">Education & Certifications</h2>
            <ul>
              <li>Grade 12 Rantobeng Secondary School (2014)</li>
              <li>Lab Assistant certificate (2022)</li>
              <li>BSc Mathematical Sciences (2023)</li>
              <li>Lab Assistant certificate (2024)</li>
              <li>Honours Computer Sciences (2024)</li>
              <li>C# Microsoft certificate (2025)</li>
            </ul>
          </div>

          <div class="card" style="margin-top:12px">
            <h2 id="Systems" style="color: #ffd700;">Systems & Languages</h2>
            <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:10px">
              <div class="tag">• C#</div>
              <div class="tag">• PHP</div>
              <div class="tag">• HTML</div>
              <div class="tag">• CSS</div>
              <div class="tag">• JavaScript</div>
              <div class="tag">• MSSQL</div>
              <div class="tag">• MS365 Admin</div>
              <div class="tag">• Fortinet Firewall</div>
              <div class="tag">• Linux</div>
            </div>
          </div>
        </div>
      </section>
    </main>


  <script>
      document.getElementById('year').textContent = new Date().getFullYear();
  </script>

<?php include 'includes/footer.php'; ?>

