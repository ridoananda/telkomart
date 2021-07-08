<?php

$db = mysqli_connect("localhost", "root", "", "telkomart");


function query($query)
{
  global $db;
  $result = mysqli_query($db, $query);
  $results = [];
  while ($row = mysqli_fetch_array($result)) {
    $results[] = $row;
  }
  return $results;
}

function cari_barang($nama_barang)
{
  global $db;
  $query = "SELECT * FROM barang WHERE nama_barang LIKE '%{$nama_barang}%'";
  $result = query($query);
  return $result;
}

function cari_detail_barang($nama_barang)
{
  global $db;
  // var_dump($nama_barang);
  $query = "SELECT * FROM barang WHERE nama_barang = '{$nama_barang}'";
  $result = mysqli_query($db, $query);
  $results = mysqli_fetch_assoc($result);
  return $results;
}

function tambah_pesanan($data)
{
  global $db;
  $query = "INSERT INTO pesanan VALUES('', '{$data['barang_id']}', '{$data['jumlah_barang']}', '{$data['total_harga']}', '0', '0')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function ubah_pesanan($data, $id)
{
  global $db;
  // var_dump($data);
  $query = "UPDATE pesanan SET barang_id = '{$data['barang_id']}',jumlah_barang = '{$data['jumlah_barang']}', total_harga = '{$data['total_harga']}', '0', '0' WHERE id = '{$id}'";
  return mysqli_query($db, $query);
}

function get_pesanan($id)
{
  global $db;
  $result = mysqli_query($db, "SELECT * FROM pesanan WHERE id = '{$id}'");
  return mysqli_fetch_assoc($result);
}

function get_barang_by_pesanan($id)
{
  global $db;
  $result = mysqli_query($db, "SELECT * FROM barang WHERE id_barang = '{$id}'");
  return mysqli_fetch_assoc($result);
}

function ubah_pesanan_after_dibayar($data)
{
  global $db;
  $pembayaran = query('SELECT * FROM pembayaran ORDER BY id DESC')[0];
  $query = "UPDATE pesanan SET is_dibayar = 1,pembayaran_id = '{$pembayaran['id']}' WHERE is_dibayar = 0";
  return mysqli_query($db, $query);
}
function add_pembayaran($data)
{
  global $db;
  $uang_kembali = $data['bayar'] - $data['total_harga'];
  $query = "INSERT INTO pembayaran VALUES('', '{$data['total_harga']}', '{$data['bayar']}', '{$uang_kembali}')";
  return mysqli_query($db, $query);
}
