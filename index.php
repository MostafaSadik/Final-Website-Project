<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Services</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <?php
    $link = mysqli_connect('localhost', 'root', '', 'services_fee');

    $sql = "SELECT * FROM services";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Service Name</th>';
        echo '<th>Description</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $row['service_id'] . '</td>';
            echo '<td>' . $row['service_name'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'No services available.';
    }

    mysqli_close($link);
    ?>

</body>
</html>
