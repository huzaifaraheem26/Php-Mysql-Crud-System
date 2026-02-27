<?php
include 'DB.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    header("Location: VIEW.php?action=danger&msg=Record+Deleted");
    exit();
} else {
    echo "No ID specified for deletion.";
}
?>