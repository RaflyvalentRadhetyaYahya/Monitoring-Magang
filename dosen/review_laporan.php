<?php
$page = "review_laporan";
$nama_dosen = "Dr. Ir. Suyanto, M.T.";
$nip = "197508232005011002";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Laporan Akhir - SIMMAG</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/dosen.css">
    <link rel="stylesheet" href="assets/css/review.css">
</head>
<body>

    <!-- Top Navigation -->
    <div class="top-navbar">
        <div class="navbar-brand">
            <img src="../admin/assets/logo.png" alt="SIMMAG" style="height:35px;" onerror="this.src='https://ui-avatars.com/api/?name=S+M&background=2563eb&color=fff&rounded=true&font-size=0.5'">
        </div>
        
        <div class="nav-center">
            <a href="dashboard.php" class="<?= ($page == 'dashboard') ? 'active' : '' ?>">Beranda</a>
            <a href="mahasiswa_bimbingan.php" class="<?= ($page == 'mahasiswa_bimbingan') ? 'active' : '' ?>">Mahasiswa Bimbingan</a>
            <a href="review_logbook.php" class="<?= ($page == 'review_logbook') ? 'active' : '' ?>">Review Logbook</a>
            <a href="review_laporan.php" class="<?= ($page == 'review_laporan') ? 'active' : '' ?>">Review Laporan</a>
        </div>
        
        <div class="nav-right">
            <div class="profile-section">
                <div class="profile-wrapper">
                    <div class="profile-info" id="profileToggle" style="cursor:pointer;">
                        <div class="profile-avatar">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="profile-text">
                            <div class="name"><?= $nama_dosen ?? "Dr. Ir. Suyanto, M.T." ?></div>
                            <div class="role">Dosen Pembimbing</div>
                        </div>
                        <i class="bi bi-chevron-down ms-2 text-muted" style="font-size: 12px;"></i>
                    </div>

                    <div class="profile-dropdown" id="profileDropdown">
                        <div class="dropdown-header">Akun Saya</div>
                        <a href="#" id="btnProfil"><i class="bi bi-person me-2"></i>Profil</a>
                        <div class="dropdown-divider my-1"></div>
                        <a href="../index.php" class="text-danger" id="btnKeluar"><i class="bi bi-box-arrow-right me-2"></i>Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-container">
        
        <div class="table-card">
            <h4 class="mb-3 fw-bold" style="color: #1e293b;">Penilaian Laporan Akhir Magang</h4>
            
            <div class="filter-pills">
                <div class="filter-pill active">Perlu Penilaian (3)</div>
                <div class="filter-pill">Sudah Dinilai (12)</div>
                <div class="filter-pill">Revisi Laporan (1)</div>
            </div>
            
            <div class="table-responsive mt-3">
                <table class="table table-hover align-middle">
                    <thead style="background-color: #f8fafc; color: #64748b; font-size: 13px; text-transform: uppercase;">
                        <tr>
                            <th class="py-3 px-4 rounded-start" style="font-weight: 600;">Mahasiswa</th>
                            <th class="py-3" style="font-weight: 600;">Tanggal Submit</th>
                            <th class="py-3" style="font-weight: 600;">Judul Laporan</th>
                            <th class="py-3" style="font-weight: 600;">File</th>
                            <th class="py-3 px-4 rounded-end text-end" style="font-weight: 600;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="fw-semibold text-dark">Ahmad Fauzi</div>
                                <div class="text-muted" style="font-size: 12px;">10123001</div>
                            </td>
                            <td class="py-3">
                                <div class="text-dark" style="font-size: 14px;">20 Mei 2026</div>
                                <div class="text-muted" style="font-size: 12px;">14:30 WIB</div>
                            </td>
                            <td class="py-3">
                                <div class="text-dark fw-medium" style="font-size: 14px;">Implementasi Dashboard Analytics Menggunakan React dan Node.js</div>
                            </td>
                            <td class="py-3">
                                <a href="javascript:void(0)" class="btn btn-sm btn-light text-primary border" onclick="alert('Mengunduh file...')"><i class="bi bi-file-earmark-pdf me-2"></i>Unduh</a>
                            </td>
                            <td class="px-4 py-3 text-end">
                                <button class="btn btn-sm btn-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#modalNilai">Nilai Laporan</button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="fw-semibold text-dark">Budi Santoso</div>
                                <div class="text-muted" style="font-size: 12px;">10123022</div>
                            </td>
                            <td class="py-3">
                                <div class="text-dark" style="font-size: 14px;">19 Mei 2026</div>
                                <div class="text-muted" style="font-size: 12px;">09:15 WIB</div>
                            </td>
                            <td class="py-3">
                                <div class="text-dark fw-medium" style="font-size: 14px;">Analisis Performa Jaringan Fiber Optik Regional Bandung</div>
                            </td>
                            <td class="py-3">
                                <a href="javascript:void(0)" class="btn btn-sm btn-light text-primary border" onclick="alert('Mengunduh file...')"><i class="bi bi-file-earmark-pdf me-2"></i>Unduh</a>
                            </td>
                            <td class="px-4 py-3 text-end">
                                <button class="btn btn-sm btn-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#modalNilai">Nilai Laporan</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal Penilaian Laporan -->
    <div class="modal fade" id="modalNilai" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: 16px;">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold" style="color: #1e293b;">Beri Nilai Laporan Akhir</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px; font-size: 18px; font-weight: 600;">AF</div>
                        <div>
                            <h6 class="mb-0 fw-bold">Ahmad Fauzi</h6>
                            <div class="text-muted" style="font-size: 13px;">10123001 • PT TechCorp Solutions</div>
                        </div>
                    </div>
                    
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-semibold" style="color: #475569; font-size: 13px;">Nilai Kinerja / Laporan (0-100)</label>
                            <input type="number" class="form-control form-control-lg fw-bold text-primary" style="border-radius: 8px; font-size: 24px;" min="0" max="100" placeholder="0">
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-semibold" style="color: #475569; font-size: 13px;">Ulasan / Evaluasi (Akan dikirim ke Mahasiswa)</label>
                            <textarea class="form-control" rows="4" style="border-radius: 8px; resize: none;" placeholder="Tuliskan ulasan mengenai kinerja dan kualitas laporan akhir mahasiswa..."></textarea>
                        </div>
                        
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-danger w-50 fw-semibold" data-bs-dismiss="modal" style="border-radius: 8px;" onclick="alert('Minta revisi laporan')">Minta Revisi</button>
                            <button type="button" class="btn btn-primary w-50 fw-semibold" data-bs-dismiss="modal" style="border-radius: 8px;" onclick="alert('Nilai berhasil disimpan')">Simpan Nilai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGOUT MODAL -->
    <div class="modal-overlay" id="logoutModal">
        <div class="modal-box">
            <div class="modal-icon">
                <i class="bi bi-box-arrow-right"></i>
            </div>
            <h5>Keluar dari Akun?</h5>
            <p>Apakah Anda yakin ingin keluar dari sistem?</p>
            <div class="modal-actions">
                <button class="btn-cancel" id="btnBatal">Batal</button>
                <a href="../index.php" style="flex:1;text-decoration:none;"><button class="btn-logout" style="width:100%;">Ya, Keluar</button></a>
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
            <div class="profile-modal-avatar">
                <i class="bi bi-person"></i>
            </div>
            <div class="profile-modal-name"><?= $nama_dosen ?? "Dr. Ir. Suyanto, M.T." ?></div>
            <div class="profile-modal-role">Dosen Pembimbing</div>

            <div class="profile-detail">
                <div class="profile-detail-icon"><i class="bi bi-envelope"></i></div>
                <div>
                    <div class="profile-detail-label">Surel</div>
                    <div class="profile-detail-value">suyanto@univ.ac.id</div>
                </div>
            </div>
            <div class="profile-detail">
                <div class="profile-detail-icon"><i class="bi bi-telephone"></i></div>
                <div>
                    <div class="profile-detail-label">No. Telepon</div>
                    <div class="profile-detail-value">+62 812-3456-7890</div>
                </div>
            </div>
            <div class="profile-detail">
                <div class="profile-detail-icon"><i class="bi bi-building"></i></div>
                <div>
                    <div class="profile-detail-label">NIP</div>
                    <div class="profile-detail-value"><?= $nip ?? "197508232005011002" ?></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/dosen.js"></script>
</body>
</html>
