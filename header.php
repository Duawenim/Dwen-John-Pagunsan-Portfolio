<?php
// Basic meta and site settings
$site = [
    'title' => 'DWEN JOHN PAGUNSAN',
    'subtitle' => 'IT Hardware Specialist',
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($site['title']); ?> - Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <header class="site-header">
        <div class="header-inner">
            <img src="assets/pictures/Personalphoto.jpg" alt="Profile Photo" class="profile-photo">
            <div class="header-text">
                <h1 class="site-name"><?php echo htmlspecialchars($site['title']); ?></h1>
                <p class="site-sub"><?php echo htmlspecialchars($site['subtitle']); ?></p>
            </div>
        </div>
    </header>
</body>

</html>