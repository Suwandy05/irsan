<?php
$skillGroups = [
    'Development' => [
        ['name' => 'PHP', 'level' => 82, 'icon' => 'PHP'],
        ['name' => 'MySQL', 'level' => 80, 'icon' => 'DB'],
        ['name' => 'HTML', 'level' => 88, 'icon' => 'H5'],
        ['name' => 'Tailwind', 'level' => 76, 'icon' => 'TW'],
    ],
    'Creative' => [
        ['name' => 'Photoshop', 'level' => 78, 'icon' => 'PS'],
        ['name' => 'CorelDraw', 'level' => 82, 'icon' => 'CD'],
    ],
    'Technical Support' => [
        ['name' => 'Networking', 'level' => 84, 'icon' => 'NW'],
        ['name' => 'Hardware', 'level' => 86, 'icon' => 'HW'],
    ],
];
?>

<section id="skills" class="section-shell">
    <div class="section-inner">
        <div class="max-w-3xl">
            <p class="eyebrow reveal-item">Skills</p>
            <h2 class="reveal-item mt-5 text-4xl font-black leading-tight text-white md:text-6xl">
                Skill set yang siap dipakai untuk <span class="gradient-text">support, web, dan design.</span>
            </h2>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 lg:grid-cols-3">
            <?php foreach ($skillGroups as $category => $skills): ?>
                <div class="reveal-item premium-card rounded-[1.6rem] p-5">
                    <p class="mb-5 text-xs font-black uppercase tracking-[0.16em] text-[#facc15]">
                        <?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8'); ?>
                    </p>

                    <div class="space-y-4">
                        <?php foreach ($skills as $skill): ?>
                            <div class="skill-card rounded-2xl border border-white/10 bg-white/[0.035] p-4 transition hover:border-[#facc15]/40 hover:bg-[#facc15]/[0.055]">
                                <div class="flex items-center gap-3">
                                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl border border-[#facc15]/20 bg-[#facc15]/10 text-xs font-black text-[#facc15]">
                                        <?= htmlspecialchars($skill['icon'], ENT_QUOTES, 'UTF-8'); ?>
                                    </span>
                                    <div class="min-w-0 flex-1">
                                        <div class="flex items-center justify-between gap-3">
                                            <p class="font-extrabold text-white"><?= htmlspecialchars($skill['name'], ENT_QUOTES, 'UTF-8'); ?></p>
                                            <p class="text-xs font-bold text-neutral-500"><?= (int) $skill['level']; ?>%</p>
                                        </div>
                                        <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-white/10">
                                            <div class="h-full rounded-full bg-gradient-to-r from-[#facc15] to-amber-500" style="width: <?= (int) $skill['level']; ?>%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
