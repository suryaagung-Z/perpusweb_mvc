<?php
class PengembalianModel {
    private $table = 'pengembalian';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPengembalian() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPengembalianById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPengembalian($data) {
        $query = "INSERT INTO pengembalian (nama, judul, tanggalpinjam, tanggalkembali, status, kembali, jumlah) VALUES (:nama, :judul, :tanggalpinjam, :tanggalkembali, :status, :kembali, :jumlah)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('kembali', $data['kembali']);
        $this->db->bind('jumlah', $data['jumlah']);
       
       
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cetakPengembalian() {
        $query = "SELECT nama, judul, tanggalpinjam, tanggalkembali, status, kembali, jumlah FROM pengembalian";
        $this->db->query($query);
    
        return $this->db->resultSet();
    }

    public function updatePengembalian($data) {
        $query = "UPDATE pengembalian SET nama=:nama, judul=:judul, tanggalpinjam=:tanggalpinjam, tanggalkembali=:tanggalkembali, status=:status, jumlah=:jumlah, kembali=:kembali WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']); 
        $this->db->bind('status', $data['status']); 
        $this->db->bind('jumlah', $data['jumlah']); 
        $this->db->bind('kembali', $data['kembali']); 
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    

    public function deletePengembalian($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariPengembalian() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE tanggalpinjam LIKE :key OR tanggalkembali LIKE :key OR nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}