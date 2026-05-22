<?php
$navMenus = [
    'Home' => '#home',
    'About' => '#about',
    'Skills' => '#skills',
    'Experience' => '#experience',
    'Projects' => '#projects',
    'Contact' => '#contact',
];
?>

<header data-navbar class="fixed left-1/2 top-4 z-50 w-[calc(100%-1.25rem)] max-w-6xl -translate-x-1/2">
    <nav class="glass-panel flex items-center justify-between gap-3 rounded-full px-3 py-2">
        <a href="#home" data-nav-link class="nav-link flex shrink-0 items-center gap-3 rounded-full px-2 py-1.5 text-sm font-black text-white transition">
            <span class="grid h-9 w-9 place-items-center rounded-full bg-[#facc15] text-xs text-black shadow-glow">IR</span>
            <span class="hidden sm:inline">Irsan.</span>
        </a>

        <div class="hidden items-center gap-1 md:flex">
            <?php foreach ($navMenus as $label => $href): ?>
                <a
                    href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>"
                    data-nav-link
                    class="nav-link rounded-full px-4 py-2 text-sm font-bold text-neutral-400 transition hover:bg-white/5 hover:text-white"
                >
                    <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <button data-mobile-toggle class="grid h-10 w-10 place-items-center rounded-full border border-white/10 bg-white/[0.04] text-[#facc15] md:hidden" type="button" aria-label="Open menu">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true">
                <path d="M4 7h16"></path>
                <path d="M4 12h16"></path>
                <path d="M4 17h16"></path>
            </svg>
        </button>
    </nav>

    <div data-mobile-menu class="mobile-menu glass-panel mt-3 hidden rounded-3xl p-3 md:hidden">
        <?php foreach ($navMenus as $label => $href): ?>
            <a
                href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>"
                data-nav-link
                class="nav-link rounded-2xl px-4 py-3 text-sm font-bold text-neutral-300 transition hover:bg-white/5 hover:text-white"
            >
                <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
            </a>
        <?php endforeach; ?>
    </div>
</header>
