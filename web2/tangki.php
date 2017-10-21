<?php
class Tangki extends DBConnect {
    protected $tank_id;
    protected $tank;
    protected $level;
    protected $max_level;
    protected $pa;
    protected $max_pa;
    protected $status;

    public function __construct(){
        parent::connect();
    }

    public function setTank($tank){
        $this->tank = $tank;
    }
    public function setMaxLevel($max_level){
        $this->max_level = $max_level;
    }
    public function setPa($pa){
        $this->pa = $pa;
    }


    public function getAll(){
        // $sth = $this->DBH->prepare('SELECT id,tank,level,max_level,pa,max_pa,status,time,deadstok,sisipan FROM tb_tank');
        $sth = $this->DBH->prepare('SELECT tb_tank.*, tb_act.act AS statusnya FROM tb_tank
INNER JOIN tb_act ON tb_tank.status = tb_act.id
 GROUP BY tb_tank.id ');
        $sth->execute();

        $data = $sth->fetchAll();
        return $data;
    }
    public function get($tank_id){
        $sth = $this->DBH->prepare('SELECT id,tank,level,max_level,pa,max_pa,status,time,deadstok,sisipan FROM tb_tank WHERE id = ?');
        $sth->execute(array($tank_id));

        $data = $sth->fetchAll();
        return $data;
    }
    public function insert() {
        $sth = $this->DBH->prepare('INSERT INTO tb_tank ( id,tank,level,max_level,pa,max_pa,status,time,deadstok,sisipan) VALUES (?,?,?,?,?,?,?,NOW(),?,?)');
        $sth->execute(array($this->first_name, $this->last_name, $this->email, $this->active));
    }

    public function update() {
        $sth = $this->DBH->prepare('UPDATE tb_tank SET id = ?,tank = ?,level = ?,max_level = ?,pa = ?,max_pa = ?,status = ?,time = Now(),deadstok = ?,sisipan = ? WHERE tank_id = ?');
        $sth->execute(array($this->id, $this->tank, $this->level, $this->max_level, $this->pa, $this->max_pa, $this->status, $this->time, $this->deadstok, $this->sisipan));
    }

    public function delete() {
        $sth = $this->DBH->prepare('DELETE FROM tb_tank WHERE $tank_id = ?');
        $sth->execute(array($this->tank_id));
    }
}