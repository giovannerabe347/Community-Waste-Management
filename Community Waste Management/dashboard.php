<?php
session_start();
if (!isset($_SESSION['user_id'])) { header('Location: index.php'); exit; }
$name = htmlspecialchars($_SESSION['user_name'] ?? 'User', ENT_QUOTES, 'UTF-8');
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Dashboard | Community Waste Management</title>
<link rel="stylesheet" href="dashboard.css">
</head>
<body>
<div class="layout">
<aside class="sidebar">
<h2>♻️ Community Waste Management System</h2>
<nav aria-label="Dashboard navigation">
<a class="active" href="dashboard.php">⌂ &nbsp; Dashboard</a>
<a href="#schedule">▦ &nbsp; Schedule</a>
<a href="#actions">🚚 &nbsp; Request Pickup</a>
<a href="#actions">📖 &nbsp; Recycling Guide</a>
<a href="#announcements">⚠ &nbsp; Report Issue</a>
<a href="#announcements">♧ &nbsp; Community</a>
<a href="#profile">♙ &nbsp; Profile</a>
</nav>
<a class="logout" href="logout.php">⇥ &nbsp; Logout</a>
</aside>
<div class="main">
<header class="topbar"><strong>♻️ Community Waste Management</strong><span id="profile">👤 <?= $name ?></span></header>
<main class="content">
<section class="welcome"><small>Welcome back,</small><h1><?= $name ?>!</h1><p>Let's keep our community clean and green together.</p></section>
<section class="features" id="actions">
<a class="feature" href="index.php#features">🚚<h3>Request Pickup</h3><p>Schedule a waste disposal pickup.</p></a>
<a class="feature" href="#schedule">📅<h3>View Schedule</h3><p>Check the waste collection schedule.</p></a>
<a class="feature" href="index.php#features">📖<h3>Recycling Guide</h3><p>Learn how to properly segregate waste.</p></a>
<a class="feature" href="#announcements">⚠️<h3>Report Issue</h3><p>Report missed collection or other concerns.</p></a>
</section>
<section class="panels">
<div class="panel" id="schedule"><h3>Upcoming Schedule</h3><p>🗑️ General Waste — Monday</p><p>♻️ Recyclable Waste — Wednesday</p><p>🌿 Organic Waste — Friday</p><p>⚠️ Hazardous Waste — Saturday</p><small>Sample schedule — update with your barangay's actual collection dates.</small></div>
<div class="panel" id="announcements"><h3>Announcements</h3><p>📢 Schedule Update</p><p>📢 Recycling Drive</p><p>📢 Keep Our Community Clean</p><small>Sample announcements — replace with actual updates.</small></div>
</section>
</main>
</div></div>
<script src="dashboard.js"></script>
</body></html>
