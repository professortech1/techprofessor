<?php
// Backend Data (Can be loaded dynamically from a database in the future)
$appTitle = "Tech Professor";
$tagline = "Easy and fast way to be perfect";
$videoSrc = "https://www.w3schools.com/html/mov_bbb.mp4"; // Placeholder video


$socialLinks = [
    [
        "name" => "WhatsApp",
        "url" => "https://chat.whatsapp.com/your-group-id",
        "icon" => "fa-brands fa-whatsapp",
        "color" => "#25D366"
    ],
    [
        "name" => "YouTube",
        "url" => "https://youtube.com/@iq_professor?si=e8wW9_TsW7JM2u-G",
        "icon" => "fa-brands fa-youtube",
        "color" => "#FF0000"
    ],
    [
        "name" => "Discord",
        "url" => "https://discord.gg/your-invite-code",
        "icon" => "fa-brands fa-discord",
        "color" => "#5865F2"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $appTitle; ?></title>
    <link rel="Stylesheet" href="style.css">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    
</head>
<body>
    

    <main class="mobile-card">
        <!-- Header Section -->
        <header class="header">
            <h1><?php echo $appTitle; ?></h1>
            <p>✦ <?php echo $tagline; ?></p>
        </header>

        <!-- Video Player Section -->
        <section class="video-container">
            <video id="techVideo" controls autoplay muted loop playsinline>
                <source src="<?php echo $videoSrc; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>

        <!-- Dynamic Social Links -->
        <nav class="social-buttons">
            <?php foreach ($socialLinks as $link): ?>
                <a href="<?php echo $link['url']; ?>" 
                   target="_blank" 
                   class="social-btn" 
                   data-name="<?php echo $link['name']; ?>">
                    <div class="icon-circle" style="background-color: <?php echo $link['color']; ?>;">
                        <i class="<?php echo $link['icon']; ?>"></i>
                    </div>
                    <span><?php echo $link['name']; ?></span>
                </a>
            <?php endforeach; ?>
        </nav>
    </main>

    <!-- JavaScript for Dynamic Interactions -->
      <script src="script.js"></script>              
</body>
</html>