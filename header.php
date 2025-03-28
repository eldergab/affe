<?php
/**
 * Header unificado para o site AFFE
 */
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Cooperativa AFFE'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .mobile-menu {
            display: none;
        }
        @media (max-width: 768px) {
            .desktop-menu {
                display: none;
            }
            .mobile-menu {
                display: block;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="logo">
                    <h1 class="text-xl md:text-2xl font-bold text-green-700">Cooperativa AFFE</h1>
                    <p class="text-xs md:text-sm text-gray-600">A Família Feliz</p>
                </div>
                
                <!-- Mobile menu button -->
                <button class="mobile-menu md:hidden text-gray-700" id="menu-toggle">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                
                <!-- Desktop menu -->
                <nav class="desktop-menu hidden md:block">
                    <ul class="flex space-x-2 md:space-x-6">
                        <li><a href="index.php" class="text-gray-700 hover:text-green-600 text-sm md:text-base">Home</a></li>
                        <li><a href="sobre.php" class="text-gray-700 hover:text-green-600 text-sm md:text-base">Sobre</a></li>
                        <li><a href="projetos.php" class="text-gray-700 hover:text-green-600 text-sm md:text-base">Projetos</a></li>
                        <li><a href="participar.php" class="text-gray-700 hover:text-green-600 text-sm md:text-base">Participar</a></li>
                        <li><a href="noticias.php" class="text-gray-700 hover:text-green-600 text-sm md:text-base">Notícias</a></li>
                        <li><a href="presentation.php" class="text-green-600 font-medium text-sm md:text-base">Conheça nosso Aplicativo</a></li>
                    </ul>
                </nav>
            </div>
            
            <!-- Mobile menu (hidden by default) -->
            <nav class="mobile-menu hidden md:hidden py-4" id="mobile-nav">
                <ul class="space-y-3">
                    <li><a href="index.php" class="block text-gray-700 hover:text-green-600">Home</a></li>
                    <li><a href="sobre.php" class="block text-gray-700 hover:text-green-600">Sobre</a></li>
                    <li><a href="projetos.php" class="block text-gray-700 hover:text-green-600">Projetos</a></li>
                    <li><a href="participar.php" class="block text-gray-700 hover:text-green-600">Participar</a></li>
                    <li><a href="noticias.php" class="block text-gray-700 hover:text-green-600">Notícias</a></li>
                    <li><a href="presentation.php" class="block text-green-600 font-medium">Conheça nosso Aplicativo</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>