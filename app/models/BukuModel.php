<?php
class BukuModel {
    private $table = 'buku';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllBuku() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahBuku($data) {
        $query = "INSERT INTO buku (judul, penerbit, stok, kategori, rak, inventaris, tanggal, pengarang, isbn, klasifikasi, kelas, keterangan, kota, alamat, tahunterbit, tlp) VALUES (:judul, :penerbit, :stok, :kategori, :rak, :inventaris, :tanggal, :pengarang, :isbn, :klasifikasi, :kelas, :keterangan, :kota, :alamat, :tahunterbit, :tlp)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('rak', $data['rak']);
        $this->db->bind('inventaris', $data['inventaris']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('isbn', $data['isbn']);
        $this->db->bind('klasifikasi', $data['klasifikasi']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('tahunterbit', $data['tahunterbit']);
        $this->db->bind('tlp', $data['tlp']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function updateBuku($data) {
        $query = "UPDATE buku SET judul=:judul, penerbit=:penerbit, stok=:stok, kategori=:kategori, rak=:rak, inventaris=:inventaris, tanggal=:tanggal, pengarang=:pengarang, isbn=:isbn, klasifikasi=:klasifikasi, kelas=:kelas, keterangan=:keterangan, kota-:kota, alamat=:alamat, tahunterbit=:tahunterbit, tlp=:tlp WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('rak', $data['rak']);
        $this->db->bind('inventaris', $data['inventaris']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('isbn', $data['isbn']);
        $this->db->bind('klasifikasi', $data['klasifikasi']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('tahunterbit', $data['tahunterbit']);
        $this->db->bind('tlp', $data['tlp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteBuku($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariBuku() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM $this->table WHERE judul LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
