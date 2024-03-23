<?php

function Count_total_issue_book_number($connect)
{
    $total = 0;

    $query = "SELECT COUNT(id) AS Total FROM issue";

    $result = $connect->query($query);

    foreach ($result as $row) {
        $total = $row["Total"];
    }

    return $total;
}

function Count_total_returned_book_number($connect)
{
    $total = 0;

    $query = "SELECT COUNT(id) AS Total FROM returned_books";

    $result = $connect->query($query);

    foreach ($result as $row) {
        $total = $row["Total"];
    }

    return $total;
}

function Count_total_not_returned_book_number($connect)
{
    $total = 0;

    $query = "SELECT COUNT(id) AS Total FROM issue";

    $result = $connect->query($query);

    foreach ($result as $row) {
        $total = $row["Total"];
    }

    return $total;
}

function Count_total_book_number($connect)
{
    $total = 0;

    $query = "SELECT COUNT(id) AS Total FROM books";

    $result = $connect->query($query);

    foreach ($result as $row) {
        $total = $row["Total"];
    }

    return $total;
}

function Count_total_author_number($connect)
{
    $total = 0;

    $query = "SELECT COUNT(id) AS Total FROM books";

    $result = $connect->query($query);

    foreach ($result as $row) {
        $total = $row["Total"];
    }

    return $total;
}
?>
