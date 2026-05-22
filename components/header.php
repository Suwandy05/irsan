<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio M Irsan Suwandi, IT Support, Web Developer, Graphic Design, Networking, dan Hardware Support.">
    <meta name="author" content="M Irsan Suwandi">
    <meta name="theme-color" content="#050505">
    <title><?= htmlspecialchars($siteTitle ?? 'Portfolio | M Irsan Suwandi', ENT_QUOTES, 'UTF-8'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
                    },
                    boxShadow: {
                        glow: '0 0 55px rgba(250, 204, 21, 0.18)'
                    }
                }
            }
        };
    </script>
    <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body class="text-white antialiased selection:bg-[#facc15] selection:text-black">
<div class="noise-overlay" aria-hidden="true"></div>
<div class="mouse-glow" data-mouse-glow aria-hidden="true"></div>
<div class="loader" data-loader aria-hidden="true">
    <div class="loader-mark">IR</div>
</div>
