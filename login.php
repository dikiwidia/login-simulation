<?php
session_start();

// jika sudah login arahkan ke index.php
if (isset($_SESSION['status_login']) && $_SESSION['status_login']) {
    header("location:index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen w-full bg-teal-600">
        <div class="w-1/5 min-h-40 flex flex-col items-center bg-white border-2 border-slate-900 rounded-lg shadow p-5">
            <h1 class="text-xl font-bold">Login Your Account</h1>
            <form action="proses_login.php" method="post" class="flex flex-col w-full">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="text" id="password" name="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Password" required>
                </div>
                <div class="">
                    <button type="submit"
                        class="bg-green-600 text-white px-2 py-1.5 rounded cursor-pointer">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>