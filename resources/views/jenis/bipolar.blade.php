<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bipolar: Memahami Gangguan Mood - Senandika</title>
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
    <div class="image-placeholder"></div>
    <div class="article-content">
        <div class="summary-section">
            <h2 class="summary-title">Ringkasan</h2>
            <p class="summary-text">
                Artikel ini membahas gangguan bipolar, sebuah kondisi kesehatan mental yang ditandai oleh perubahan ekstrem dalam suasana hati, energi, dan kemampuan untuk berfungsi sehari-hari. Anda akan mempelajari tipe, gejala, dan pendekatan pengobatan.
            </p>
        </div>

        <h1 class="article-section-title">Bipolar: Memahami Gangguan Mood dengan Perubahan Ekstrem</h1>
        <p class="main-article-text">
            Gangguan bipolar adalah kondisi kejiwaan yang menyebabkan perubahan suasana hati ekstrem antara mania (kegembiraan berlebihan) dan depresi. Perubahan ini bisa terjadi beberapa kali dalam setahun atau bahkan dalam waktu yang lebih singkat.
        </p>

        <h2 class="article-section-title">Tipe Gangguan Bipolar</h2>
        <p class="main-article-text">Ada beberapa tipe bipolar yang dikategorikan berdasarkan intensitas dan pola episode suasana hati:</p>
        <ul class="article-list">
            <li><strong>Bipolar I:</strong> Episode mania parah dan sering disertai episode depresi berat.</li>
            <li><strong>Bipolar II:</strong> Episode hipomania (mania ringan) dan depresi berat, tanpa episode mania penuh.</li>
            <li><strong>Gangguan Siklotimik:</strong> Perubahan mood ringan namun kronis selama minimal 2 tahun.</li>
        </ul>

        <h2 class="article-section-title">Gejala dan Ciri-Ciri</h2>
        <h3 class="article-subsection-title">Mania/Hipomania</h3>
        <ul class="article-list">
            <li>Energi sangat tinggi dan aktivitas meningkat</li>
            <li>Merasa sangat gembira, euforia, atau mudah marah</li>
            <li>Kebutuhan tidur berkurang</li>
            <li>Bicara cepat dan pikiran melompat-lompat</li>
            <li>Perilaku impulsif seperti belanja berlebihan atau keputusan gegabah</li>
        </ul>
        <h3 class="article-subsection-title">Depresi</h3>
        <ul class="article-list">
            <li>Perasaan sedih, putus asa, atau kosong</li>
            <li>Kehilangan minat pada aktivitas sehari-hari</li>
            <li>Kesulitan berkonsentrasi</li>
            <li>Kelelahan atau kehilangan energi</li>
            <li>Pikiran tentang kematian atau bunuh diri</li>
        </ul>

        <div class="info-box">
            <h3 class="info-box-title">Bipolar Bukan Sekadar Perubahan Mood</h3>
            <p class="info-box-text">
                Gangguan bipolar bukan hanya "naik turun" suasana hati biasa. Ini adalah kondisi serius yang mempengaruhi fungsi harian dan membutuhkan penanganan medis.
            </p>
        </div>

        <h2 class="article-section-title">Pengobatan dan Penanganan</h2>
        <p class="main-article-text">
            Gangguan bipolar dapat dikelola dengan kombinasi pengobatan dan psikoterapi. Perawatan jangka panjang sangat penting untuk mencegah kekambuhan.
        </p>
        <h3 class="article-subsection-title">Obat-obatan</h3>
        <p class="main-article-text">Obat stabilisasi mood seperti lithium, anticonvulsant, dan antipsikotik atipikal sering digunakan.</p>
        <h3 class="article-subsection-title">Psikoterapi</h3>
        <p class="main-article-text">Terapi perilaku kognitif (CBT) dan terapi keluarga dapat membantu pasien dan keluarga memahami serta menghadapi bipolar.</p>

        <div class="info-box">
            <h3 class="info-box-title">Peran Dukungan Sosial</h3>
            <p class="info-box-text">
                Dukungan dari keluarga, teman, dan komunitas sangat penting dalam pemulihan pasien bipolar. Edukasi tentang kondisi ini juga membantu mengurangi stigma.
            </p>
        </div>
    </div>
</div>
</body>
</html>
