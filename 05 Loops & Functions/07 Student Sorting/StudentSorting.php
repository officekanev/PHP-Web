<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        var idCounter = 0;
        var parent = document.getElementById("table-tbody");
        function addPerson() {
            var myNewRow = document.createElement("tr");
            myNewRow.setAttribute("id", "row" + idCounter);
            myNewRow.innerHTML = '<td><input type="text" name="firstNames[]" class="text-boxes" required/></td>' +
                '<td><input type="text" name="secondNames[]" class="text-boxes" required/></td>' +
                '<td><input type="email" name="emails[]" class="text-boxes" required/></td>' +
                '<td><input type="number" name="scores[]" class="text-boxes" min="0" max="400" required/>'
                + '<input type="button" name="removePerson" class="add-remove-buttons" value="-" onclick="removeButton(' +
                "row" + idCounter +')"/>' +
                '</td>';
            document.getElementById("parent-tbody-table").appendChild(myNewRow);
            idCounter++;
        }
        function removeButton(rowId) {
            $(document).ready(function() {
                $(rowId).remove();
            });
        }
    </script>
    <style>
        thead {
            border: 1px solid black;
        }

        thead tr th {
            width: 260px;
            text-align: center;
            border: 1px solid black;
            padding: 5px 0 5px 0;
        }

        #remove  #add {
            background-color: darkblue;
            width: 40px; height: 30px;
            margin: 0;
            color: white;
            padding: 0;
            font-size: 20px
        }

    </style>
</head>
<body>
<form method="get">
<table  border="1">
    <thead>
    <tr>
        <th class="thed">First name:</th>
        <th class="thed">Second name:</th>
        <th class="thed">Email:</th>
        <th class="thed">Exam score:</th></tr>
    </thead>
    <tbody id="table-tbody">
<!--    <input type="button" id="remove" name="remove" value="-" style="background-color: darkblue; width: 40px; height: 30px; margin: 0; color: white; padding: 0; font-size: 20px"/>-->
    </tbody>
</table>
    <script>addPerson()</script>

    <input type="button" id="add" name="addNewPerson" value="+" class="new-person" onclick="addPerson()"
    style="background-color: darkblue; width: 40px; height: 30px; margin: 0; color: white; padding: 0; font-size: 20px"/>

    <strong>Sort by</strong>:&nbsp&nbsp
    <select name="sortBy" id="dropDown">
        <option value="examscore" selected>Exam score</option>
        <option value="firstname">First name</option>
        <option value="lastname">Last name</option>
        <option value="email">Email</option>
    </select>
    <strong>Order</strong>:&nbsp&nbsp
    <select name="orderby" id="orderby">
        <option value="descending" selected>Descending</option>
        <option value="ascending">Ascending</option>
    </select>
    <input type="button" name="submit" value="SUBMIT" style="background-color: darkblue; width: 120px; height: 30px; margin: 0; color: white; padding: 0 20px 0 20px; font-size: 20px">
</form>


<?php
if (isset($_GET['submit'])) {
//    $input = htmlentities($_GET['cars']);
//
//    //$input = 'Mitsubishi, Maseratti, Mayback';
//    $carsModel = explode(', ', $input);
//
//    echo "<table style='border: 1px solid black'>";
//    echo "    <th style='border: 1px solid black'><strong>Car</strong></th><br>";
//    echo "    <th style='border: 1px solid black'><strong>Color</strong></th><br>";
//    echo "    <th style='border: 1px solid black'><strong>Count</strong></th><br>";
//
//    function generateRandomColor() {
//        $colors = array('red', 'blue', 'yellow', 'pink', 'sky', 'blue', 'black', 'white', 'cyan', 'orange');
//        $charactersLength = count($colors);
//        $randomString = '';
//        $randomString .= $colors[rand(0, $charactersLength - 1)];
//        return $randomString;
//    }
//
//    function generateRandomAmount() {
//        $amountt = array('1', '2', '3', '4', '5');
//        $charactersLength = count($amountt);
//        $randomString = '';
//        $randomString .= $amountt[rand(0, $charactersLength - 1)];
//        return $randomString;
//    }
//
//    for ($x = 0; $x < count($carsModel); $x++) {
//        $color = generateRandomColor();
//        $amountt = generateRandomAmount();
//
//        echo "    <tr><td style='border: 1px solid black'>$carsModel[$x]</td><td style='border: 1px solid black'>$color</td><td style='border: 1px solid black'>$amountt</td></tr>" . "<br>";
//    }
//    echo "</table>";

}
?>
</body>
</html>