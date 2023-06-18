<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="shortcut icon" href="../../assets/icons/favicon.ico" type="image/svg+xml">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ONHYM Supplier Portal | Mot de passe oublié</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="../../assets/js/init-alpine.js"></script>
</head>

<body>
  <div class="flex items-center min-h-screen p-6 bg-gray-50">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-2xl">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="../../assets/images/forgot-password-office.jpeg" alt="Office" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <div class="w-full">
            <form action="../../Service/forgetPasswordService.php" method="post">
              <h1 class="mb-4 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Mot de passe oublié
              </h1>
              <label class="block text-md">
                <span class="focus:border-black">Email</span>
                <input class="block w-full h-7 mt-1 p-2 text-md focus:border-black focus:outline-black focus:shadow-md form-input" name="email" placeholder="********" />
              </label>
              <button class="block w-full px-4 py-2 mt-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" name="send" type="submit">
                Soumettre
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>