<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Roshan Dhungana Portfolio</title>
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff;
            color: #333;
        }

        /* Banner Container */
        .video-banner {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #000;
            overflow: hidden;
        }

        /* Responsive YouTube iframe */
        .video-banner iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
            pointer-events: none;
            /* Prevent hover UI like Share, Watch Later */
        }

        /* Hero Content */
        .banner-content {
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            padding: 20px;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            max-width: 90%;
        }

        .banner-content h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .banner-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background: #fff;
            color: #333;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin: 8px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #ddd;
        }

        /* Responsive Tweaks */
        @media (max-width: 768px) {
            .banner-content h1 {
                font-size: 1.8rem;
            }

            .banner-content p {
                font-size: 1rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .banner-content h1 {
                font-size: 1.5rem;
            }

            .banner-content p {
                font-size: 0.9rem;
            }

            .btn {
                padding: 8px 16px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>

    <!-- Responsive YouTube Banner -->
    <section class="video-banner">
        <iframe
            src="https://www.youtube.com/embed/79Q2rrQlPW4?autoplay=1&mute=1&loop=1&playlist=79Q2rrQlPW4&controls=0&modestbranding=1&rel=0&showinfo=0"
            title="YouTube video banner" allow="autoplay; encrypted-media" allowfullscreen
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>

        <!-- Hero Text Overlay -->
        <div class="banner-content">
            <h1>Roshan Dhungana</h1>
            <p>Full Stack Developer | Laravel • Vue • Cybersecurity Enthusiast</p>
            <a href="#projects" class="btn">View Projects</a>
            <a href="#contact" class="btn">Contact</a>
        </div>
    </section>

</body>

</html>
