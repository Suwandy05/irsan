<?php
$experiences = [
    [
        'company' => 'Inul Vizta KTV',
        'role' => 'IT Support',
        'period' => '2019',
        'location' => 'Batam',
        'description' => 'Menangani instalasi, pemeliharaan perangkat, monitoring sistem, jaringan, database, dan pembaruan aplikasi agar operasional berjalan stabil.',
        'tags' => ['Network', 'Database', 'Hardware'],
    ],
    [
        'company' => 'PT. Mega Vastech Pratama',
        'role' => 'Administrasi',
        'period' => '2019 - 2022',
        'location' => 'Lytech Home Center, Batam',
        'description' => 'Mengelola resi pengiriman, laporan, data stok, troubleshooting komputer, dan pengarsipan file untuk kebutuhan operasional harian.',
        'tags' => ['Dokumentasi', 'Administrasi', 'Problem Solving'],
    ],
    [
        'company' => 'Grand Masterpiece KTV Batam',
        'role' => 'IT Support',
        'period' => '2022 - 2023',
        'location' => 'Nagoya Hill Superblok, Batam',
        'description' => 'Memelihara sistem operasi, aplikasi, jaringan LAN, billing system, serta mendukung kebutuhan desain dan media sosial perusahaan.',
        'tags' => ['Network', 'System', 'Support'],
    ],
    [
        'company' => 'CV. Chandra Investama',
        'role' => 'Desain Grafis',
        'period' => '2022',
        'location' => 'Jl Imam Bonjol, Batam',
        'description' => 'Membuat desain cetak seperti poster, spanduk, kartu nama, dan kebutuhan visual lain langsung sesuai permintaan pelanggan.',
        'tags' => ['Graphic Design', 'Customer', 'Print'],
    ],
    [
        'company' => 'PMI Kota Batam',
        'role' => 'Administrasi',
        'period' => '2023 - 2026',
        'location' => 'Batam Kota',
        'description' => 'Membuat laporan harian, bulanan, tahunan, pengarsipan data, pengelolaan dokumen, dan dukungan administrasi keuangan.',
        'tags' => ['Arsip', 'Laporan', 'MoU'],
    ],
];
?>

<section id="experience" class="section-shell overflow-hidden">
    <div class="absolute right-0 top-24 h-80 w-80 rounded-full bg-[#facc15]/10 blur-3xl"></div>

    <div class="section-inner">
        <div class="max-w-3xl">
            <p class="eyebrow reveal-item">Experience</p>
            <h2 class="reveal-item mt-5 text-4xl font-black leading-tight text-white md:text-6xl">
                Timeline kerja yang membentuk <span class="gradient-text">ketelitian teknis dan rasa visual.</span>
            </h2>
        </div>

        <div class="relative mt-14">
            <div class="timeline-line absolute left-4 top-0 hidden h-full w-px bg-gradient-to-b from-[#facc15] via-white/15 to-transparent md:block"></div>

            <div class="grid gap-6 md:pl-12">
                <?php foreach ($experiences as $experience): ?>
                    <article class="experience-card reveal-item premium-card rounded-[1.6rem] p-6 transition duration-300 hover:-translate-y-1 hover:border-[#facc15]/35">
                        <div class="flex flex-col gap-5 md:flex-row md:items-start md:justify-between">
                            <div class="relative">
                                <span class="absolute -left-[3.2rem] top-2 hidden h-4 w-4 rounded-full border border-[#facc15] bg-neutral-950 shadow-glow md:block"></span>
                                <p class="text-sm font-black uppercase tracking-[0.15em] text-[#facc15]"><?= htmlspecialchars($experience['period'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <h3 class="mt-2 text-2xl font-black text-white"><?= htmlspecialchars($experience['company'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="mt-2 text-sm font-bold text-neutral-400"><?= htmlspecialchars($experience['role'], ENT_QUOTES, 'UTF-8'); ?> / <?= htmlspecialchars($experience['location'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($experience['tags'] as $tag): ?>
                                    <span class="rounded-full border border-[#facc15]/20 bg-[#facc15]/10 px-3 py-1 text-xs font-bold text-[#facc15]">
                                        <?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <p class="mt-5 max-w-4xl text-sm leading-7 text-neutral-300">
                            <?= htmlspecialchars($experience['description'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
