<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gangguan Makan: Panduan Lengkap - Senandika</title>
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
                    Artikel ini membahas berbagai jenis gangguan makan, termasuk anoreksia nervosa, bulimia nervosa, dan binge eating disorder. Anda akan memahami gejala, penyebab, serta pendekatan pengobatan untuk gangguan yang sering terjadi namun sering disalahpahami ini.
                </p>
            </div>

            <h1 class="article-section-title">Gangguan Makan: Panduan Lengkap Memahami Masalah Nutrisi dan Psikologis</h1>
            <p class="main-article-text">
                Gangguan makan adalah kondisi kesehatan mental serius yang memengaruhi pola makan seseorang serta cara berpikir terhadap makanan dan tubuhnya sendiri. Gangguan ini bisa berdampak pada kesehatan fisik maupun psikologis jika tidak ditangani dengan benar.
            </p>
            <p class="main-article-text">
                Gangguan makan dapat dialami oleh siapa saja, baik pria maupun wanita, dan sering kali muncul pada masa remaja atau awal dewasa. Dukungan dari keluarga dan tenaga kesehatan mental sangat penting dalam proses pemulihan.
            </p>

            <h2 class="article-section-title">Jenis-Jenis Gangguan Makan</h2>
            <p class="main-article-text">
                Ada beberapa jenis gangguan makan yang paling umum ditemukan dalam praktik klinis. Berikut penjelasannya:
            </p>
            <h3 class="article-subsection-title">Anoreksia Nervosa</h3>
            <p class="main-article-text">
                Ditandai dengan pembatasan makan secara ekstrem, ketakutan intens terhadap kenaikan berat badan, dan citra tubuh yang terganggu. Orang dengan anoreksia sering merasa dirinya gemuk meski sebenarnya sangat kurus.
            </p>

            <h3 class="article-subsection-title">Bulimia Nervosa</h3>
            <p class="main-article-text">
                Gangguan ini melibatkan siklus makan berlebihan (binge) yang diikuti dengan perilaku kompensasi seperti memuntahkan makanan, puasa ekstrem, atau olahraga berlebihan.
            </p>

            <h3 class="article-subsection-title">Binge Eating Disorder</h3>
            <p class="main-article-text">
                Mirip dengan bulimia, namun tanpa kompensasi setelah makan berlebihan. Seseorang merasa kehilangan kendali saat makan dalam jumlah besar dan biasanya merasa bersalah setelahnya.
            </p>

            <div class="info-box">
                <h3 class="info-box-title">Citra Tubuh dan Media Sosial</h3>
                <p class="info-box-text">
                    Tekanan dari media sosial dan standar kecantikan yang tidak realistis dapat memperburuk gangguan makan, terutama pada remaja. Edukasi dan literasi media sangat penting untuk pencegahan.
                </p>
            </div>

            <h2 class="article-section-title">Gejala Umum Gangguan Makan</h2>
            <ul class="article-list">
                <li>Obsesi terhadap berat badan, makanan, dan bentuk tubuh</li>
                <li>Perubahan drastis dalam pola makan</li>
                <li>Penurunan atau kenaikan berat badan yang tidak dapat dijelaskan</li>
                <li>Menarik diri dari aktivitas sosial, terutama saat makan</li>
                <li>Perasaan bersalah atau malu setelah makan</li>
            </ul>

            <h2 class="article-section-title">Pengobatan dan Dukungan</h2>
            <p class="main-article-text">
                Gangguan makan memerlukan pendekatan multidisiplin. Psikoterapi, intervensi gizi, dan dukungan keluarga merupakan komponen penting dalam proses pemulihan.
            </p>

            <h3 class="article-subsection-title">Terapi Psikologis</h3>
            <p class="main-article-text">
                Terapi Kognitif-Perilaku (CBT) sangat efektif untuk mengatasi pikiran dan kebiasaan makan yang tidak sehat. Terapi kelompok dan terapi keluarga juga sering digunakan.
            </p>

            <h3 class="article-subsection-title">Peran Ahli Gizi</h3>
            <p class="main-article-text">
                Edukasi nutrisi oleh ahli gizi membantu pasien memahami pola makan yang sehat dan memperbaiki hubungan mereka dengan makanan.
            </p>

            <div class="info-box">
                <h3 class="info-box-title">Penting untuk Diingat</h3>
                <p class="info-box-text">
                    Gangguan makan bukan sekadar keinginan untuk diet. Ini adalah kondisi medis serius yang memerlukan penanganan profesional. Semakin cepat ditangani, semakin besar peluang untuk pulih sepenuhnya.
                </p>
            </div>
        </div>
    </div>  
</body>
</html>
