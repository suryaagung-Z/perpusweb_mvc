<?php
class PengembalianModel
{
    private $table = 'pengembalian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function countPengembalian()
    {
        $this->db->query('SELECT COUNT(*) as total_rows FROM ' . $this->table);
        return $this->db->single();
    }

    public function getAllPengembalian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPengembalianById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPengembalian($data)
    {
        // Hitung denda dan tambahkan ke data pengembalian
        $data['denda'] = $this->hitungDenda($data['tanggalkembali']);

        $query = "INSERT INTO pengembalian (nama, judul, tanggalpinjam, tanggalkembali, kembali, jumlah, status, kelas, denda) VALUES (:nama, :judul, :tanggalpinjam, :tanggalkembali, :kembali, :jumlah, :status, :kelas, :denda)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']);
        $this->db->bind('kembali', $data['kembali']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('denda', $data['denda']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cetakPengembalian()
    {
        $query = "SELECT nama, judul, tanggalpinjam, tanggalkembali, kembali, jumlah, status, kelas, denda FROM pengembalian";
        $this->db->query($query);

        return $this->db->resultSet();
    }

 

    private function hitungDenda($tanggalKembali)
    {
        $batasPengembalian = date('Y-m-d', strtotime($tanggalKembali . ' +1 day'));

        // Jika tanggal pengembalian melewati batas, hitung denda
        if (strtotime($tanggalKembali) > strtotime($batasPengembalian)) {
            // Hitung selisih hari
            $selisihHari = floor((strtotime($tanggalKembali) - strtotime($batasPengembalian)) / (60 * 60 * 24));

            // Denda per hari (contoh: 500 per hari)
            $dendaPerHari = 500;

            // Total denda
            $totalDenda = $selisihHari * $dendaPerHari;

            return $totalDenda;
        }

        return 0; // Tidak ada denda
    }


    // Fungsi lainnya...
}
