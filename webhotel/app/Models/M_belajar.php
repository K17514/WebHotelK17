<?php

namespace App\Models;
use CodeIgniter\Model;

class M_belajar extends Model
{
	// public function tampil($table){
	// 	return $this->db->table($table)
	// 					->get()
	// 					->getResult();
	// }
	public function tampil($table, $orderBy) {
    return $this->db->table($table)
                    ->orderby($orderBy, 'desc')
                    ->get()
                    ->getResult();
}
	public function join($table, $table2, $on, $orderBy){
		return $this->db->table($table)
						->orderby($orderBy, 'desc')
						->join($table2,$on)
						->get()
						->getResult();
	}
	public function join5($table, $table2, $table3, $table4, $table5, $on1, $on2, $on3, $on4,$orderBy) {
    return $this->db->table($table)
    				->orderby($orderBy, 'desc')
                    ->join($table2, $on1)
                    ->join($table3, $on2)
                    ->join($table4, $on3)
                    ->join($table5, $on4)
                    ->get()
                    ->getResult();
}
public function filterpesan($table, $table2, $table3, $table4, $table5, $on1, $on2, $on3, $on4,$orderBy,$filter) {
    return $this->db->table($table)
    				->orderby($orderBy, 'desc')
                    ->join($table2, $on1)
                    ->join($table3, $on2)
                    ->join($table4, $on3)
                    ->join($table5, $on4)
                    ->where($filter)
                    ->get()
                    ->getResult();
}
public function join3($table, $table2, $table3, $on1, $on2, $orderBy) {
    return $this->db->table($table)
    				->orderby($orderBy, 'desc')
                    ->join($table2, $on1)
                    ->join($table3, $on2)
                    ->get()
                    ->getResult();
}
public function join32($table1, $table2, $table3, $on1, $on2, $where = [])
{
    return $this->db->table($table1)
                    ->join($table2, $on1)
                    ->join($table3, $on2)
                    ->where($where) // Apply filtering
                    ->get()
                    ->getResult();
}
	public function filter($table, $table2, $on, $filter,$filter2,$awal,$akhir,$orderBy){
		return $this->db->table($table)
						->join($table2,$on)
						->where($filter, $awal)
						->where($filter2,$akhir)
						->orderby($orderBy, 'desc')
						->get()
						->getResult();
	}
	public function filternota($table, $filter, $filter2, $awal, $akhir, $orderBy)
{
    return $this->db->table($table)
                    ->where($filter, $awal)
                    ->where($filter2, $akhir)
                    ->orderBy($orderBy, 'desc')
                    ->get()
                    ->getResult();
}
public function filterpesanan($table1, $table2, $table3, $table4, $table5, $join1, $join2, $join3, $join4, $where, $a, $b)
{
    return $this->db->table($table1)
        ->select('*')
        ->join($table2, $join1)
        ->join($table3, $join2)
        ->join($table4, $join3)
        ->join($table5, $join4)
        ->where($where . ' >=', $a)
        ->where($where . ' <=', $b)
        ->get()
        ->getResult();
}
	public function joinw($table, $table2, $on, $w){
		return $this->db->table($table)
						->join($table2,$on)
						->where($w)
						->get()
						->getRow();
	}
	public function hapus($table, $where){
		return $this->db->table($table)
						->delete($where);
	}
	public function getWhere($table, $where){
		return $this->db->table($table)
						->getWhere($where)
						->getRow();
	}
	public function edit($table, $data, $where){
		return $this->db->table($table)
						->update($data, $where);
	}
	public function input($table, $data){
		return $this->db->table($table)
						->insert($data);
	}
	public function getAll($table)
    {
        return $this->db->table($table)
                        ->get()
                        ->getResult();
    }
   


	//  protected $table = 'user';
	//  protected $table2 = 'barang';
	//  protected $table3 = 'barang_keluar';
	//  protected $table4 = 'barang_masuk';
	//  protected $table5 = 'barang_rusak';
	//  protected $table6 = 'karyawan';
	// public function simpan_user($data)
	// {
	// 	$query = $this->db->table($this->table)->insert($data);
	// 	return $query;
	// }
	// public function simpan_barang($data)
	// {
	// 	$query = $this->db->table($this->table2)->insert($data);
	// 	return $query;
	// }
	// public function simpan_barangk($data)
	// {
	// 	$query = $this->db->table($this->table3)->insert($data);
	// 	return $query;
	// }
	// public function simpan_barangm($data)
	// {
	// 	$query = $this->db->table($this->table4)->insert($data);
	// 	return $query;
	// }
	// public function simpan_barangr($data)
	// {
	// 	$query = $this->db->table($this->table5)->insert($data);
	// 	return $query;
	// }
	// public function simpan_karyawan($data)
	// {
	// 	$query = $this->db->table($this->table6)->insert($data);
	// 	return $query;
	// }
}