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
            Data Mahasiswa Asing
        </h3>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="relative w-full whitespace-no-wrap table-sortable" id="listMhsAsing">
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
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listMhsAsing" list="listMhsAsing.Negara" type="text" name="" oninput="filterData('listMhsAsing')" autocomplete="on">
                            </td>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="sticky top-0 px-4 py-3">No.</th>
                            <th class="sticky top-0 px-4 py-3">Batch</th>
                            <th class="sticky top-0 px-4 py-3">Tahun Ajaran</th>
                            <th class="sticky top-0 px-4 py-3">Nama Lengkap</th>
                            <th class="sticky top-0 px-4 py-3">Gender</th>
                            <th class="sticky top-0 px-4 py-3">Asal Universitas</th>
                            <th class="sticky top-0 px-4 py-3">Negara</th>
                        </tr>
                    </thead>

                    <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($mhsasing as $ma) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3"><?= $ma->id; ?></td>
                                <td class="px-4 py-3"><?= $ma->batch; ?></td>
                                <td class="px-4 py-3"><?= $ma->tahun_ajaran; ?></td>
                                <td class="px-4 py-3"><?= $ma->nama_lengkap; ?></td>
                                <td class="px-4 py-3"><?= $ma->gender; ?></td>
                                <td class="px-4 py-3"><?= $ma->asal_universitas; ?></td>
                                <td class="px-4 py-3"><?= $ma->negara; ?></td>
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
                <script src="<?= base_url('assets/js/mhsasing/index.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/filter-data.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/datalist-autocomplete.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/table-sort.js') ?>"></script>

            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>