session_start();
if (!isset ($session [mahasiswa_NPM] )) {
    header "location: entry_level.php"
}

<?php 
<title>dashboard</title>
</head>
<body>

<h2>Dashboard Mahasiswa</h2>

<p>Selamat datang, <?php echo $_SESSION["mahasiswa_nama"]; ?> 🎉</p>
<p>NPM: <?php echo $_SESSION["mahasiswa_npm"]; ?></p>

<a href="logout.php">Logout> 

 <h2>Portal</h2>
