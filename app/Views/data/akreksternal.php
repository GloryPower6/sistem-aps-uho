<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <!-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Dashboard </h2> -->
        <!-- Charts -->
        <div></div>
        <h3
            class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Sertifikasi/Akreditasi Eksternal
        </h3>
        <div class="my-6 mb-4">
            <button
                @click="openModal"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Tambah Data
            </button>
        </div>
        <div
            x-show="isModalOpen"
            x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
            <!-- Modal -->
            <div
                x-show="isModalOpen"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform translate-y-1/2"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0  transform translate-y-1/2"
                @click.away="closeModal"
                @keydown.escape="closeModal"
                class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                role="dialog"
                id="modal">
                <!-- Remove header if you don't want a close icon. Use modal body to place modal
                tile. -->
                <header class="flex justify-end">
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                        aria-label="close"
                        @click="closeModal">
                        <svg
                            class="w-4 h-4"
                            fill="currentColor"
                            viewbox="0 0 20 20"
                            role="img"
                            aria-hidden="true">
                            <path
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </header>
                <!-- Modal body -->
                <div class="mt-4 mb-6">
                    <!-- Modal title -->
                    <p class="mb-4 text-lg font-semibold text-gray-700 dark:text-gray-300">
                        Form Input Sertifikasi/Akreditasi Eksternal
                    </p>
                    <!-- Modal description -->
                    <form action="<?= base_url('akreksternal') ?>" method="POST">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Lembaga Sertifikasi/Akreditasi</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="lembaga"
                                placeholder="Nama Lembaga..."/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Jenis Sertifikasi/Akreditasi</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="jenis_sertifikat"
                                placeholder="Jenis Sertifikasi/Akreditasi..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                            Lingkup
                            </span>
                            <select
                            class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="lingkup"
                            >
                            <option>PT/Fakultas</option>
                            <option>Unit</option>
                            </select>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                            Tingkat
                            </span>
                            <select
                            class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="tingkat"
                            >
                            <option>...</option>
                            <option>Internasional</option>
                            </select>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Masa Berlaku</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="masa_berlaku"
                                placeholder="Masa Berlaku..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Keterangan</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                rows="3" name="keterangan"
                                placeholder="Masukkan Keterangan..."></textarea>
                        </label>
                        <div class="flex mt-6 text-sm justify-end">
                            <button
                                class="px-4 py-2 justify-end text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" name="simpan">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
                <script>
                    $(function(){

                        <?php if(session()->has("status")) { ?>
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: '<?= session("status") ?>'
                            })
                        <?php } ?>
                    });
                </script>
                </div>
            </div>
        </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table
                class="relative w-full table-sortable"
                id="listAkeStatus">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                        <td></td>

                        <td class="px-2 py-3">
                            <input
                                class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input"
                                type="text"
                                name=""
                                onkeyup="filterData()">
                        </td>
                        <td class="px-2 py-3">
                            <input
                                class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input"
                                type="text"
                                name=""
                                onkeyup="filterData()">
                        </td>
                        <td class="px-2 py-3">
                            <input
                                class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input"
                                type="text"
                                name=""
                                onkeyup="filterData()">
                        </td>
                        <td class="px-2 py-3">
                            <input
                                class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input"
                                type="text"
                                name=""
                                onkeyup="filterData()">
                        </td>
                        <td class="px-2 py-3">
                            <input
                                class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input"
                                type="text"
                                name=""
                                onkeyup="filterData()">
                        </td>
                        <td class="px-2 py-3">
                            <input
                                class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input"
                                type="text"
                                name=""
                                onkeyup="filterData()">
                        </td>
                    </tr>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="sticky top-0 px-4 py-3">No.</th>
                        <th class="sticky top-0 px-4 py-3">Lembaga Sertifikasi/Akreditasi Eksternal</th>
                        <th class="sticky top-0 px-4 py-3">Jenis Sertifikasi/Akreditasi</th>
                        <th class="sticky top-0 px-4 py-3">Lingkup</th>
                        <th class="sticky top-0 px-4 py-3">Tingkat</th>
                        <th class="sticky top-0 px-4 py-3">Masa Berlaku</th>
                        <th class="sticky top-0 px-4 py-3">Keterangan</th>
                    </tr>
                </thead>

                <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php foreach ($paginasi as $pg) : ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3"><?= $pg['id']; ?></td>
                        <td class="px-4 py-3"><?= $pg['lembaga']; ?></td>
                        <td class="px-4 py-3"><?= $pg['jenis_sertifikat']; ?></td>
                        <td class="px-4 py-3"><?= $pg['lingkup']; ?></td>
                        <td class="px-4 py-3"><?= $pg['tingkat']; ?></td>
                        <td class="px-4 py-3"><?= $pg['masa_berlaku']; ?></td>
                        <td class="px-4 py-3"><?= $pg['keterangan']; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <script>
                function filterData() {
                    var inputs = document.querySelectorAll('.filter-input');
                    var table,
                        tr,
                        td,
                        i,
                        j,
                        txtValue,
                        filter;

                    table = document.getElementById("listAkeStatus");
                    tr = table.getElementsByTagName("tr");

                    for (i = 0; i < tr.length; i++) {
                        if (!tr[i].classList.contains('always-visible')) { // Periksa apakah baris memiliki kelas always-visible
                            tr[i].style.display = ""; // Jika tidak, tampilkan barisnya
                        }

                        for (j = 0; j < inputs.length; j++) {
                            filter = inputs[j]
                                .value
                                .toUpperCase();
                            td = tr[i].getElementsByTagName("td")[j + 1]; // Kolom input dimulai dari indeks ke-1

                            if (td) {
                                txtValue = td.textContent || td.innerText;

                                if (txtValue.toUpperCase().indexOf(filter) === -1 && !tr[i].classList.contains('always-visible')) {
                                    tr[i].style.display = "none"; // Sembunyikan baris jika tidak cocok dengan salah satu input, kecuali jika memiliki kelas always-visible
                                }
                            }
                        }
                    }
                }
            </script>
            <link rel="stylesheet" href="<?= base_url('assets/css/home/style.css') ?>">
            <script src="<?= base_url('assets/js/home/table-sort.js') ?>"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
            <div class="flex justify-center px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <!-- Pagination -->
            <?= $pager->links('paginasi', 'ps_pagination'); ?>
        </div>
        </div>
    </div>
</div>
</main>
<?= $this->endSection(); ?>