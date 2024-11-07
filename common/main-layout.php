<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta property="og:image" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index" />
    <meta name="description" content="<?php echo $deskripsi; ?>" />
    <meta property="og:title" content="<?php echo $judul; ?>" />
    <meta property="og:description" content="<?php echo $deskripsi; ?>" />
    <meta property="og:image" content="<?php ?>" />
    <meta name="twitter:title" content="<?php echo $judul; ?>" />
    <meta name="twitter:description" content="<?php echo $deskripsi; ?>" />
    <meta name="twitter:image" content="<?php ?>" />
    <title><?php echo $judul; ?></title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+US+Trad:wght@100..400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/app.css">
    <script src="utils/app.js"></script>
</head>

<body class="mx-auto overflow-x-hidden bg-amber-50/75">
    <?php include 'common/header.php'; ?>
    <?php include 'common/sidebar.php'; ?>
    <?php echo $slot; ?>
</body>

</html>