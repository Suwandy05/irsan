<div id="music-widget" class="fixed bottom-5 left-5 z-40">
    <button id="music-open" class="glass-panel grid h-14 w-14 place-items-center rounded-full text-[#facc15] transition hover:-translate-y-1 hover:border-[#facc15]/40" type="button" aria-label="Open music player">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M9 18V5l12-2v13"></path>
            <circle cx="6" cy="18" r="3"></circle>
            <circle cx="18" cy="16" r="3"></circle>
        </svg>
    </button>

    <div id="music-player" class="pointer-events-none absolute bottom-16 left-0 w-[260px] origin-bottom-left translate-y-2 scale-95 rounded-3xl border border-white/10 bg-neutral-950/95 p-4 text-white opacity-0 shadow-2xl shadow-black/40 transition-all duration-300">
        <audio id="music-audio" preload="metadata" src="assets/audio/Feast - Nina.mp3"></audio>

        <div class="mb-3 flex items-start justify-between gap-3">
            <div class="min-w-0">
                <p id="music-title" class="truncate text-sm font-black">Feast - Nina</p>
                <p class="mt-0.5 truncate text-xs font-semibold text-neutral-500">Portfolio playlist</p>
            </div>

            <button id="music-close" class="grid h-7 w-7 place-items-center rounded-full text-neutral-500 transition hover:bg-white/10 hover:text-white" type="button" aria-label="Close music player">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>

        <div class="h-1 overflow-hidden rounded-full bg-white/10">
            <div id="music-progress" class="h-full w-0 rounded-full bg-[#facc15] transition-[width] duration-150"></div>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <button id="music-mute" class="grid h-8 w-8 place-items-center rounded-full text-neutral-400 transition hover:bg-white/10 hover:text-white" type="button" aria-label="Mute music">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M11 5 6 9H2v6h4l5 4V5Z"></path>
                    <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                </svg>
            </button>

            <button id="music-toggle" class="grid h-11 w-11 place-items-center rounded-full bg-[#facc15] text-black shadow-lg shadow-[#facc15]/20 transition hover:bg-white" type="button" aria-label="Play music">
                <svg id="music-play-icon" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M8 5v14l11-7z"></path>
                </svg>
                <svg id="music-pause-icon" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M7 5h4v14H7zM13 5h4v14h-4z"></path>
                </svg>
            </button>

            <span class="h-8 w-8"></span>
        </div>
    </div>
</div>

<footer class="px-5 pb-8 text-white">
    <div class="mx-auto flex max-w-6xl flex-col justify-between gap-4 border-t border-white/10 pt-6 text-sm text-neutral-500 md:flex-row md:items-center">
        <p>&copy; <?= date('Y'); ?> Irsan.Dev. All rights reserved.</p>
        <div class="flex flex-wrap gap-3">
            <a href="mailto:irsansuwandi05@gmail.com" class="transition hover:text-[#facc15]">Email</a>
            <a href="https://wa.me/62895370739773" target="_blank" rel="noopener" class="transition hover:text-[#facc15]">WhatsApp</a>
            <a href="#projects" data-scroll-link class="transition hover:text-[#facc15]">Projects</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/bundled/lenis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="assets/js/portfolio.js"></script>
</body>
</html>
