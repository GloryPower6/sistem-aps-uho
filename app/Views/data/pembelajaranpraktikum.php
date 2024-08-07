<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <!-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Dashboard
                        </h2> -->
        <!-- Charts -->
        <div></div>
        <h3 class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Pembelajaran Praktikum
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
                        Form Input Pembelajaran Praktikum
                    </p>
                    <!-- Modal description -->
                    <form action="<?= base_url('pembelajaranpraktikum') ?>" method="POST">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Program Studi</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="prodi"
                                placeholder="Program Studi..."/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Teori</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="teori"
                                placeholder="Teori"/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Praktikum</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="praktikum"
                                placeholder="Praktikum"/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Praktik</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="praktik"
                                placeholder="Praktik"/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Praktik Lapangan</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="praktik_lapangan"
                                placeholder="Praktik Lapangan"/>
                        </label>
                        <div class="flex mt-6 text-sm justify-end">
                            <button
                                class="px-4 py-2 justify-end text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
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
                <table class="relative w-full table-sortable" id="listMhsAsing">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                            <td></td>

                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listMhsAsing" list="listMhsAsing.Batch" type="text" name="" oninput="filterData('listMhsAsing')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listMhsAsing" list="listMhsAsing.Tahun Ajaran" type="text" name="" oninput="filterData('listMhsAsing')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listMhsAsing" list="listMhsAsing.Nama Lengkap" type="text" name="" oninput="filterData('listMhsAsing')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listMhsAsing" list="listMhsAsing.Gender" type="text" name="" oninput="filterData('listMhsAsing')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listMhsAsing" list="listMhsAsing.Asal Universitas" type="text" name="" oninput="filterData('listMhsAsing')" autocomplete="on">
                            </td>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="sticky top-0 px-4 py-3">No.</th>
                            <th class="sticky top-0 px-4 py-3">Program Studi</th>
                            <th class="sticky top-0 px-4 py-3">Teori</th>
                            <th class="sticky top-0 px-4 py-3">Praktikum</th>
                            <th class="sticky top-0 px-4 py-3">Praktik</th>
                            <th class="sticky top-0 px-4 py-3">Praktik Lapangan</th>
                        </tr>
                    </thead>

                    <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($pembelajaranpraktikum as $pp) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3"><?= $pp->id; ?></td>
                                <td class="px-4 py-3"><?= $pp->prodi; ?></td>
                                <td class="px-4 py-3"><?= $pp->teori; ?></td>
                                <td class="px-4 py-3"><?= $pp->praktikum; ?></td>
                                <td class="px-4 py-3"><?= $pp->praktik; ?></td>
                                <td class="px-4 py-3"><?= $pp->praktik_lapangan; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

                <datalist id="listMhsAsing.Batch"></datalist>
                <datalist id="listMhsAsing.Tahun Ajaran"></datalist>
                <datalist id="listMhsAsing.Nama Lengkap"></datalist>
                <datalist id="listMhsAsing.Gender"></datalist>
                <datalist id="listMhsAsing.Asal Universitas"></datalist>
                <datalist id="listMhsAsing.Negara"></datalist>

                <link rel="stylesheet" href="<?= base_url('assets/css/util/table/style.css') ?>">
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
                <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
                <script src="<?= base_url('assets/js/mhsasing/index.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/filter-data.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/datalist-autocomplete.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/table-sort.js') ?>"></script>

            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>