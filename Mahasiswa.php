<?php
class Mahasiswa
{
    // properties
    public $nim;
    public $nama;
    public $programStudi;

    // method set data
    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }

    // method get data
    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi
        ];
    }

    // method baru untuk menampilkan data
    function tampilData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Program Studi : " . $this->programStudi . "<br><br>";
    }
}
?>