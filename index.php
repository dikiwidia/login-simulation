<?php
session_start();

// keadaan login mengharuskan kita punya session aktif
// $_SESSION['status_login'] = false;

if (isset($_SESSION['status_login']) && $_SESSION['status_login']) {
    // jika login ada atau benar
    // munculkan html di bawah
    // di off 
} else {
    header("location:login.php"); // redirect ke halaman login.php
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="flex flex-col gap-4 items-center justify-center min-h-screen w-full bg-teal-600 text-white">
        <h1 class="text-4xl font-bold">Selamat Datang di Dashboard</h1>
        <a href="proses_logout.php"
            class="inline-block px-2 py-1.5 text-white bg-rose-400 cursor-pointer rounded shadow">Keluar
            Sistem</a>
    </div>
</body>

</html>