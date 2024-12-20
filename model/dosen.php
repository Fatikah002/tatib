<?php
require_once 'controller/connection.php';

class dosen {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllDosen() {
        $query = "SELECT * FROM dosen";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDosenById($id) {
        $query = "SELECT * FROM dosen WHERE id_dosen = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getDashboard(){
        $query = "SELECT TOP 5 dp.*, m.nim, m.nama_mahasiswa, m.kelas
                 FROM datapelanggaran dp
                 INNER JOIN mahasiswa m ON dp.id_mahasiswa = m.id_mahasiswa
                 LEFT JOIN komdis_pelanggaran kp ON dp.id_pelanggaran = kp.id_pelanggaran
                 LEFT JOIN tebusan t ON dp.id_pelanggaran = t.id_pelanggaran
                 ORDER BY dp.id_pelanggaran DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPelanggaranTingkat1() {
        $query = "SELECT dp.*, m.nim, m.nama_mahasiswa, dp.deskripsi_pelanggaran
                 FROM datapelanggaran dp
                 INNER JOIN mahasiswa m ON dp.id_mahasiswa = m.id_mahasiswa
                 WHERE dp.tingkat_pelanggaran = '1'
                 ORDER BY dp.id_pelanggaran DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>