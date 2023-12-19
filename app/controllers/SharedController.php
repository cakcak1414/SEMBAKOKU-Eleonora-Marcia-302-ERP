<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * pembelian_id_barang_option_list Model Action
     * @return array
     */
	function pembelian_id_barang_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_barang AS value,nama_barang AS label FROM barang";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pembelian_id_pemasok_option_list Model Action
     * @return array
     */
	function pembelian_id_pemasok_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_pemasok AS value,nama_pemasok AS label FROM pemasok";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pembelian_harga_beli_option_list Model Action
     * @return array
     */
	function pembelian_harga_beli_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_barang AS value,harga_beli AS label FROM barang";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * penjualan_id_pelanggan_option_list Model Action
     * @return array
     */
	function penjualan_id_pelanggan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_pelanggan AS value,nama_pelanggan AS label FROM pelanggan";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * penjualan_id_barang_option_list Model Action
     * @return array
     */
	function penjualan_id_barang_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_barang AS value,nama_barang AS label FROM barang";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * penjualan_harga_jual_option_list Model Action
     * @return array
     */
	function penjualan_harga_jual_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_barang AS value,harga_jual AS label FROM barang";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

}
