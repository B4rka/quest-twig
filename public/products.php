<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'sitar', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products]);