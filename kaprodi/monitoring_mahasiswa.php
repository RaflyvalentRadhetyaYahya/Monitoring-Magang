<?php
$page = "monitoring_mahasiswa";
$nama_kaprodi = "Prof. Dr. Budi Susanto, M.Kom.";
$nip = "197001011995121001";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemantauan Mahasiswa - SIMMAG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/kaprodi.css">
    <link rel="stylesheet" href="assets/css/monitoring.css">
</head>
<body>
    <div class="top-navbar">
        <div class="navbar-brand">
            <img src="../admin/assets/logo.png" alt="SIMMAG" onerror="this.src='https://ui-avatars.com/api/?name=S+M&background=7c3aed&color=fff&rounded=true&font-size=0.5'">
        </div>
        <div class="nav-center">
            <a href="dashboard.php" class="<?= ($page == 'dashboard') ? 'active' : '' ?>">Beranda</a>
            <a href="monitoring_mahasiswa.php" class="<?= ($page == 'monitoring_mahasiswa') ? 'active' : '' ?>">Pemantauan Mahasiswa</a>
            <a href="pemantauan_dosen.php" class="<?= ($page == 'pemantauan_dosen') ? 'active' : '' ?>">Kinerja Dosen</a>
        </div>
        <div class="nav-right">
            <div class="profile-section">
                <div class="profile-wrapper">
                    <div class="profile-info" id="profileToggle">
                        <div class="profile-avatar"><i class="bi bi-person"></i></div>
                        <div class="profile-text">
                            <div class="name"><?= $nama_kaprodi ?></div>
                            <div class="role">Ketua Program Studi</div>
                        </div>
                        <i class="bi bi-chevron-down ms-2 text-muted chevron-icon"></i>
                    </div>
                    <div class="profile-dropdown" id="profileDropdown">
                        <div class="dropdown-header">Akun Saya</div>
                        <a href="javascript:void(0)" id="btnProfil"><i class="bi bi-person me-2"></i>Profil</a>
                        <div class="dropdown-divider my-1"></div>
                        <a href="javascript:void(0)" class="text-danger" id="btnKeluar"><i class="bi bi-box-arrow-right me-2"></i>Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="table-card">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <h4 class="mb-0 fw-bold page-title">Data Monitoring Mahasiswa Magang</h4>
                <div class="filter-section">
                    <select class="form-select form-select-sm filter-select">
                        <option value="">Semua Angkatan</option>
                        <option value="2022">Angkatan 2022</option>
                        <option value="2023" selected>Angkatan 2023</option>
                    </select>
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control" placeholder="Cari nama atau NIM...">
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th class="py-3 px-4">Nama Mahasiswa</th>
                            <th class="py-3">Tempat Magang</th>
                            <th class="py-3">Dosen Pembimbing</th>
                            <th class="py-3 col-progress">Progress Magang</th>
                            <th class="py-3 text-center">Status</th>
                            <th class="py-3 px-4 text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-3">
                                <div class="fw-semibold text-dark">Ahmad Fauzi</div>
                                <div class="text-muted sub-text">10123001</div>
                            </td>
                            <td class="py-3 text-muted">PT TechCorp Solutions</td>
                            <td class="py-3"><div class="text-dark dosen-name">Dr. Ir. Suyanto, M.T.</div></td>
                            <td class="py-3">
                                <div class="d-flex justify-content-between align-items-center mb-1 progress-info">
                                    <span class="progress-percent">45%</span>
                                    <span class="progress-week">Minggu 12</span>
                                </div>
                                <div class="progress-bar-container"><div class="progress-bar-fill" style="width:45%;"></div></div>
                            </td>
                            <td class="py-3 text-center"><span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill">Aktif</span></td>
                            <td class="px-4 py-3 text-end"><button class="btn btn-sm btn-light text-purple" title="Lihat Detail" onclick="alert('Menampilkan detail mahasiswa...')"><i class="bi bi-eye"></i></button></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">
                                <div class="fw-semibold text-dark">Rina Melati</div>
                                <div class="text-muted sub-text">10123045</div>
                            </td>
                            <td class="py-3 text-muted">Bank Central Asia (BCA)</td>
                            <td class="py-3"><div class="text-dark dosen-name">Dr. Ir. Suyanto, M.T.</div></td>
                            <td class="py-3">
                                <div class="d-flex justify-content-between align-items-center mb-1 progress-info">
                                    <span class="progress-percent">80%</span>
                                    <span class="progress-week">Minggu 20</span>
                                </div>
                                <div class="progress-bar-container"><div class="progress-bar-fill" style="width:80%;"></div></div>
                            </td>
                            <td class="py-3 text-center"><span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill">Aktif</span></td>
                            <td class="px-4 py-3 text-end"><button class="btn btn-sm btn-light text-purple" title="Lihat Detail" onclick="alert('Menampilkan detail mahasiswa...')"><i class="bi bi-eye"></i></button></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">
                                <div class="fw-semibold text-dark">Siti Nurhaliza</div>
                                <div class="text-muted sub-text">10123088</div>
                            </td>
                            <td class="py-3 text-muted">PT Gudang Garam Tbk</td>
                            <td class="py-3"><div class="text-dark dosen-name">Prof. Dr. Hendra, M.Si.</div></td>
                            <td class="py-3">
                                <div class="d-flex justify-content-between align-items-center mb-1 progress-info">
                                    <span class="progress-percent warning">15%</span>
                                    <span class="progress-week">Minggu 4</span>
                                </div>
                                <div class="progress-bar-container"><div class="progress-bar-fill" style="width:15%;background-color:#ea580c;"></div></div>
                            </td>
                            <td class="py-3 text-center"><span class="badge bg-warning-subtle text-warning border border-warning-subtle px-3 py-1 rounded-pill">Tertinggal</span></td>
                            <td class="px-4 py-3 text-end"><button class="btn btn-sm btn-light text-purple" title="Lihat Detail" onclick="alert('Menampilkan detail mahasiswa...')"><i class="bi bi-eye"></i></button></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">
                                <div class="fw-semibold text-dark">Budi Santoso</div>
                                <div class="text-muted sub-text">10123022</div>
                            </td>
                            <td class="py-3 text-muted">Telkom Indonesia</td>
                            <td class="py-3"><div class="text-dark dosen-name">Dr. Ir. Suyanto, M.T.</div></td>
                            <td class="py-3">
                                <div class="d-flex justify-content-between align-items-center mb-1 progress-info">
                                    <span class="progress-percent success">100%</span>
                                    <span class="progress-week">Selesai</span>
                                </div>
                                <div class="progress-bar-container"><div class="progress-bar-fill bg-success" style="width:100%;"></div></div>
                            </td>
                            <td class="py-3 text-center"><span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill">Selesai Magang</span></td>
                            <td class="px-4 py-3 text-end"><button class="btn btn-sm btn-light text-purple" title="Lihat Detail" onclick="alert('Menampilkan detail mahasiswa...')"><i class="bi bi-eye"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3 text-muted pagination-footer">
                <span>Menampilkan 1 hingga 4 dari 156 data</span>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">Sebelumnya</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">Selanjutnya</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- LOGOUT MODAL -->
    <div class="modal-overlay" id="logoutModal">
        <div class="modal-box">
            <div class="modal-icon"><i class="bi bi-box-arrow-right"></i></div>
            <h5>Keluar dari Akun?</h5>
            <p>Apakah Anda yakin ingin keluar dari sistem?</p>
            <div class="modal-actions">
                <button class="btn-cancel" id="btnBatal">Batal</button>
                <a href="../index.php" class="modal-logout-link"><button class="btn-logout">Ya, Keluar</button></a>
            </div>
        </div>
    </div>

    <!-- PROFILE MODAL -->
    <div class="modal-overlay" id="profileModal">
        <div class="profile-modal-box">
            <div class="profile-modal-header">
                <h5>Info Profil</h5>
                <button class="profile-modal-close" id="btnTutupProfil">&times;</button>
            </div>
            <div class="profile-modal-avatar"><i class="bi bi-person"></i></div>
            <div class="profile-modal-name"><?= $nama_kaprodi ?></div>
            <div class="profile-modal-role">Ketua Program Studi</div>
            <div class="profile-detail">
                <div class="profile-detail-icon"><i class="bi bi-envelope"></i></div>
                <div>
                    <div class="profile-detail-label">Surel</div>
                    <div class="profile-detail-value">budisusanto@univ.ac.id</div>
                </div>
            </div>
            <div class="profile-detail">
                <div class="profile-detail-icon"><i class="bi bi-telephone"></i></div>
                <div>
                    <div class="profile-detail-label">No. Telepon</div>
                    <div class="profile-detail-value">+62 811-2233-4455</div>
                </div>
            </div>
            <div class="profile-detail">
                <div class="profile-detail-icon"><i class="bi bi-building"></i></div>
                <div>
                    <div class="profile-detail-label">NIP</div>
                    <div class="profile-detail-value"><?= $nip ?></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/kaprodi.js"></script>
</body>
</html>
