<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lantern workspace management for growing teams.">
    <title><?= esc($title ?? 'Lantern') ?></title>
    <link rel="stylesheet" href="<?= base_url('global.css') ?>">
</head>
<body>
<header class="site-header">
    <nav class="nav container" aria-label="Main navigation">
        <a class="brand" href="<?= site_url('/') ?>">lantern</a>
        <div class="nav-links">
            <a href="<?= site_url('about') ?>">About</a>
            <a href="<?= site_url('customers') ?>">Customers</a>
            <a href="<?= site_url('users') ?>">Users</a>
        </div>
    </nav>
</header>
<main>
