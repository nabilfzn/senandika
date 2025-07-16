<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SENANDIKA</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Tombol Login -->

  <div class="container">
    <!-- Header -->
    <header class="header">
      <p class="welcome">Selamat datang di</p>
      <h1 class="title">SENANDIKA</h1>
      <p class="tagline">INDONESIAN LIFE SCHOOL</p>
    </header>

    <!-- Main -->
    <main class="main-content">
      <h2 class="question">Mau kemana?</h2>
      <div class="options-container">
        <a href="{{ route('dashboard') }}" class="option-card">
          <img src="{{asset('storage/edukasi.jpg')}}" alt="Edukasi" class="icon" />
          <h3 class="card-title">EDUKASI</h3>
          <p class="card-desc">Untuk Blog, Tes Psikologi, Karir, Kerja Sama</p>
        </a>

        <a href="{{ route('chat') }}" class="option-card">
          <img src="{{asset('storage/konsultasi.png')}}" Konsultasi" class="icon" />
          <h3 class="card-title">KONSULTASI</h3>
          <p class="card-desc">Untuk Life Coaching dan Konseling</p>
        </a>
      </div>
    </main>
  </div>

  <!-- Wave Background -->
  <div class="wave-background">
    <svg viewBox="0 0 1200 320" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,106.7L1200,96L1200,320L0,320Z" fill="#bae6fd"></path>
    </svg>
  </div>
</body>
</html>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Outfit', sans-serif;
  background: #fff;
  color: #1e293b;
  min-height: 100vh;
}

.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 2rem 1rem;
  position: relative;
  z-index: 2;
  text-align: center;
}

/* Tombol Login */
.login-link {
  position: absolute;
  top: 1rem;
  right: 2rem;
  z-index: 10;
}

.login-link a {
  font-size: 1rem;
  color: #0f172a;
  text-decoration: none;
  font-weight: 600;
}

.login-link a:hover {
  text-decoration: underline;
}


/* Header */
.header {
  margin-top: 2rem;
  margin-bottom: 2rem;
}

.header .welcome {
  font-size: 1.5rem;
  font-weight: 400;
  color: #334155;
  margin-bottom: 0.5rem;
}

.header .title {
  font-size: 3.5rem;
  font-weight: 900;
  color: #0f172a;
  letter-spacing: 0.01em;
  text-transform: uppercase;
  margin-bottom: 0.25rem;
}

.header .tagline {
  font-size: 1.1rem;
  color: #475569;
  letter-spacing: 0.2em;
  text-transform: uppercase;
}

/* Main Content */
.main-content {
  margin-top: 8rem;
}

.question {
  font-size: 1.8rem;
  font-weight: 600;
  color: #1e293b;
  margin-bottom: 2rem;
}

/* Option Cards */
.options-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2rem;
}

.option-card {
  background: #fff;
  border-radius: 12px;
  padding: 2rem;
  width: 260px;
  text-align: center;
  text-decoration: none;
  color: inherit;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.option-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.icon {
  width: 100px;
  height: 100px;
  margin-bottom: 1rem;
}

.card-title {
  font-size: 1.2rem;
  font-weight: 600;
  color: #0f172a;
  margin-bottom: 0.5rem;
}

.card-desc {
  font-size: 0.9rem;
  color: #64748b;
}

/* Wave Background */
.wave-background {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100vw;
  z-index: 1;
  pointer-events: none;
}

.wave-background svg {
  width: 100%;
  height: auto;
  display: block;
}

/* Responsive */
@media (max-width: 768px) {
  .options-container {
    flex-direction: column;
    align-items: center;
  }

  .option-card {
    width: 90%;
  }

  .header .title {
    font-size: 2.5rem;
  }

  .header .tagline {
    font-size: 0.9rem;
  }
}
</style>