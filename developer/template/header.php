<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../../global/html/require.html") ?>
    <title>SteamX</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["superadmin"]) || $_SESSION["superadmin"] == null) {
        header("location: ../login.php");
    }

    ?>
    <div class="hero">
        <div class="sidebar">
            <div class="brand">
                <a href="index.html" class="brand-link">
                    <i class="fa-brands fa-steam"></i>
                </a>
                <a href="index.html" class="brand-link">
                    <span class="brand_name">SteamX</span>
                </a>
            </div>
            <div class="navigation">
                <ul class="items-list">
                    <li class="item" data-bs-toggle="tooltip" data-bs-title="Dashboard" data-bs-placement="right">
                        <a href="dashboard.php">
                            <i class="fa-solid fa-house"></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                    </li>
                    <li class="item" data-bs-toggle="tooltip" data-bs-title="Games" data-bs-placement="right">
                        <a href="games.php">
                            <i class="fa-solid fa-gamepad"></i>
                            <span class="links_name">Games</span>
                        </a>
                    </li>
                    <li class="item" data-bs-toggle="tooltip" data-bs-title="Users" data-bs-placement="right">
                        <a href="users.php">
                            <i class="fa-solid fa-users"></i>
                            <span class="links_name">Users</span>
                        </a>
                    </li>
                    <li class="item" data-bs-toggle="tooltip" data-bs-title="Developers" data-bs-placement="right">
                        <a href="devs.php">
                            <i class="fa-solid fa-code"></i>
                            <span class="links_name">Developers</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                <div class="sidebar-toggler">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="search">
                    <input type="text" class="search-bar" name="search" id="search" placeholder="Search...">
                    <button class="search-btn"><i class='fa-solid fa-magnifying-glass'></i></button>
                </div>
                <div class="profile">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="main">