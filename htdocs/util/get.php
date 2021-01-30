<?php
include_once 'dbh.php';

$sql = 'SELECT number,color,message FROM posts';
$result = mysqli_query($conn, $sql);
$template = file('post_template.html');

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tmp1 = str_replace('{NUM}', $row['number'], $template);
        $tmp2 = str_replace('{CLR}', $row['color'], $tmp1);
        $tmp3 = str_replace('{MSG}', $row['message'], $tmp2);
        echo $tmp3[1];
    }
} else {
    echo 'No posts.';
}