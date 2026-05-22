<?php
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
$assetBasePath = ($basePath === '' ? '' : $basePath) . '/assets/img/';
$assetDirectory = __DIR__ . '/../assets/img/';

function projectImage(string $fileName, string $assetBasePath, string $assetDirectory): string
{
    $filePath = $assetDirectory . $fileName;
    $version = is_file($filePath) ? '?v=' . filemtime($filePath) : '';

    return $assetBasePath . $fileName . $version;
}

$projects = [
    [
        'title' => 'Manajemen Arsip Surat',
        'category' => 'Web Application',
        'description' => 'Sistem manajemen arsip surat digital untuk mempermudah pengelolaan surat masuk, surat keluar, disposisi, dan pencarian dokumen secara cepat dan terstruktur.',
        'image' => projectImage('Project1.jpg', $assetBasePath, $assetDirectory),
        'technologies' => ['PHP Native', 'MySQL', 'Tailwind CSS'],
        'goal' => 'Membuat sistem administrasi surat digital yang membantu proses pengelolaan, pencarian, dan dokumentasi arsip secara terstruktur.',
        'problem' => 'Data surat rentan tercecer, sulit dicari, dan proses disposisi membutuhkan pencatatan yang lebih terstruktur.',
        'features' => 'Login sistem, data surat masuk, data surat keluar, disposisi, arsip digital, dan tampilan dashboard.',
        'role' => 'Membuat struktur tampilan, alur halaman, dan kebutuhan data utama.',
        'challenge' => 'Menjaga tampilan tetap sederhana sambil menampilkan data administratif yang cukup banyak.',
        'solution' => 'Menggunakan layout dashboard yang bersih, tabel terstruktur, dan kategori data yang jelas.',
        'result' => 'Sistem menjadi lebih profesional, mudah ditelusuri, dan siap dikembangkan untuk kebutuhan administrasi surat.',
        'live' => '',
        'github' => '',
    ],
    [
        'title' => 'Desain Antar Muka',
        'category' => 'UI Design',
        'description' => 'Desain antarmuka modern dengan fokus pada pengalaman pengguna (UI/UX), konsistensi layout, dan tampilan minimalis yang responsif.',
        'image' => projectImage('Project2.jpg', $assetBasePath, $assetDirectory),
        'technologies' => ['UI Design', 'Photoshop', 'Layouting'],
        'goal' => 'Membuat rancangan interface yang bersih, konsisten, responsif, dan nyaman digunakan.',
        'problem' => 'Tampilan lama kurang fokus, spacing belum konsisten, dan informasi belum tersusun rapi.',
        'features' => 'Visual hierarchy, layout grid, komponen form, tombol, card, dan warna aksen.',
        'role' => 'Mendesain struktur UI dan mengatur komposisi visual.',
        'challenge' => 'Menyeimbangkan estetika modern dengan kebutuhan fungsi yang jelas.',
        'solution' => 'Menggunakan pendekatan clean UI, kontras tinggi, dan komponen yang mudah dibaca.',
        'result' => 'Desain terasa lebih modern, minimalis, dan siap dijadikan acuan implementasi UI.',
        'live' => '',
        'github' => '',
    ],
    [
        'title' => 'ID Card',
        'category' => 'Graphic Design',
        'description' => 'Desain ID Card profesional untuk kebutuhan perusahaan, organisasi, event, dan identitas karyawan dengan tampilan modern dan eksklusif. Mengutamakan identitas visual yang rapi, mudah dikenali, dan siap cetak.',
        'image' => projectImage('Project3.jpg', $assetBasePath, $assetDirectory),
        'technologies' => ['CorelDraw', 'Photoshop', 'Print Design'],
        'goal' => 'Membuat identitas visual yang rapi, mudah dikenali, modern, eksklusif, dan siap cetak.',
        'problem' => 'Informasi identitas harus ringkas, jelas, dan tetap terlihat profesional di ukuran kecil.',
        'features' => 'Layout depan-belakang, identitas nama, jabatan, foto, nomor, dan elemen brand.',
        'role' => 'Mendesain tampilan, mengatur tipografi, warna, dan file siap cetak.',
        'challenge' => 'Menjaga keterbacaan teks dan keseimbangan elemen dalam ruang terbatas.',
        'solution' => 'Menggunakan grid sederhana, kontras yang cukup, dan hierarchy teks yang tegas.',
        'result' => 'ID Card terlihat lebih profesional, kuat secara branding, dan siap digunakan untuk kebutuhan cetak.',
        'live' => '',
        'github' => '',
    ],
    [
        'title' => 'Brosur',
        'category' => 'Print Design',
        'description' => 'Desain brosur promosi modern untuk kebutuhan bisnis, hotel, UMKM, dan promosi produk dengan tata letak yang informatif dan menarik.',
        'image' => projectImage('Project4.jpg', $assetBasePath, $assetDirectory),
        'technologies' => ['CorelDraw', 'Photoshop', 'Branding'],
        'goal' => 'Membuat media promosi modern yang informatif, menarik, dan mudah dipahami oleh calon pelanggan.',
        'problem' => 'Konten promosi perlu disusun agar tidak padat tetapi tetap menyampaikan informasi penting.',
        'features' => 'Headline, visual utama, informasi layanan, kontak, dan komposisi warna brand.',
        'role' => 'Membuat konsep visual, layout, dan file desain.',
        'challenge' => 'Mengatur banyak informasi agar tetap terlihat ringan dan profesional.',
        'solution' => 'Menggunakan spacing luas, hierarchy konten, dan aksen visual yang fokus.',
        'result' => 'Brosur terlihat lebih profesional, informatif, dan siap digunakan untuk kebutuhan promosi bisnis.',
        'live' => '',
        'github' => '',
    ],
];
?>

<section id="projects" class="section-shell overflow-hidden">
    <div class="absolute left-1/2 top-20 h-80 w-80 -translate-x-1/2 rounded-full bg-[#facc15]/10 blur-3xl"></div>

    <div class="section-inner">
        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <div class="max-w-3xl">
                <p class="eyebrow reveal-item">Projects</p>
                <h2 class="reveal-item mt-5 text-4xl font-black leading-tight text-white md:text-6xl">
                    Selected work dengan tampilan <span class="gradient-text">premium dan detail lengkap.</span>
                </h2>
            </div>
            <p class="reveal-item max-w-sm text-sm leading-7 text-neutral-400">
                Card dibuat dari array PHP, jadi project baru cukup ditambahkan dari data di atas.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2">
            <?php foreach ($projects as $project): ?>
                <?php
                    $projectPayload = htmlspecialchars(json_encode($project, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT), ENT_QUOTES, 'UTF-8');
                ?>
                <article data-project="<?= $projectPayload; ?>" class="project-card reveal-item premium-card group cursor-pointer overflow-hidden rounded-[1.7rem] transition duration-300 hover:-translate-y-1">
                    <div class="relative aspect-[16/10] overflow-hidden bg-neutral-900">
                        <img
                            class="h-full w-full object-cover opacity-85 grayscale transition duration-700 group-hover:scale-105 group-hover:opacity-100 group-hover:grayscale-0"
                            src="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8'); ?>"
                            alt="Preview <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?>"
                            width="1000"
                            height="625"
                            loading="lazy"
                            decoding="async"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>
                        <div class="project-overlay absolute inset-x-4 bottom-4 flex items-center justify-between gap-3 rounded-2xl border border-white/10 bg-black/55 p-3 backdrop-blur">
                            <span class="text-xs font-black uppercase tracking-[0.14em] text-[#facc15]"><?= htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <span class="rounded-full bg-[#facc15] px-3 py-1 text-xs font-black text-black">Detail</span>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-xs font-black uppercase tracking-[0.14em] text-[#facc15]"><?= htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <h3 class="mt-2 text-2xl font-black text-white"><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            </div>
                            <span class="rounded-full border border-[#facc15]/25 bg-[#facc15]/10 px-3 py-1 text-xs font-black text-[#facc15]">Case</span>
                        </div>

                        <p class="mt-4 min-h-16 text-sm leading-7 text-neutral-400">
                            <?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                        <div class="mt-5 flex flex-wrap gap-2">
                            <?php foreach ($project['technologies'] as $technology): ?>
                                <span class="rounded-full border border-white/10 bg-white/[0.04] px-3 py-1 text-xs font-bold text-neutral-300">
                                    <?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <span class="rounded-full border border-white/10 px-4 py-2 text-xs font-black text-neutral-400">Live Preview</span>
                            <span class="rounded-full border border-white/10 px-4 py-2 text-xs font-black text-neutral-400">Github</span>
                            <button class="magnetic-btn rounded-full bg-[#facc15] px-4 py-2 text-xs font-black text-black" type="button">
                                Detail Project
                            </button>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div data-project-modal class="project-modal fixed inset-0 z-[90] grid place-items-center bg-black/80 p-4 backdrop-blur-md">
    <div class="project-modal-panel max-h-[90vh] w-full max-w-5xl overflow-y-auto rounded-[1.7rem] border border-white/10 bg-neutral-950 shadow-2xl shadow-black/60">
        <div class="sticky top-0 z-10 flex items-center justify-between gap-4 border-b border-white/10 bg-neutral-950/90 p-5 backdrop-blur">
            <div>
                <p data-modal-category class="text-xs font-black uppercase tracking-[0.16em] text-[#facc15]"></p>
                <h3 data-modal-title class="mt-1 text-2xl font-black text-white"></h3>
            </div>
            <button data-modal-close class="grid h-10 w-10 shrink-0 place-items-center rounded-full border border-white/10 text-neutral-400 transition hover:border-[#facc15]/40 hover:text-[#facc15]" type="button" aria-label="Close project detail">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>

        <div class="grid gap-6 p-5 lg:grid-cols-[0.95fr_1.05fr]">
            <img data-modal-image class="aspect-[16/10] w-full rounded-3xl border border-white/10 object-cover" src="" alt="" width="1000" height="625">
            <div>
                <p data-modal-description class="text-sm leading-7 text-neutral-300"></p>
                <div data-modal-tech class="mt-5 flex flex-wrap gap-2"></div>
            </div>
        </div>

        <div data-modal-details class="grid gap-3 p-5 pt-0 md:grid-cols-2"></div>
    </div>
</div>
