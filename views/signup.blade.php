<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Sign Up Page</title>
  </head>
</html>

<div class="bg-cover bg-center bg-fixed" style="background-color: teal">
  <div class="h-screen flex justify-center items-center">
    <div class="bg-white mx-4 p-8 rounded shadow-md w-full md:w-1/2 lg:w-1/3">
      <h1 class="text-3xl font-bold mb-8 text-center">Sign Up</h1>
      <form>
        <div class="mb-4">
          <label class="block font-semibold text-gray-700 mb-2" for="email">
            E-mail
          </label>
          <input
            class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="email"
            type="email"
            placeholder="Masukkan alamat email anda"
          />
        </div>
        <div class="mb-4">
          <label class="block font-semibold text-gray-700 mb-2" for="password">
            Password
          </label>
          <input
            class="border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            id="password"
            type="password"
            placeholder="Masukkan password anda"
          />
          <a class="text-gray-600 hover:text-gray-800" href="login"
            >Sudah memiliki akun? klik disini</a
          >
        </div>
        <div class="mb-6">
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="button"
          >
            Buat akun
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
