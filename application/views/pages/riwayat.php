<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3 text-white">Riwayat Pesanan</h1>
        <div class="row">
            <div class="col-12 col-xl-12 col-xxl-6 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-content">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-white">No</th>
                                                <th class="text-white">Username</th>
                                                <th class="text-white">Game</th>
                                                <th class="text-white">Tanggal Pembelian</th>
                                                <th class="text-white">Jumlah Uang Game</th>
                                                <th class="text-white">Terkirim</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($riwayat as $r) { ?>
                                                <tr>
                                                    <td class="text-white"><?= $no++ ?></td>
                                                    <td class="text-white"><?= $r['username'] ?></td>
                                                    <td class="text-white"><?= $r['game'] ?></td>
                                                    <td class="text-white"><?= date('d/m/Y', strtotime($r['tgl_pembelian'])) ?></td>
                                                    <td class="text-white"><?= $r['jumlah_uang'] ?> UC</td>
                                                    <td><?= $r['terkirim'] == 1 ? '<div class="status-indicator text-center rounded"><i class="text-white align-middle" data-feather="check"></i></div>' : '' ?></td>
                                                </tr>
                                            <?php   }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>