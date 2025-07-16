<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depresi: Panduan Lengkap - Senandika</title>
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
                    Artikel ini membahas secara mendalam tentang depresi, salah satu gangguan kesehatan mental yang paling umum. Anda akan mempelajari definisi, gejala, penyebab, dan berbagai pilihan pengobatan yang tersedia.
                </p>
            </div>

            <h1 class="article-section-title">Depresi: Panduan Lengkap Memahami Gangguan Mood yang Paling Umum</h1>
            <p class="main-article-text">
                Depresi adalah kondisi kesehatan mental yang serius dan dapat mempengaruhi cara seseorang merasa, berpikir, dan menangani aktivitas sehari-hari. Lebih dari sekadar perasaan sedih biasa, depresi adalah kondisi medis yang memerlukan perhatian dan pengobatan yang tepat. Menurut Organisasi Kesehatan Dunia (WHO), depresi mempengaruhi lebih dari 264 juta orang dari segala usia di seluruh dunia.
            </p>
            <p class="main-article-text">
                Di Indonesia, prevalensi depresi terus meningkat, terutama di kalangan remaja dan dewasa muda. Berbeda dengan perasaan sedih yang normal, depresi adalah kondisi medis yang persisten dan dapat mengganggu kemampuan seseorang untuk bekerja, belajar, makan, tidur, dan menikmati hidup. Kabar baiknya, depresi adalah kondisi yang dapat diobati dengan berbagai metode yang efektif.
            </p>

            <h2 class="article-section-title">Apa itu Depresi?</h2>
            <p class="main-article-text">
                Depresi, atau yang secara medis dikenal sebagai Major Depressive Disorder (MDD), adalah gangguan mood yang ditandai dengan perasaan sedih yang mendalam, kehilangan minat pada aktivitas yang biasanya menyenangkan, dan berbagai gejala fisik serta kognitif yang berlangsung setidaknya dua minggu.
            </p>
            <div class="info-box">
                <h3 class="info-box-title">Perbedaan Depresi dengan Kesedihan Biasa</h3>
                <p class="info-box-text">
                    Kesedihan normal bersifat sementara dan dipicu oleh peristiwa tertentu, tidak mengganggu fungsi sehari-hari, dan berangsur membaik. Depresi, di sisi lain, berlangsung minimal 2 minggu, dapat terjadi tanpa pemicu jelas, menyebabkan kehilangan minat pada semua aktivitas, dan mengganggu pekerjaan, sekolah, serta hubungan.
                </p>
            </div>

            <h2 class="article-section-title">Gejala dan Tanda-Tanda Depresi</h2>
            <p class="main-article-text">
                Gejala depresi dapat bervariasi dari orang ke orang, tetapi umumnya meliputi perubahan dalam mood, pikiran, perilaku, dan fungsi fisik. Berikut adalah gejala-gejala utama yang perlu diwaspadai:
            </p>
            <h3 class="article-subsection-title">Gejala Emosional dan Mood</h3>
            <ul class="article-list">
                <li>Perasaan sedih, kosong, atau putus asa yang persisten</li>
                <li>Kehilangan minat atau kesenangan dalam aktivitas yang biasanya dinikmati (anhedonia)</li>
                <li>Perasaan tidak berharga atau bersalah yang berlebihan</li>
                <li>Mudah tersinggung, marah, atau frustrasi</li>
                <li>Pikiran tentang kematian atau bunuh diri</li>
            </ul>

            <h3 class="article-subsection-title">Gejala Fisik</h3>
            <ul class="article-list">
                <li>Kelelahan atau kehilangan energi yang signifikan</li>
                <li>Perubahan pola tidur (insomnia atau tidur berlebihan)</li>
                <li>Perubahan nafsu makan dan berat badan</li>
                <li>Sakit kepala, nyeri punggung, atau nyeri tubuh lainnya</li>
            </ul>

            <h2 class="article-section-title">Pilihan Pengobatan Depresi</h2>
            <p class="main-article-text">
                Kabar baik adalah depresi dapat diobati dengan efektif. Sekitar 80-90% orang dengan depresi merespons pengobatan dengan baik. Pilihan pengobatan meliputi:
            </p>
            <h3 class="article-subsection-title">Psikoterapi (Terapi Bicara)</h3>
            <p class="main-article-text">
                Terapi kognitif-behavioral (CBT) dan terapi interpersonal (IPT) adalah dua jenis psikoterapi yang paling umum digunakan untuk depresi. CBT membantu mengubah pola pikir dan perilaku negatif, sementara IPT fokus pada perbaikan hubungan interpersonal.
            </p>
            <h3 class="article-subsection-title">Pengobatan Medis (Antidepresan)</h3>
            <p class="main-article-text">
                Obat antidepresan, seperti SSRI (Selective Serotonin Reuptake Inhibitors) dan SNRI (Serotonin-Norepinephrine Reuptake Inhibitors), dapat membantu menyeimbangkan zat kimia otak yang terkait dengan mood. Penting untuk mengonsumsi obat sesuai resep dokter dan tidak berhenti mendadak.
            </p>
            <h3 class="article-subsection-title">Terapi Lainnya</h3>
            <p class="main-article-text">
                Untuk kasus depresi berat atau yang resisten terhadap pengobatan lain, terapi seperti Electroconvulsive Therapy (ECT) atau Transcranial Magnetic Stimulation (TMS) mungkin direkomendasikan. Terapi cahaya juga efektif untuk Seasonal Affective Disorder (SAD).
            </p>

            <div class="info-box">
                <h3 class="info-box-title">Penting untuk Diingat</h3>
                <p class="info-box-text">
                    Jika Anda atau seseorang yang Anda kenal mengalami gejala depresi yang berat atau berlangsung lama, penting untuk mencari bantuan profesional kesehatan mental. Jangan ragu untuk menghubungi psikolog, psikiater, atau layanan krisis.
                </p>
            </div>
        </div>
    </div>  
</body>
</html>