<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTSD: Memahami Gangguan Stres Pascatrauma - Senandika</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8f9fa;
            color: #6b7280;
            line-height: 1.6;
            padding: 2rem;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .article-header {
            background: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            padding: 1rem 2rem;
            border-bottom: 1px solid #e5e7eb;
        }
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #4682A9;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        .back-button:hover { color: #749BC2; }
        .back-button svg {
            width: 1.25rem;
            height: 1.25rem;
        }
        .image-placeholder {
            width: 100%; height: 250px;
            background: #e5e7eb;
            display: flex; align-items: center; justify-content: center;
            position: relative;
        }
        .article-content { padding: 2rem; }
        .summary-section {
            border-left: 4px solid #4682A9;
            background-color: #e0f2f7;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-radius: 0 4px 4px 0;
        }
        .summary-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.75rem;
        }
        .summary-text {
            font-size: 0.95rem;
            color: #4b5563;
        }
        .main-article-text {
            font-size: 1rem;
            line-height: 1.7;
            color: #374151;
            margin-bottom: 1.5rem;
        }
        .article-section-title {
            font-size: 1.75rem;
            font-weight: bold;
            color: #111827;
            margin-top: 2.5rem;
            margin-bottom: 1rem;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 0.5rem;
        }
        .article-subsection-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }
        .article-list {
            list-style: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
            color: #4b5563;
        }
        .article-list li { margin-bottom: 0.5rem; }
        .info-box {
            background-color: #fffbe0;
            border-left: 4px solid #f59e0b;
            padding: 1.5rem;
            margin: 2rem 0;
            border-radius: 0 4px 4px 0;
        }
        .info-box-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #92400e;
            margin-bottom: 0.75rem;
        }
        .info-box-text {
            font-size: 0.95rem;
            color: #78350f;
        }
        @media (max-width: 768px) {
            body { padding: 1rem; }
            .article-header, .article-content { padding: 1rem; }
            .article-section-title { font-size: 1.5rem; }
            .article-subsection-title { font-size: 1.1rem; }
            .summary-section { padding: 1rem; }
        }
        .image-placeholder {
    width: 100%;
    height: 250px;
    background: #e5e7eb;
    position: relative;
    overflow: hidden;
}

.image-placeholder img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
    </style>
</head>
<body>
<div class="container">
    <header class="article-header">
        <a href="{{ route('dashboard') }}" class="back-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali ke Dashboard
        </a>
    </header>
    <div class="image-placeholder">
        <img src="{{asset('storage/ptsd.jpeg')}}"/>
    </div>
    <div class="article-content">
        <div class="summary-section">
            <h2 class="summary-title">Ringkasan</h2>
            <p class="summary-text">
                Artikel ini membahas PTSD (Post-Traumatic Stress Disorder) atau Gangguan Stres Pascatrauma. Gangguan ini bisa muncul setelah seseorang mengalami atau menyaksikan peristiwa traumatis. Artikel ini menjelaskan gejala, penyebab, dan penanganan PTSD secara lengkap.
            </p>
        </div>

        <h1 class="article-section-title">PTSD: Memahami Gangguan Stres Pascatrauma</h1>
        <p class="main-article-text">
            PTSD adalah gangguan psikologis yang muncul setelah seseorang mengalami peristiwa traumatis seperti kecelakaan, bencana alam, kekerasan, atau peristiwa lain yang mengancam keselamatan dan jiwa. Meskipun normal merasa terguncang setelah kejadian semacam itu, PTSD ditandai oleh gejala yang tidak hilang seiring waktu.
        </p>

        <h2 class="article-section-title">Gejala PTSD</h2>
        <p class="main-article-text">
            Gejala PTSD dapat dibagi menjadi empat kategori utama:
        </p>
        <h3 class="article-subsection-title">1. Intrusi</h3>
        <ul class="article-list">
            <li>Kenangan traumatis yang terus muncul</li>
            <li>Mimpi buruk terkait kejadian traumatis</li>
            <li>Flashback, seolah-olah peristiwa terjadi kembali</li>
        </ul>
        <h3 class="article-subsection-title">2. Penghindaran</h3>
        <ul class="article-list">
            <li>Menghindari tempat, orang, atau aktivitas yang mengingatkan pada trauma</li>
            <li>Menolak membicarakan peristiwa tersebut</li>
        </ul>
        <h3 class="article-subsection-title">3. Perubahan Negatif pada Pikiran dan Mood</h3>
        <ul class="article-list">
            <li>Perasaan bersalah, malu, atau tidak berdaya</li>
            <li>Kehilangan minat terhadap aktivitas yang biasa disukai</li>
            <li>Merasa terasing dari orang lain</li>
        </ul>
        <h3 class="article-subsection-title">4. Perubahan dalam Respons Fisik dan Emosional</h3>
        <ul class="article-list">
            <li>Mudah marah atau tersinggung</li>
            <li>Kesulitan tidur</li>
            <li>Waspada berlebihan atau ketakutan yang konstan</li>
        </ul>

        <div class="info-box">
            <h3 class="info-box-title">Tidak Semua Orang Mengalami PTSD</h3>
            <p class="info-box-text">
                Tidak semua orang yang mengalami peristiwa traumatis akan mengalami PTSD. Faktor risiko seperti riwayat gangguan mental, kurangnya dukungan sosial, atau intensitas trauma dapat memengaruhi kemungkinan seseorang terkena gangguan ini.
            </p>
        </div>

        <h2 class="article-section-title">Penanganan PTSD</h2>
        <p class="main-article-text">
            Penanganan PTSD melibatkan terapi psikologis, pengobatan, atau kombinasi keduanya. Makin cepat seseorang mencari bantuan, makin besar kemungkinan pemulihan.
        </p>
        <h3 class="article-subsection-title">Terapi Psikologis</h3>
        <p class="main-article-text">
            Terapi perilaku kognitif (CBT), terutama terapi pemrosesan kognitif dan terapi pemaparan, sangat efektif untuk PTSD. Terapi ini membantu individu menghadapi kenangan traumatis secara aman dan membentuk cara berpikir yang sehat.
        </p>
        <h3 class="article-subsection-title">Obat-obatan</h3>
        <p class="main-article-text">
            Obat seperti antidepresan (SSRI dan SNRI) sering digunakan untuk membantu mengatasi gejala kecemasan, depresi, dan insomnia yang menyertai PTSD.
        </p>

        <div class="info-box">
            <h3 class="info-box-title">Dukungan Lingkungan Sangat Penting</h3>
            <p class="info-box-text">
                Lingkungan yang mendukung, seperti keluarga dan teman dekat, sangat penting dalam proses pemulihan dari PTSD. Edukasi dan pemahaman masyarakat juga membantu mengurangi stigma terhadap penderita PTSD.
            </p>
        </div>
    </div>
</div>
</body>
</html>