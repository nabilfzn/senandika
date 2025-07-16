<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kecemasan: Panduan Lengkap - Senandika</title>
    <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
            color: #6b7280; /* Gray text */
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

        /* Header for Article Detail */
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
            color: #4682A9; /* Senandika Blue */
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .back-button:hover {
            color: #749BC2; /* Lighter Senandika Blue */
        }

        .back-button svg {
            width: 1.25rem;
            height: 1.25rem;
        }

        /* Image Placeholder */
        .image-placeholder {
            width: 100%;
            height: 250px; /* Slightly taller for article image */
            background: #e5e7eb; /* Light gray */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .image-icon {
            width: 80px; /* Larger icon */
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .image-icon svg {
            width: 32px; /* Larger SVG */
            height: 32px;
            color: #9ca3af; /* Medium gray */
        }

        /* Article Content */
        .article-content {
            padding: 2rem;
        }

        .summary-section {
            border-left: 4px solid #4682A9; /* Senandika Blue */
            background-color: #e0f2f7; /* Light blue background */
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-radius: 0 4px 4px 0; /* Rounded only on right side */
        }

        .summary-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937; /* Darker gray */
            margin-bottom: 0.75rem;
        }

        .summary-text {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #4b5563; /* Medium gray */
        }

        .main-article-text {
            font-size: 1rem;
            line-height: 1.7;
            color: #374151; /* Dark gray */
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

        .article-list li {
            margin-bottom: 0.5rem;
        }

        .info-box {
            background-color: #fffbe0; /* Light yellow */
            border-left: 4px solid #f59e0b; /* Orange */
            padding: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            border-radius: 0 4px 4px 0;
        }

        .info-box-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #92400e; /* Dark orange */
            margin-bottom: 0.75rem;
        }

        .info-box-text {
            font-size: 0.95rem;
            color: #78350f; /* Medium orange */
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }
            .article-header, .article-content {
                padding: 1rem;
            }
            .article-section-title {
                font-size: 1.5rem;
            }
            .article-subsection-title {
                font-size: 1.1rem;
            }
            .summary-section {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header for Article Detail -->
        <header class="article-header">
            <a href="{{ route('dashboard') }}" class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Dashboard
            </a>
        </header>

        <!-- Image Placeholder -->
        <div class="image-placeholder">
            <img src="" alt="">
        </div>

        <!-- Article Content -->
        <div class="article-content">
            <!-- Summary Section -->
            <div class="summary-section">
                <h2 class="summary-title">Ringkasan</h2>
                <p class="summary-text">
                    Artikel ini menyajikan panduan lengkap mengenai gangguan kecemasan, salah satu kondisi kesehatan mental yang paling umum. Anda akan mengetahui jenis-jenis kecemasan, gejala khas, penyebab umum, dan cara pengobatan yang efektif.
                </p>
            </div>

            <h1 class="article-section-title">Kecemasan: Panduan Lengkap Memahami Gangguan Kecemasan yang Mengganggu Kehidupan</h1>
            <p class="main-article-text">
                Gangguan kecemasan adalah kondisi kesehatan mental yang ditandai dengan rasa takut, cemas, atau khawatir yang berlebihan dan terus-menerus. Kecemasan berbeda dari rasa gugup biasa karena dapat mengganggu aktivitas sehari-hari seperti bekerja, belajar, dan menjalin hubungan sosial.
            </p>
            <p class="main-article-text">
                Di Indonesia, gangguan kecemasan menjadi semakin umum seiring meningkatnya tekanan sosial dan ekonomi. Meskipun umum, banyak orang tidak menyadari bahwa kecemasan bisa menjadi masalah medis yang memerlukan perhatian profesional.
            </p>

            <h2 class="article-section-title">Apa itu Gangguan Kecemasan?</h2>
            <p class="main-article-text">
                Gangguan kecemasan adalah kelompok kondisi mental yang meliputi Generalized Anxiety Disorder (GAD), Panic Disorder, Phobia, dan Social Anxiety Disorder. Masing-masing memiliki karakteristik khusus, namun semuanya melibatkan kecemasan berlebihan.
            </p>
            <div class="info-box">
                <h3 class="info-box-title">Perbedaan Kecemasan Normal dan Gangguan Kecemasan</h3>
                <p class="info-box-text">
                    Kecemasan normal biasanya bersifat sementara dan berkaitan dengan situasi tertentu seperti wawancara kerja. Sebaliknya, gangguan kecemasan bersifat menetap, muncul tanpa alasan jelas, dan mengganggu kehidupan sehari-hari.
                </p>
            </div>

            <h2 class="article-section-title">Gejala dan Tanda-Tanda Kecemasan</h2>
            <p class="main-article-text">
                Gejala gangguan kecemasan bisa berbeda-beda tergantung jenisnya, namun beberapa gejala umum meliputi:
            </p>
            <h3 class="article-subsection-title">Gejala Emosional</h3>
            <ul class="article-list">
                <li>Perasaan gugup, tegang, atau panik</li>
                <li>Ketakutan yang tidak rasional</li>
                <li>Khawatir berlebihan terhadap masa depan</li>
                <li>Kecemasan yang menetap tanpa sebab yang jelas</li>
            </ul>

            <h3 class="article-subsection-title">Gejala Fisik</h3>
            <ul class="article-list">
                <li>Denyut jantung cepat</li>
                <li>Berkeringat berlebihan</li>
                <li>Tremor atau gemetar</li>
                <li>Kesulitan bernapas atau sesak dada</li>
                <li>Gangguan tidur</li>
            </ul>

            <h2 class="article-section-title">Cara Mengatasi dan Mengobati Gangguan Kecemasan</h2>
            <p class="main-article-text">
                Gangguan kecemasan bisa diatasi dengan kombinasi terapi, perubahan gaya hidup, dan obat-obatan. Konsultasi dengan profesional kesehatan mental sangat penting untuk menentukan pendekatan terbaik.
            </p>
            <h3 class="article-subsection-title">Psikoterapi</h3>
            <p class="main-article-text">
                Cognitive Behavioral Therapy (CBT) sangat efektif dalam membantu penderita mengidentifikasi dan mengubah pola pikir yang memicu kecemasan. Terapi eksposur juga digunakan untuk fobia dan panic disorder.
            </p>
            <h3 class="article-subsection-title">Obat-obatan</h3>
            <p class="main-article-text">
                Obat antidepresan seperti SSRI dan SNRI sering digunakan untuk gangguan kecemasan. Dokter juga dapat meresepkan obat penenang jangka pendek seperti benzodiazepine, dengan hati-hati.
            </p>
            <h3 class="article-subsection-title">Perubahan Gaya Hidup</h3>
            <p class="main-article-text">
                Olahraga teratur, teknik relaksasi seperti meditasi dan pernapasan dalam, serta pola tidur yang baik sangat membantu dalam mengurangi kecemasan.
            </p>

            <div class="info-box">
                <h3 class="info-box-title">Jangan Ragu untuk Mencari Bantuan</h3>
                <p class="info-box-text">
                    Jika Anda atau orang terdekat Anda mengalami gejala kecemasan yang mengganggu kehidupan sehari-hari, segera konsultasikan dengan psikolog atau psikiater untuk mendapatkan diagnosis dan penanganan yang tepat.
                </p>
            </div>
        </div>
    </div>  
</body>
</html>
