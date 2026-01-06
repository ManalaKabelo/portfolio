<?php 
session_start();
include 'includes/header.php'; 
?>

    <main>
      <section class="page-hero">
        <h2 style="color: #ffd700;">Projects & Research</h2>
        <p class="muted">
This section presents my projects and research work, showcasing my skills, ideas, and experience gained through practical and academic work. It highlights my ability to analyze problems, apply appropriate technologies, and deliver structured solutions. Each project reflects my learning journey, technical growth, and commitment to producing quality results.        </p>
      </section>

      <section class="projects-grid">
        <article class="project">
          <h3 style="color: #d9c126">Personal Portfolio Website</h3>
          <p class="muted">
              This portfolio page showcases my abilities, projects, and research, emphasizing the information and expertise I have acquired throughout both academic and practical work. It demonstrates my capacity for problem-solving, the use of contemporary technology, and ongoing development via education and practical experience. My professional development, commitment, and enthusiasm for creating significant solutions are all reflected on the website.
          </p>
        </article>

        <article class="project">
          <h3 style="color: #d9c126">GBV App</h3>
          <p class="muted">
My team and I developed an application aimed at helping reduce the rate of gender-based violence (GBV) in our country. The application allows users to alert authorities immediately by pressing a panic button when they are experiencing any form of GBV. It also connects users with qualified professionals who can provide support and guidance to help them cope after experiencing GBV.          </p>
        </article>

        <article class="project">
          <h3 style="color: #d9c126">To-Do List App</h3>
          <p class="muted">
I designed a to-do list application during my internship at Hex Softwares. The application helps users plan their daily activities by creating a list of tasks to be completed. After successfully completing a task, users can check it off, allowing them to track progress and focus on remaining tasks more effectively.          </p>
        </article>

        <article class="project">
          <h3 style="color: #d9c126">Research Project</h3>
          <p class="muted">
              <strong>Title:</strong>
This research focused on the optimization of the network and transport layers in Wireless Sensor Networks (WSNs) to improve overall performance. The study analyzed key quality of service parameters such as delay, reliability, and data delivery efficiency. By applying cross-layer optimization techniques, the research aimed to enhance communication, reduce packet loss, and improve network stability in resource-constrained WSN environments.          </p>
        </article>
      </section>
    </main>
    
  <script>
      document.getElementById('year').textContent = new Date().getFullYear();
  </script>

<?php include 'includes/footer.php'; ?>

