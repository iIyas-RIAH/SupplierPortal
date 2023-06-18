<?php

include_once '../../Config/Database.php';

session_start();
if (isset($_SESSION['IDA'])) {
    header("Location: ../EspaceAdmin/Accueil.php");
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONHYM Supplier Portal | Se Connecter</title>
	<link rel="shortcut icon" href="../../assets/icons/favicon.ico" type="image/svg+xml">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="../../assets/js/init-alpine.js"></script>
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
	<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
		<div class="relative py-3 sm:max-w-xl sm:mx-auto">
			<div class="absolute inset-0 bg-gradient-to-r from-purple-300 to-purple-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
			</div>
			<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
				<div class="max-w-md mx-auto">
					<div>
						<h1 class="text-2xl font-semibold px-10">Authentification</h1>
					</div>
					<div class="divide-y divide-gray-200">
						<form method="post" action="../../Service/AdminLoginService.php" class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
							<div class="relative">
								<input id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email" />
								<label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email</label>
							</div>
							<div class="relative">
								<input id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Mot de passe" />
								<label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Mot de passe</label>
							</div>
							<div class="relative">
								<button class="block w-full px-4 py-2 mt-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Se connecter</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>