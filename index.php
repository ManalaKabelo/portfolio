<?php 
session_start();
include 'includes/header.php'; 
?>

<main>
    <section class="hero">

        <!-- LEFT: Intro Card -->
        <div class="hero-card">

            <h1>
                Hi — I’m 
                <span id="typed-name" style="color: var(--accent)"></span>
                <span class="cursor">|</span>
            </h1>

            <p>
                I’m a software engineer who enjoys building practical, secure, and user-friendly applications. 
                I possess a strong understanding of the software development lifecycle (SDLC), and I approach each 
                project with a balance of technical precision and creativity.
            </p>

            <div class="cta">
                <a class="btn" href="projectResearch.php">See my work</a>
            </div>

            <!-- Focus Card -->
            <div class="focus-wrapper">
                <div class="card focus-card">
                    <div class="focus-label">Current focus:</div>
                    <div class="focus-text">Building secure web-based applications.</div>
                </div>
            </div>
        </div>

        <!-- RIGHT: Profile Sidebar -->
        <aside class="profile">
            <img class="avatar" src="assets/Career.jpg" alt="Career image">

            <h3>Honours Computer Sciences</h3>
            <p class="muted">Junior Software Engineer • Entry-Level</p>

            <div class="profile-actions">
                <a class="btn" href="contact.php">Contact me</a>
                <a class="btn" href="assets/2025-CV-MANALA.pdf" download>Download CV</a>
            </div>
        </aside>

    </section>
</main>

<script>
document.addEventListener("DOMContentLoaded", () => {

    // dynamic year
    const yearEl = document.getElementById("year");
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }

    // typing animation
    const name = "Cheledi Kabelo Manala.";
    const typedElement = document.getElementById("typed-name");

    if (!typedElement) return;

    let index = 0;
    let typing = true;

    function typeLoop() {
        if (typing) {
            typedElement.textContent = name.slice(0, index + 1);
            index++;

            if (index === name.length) {
                typing = false;
                setTimeout(typeLoop, 1000);
                return;
            }
        } else {
            typedElement.textContent = name.slice(0, index - 1);
            index--;

            if (index === 0) {
                typing = true;
                setTimeout(typeLoop, 500);
                return;
            }
        }

        setTimeout(typeLoop, typing ? 150 : 100);
    }

    typeLoop();
});
</script> 

<?php include 'includes/footer.php'; ?>
