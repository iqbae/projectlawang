<?php
include "koneksi.php";

$delete = mysqli_query($conn, " DELETE FROM spm ");

$insert = mysqli_query($conn, " INSERT INTO `spm`(`urusan`, `nm_keg`, `anggaran`, `realisasi`)
SELECT urusan, ur_prog_keg nm_keg, op_ang anggaran, op_real realisasi 
FROM `data_lra` WHERE urusan IN ('1.01', '1.02', '1.03', '1.04', '1.06') 
AND kd_prog_keg IN (SELECT kd_prog_keg FROM `kegiatan` WHERE urusan IN ('1.01', '1.02', '1.03', '1.04', '1.06'))");

$jumlah = mysqli_query($conn, " INSERT INTO spm (`urusan`, `nm_keg`, `anggaran`, `realisasi`)
VALUES ('1.01', 'Total', 0, 0),
('1.01', 'Jumlah anggaran realisasi SPM Bidang Pendidikan', 0, 0)");

$updatetotal = mysqli_query($conn, " UPDATE `spm` SET 
`anggaran`= (SELECT SUM(anggaran) FROM `spm` WHERE urusan IN ('1.01')),
`realisasi`= (SELECT SUM(realisasi) FROM `spm` WHERE urusan IN ('1.01'))
WHERE urusan IN ('1.01')  AND nm_keg = 'total'");

$updatejumlah1 = mysqli_query($conn, " UPDATE `spm` SET 
`anggaran`= (SELECT SUM(anggaran) FROM `spm` WHERE urusan IN ('1.01') AND nm_keg <> 'total'),
`realisasi`= (SELECT SUM(realisasi) FROM `spm` WHERE urusan IN ('1.01') AND nm_keg <> 'total')
WHERE urusan IN ('1.01')  AND nm_keg = 'Jumlah anggaran realisasi SPM Bidang Pendidikan'");
?>