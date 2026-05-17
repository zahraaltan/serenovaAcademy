<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serenova School – About</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" crossorigin="anonymous"></script>

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: Georgia, serif;
      color: #1a1a1a;
      background: #a0763f;
    }
    section {
      padding: 4rem 2rem;
      text-align: center;
    }

    section h1 {
      font-size: 2rem;
      margin-bottom: 1.5rem;
      font-style: italic;
    }

    section p {
      max-width: 720px;
      margin: 0 auto;
      font-size: 1.1rem;
      line-height: 1.9;
    }

    /* ── Our Story ── */
    .story {
      background-color: #a0763f;
      color: #fff;
    }

    .story img {
      width: 60px;
      margin-bottom: 1.5rem;
    }

    /* ── Mission (split layout) ── */
    .mission {
      display: flex;
      min-height: 60vh;
      padding: 0;
      text-align: left;
    }

    .mission-image {
      flex: 0 0 40%;
      background: url(serenovahome.png) center / cover no-repeat;
    }

    .mission-text {
      flex: 1;
      padding: 4rem 3rem;
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(4px);
    }

    .mission-text h1 {
      margin-bottom: 1.5rem;
      font-size: 2rem;
      font-style: italic;
    }

    .mission-text p {
      font-size: 1.1rem;
      line-height: 1.9;
      max-width: 600px;
    }

    /* ── Vision ── */
    .vision {
      background-color: #a0763f;
      color: #fff;
    }

    .values {
      background-color: #a0763f;
      padding: 4rem 2rem;
    }

    .values h1 {
      font-size: 2rem;
      font-style: italic;
      text-align: center;
      margin-bottom: 2rem;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
      max-width: 1000px;
      margin: 0 auto;
    }

    .value-card {
      background: #fff;
      border-radius: 12px;
      padding: 1.5rem;
      display: flex;
      gap: 1rem;
      align-items: flex-start;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    .value-card img {
      width: 56px;
      height: 56px;
      object-fit: cover;
      border-radius: 8px;
      flex-shrink: 0;
    }

    .value-card p {
      font-size: 1rem;
      line-height: 1.7;
    }

    @media (max-width: 640px) {
      .mission { flex-direction: column; }
      .mission-image { flex: none; height: 240px; }
      .mission-text { padding: 2rem 1.5rem; }
    }
  </style>
</head>
<body>

    <?php include 'header.php'; ?>
  <section class="story">
    <h1>𝑂𝑢𝑟 𝑆𝑡𝑜𝑟𝑦</h1>
    <img src="download.png" alt="Serenova Logo">
    <p>Serenova School was founded with a simple yet powerful belief — that every child deserves a nurturing environment where they can grow, learn, and thrive. Established to serve families seeking quality education from the primary years through secondary, Serenova was built on the foundation of academic excellence, character development, and compassionate teaching. What began as a small community of dedicated educators and eager young learners has grown into a thriving institution that proudly shapes the minds and futures of hundreds of students each year. At Serenova, we don't just teach subjects — we build confident, curious, and responsible individuals who are ready to take on the world.</p>
  </section>

  <!-- Our Mission -->
  <div class="mission">
    <div class="mission-image"></div>
    <div class="mission-text">
      <h1>𝑂𝑢𝑟 𝑀𝑖𝑠𝑠𝑖𝑜𝑛</h1>
      <p>At Serenova School, our mission is to provide a safe, inclusive, and stimulating learning environment where every student — from their very first day in primary school to their final year of secondary — is empowered to reach their full potential. We are committed to delivering high-quality education that blends academic rigor with creativity, values, and real-world skills, ensuring that each child grows not only as a student but as a thoughtful and capable human being.</p>
    </div>
  </div>

  <!-- Our Vision -->
  <section class="vision">
    <h1>𝑂𝑢𝑟 𝑉𝑖𝑠𝑖𝑜𝑛</h1>
    <p>Our vision is to be a leading institution of learning that is recognized for nurturing well-rounded individuals who are academically strong, morally grounded, and socially responsible. We envision a Serenova where every classroom inspires curiosity, every teacher ignites passion, and every student leaves with the confidence and skills to make a meaningful difference in the world.</p>
  </section>

  <!-- Core Values -->
  <div class="values">
    <h1>𝑂𝑢𝑟 𝐶𝑜𝑟𝑒 𝑉𝑎𝑙𝑢𝑒𝑠</h1>
    <div class="values-grid">

      <div class="value-card">
        <img src="exelance.png" alt="Excellence">
        <p>🌟 <strong>Excellence</strong> — We strive for the highest standards in everything we do. We encourage every student to give their best and celebrate the effort behind every achievement.</p>
      </div>

      <div class="value-card">
        <img src="respect.jpg" alt="Respect">
        <p>🤝 <strong>Respect</strong> — We foster a culture of mutual respect — for one another, for diversity, and for differing opinions. Every voice at Serenova matters.</p>
      </div>

      <div class="value-card">
        <img src="ceryousity.png" alt="Curiosity">
        <p>🔍 <strong>Curiosity</strong> — We nurture a love for questioning, exploring, and discovering — because curious minds grow into innovative thinkers.</p>
      </div>

      <div class="value-card">
        <img src="integrity.jpg" alt="Integrity">
        <p>✅ <strong>Integrity</strong> — We teach our students to be honest, accountable, and ethical in all aspects of life. Doing the right thing is a cornerstone of a Serenova student.</p>
      </div>

      <div class="value-card">
        <img src="growth.png" alt="Growth">
        <p>🌱 <strong>Growth</strong> — We embrace a growth mindset — the belief that with dedication and hard work, every student can improve and surpass their own expectations.</p>
      </div>

      <div class="value-card">
        <img src="community.png" alt="Community">
        <p>🤲 <strong>Community</strong> — We are more than a school — we are a family. We value collaboration, kindness, and a deep sense of belonging for students, teachers, and parents alike.</p>
      </div>

    </div>
  </div>
 <?php include 'footer.php'; ?>
</body>
</html>