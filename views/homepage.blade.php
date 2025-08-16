<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Home</title>
  </head>
  <body>
    <!-- PROMOTION -->
    <div class="border-b border-gray-200 bg-gray-100 px-4 py-2 text-gray-900">
      <p class="text-center font-medium">
        Harga Terbaik Untuk Solusi Gadget Anda
      </p>
    </div>
    <!-- END PROMOTION -->

    <!-- NAVBAR -->
    <header class="bg-white">
      <div
        class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8"
      >
        <a class="block text-teal-600" href="#">
          <span class="sr-only">Home</span>
        </a>
        <div>
          <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl gap-8">
            i-Ko Store
          </h1>
        </div>

        <div class="flex flex-1 items-center justify-end md:justify-between">
          <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm"></ul>
          </nav>

          <div class="flex items-center gap-4">
            <div class="sm:flex sm:gap-4">
              <a
                href="Cara Belanja.html"
                class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
                href="#"
              >
                Cara Belanja
              </a>

              <a
                class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
                href="#"
              >
                Hubungi Admin
              </a>
            </div>

            <button
              class="block rounded-sm bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
            >
              <span class="sr-only">Toggle menu</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- END NAVBAR -->

    <!--Call To Action-->
    <section class="bg-gray-50">
      <div class="p-8 md:p-12 lg:px-16 lg:py-24">
        <div class="mx-auto max-w-lg text-center">
          <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
            Iphone Second Berkualitas Dengan Harga Terbaik
          </h2>
        </div>

        <div class="mx-auto mt-8 max-w-xl">
          <form action="#" class="sm:flex sm:gap-4">
            <div class="sm:flex-1">
              <label for="email" class="sr-only">Cari</label>

              <input
                type="text"
                placeholder="Ketik seri iphone yang anda inginkan"
                class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-xs transition focus:border-white focus:ring-3 focus:ring-teal-600 focus:outline-hidden"
              />
            </div>

            <button
              type="submit"
              class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-teal-600 px-5 py-3 text-white transition focus:ring-3 focus:ring-teal-600 focus:outline-hidden sm:mt-0 sm:w-auto"
            >
              <span class="text-sm font-medium"> Cari Iphone </span>

              <svg
                class="size-5 shadow-sm rtl:rotate-180"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17 8l4 4m0 0l-4 4m4-4H3"
                />
              </svg>
            </button>
          </form>
        </div>
      </div>
    </section>
    <!--End Call To Action-->

    <!--Product List-->
    <div class="grid grid-cols-3 gap-4 w-full object-cover mx-auto">
      <a href="#" class="group relative block overflow-hidden">
        <img
          src="https://cdn.antaranews.com/cache/1200x800/2020/05/31/pixlr_copy_1024x682_1022.jpg"
          alt=""
          class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
        />

        <div class="relative border border-gray-100 bg-white p-6">
          <p class="text-gray-700">
            Rp. 3.900.000
            <span class="text-gray-400 line-through">Rp. 4.100.000</span>
          </p>

          <h3 class="mt-1.5 text-lg font-medium text-gray-900">iPhone XR</h3>

          <p class="mt-1.5 line-clamp-3 text-gray-700">
            iPhone XR dibekali dengan chipset A12 Bionic, baterai Li-Ion 2942
            mAh, kamera Utama 12 MP, layar liquid retina IPS LCD.
          </p>

          <form class="mt-4 flex gap-4">
            <button
              class="block w-full rounded-sm bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105"
            >
              Add to Cart
            </button>

            <button
              type="button"
              class="block w-full rounded-sm bg-gray-900 px-4 py-3 text-sm font-medium text-white transition hover:scale-105"
            >
              Buy Now
            </button>
          </form>
        </div>
      </a>

      <a href="#" class="group relative block overflow-hidden">
        <img
          src="https://cdn.topsellbelanja.com/wp-content/uploads/2023/04/cvr-ip-11-1024x512.png"
          alt=""
          class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
        />

        <div class="relative border border-gray-100 bg-white p-6">
          <p class="text-gray-700">
            Rp. 5.050.000
            <span class="text-gray-400 line-through">Rp. 5.400.000</span>
          </p>

          <h3 class="mt-1.5 text-lg font-medium text-gray-900">iPhone 11</h3>

          <p class="mt-1.5 line-clamp-3 text-gray-700">
            iPhone 11 dibekali dengan chipset A13 Bionic, baterai Li-Ion 3110
            mAh, kamera Utama dual 12 MP, layar liquid retina IPS LCD.
          </p>

          <form class="mt-4 flex gap-4">
            <button
              class="block w-full rounded-sm bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105"
            >
              Add to Cart
            </button>

            <button
              type="button"
              class="block w-full rounded-sm bg-gray-900 px-4 py-3 text-sm font-medium text-white transition hover:scale-105"
            >
              Buy Now
            </button>
          </form>
        </div>
      </a>

      <a href="#" class="group relative block overflow-hidden">
        <img
          src="https://cdn.antaranews.com/cache/1200x800/2021/09/15/Apple_iphone13_colors_09142021_big.jpg.small_2x_copy_3482x2318-01.jpeg"
          alt=""
          class="h-64 w-full object-cover transition duration-500 group-hover:scale-102 sm:h-72"
        />

        <div class="relative border border-gray-100 bg-white p-6">
          <p class="text-gray-700">
            Rp. 6.500.000
            <span class="text-gray-400 line-through">Rp. 6.950.000</span>
          </p>

          <h3 class="mt-1.5 text-lg font-medium text-gray-900">iPhone 13</h3>

          <p class="mt-1.5 line-clamp-3 text-gray-700">
            iPhone 13 dibekali dengan chipset A15 Bionic, baterai Li-Ion 3240
            mAh, kamera Utama dual 12 MP, layar super retina XDR OLED.
          </p>

          <form class="mt-4 flex gap-4">
            <button
              class="block w-full rounded-sm bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105"
            >
              Add to Cart
            </button>

            <button
              type="button"
              class="block w-full rounded-sm bg-gray-900 px-4 py-3 text-sm font-medium text-white transition hover:scale-105"
            >
              Buy Now
            </button>
          </form>
        </div>
      </a>

      <a href="#" class="group relative block overflow-hidden">
        <img
          src="https://ibox.co.id/_next/image?url=https%3A%2F%2Fcdnpro.eraspace.com%2Fmedia%2Fcatalog%2Fproduct%2Fi%2Fp%2Fiphone_14_blue_6.jpg&w=3840&q=45"
          alt=""
          class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
        />

        <div class="relative border border-gray-100 bg-white p-6">
          <p class="text-gray-700">
            Rp. 7.450.000
            <span class="text-gray-400 line-through">Rp. 7.600.000</span>
          </p>

          <h3 class="mt-1.5 text-lg font-medium text-gray-900">iPhone 14</h3>

          <p class="mt-1.5 line-clamp-3 text-gray-700">
            iPhone 14 dibekali dengan chipset A15 Bionic, baterai Li-Ion 3279
            mAh, kamera Utama dual 12 MP, layar super retina XDR OLED.
          </p>

          <form class="mt-4 flex gap-4">
            <button
              class="block w-full rounded-sm bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105"
            >
              Add to Cart
            </button>

            <button
              type="button"
              class="block w-full rounded-sm bg-gray-900 px-4 py-3 text-sm font-medium text-white transition hover:scale-105"
            >
              Buy Now
            </button>
          </form>
        </div>
      </a>

      <a href="#" class="group relative block overflow-hidden">
        <img
          src="https://asset.kompas.com/crops/mZLQK6g8TOHYEjHHD1hHpfCZhm8=/0x0:750x500/1200x800/data/photo/2023/09/21/650c2d4878b47.png"
          alt=""
          class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
        />

        <div class="relative border border-gray-100 bg-white p-6">
          <p class="text-gray-700">
            Rp. 9.250.000
            <span class="text-gray-400 line-through">Rp. 9.500.000</span>
          </p>

          <h3 class="mt-1.5 text-lg font-medium text-gray-900">iPhone 15</h3>

          <p class="mt-1.5 line-clamp-3 text-gray-700">
            iPhone 15 dibekali dengan chipset A16 Bionic, baterai Li-Ion 3349
            mAh, kamera Utama dual 48 MP, layar super retina XDR OLED.
          </p>

          <form class="mt-4 flex gap-4">
            <button
              class="block w-full rounded-sm bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105"
            >
              Add to Cart
            </button>

            <button
              type="button"
              class="block w-full rounded-sm bg-gray-900 px-4 py-3 text-sm font-medium text-white transition hover:scale-105"
            >
              Buy Now
            </button>
          </form>
        </div>
      </a>

      <a href="#" class="group relative block overflow-hidden">
        <img
          src="https://cdn.antaranews.com/cache/1200x800/2024/09/10/1000233682.jpg"
          alt=""
          class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
        />

        <div class="relative border border-gray-100 bg-white p-6">
          <p class="text-gray-700">
            Rp. 12.700.000
            <span class="text-gray-400 line-through">Rp. 13.000.000</span>
          </p>

          <h3 class="mt-1.5 text-lg font-medium text-gray-900">iPhone 16</h3>

          <p class="mt-1.5 line-clamp-3 text-gray-700">
            iPhone 16 dibekali dengan chipset A18 Bionic, baterai Li-Ion 3561
            mAh, kamera Utama dual 48 MP, layar super retina XDR OLED.
          </p>

          <form class="mt-4 flex gap-4">
            <button
              class="block w-full rounded-sm bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105"
            >
              Add to Cart
            </button>

            <button
              type="button"
              class="block w-full rounded-sm bg-gray-900 px-4 py-3 text-sm font-medium text-white transition hover:scale-105"
            >
              Buy Now
            </button>
          </form>
        </div>
      </a>
    </div>
    <!--End Product List-->

    <!--Footer-->
    <footer class="bg-gray-100 dark:bg-gray-900">
      <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="flex justify-center text-black-600 font-bold">
          <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl gap-8">
            i-Ko Store
          </h1>
        </div>

        <p
          class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500 dark:text-gray-400"
        >
          Jl.Cempaka No.42
        </p>

        <p
          class="mx-auto max-w-md text-center leading-relaxed text-gray-500 dark:text-gray-400"
        >
          Kelurahan Tanjung Gusta
        </p>

        <p
          class="mx-auto text-center leading-relaxed text-gray-500 dark:text-gray-400"
        >
          Kecamatan Medan Helvetia
        </p>

        <ul
          class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12"
        >
          <li>
            <a
              class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
              href="about"
            >
              About
            </a>
          </li>

          <li>
            <a
              class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
              href="garansi"
            >
              Garansi Produk
            </a>
          </li>

          <li>
            <a
              class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
              href="carabelanja"
            >
              Cara Belanja
            </a>
          </li>

          <li>
            <a
              class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
              href="faq"
            >
              FAQ
            </a>
          </li>
        </ul>

        <ul class="mt-12 flex justify-center gap-6 md:gap-8">
          <li>
            <a
              href="https://www.instagram.com/i_ko.store/?utm_source=ig_web_button_share_sheet"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
            >
              <span class="sr-only">Instagram</span>
              <svg
                class="size-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </footer>
    <!--End Footer-->
  </body>
</html>
