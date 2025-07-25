<h1>Cara Kolaborasi dengan Github</h1>
<li>Cloning Repository</li>
<li>Running Laravel dari repo Github</li>
  <h1>Cara Kolaborasi dengan GitHub</h1>
  <ul>
    <li>Cloning Repository</li>
    <li>Menjalankan Laravel dari Repository GitHub</li>
  </ul>

  <h2>1. Cloning Repository</h2>
  <ol>
    <li>Buka repository proyek di GitHub.</li>
    <li>Salin link repository (HTTPS atau SSH).</li>
    <li>Buka folder <code>htdocs</code> di dalam <code>xampp</code>.</li>
    <li>Klik kanan di dalam folder, lalu pilih <code>Open Git Bash</code>.</li>
    <li>Jalankan perintah berikut untuk meng-clone repository:</li>
    <pre><code>git clone &lt;url-remote-repository&gt;</code></pre>
    <li>Buka folder proyek hasil clone.</li>
  </ol>

  <h2>2. Menjalankan Laravel dari Repository GitHub</h2>
  <ol>
    <li>Buka terminal (misalnya di VSCode) di dalam folder proyek.</li>
    <li>Install dependency Laravel:</li>
    <pre><code>composer install</code></pre>
    <li>Salin file konfigurasi environment:</li>
    <pre><code>cp .env.example .env</code></pre>
    <li>Generate application key:</li>
    <pre><code>php artisan key:generate</code></pre>
    <li>Jalankan migrasi database:</li>
    <pre><code>php artisan migrate</code></pre>
    <li>Jalankan aplikasi Laravel:</li>
    <pre><code>npm run dev</code></pre>
    <pre><code>php artisan serve</code></pre>
  </ol>

  <h2>3. Kolaborasi Tim Setelah Clone</h2>
  <p>Jika kamu adalah rekan tim yang ikut mengembangkan proyek ini:</p>

  <h3>a. Tarik perubahan terbaru dari GitHub sebelum mulai kerja:</h3>
  <pre><code>git pull origin main</code></pre>

  <h3>b. Setelah melakukan perubahan:</h3>
  <ol>
    <li>Tambahkan semua file yang diubah:
      <pre><code>git add .</code></pre>
    </li>
    <li>Commit dengan pesan yang jelas:
      <pre><code>git commit -m "Deskripsi singkat perubahan"</code></pre>
    </li>
    <li>Push perubahan ke GitHub:
      <pre><code>git push origin main</code></pre>
    </li>
  </ol>

  <h3>⚠️ Tips:</h3>
  <ul>
    <li>Selalu jalankan <code>git pull</code> sebelum <code>git push</code> untuk menghindari konflik.</li>
    <li>Komit perubahanmu sesering mungkin agar tim mudah melacak.</li>
    <li>Jangan pernah mengunggah file <code>.env</code> atau file sensitif lainnya.</li>
  </ul>

  <h2>✅ Contoh Workflow Kolaborasi</h2>
  <pre><code>
git pull origin main
// edit file...
git add .
git commit -m "menambahkan halaman about"
git push origin main
  </code></pre>

  <h2>📄 Catatan Penting</h2>
  <ul>
    <li>Jika kamu menambahkan package baru, jalankan juga <code>composer install</code> setelah <code>git pull</code>.</li>
    <li>Jika kamu mengubah file <code>.env.example</code>, beri tahu tim agar mereka memperbarui file <code>.env</code> mereka.</li>
    <li>Gunakan <strong>branch terpisah</strong> jika perubahanmu cukup besar (opsional, tapi disarankan untuk tim besar).</li>
  </ul>
  
#   s e n a n d i k a 
 
 
