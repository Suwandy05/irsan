<?php
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
$aboutPath = __DIR__ . '/../assets/img/profile.jpg';
$aboutImage = ($basePath === '' ? '' : $basePath) . '/assets/img/profile.jpg';
$aboutImageVersion = is_file($aboutPath) ? filemtime($aboutPath) : time();

$focusItems = [
    'IT Support dan troubleshooting sistem',
    'Web development dengan PHP Native dan MySQL',
    'Graphic design untuk kebutuhan digital dan cetak',
    'Networking, hardware support, dan dokumentasi kerja',
];
?>

<section id="about" class="section-shell overflow-hidden">
    <div class="absolute left-0 top-20 h-72 w-72 rounded-full bg-[#facc15]/10 blur-3xl"></div>

    <div class="section-inner grid grid-cols-1 items-center gap-14 lg:grid-cols-[0.95fr_1.05fr]">
        <div class="about-orbit relative mx-auto grid min-h-[430px] w-full max-w-[430px] place-items-center">
            <div class="orbit-ring absolute h-[390px] w-[390px] rounded-full border border-dashed border-[#facc15]/25"></div>
            <div class="orbit-ring absolute h-[295px] w-[295px] rounded-full border border-white/10 [animation-duration:26s]"></div>
            <span class="absolute right-8 top-16 h-3 w-3 rounded-full bg-[#facc15] shadow-glow"></span>
            <span class="absolute bottom-20 left-10 h-2.5 w-2.5 rounded-full bg-white/70"></span>

            <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-neutral-950 p-2 shadow-2xl shadow-black/40">
                <img
                    class="h-[330px] w-[270px] rounded-[1.55rem] object-cover grayscale contrast-125"
                    src="<?= htmlspecialchars($aboutImage, ENT_QUOTES, 'UTF-8'); ?>?v=<?= $aboutImageVersion; ?>"
                    alt="Foto profil Irsan"
                    width="270"
                    height="330"
                    loading="lazy"
                    decoding="async"
                >
            </div>
        </div>

        <div>
            <p class="eyebrow reveal-item">Tentang Saya</p>
            <h2 class="reveal-item mt-5 max-w-3xl text-4xl font-black leading-tight text-white md:text-6xl">
                Menggabungkan <span class="gradient-text">teknologi, support, dan visual design</span> untuk hasil kerja yang solid.
            </h2>

            <div class="mt-8 space-y-5 text-base leading-8 text-neutral-400">
                <p class="reveal-item">
                    Saya M Irsan Suwandi, lulusan Universitas Ibnu Sina dengan pengalaman lintas bidang di IT Support, administrasi, desain grafis, hardware, networking, dan pengembangan web sederhana.
                </p>
                <p class="reveal-item">
                    Saya terbiasa menangani kebutuhan teknis dari sisi sistem, perangkat, jaringan, dokumentasi, sampai desain visual. Fokus saya adalah membuat pekerjaan digital terasa lebih rapi, terstruktur, dan mudah digunakan.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2">
                <?php foreach ($focusItems as $item): ?>
                    <div class="reveal-item premium-card rounded-2xl p-4">
                        <p class="text-sm font-bold leading-6 text-neutral-200"><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
