<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCD: Memahami Gangguan Obsesif-Kompulsif - Senandika</title>
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
                    Artikel ini membahas gangguan obsesif-kompulsif (OCD), termasuk definisi, gejala, penyebab, serta pendekatan pengobatan yang efektif. OCD adalah gangguan mental yang dapat sangat mengganggu aktivitas sehari-hari jika tidak ditangani dengan tepat.
                </p>
            </div>

            <h1 class="article-section-title">OCD: Memahami Gangguan Obsesif-Kompulsif yang Sering Disalahpahami</h1>
            <p class="main-article-text">
                Obsessive-Compulsive Disorder (OCD) adalah gangguan mental yang ditandai dengan obsesi (pikiran, dorongan, atau gambaran yang mengganggu dan berulang) dan kompulsi (perilaku berulang sebagai respons terhadap obsesi tersebut). OCD bukan sekadar kebiasaan ingin semuanya rapi atau bersih—ini adalah kondisi serius yang bisa mengganggu kehidupan sehari-hari seseorang secara signifikan.
            </p>
            <p class="main-article-text">
                Di Indonesia, OCD sering kali disalahpahami sebagai "perfeksionisme" biasa. Padahal, orang dengan OCD mengalami penderitaan mental yang nyata dan membutuhkan dukungan serta penanganan profesional. Mengenali dan memahami OCD adalah langkah awal menuju pemulihan.
            </p>

            <h2 class="article-section-title">Apa itu OCD?</h2>
            <p class="main-article-text">
                OCD adalah gangguan mental kronis di mana seseorang mengalami siklus obsesi dan kompulsi. Obsesi adalah pikiran yang tidak diinginkan dan mengganggu, sedangkan kompulsi adalah tindakan berulang yang dilakukan untuk mengurangi kecemasan yang ditimbulkan oleh obsesi.
            </p>
            <div class="info-box">
                <h3 class="info-box-title">Perbedaan OCD dengan Kebiasaan Biasa</h3>
                <p class="info-box-text">
                    Tidak semua orang yang suka kebersihan memiliki OCD. OCD ditandai dengan dorongan yang kuat untuk melakukan tindakan tertentu secara berulang, bahkan ketika orang tersebut tahu itu tidak rasional, dan merasa terganggu ketika tidak bisa melakukannya.
                </p>
            </div>

            <h2 class="article-section-title">Gejala dan Tanda-Tanda OCD</h2>
            <p class="main-article-text">
                Gejala OCD melibatkan dua komponen utama: obsesi dan kompulsi. Gejala bisa bervariasi, tetapi berikut adalah yang paling umum:
            </p>
            <h3 class="article-subsection-title">Obsesi Umum</h3>
            <ul class="article-list">
                <li>Ketakutan akan kontaminasi oleh kuman atau kotoran</li>
                <li>Pikiran menyakiti diri sendiri atau orang lain secara tidak sengaja</li>
                <li>Kebutuhan untuk hal-hal terasa "sempurna" atau simetris</li>
                <li>Ketakutan akan melakukan sesuatu yang salah atau berdosa</li>
            </ul>

            <h3 class="article-subsection-title">Kompulsi Umum</h3>
            <ul class="article-list">
                <li>Mencuci tangan atau membersihkan secara berlebihan</li>
                <li>Memeriksa pintu, kompor, atau kunci secara berulang</li>
                <li>Menghitung atau mengatur barang dengan cara tertentu</li>
                <li>Mengulang kata atau doa secara diam-diam</li>
            </ul>

            <h2 class="article-section-title">Pilihan Pengobatan OCD</h2>
            <p class="main-article-text">
                OCD adalah kondisi yang dapat diobati. Banyak individu mengalami peningkatan signifikan dengan pengobatan yang tepat. Beberapa pendekatan umum meliputi:
            </p>
            <h3 class="article-subsection-title">Terapi Perilaku Kognitif (CBT)</h3>
            <p class="main-article-text">
                CBT, khususnya teknik Exposure and Response Prevention (ERP), sangat efektif dalam membantu pasien menghadapi ketakutan mereka tanpa melakukan kompulsi. Ini adalah metode terapi utama yang direkomendasikan untuk OCD.
            </p>
            <h3 class="article-subsection-title">Pengobatan Medis</h3>
            <p class="main-article-text">
                Obat antidepresan seperti SSRI (Selective Serotonin Reuptake Inhibitors) sering digunakan untuk membantu mengurangi gejala OCD. Obat harus digunakan sesuai dengan resep dan pengawasan dokter spesialis.
            </p>
            <h3 class="article-subsection-title">Pendekatan Tambahan</h3>
            <p class="main-article-text">
                Dalam beberapa kasus, terapi kombinasi, kelompok dukungan, atau bahkan neuromodulasi seperti Deep Brain Stimulation (DBS) dapat dipertimbangkan jika terapi standar tidak efektif.
            </p>

            <div class="info-box">
                <h3 class="info-box-title">Penting untuk Diingat</h3>
                <p class="info-box-text">
                    OCD bukan kelemahan pribadi atau kebiasaan aneh—ini adalah kondisi medis yang membutuhkan pengertian dan dukungan. Jika Anda merasa memiliki gejala OCD, segera cari bantuan dari tenaga kesehatan mental.
                </p>
            </div>
        </div>
    </div>  
</body>
</html>
