<?php
class Database {
    private $theLoai = [];
    private $baiHat = [];

    public function themTheLoai($tenTheLoai) {
        $id = count($this->theLoai) + 1;
        $this->theLoai[$id] = $tenTheLoai;
        return $id;
    }

    public function themBaiHat($tenBaiHat, $caSi, $idTheLoai) {
        $id = count($this->baiHat) + 1;
        $this->baiHat[$id] = [
            'tenBaiHat' => $tenBaiHat,
            'caSi' => $caSi,
            'idTheLoai' => $idTheLoai
        ];
        return $id;
    }

    public function xoaBaiHat($id) {
        unset($this->baiHat[$id]);
    }

    public function suaBaiHat($id, $tenBaiHat, $caSi, $idTheLoai) {
        if (isset($this->baiHat[$id])) {
            $this->baiHat[$id] = [
                'tenBaiHat' => $tenBaiHat,
                'caSi' => $caSi,
                'idTheLoai' => $idTheLoai
            ];
            return true;
        }
        return false;
    }

    public function layDanhSachBaiHat() {
        return $this->baiHat;
    }

    public function layDanhSachTheLoai() {
        return $this->theLoai;
    }
}
?>