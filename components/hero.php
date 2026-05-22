<?php
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
$profilePath = __DIR__ . '/../assets/img/profile.jpg';
$profileImage = ($basePath === '' ? '' : $basePath) . '/assets/img/profile.jpg';
$profileImageVersion = is_file($profilePath) ? filemtime($profilePath) : time();

$heroStats = [
    ['value' => '3+', 'label' => 'Years Experience'],
    ['value' => '8+', 'label' => 'Projects Completed'],
    ['value' => '10+', 'label' => 'Technologies'],
];
?>

<section id="home" class="section-shell min-h-screen overflow-hidden pt-32 md:pt-36">
    <div class="hero-orb absolute right-[-8rem] top-24 h-72 w-72 rounded-full bg-[#facc15]/10 blur-3xl"></div>
    <div class="absolute left-[-10rem] top-1/3 h-80 w-80 rounded-full bg-white/[0.035] blur-3xl"></div>

    <div class="section-inner grid min-h-[calc(100vh-9rem)] grid-cols-1 items-center gap-14 lg:grid-cols-[1.06fr_0.94fr]">
        <div class="max-w-3xl">
            <p class="hero-text-item mb-7 inline-flex rounded-full border border-[#facc15]/25 bg-[#facc15]/10 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-[#facc15]">
                IT Support / Web Developer / Graphic Design
            </p>

            <h1 class="hero-text-item text-5xl font-black leading-[0.96] text-white md:text-7xl lg:text-8xl">
                M Irsan <span class="gradient-text">Suwandi</span>
            </h1>

            <p class="hero-text-item mt-7 max-w-2xl text-base leading-8 text-neutral-400 md:text-lg">
                Saya membangun solusi digital yang rapi, responsif, dan mudah digunakan, dengan kombinasi pengalaman IT support, networking, hardware support, web development, dan desain grafis.
            </p>

            <div class="hero-text-item mt-9 flex flex-col gap-3 sm:flex-row">
                <a href="#projects" data-scroll-link class="magnetic-btn inline-flex items-center justify-center rounded-full bg-[#facc15] px-6 py-3 text-sm font-black text-black shadow-glow transition hover:bg-white">
                    Lihat Project
                </a>
                <a href="#contact" data-scroll-link class="magnetic-btn inline-flex items-center justify-center rounded-full border border-white/10 bg-white/[0.04] px-6 py-3 text-sm font-bold text-white transition hover:border-[#facc15]/50 hover:text-[#facc15]">
                    Hubungi Saya
                </a>
            </div>

            <div class="hero-text-item mt-10 grid max-w-2xl grid-cols-1 gap-3 sm:grid-cols-3">
                <?php foreach ($heroStats as $stat): ?>
                    <div class="premium-card rounded-3xl p-5">
                        <p class="text-3xl font-black text-white"><?= htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="mt-2 text-xs font-bold uppercase tracking-[0.12em] text-neutral-500"><?= htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="hero-photo relative mx-auto w-full max-w-[390px] lg:mr-0">
            <div class="absolute inset-6 rounded-[2rem] border border-[#facc15]/25 bg-[#facc15]/10 blur-2xl"></div>
            <div class="relative overflow-hidden rounded-[2rem] border border-[#facc15]/30 bg-neutral-950 p-2 gold-glow">
                <div class="absolute inset-0 bg-gradient-to-br from-[#facc15]/20 via-transparent to-white/5"></div>
                <img
                    class="relative h-[480px] w-full rounded-[1.55rem] object-cover grayscale contrast-125 transition duration-700 hover:scale-[1.03] hover:grayscale-0 hover:contrast-100"
                    src="<?= htmlspecialchars($profileImage, ENT_QUOTES, 'UTF-8'); ?>?v=<?= $profileImageVersion; ?>"
                    alt="Foto profil M Irsan Suwandi"
                    width="390"
                    height="480"
                    fetchpriority="high"
                    decoding="async"
                >
            </div>

            <div class="absolute -left-4 bottom-8 rounded-3xl border border-white/10 bg-neutral-950/85 p-4 shadow-2xl shadow-black/40 backdrop-blur">
                <p class="text-xs font-black uppercase tracking-[0.15em] text-[#facc15]">Focus</p>
                <p class="mt-1 text-sm font-bold text-white">Clean Digital System</p>
            </div>
        </div>
    </div>
</section>
