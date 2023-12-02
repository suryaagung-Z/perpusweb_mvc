<?php
class PeminjamanModel
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPeminjamanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPeminjaman($data)
    {
        $query = "INSERT INTO peminjaman (nama, judul, tanggalpinjam, tanggalkembali, status, jumlah, kelas) VALUES (:nama, :judul, :tanggalpinjam, :tanggalkembali, :status, :jumlah, :kelas)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('kelas', $data['kelas']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cetakPeminjaman()
    {
        $query = "SELECT nama, judul, tanggalpinjam, tanggalkembali, status, jumlah, kelas FROM peminjaman";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function cetakLaporanByDate($year, $month, $day)
    {
        // Sesuaikan kondisi sesuai kebutuhan
        $query = "SELECT * FROM peminjaman 
                  WHERE (YEAR(tanggalpinjam) = :tahun AND MONTH(tanggalpinjam) = :bulan AND DAY(tanggalpinjam) = :tanggal)
                  OR (YEAR(tanggalkembali) = :tahun AND MONTH(tanggalkembali) = :bulan AND DAY(tanggalkembali) = :tanggal)";

        // Bind parameter ke dalam query
        $this->db->query($query);
        $this->db->bind(':tahun', $year);
        $this->db->bind(':bulan', $month);
        $this->db->bind(':tanggal', $day);

        return $this->db->resultSet();
    }


    public function updatePeminjaman($data)
    {
        $query = "UPDATE peminjaman SET nama=:nama, judul=:judul, tanggalpinjam=:tanggalpinjam, tanggalkembali=:tanggalkembali, status=:status, jumlah=:jumlah, kelas=:kelas WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function deletePeminjaman($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariPeminjaman()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
