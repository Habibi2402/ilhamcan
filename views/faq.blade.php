<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>FAQ</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <header class="bg-white">
      <div
        class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8 py-8"
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
    <!--END NAVBAR-->

    <!-- CONTENT -->
    <div class="py-8">
      <div class="space-y-4">
        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">Apa itu i-Ko Store?</h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            i-Ko Store adalah reseller produk apple khususnya iPhone yang
            berdiri tahun 2024 dan berpusat di kota medan.
          </p>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">
              Seri apa saja yang dijual pada i-Ko Store?
            </h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            Kami menjual seri inter seperti LL/A, CH/A, ZP/A, dan lain lain.
          </p>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">
              Apakah produk kami memiliki imei permanen?
            </h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            Ya, setiap unit yang kami jual sudah terigistrasi oleh pihak bea dan
            cukai.
          </p>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">
              Bagaimana jika suatu saat imei unit terblokir?
            </h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            Tukar unit baru, selama dalam masa garansi 3 bulan.
          </p>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">
              Kelengkapan apa saja yang didapat dari pembelian?
            </h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            Untuk pembelian disini pastinya fullset seperti kabel charger, sim
            ejector, manual book, dan box.
          </p>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">Dimana toko offline i-Ko Store?</h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            Kami berlokasi di JL.Cempaka Gaperta Ujung No.42 Kelurahan Tanjung
            Gusta Kecamatan Medan Helvetia
          </p>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">
              Kapan saya menerima pesanan saya?
            </h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            Untuk pengiriman dalam kota medan, 1-3 jam sesudah orderan masuk
            akan langsung dikirim oleh kurir kami. Sedangkan untuk luar kota
            medan 1-3 hari setelah orderan kami terima.
          </p>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">
              Berapa biaya layanan pengiriman?
            </h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            Gratis ongkir ke seluruh indonesia.
          </p>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
          <summary
            class="flex items-center justify-between gap-1.5 rounded-md border border-gray-100 bg-gray-50 p-4 text-gray-900"
          >
            <h2 class="text-lg font-medium">Apakah unit disini rekondisi?</h2>

            <svg
              class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </summary>

          <p class="px-4 pt-4 text-gray-900">
            Tidak, kami menjual unit second original bukan rekondisi. Semua unit
            yang kami jual sudah melewati quality control untuk memastikan semua
            berfungsi dengan normal, akan tetapi mengingat unit yang kami
            sediakan second akan terdapat perbedaan kondisi fisik antar unit
            namun kami tetap jamin kualitasnya.
          </p>
        </details>
      </div>
    </div>
    <!-- END CONTENT -->
  </body>
</html>
