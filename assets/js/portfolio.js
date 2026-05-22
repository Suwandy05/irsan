document.addEventListener('DOMContentLoaded', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const header = document.querySelector('[data-navbar]');
    const navLinks = document.querySelectorAll('[data-nav-link]');
    const scrollLinks = document.querySelectorAll('[data-nav-link], [data-scroll-link]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    const mobileToggle = document.querySelector('[data-mobile-toggle]');
    const loader = document.querySelector('[data-loader]');
    const mouseGlow = document.querySelector('[data-mouse-glow]');

    if (loader) {
        window.addEventListener('load', () => {
            window.setTimeout(() => loader.classList.add('is-hidden'), 450);
        });
    }

    if (!prefersReducedMotion && window.Lenis) {
        const lenis = new Lenis({
            duration: 1.12,
            smoothWheel: true,
            wheelMultiplier: 0.92
        });

        const raf = (time) => {
            lenis.raf(time);
            requestAnimationFrame(raf);
        };

        requestAnimationFrame(raf);

        scrollLinks.forEach((link) => {
            link.addEventListener('click', (event) => {
                const target = document.querySelector(link.getAttribute('href'));

                if (!target) {
                    return;
                }

                event.preventDefault();
                lenis.scrollTo(target, {
                    offset: -(header?.offsetHeight || 0) - 18
                });
                mobileMenu?.classList.remove('is-open');
            });
        });
    } else {
        scrollLinks.forEach((link) => {
            link.addEventListener('click', (event) => {
                const target = document.querySelector(link.getAttribute('href'));

                if (!target) {
                    return;
                }

                event.preventDefault();
                target.scrollIntoView({
                    behavior: prefersReducedMotion ? 'auto' : 'smooth',
                    block: 'start'
                });
                mobileMenu?.classList.remove('is-open');
            });
        });
    }

    mobileToggle?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('is-open');
    });

    if (mouseGlow && !prefersReducedMotion) {
        let glowX = window.innerWidth / 2;
        let glowY = window.innerHeight / 2;
        let pointerX = glowX;
        let pointerY = glowY;

        window.addEventListener('pointermove', (event) => {
            pointerX = event.clientX;
            pointerY = event.clientY;
            mouseGlow.style.opacity = '1';
        });

        const moveGlow = () => {
            glowX += (pointerX - glowX) * 0.14;
            glowY += (pointerY - glowY) * 0.14;
            mouseGlow.style.transform = `translate3d(${glowX - 140}px, ${glowY - 140}px, 0)`;
            requestAnimationFrame(moveGlow);
        };

        moveGlow();
    }

    if (window.gsap) {
        if (window.ScrollTrigger) {
            gsap.registerPlugin(ScrollTrigger);
        }

        gsap.to('.loader-mark', {
            scale: 1.08,
            duration: 0.9,
            repeat: -1,
            yoyo: true,
            ease: 'power1.inOut'
        });

        gsap.from('.hero-text-item', {
            y: 34,
            autoAlpha: 0,
            filter: 'blur(10px)',
            duration: 0.9,
            stagger: 0.09,
            ease: 'power3.out',
            delay: 0.2
        });

        gsap.from('.hero-photo', {
            y: 42,
            autoAlpha: 0,
            scale: 0.96,
            duration: 1,
            ease: 'power3.out',
            delay: 0.45
        });

        if (window.ScrollTrigger) {
            gsap.utils.toArray('.reveal-item').forEach((item, index) => {
                gsap.to(item, {
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 84%',
                        once: true
                    },
                    y: 0,
                    opacity: 1,
                    filter: 'blur(0px)',
                    duration: 0.82,
                    delay: Math.min(index % 5, 4) * 0.045,
                    ease: 'power3.out'
                });
            });

            gsap.utils.toArray('.timeline-line').forEach((line) => {
                gsap.from(line, {
                    scrollTrigger: {
                        trigger: line,
                        start: 'top 80%',
                        end: 'bottom 70%',
                        scrub: true
                    },
                    scaleY: 0,
                    ease: 'none'
                });
            });

            gsap.to('.hero-orb', {
                scrollTrigger: {
                    trigger: '#home',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                },
                y: 110,
                ease: 'none'
            });
        } else {
            document.querySelectorAll('.reveal-item').forEach((item) => {
                item.style.opacity = '1';
                item.style.transform = 'none';
                item.style.filter = 'none';
            });
        }
    } else {
        document.querySelectorAll('.reveal-item').forEach((item) => {
            item.style.opacity = '1';
            item.style.transform = 'none';
            item.style.filter = 'none';
        });
    }

    const sections = document.querySelectorAll('section[id]');
    const activeObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            navLinks.forEach((link) => {
                link.classList.toggle('is-active', link.getAttribute('href') === `#${entry.target.id}`);
            });
        });
    }, {
        rootMargin: '-35% 0px -55% 0px',
        threshold: 0
    });

    sections.forEach((section) => activeObserver.observe(section));

    document.querySelectorAll('.magnetic-btn').forEach((button) => {
        button.addEventListener('pointermove', (event) => {
            if (prefersReducedMotion) {
                return;
            }

            const rect = button.getBoundingClientRect();
            const x = event.clientX - rect.left - rect.width / 2;
            const y = event.clientY - rect.top - rect.height / 2;
            button.style.transform = `translate(${x * 0.16}px, ${y * 0.16}px)`;
        });

        button.addEventListener('pointerleave', () => {
            button.style.transform = '';
        });
    });

    const modal = document.querySelector('[data-project-modal]');
    const modalTitle = document.querySelector('[data-modal-title]');
    const modalCategory = document.querySelector('[data-modal-category]');
    const modalImage = document.querySelector('[data-modal-image]');
    const modalDescription = document.querySelector('[data-modal-description]');
    const modalDetails = document.querySelector('[data-modal-details]');
    const modalTech = document.querySelector('[data-modal-tech]');

    const openProjectModal = (project) => {
        if (!modal || !project) {
            return;
        }

        modalTitle.textContent = project.title;
        modalCategory.textContent = project.category;
        modalImage.src = project.image;
        modalImage.alt = `Preview ${project.title}`;
        modalDescription.textContent = project.description;
        modalDetails.innerHTML = '';
        modalTech.innerHTML = '';

        [
            ['Tujuan', project.goal],
            ['Masalah', project.problem],
            ['Fitur Utama', project.features],
            ['Role', project.role],
            ['Tantangan', project.challenge],
            ['Solusi', project.solution],
            ['Hasil Akhir', project.result]
        ].forEach(([label, value]) => {
            const item = document.createElement('div');
            item.className = 'rounded-2xl border border-white/10 bg-white/[0.035] p-4';
            item.innerHTML = `<p class="text-xs font-black uppercase tracking-[0.16em] text-[#facc15]">${label}</p><p class="mt-2 text-sm leading-6 text-neutral-300">${value}</p>`;
            modalDetails.appendChild(item);
        });

        project.technologies.forEach((technology) => {
            const tag = document.createElement('span');
            tag.className = 'rounded-full border border-[#facc15]/25 bg-[#facc15]/10 px-3 py-1 text-xs font-bold text-[#facc15]';
            tag.textContent = technology;
            modalTech.appendChild(tag);
        });

        modal.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    };

    const closeProjectModal = () => {
        modal?.classList.remove('is-open');
        document.body.style.overflow = '';
    };

    document.querySelectorAll('[data-project]').forEach((card) => {
        const project = JSON.parse(card.dataset.project);

        card.addEventListener('click', (event) => {
            if (event.target.closest('a')) {
                return;
            }

            openProjectModal(project);
        });
    });

    document.querySelectorAll('[data-modal-close]').forEach((button) => {
        button.addEventListener('click', closeProjectModal);
    });

    modal?.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeProjectModal();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeProjectModal();
        }
    });

    const musicPlayer = document.querySelector('#music-player');
    const musicWidget = document.querySelector('#music-widget');
    const musicOpen = document.querySelector('#music-open');
    const musicClose = document.querySelector('#music-close');
    const musicAudio = document.querySelector('#music-audio');
    const musicToggle = document.querySelector('#music-toggle');
    const musicMute = document.querySelector('#music-mute');
    const musicProgress = document.querySelector('#music-progress');
    const musicTitle = document.querySelector('#music-title');
    const playIcon = document.querySelector('#music-play-icon');
    const pauseIcon = document.querySelector('#music-pause-icon');

    if (musicPlayer && musicAudio && musicToggle) {
        const setMusicPanel = (isOpen) => {
            musicPlayer.classList.toggle('pointer-events-none', !isOpen);
            musicPlayer.classList.toggle('opacity-0', !isOpen);
            musicPlayer.classList.toggle('scale-95', !isOpen);
            musicPlayer.classList.toggle('translate-y-2', !isOpen);
            musicPlayer.classList.toggle('opacity-100', isOpen);
            musicPlayer.classList.toggle('scale-100', isOpen);
            musicOpen?.classList.toggle('border-[#facc15]/40', isOpen);
        };

        const setPlayingState = (isPlaying) => {
            playIcon?.classList.toggle('hidden', isPlaying);
            pauseIcon?.classList.toggle('hidden', !isPlaying);
            musicPlayer.classList.toggle('ring-1', isPlaying);
            musicPlayer.classList.toggle('ring-[#facc15]/30', isPlaying);
        };

        musicOpen?.addEventListener('click', () => {
            setMusicPanel(!musicPlayer.classList.contains('opacity-100'));
        });

        musicClose?.addEventListener('click', () => setMusicPanel(false));

        document.addEventListener('click', (event) => {
            if (musicWidget && !musicWidget.contains(event.target)) {
                setMusicPanel(false);
            }
        });

        musicToggle.addEventListener('click', async () => {
            if (musicAudio.paused) {
                try {
                    await musicAudio.play();
                    setPlayingState(true);
                } catch (error) {
                    if (musicTitle) {
                        musicTitle.textContent = 'Audio belum tersedia';
                    }
                }
                return;
            }

            musicAudio.pause();
            setPlayingState(false);
        });

        musicMute?.addEventListener('click', () => {
            musicAudio.muted = !musicAudio.muted;
            musicMute.classList.toggle('text-[#facc15]', musicAudio.muted);
        });

        musicAudio.addEventListener('timeupdate', () => {
            if (!musicAudio.duration || !musicProgress) {
                return;
            }

            musicProgress.style.width = `${(musicAudio.currentTime / musicAudio.duration) * 100}%`;
        });

        musicAudio.addEventListener('ended', () => {
            setPlayingState(false);
            if (musicProgress) {
                musicProgress.style.width = '0%';
            }
        });
    }
});
