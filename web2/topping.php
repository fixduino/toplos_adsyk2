<?php
class Topping extends DBConnect {
    protected $id;
    protected $time;
    protected $ref;
    protected $qty_req;
    protected $tank_asal;

    public function __construct(){
        parent::connect();
    }
    public function setTopping() {

    }
    public function getAll(){
        $sth = $this->DBH->prepare('SELECT tb_topp.*, tb_ref.kode AS kode FROM tb_topp
        INNER JOIN tb_ref ON tb_topp.ref = tb_ref.id
         GROUP BY tb_topp.id');
        $sth->execute();

        $data = $sth->fetchAll();
        return $data;
    }
    public function get4(){
        $sth = $this->DBH->prepare('SELECT id,time,ref,qty_req,tank_asal FROM tb_topp ORDER BY id DESC');
        $sth->execute();

        $data = $sth->fetchAll();
        return $data;
    }
    public function get($id) {
        $sth = $this->DBH->prepare('SELECT id,time,ref,qty_req,tank_asal Form tb_topp');
        $sth->execute(array($id));

        $data = $sth->fetchAll();
        return $data;
    }
}