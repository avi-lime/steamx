<?php
include("../template/header.php");
include("../../global/api/conn.php");

if (!isset($_SESSION["super"]) || $_SESSION["super"] != 1) {
    header("location: dashboard.php");
}
?>
<div class="card">
    <h1>Admin</h1>
    <hr style="color: white;">

    <table class="table table-responsive text-center">
        <caption>List of Admins</caption>
        <?php
        // filling up the table
        $table = "admin";
        $sql = "SELECT * FROM $table ";
        $result = mysqli_query($conn, $sql);
        $output = '<tr>'
            . '<th>ID</th>'
            . '<th>Name</th>'
            . '<th>Email</th>'
            . '<th>Image</th>'
            . '<th>Action</th>'
            . '</tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<tr>'
                . '<th scope="row">' . $row['id'] . '</td>'
                . '<td>' . $row['name'] . '</td>'
                . '<td>' . $row['email'] . '</td>'
                . "<td><img style='height:200px; width:200px' class='rounded-circle' alt='img' src='../images/" . $row['image'] . "'></td>"
                . '<td>'
                . '<a class="me-2 btn-edit" role="button" id="' . $row["id"] . '" style="color: var(--white)"><i class="fa-solid fa-pen"></i></a>'
                . '<a role="button" href="api/delete.php?table=' . $table . '&id=' . $row['id'] . '" style="color: var(--white)"><i class="fa-solid fa-trash"></i></a>'
                . '</td>'
                . '</tr>';
        }
        mysqli_close($conn);
        echo $output;
        ?>
    </table>
</div>
<?php include("../../global/html/footer.html") ?>