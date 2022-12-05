<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">TOPLINE</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item <?= $nav_active == 'beranda' ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url('pages/dashboard') ?>">
                    <i class="align-middle text-white" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item <?= $nav_active == 'riwayat' ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url('pages/riwayat') ?>">
                    <i class="align-middle text-white" data-feather="file-text"></i> <span class="align-middle">Riwayat</span>
                </a>
            </li>
        </ul>
    </div>
</nav>