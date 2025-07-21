<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Banner</title>

    <!-- Plyr CSS -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <style>
        body, html {
            margin: 0;
            padding: 0;
            background: #ffffff;
            font-family: Arial, sans-serif;
        }

        .banner-container {
            width: 100%;
            max-height: 600px;
            position: relative;
            overflow: hidden;
        }

        .plyr__video-wrapper iframe {
            aspect-ratio: 16 / 9;
            width: 100%;
            height: 100%;
        }

        .content {
            padding: 2rem;
            text-align: center;
        }

        h1 {
            font-size: 2rem;
            margin-top: 1rem;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #222;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 1rem;
            transition: 0.3s;
        }

        .btn:hover {
            background: #444;
        }
    </style>
</head>
<body>

    <!-- Banner Video Section -->
    <div class="banner-container">
        <div class="plyr__video-embed" id="player">
            <iframe
                src="https://www.youtube.com/embed/4yPZs81lK3w?loop=1&playlist=4yPZs81lK3w&autoplay=1&mute=1&controls=0&modestbranding=1&rel=0&showinfo=0"
                allowfullscreen
                allowtransparency
                allow="autoplay"
            ></iframe>
        </div>
    </div>

    <!-- Simple Home Content -->
    <div class="content">
        <h1>Hello, I’m Roshan 👋</h1>
        <p>This is my simple, beautiful portfolio. I love Laravel, Vue, and exploring cyber & game dev.</p>
        <a href="#projects" class="btn">View Projects</a>
    </div>

    <!-- Plyr JS -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script>
        const player = new Plyr('#player', {
            autoplay: true,
            loop: { active: true },
            controls: [],
            muted: true,
        });
    </script>

</body>
</html>
