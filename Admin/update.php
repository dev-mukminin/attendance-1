<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "root", "", "attendance");

$id = $_POST['id'];
$jabatan = $_POST['jabatan'];
$bidang = $_POST['bidang'];
$nama = $_POST['nama'];
$status = $_POST['status'];
$alasan = $_POST['alasan'];

// Handle upload file jika ada
$foto = '';
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto']['tmp_name'];
    $filename = basename($_FILES['foto']['name']);
    move_uploaded_file($tmp_name, "../public/img/" . $filename);
    $foto = $filename;
}

// Update ke database
$sql = "UPDATE dekanat SET 
    jabatan = ?, 
    bidang = ?, 
    nama = ?, 
    status = ?, 
    alasan = ?" . ($foto ? ", foto = ?" : "") . " 
    WHERE id = ?";

$stmt = $conn->prepare($sql);

if ($foto) {
    $stmt->bind_param("ssssssi", $jabatan, $bidang, $nama, $status, $alasan, $foto, $id);
} else {
    $stmt->bind_param("sssssi", $jabatan, $bidang, $nama, $status, $alasan, $id);
}

if ($stmt->execute()) {
    echo json_encode(["message" => "Data berhasil diperbarui."]);
} else {
    echo json_encode(["message" => "Gagal memperbarui data."]);
}

$stmt->close();
$conn->close();
