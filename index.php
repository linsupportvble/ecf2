<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
require_once ('Class.php');
$forUser = new ForTheUser;
$forUsers = $forUser->myArray();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ECF2</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Name et First</th>
            <th scope="col">Age</th>
            <th scope="col">Adress</th>
            <th scope="col">Phone number</th>
            <th scope="col">
                <select id="listClass" onchange="myfunction()" value="Service">
                    <option value="Service" selected>Service</option>
                    <option value="123">123</option>
                    <option value="300">300</option>
                </select>
            </th>
            
            </tr>
        </thead>
        <tbody id ="Tbody">
            <?php foreach ($forUsers as $list) { ?>
            <tr>
            <th scope="row"><?php echo $list['Name'].' '.$list['Firstname'];?></th>
            <th name="date"><?php echo $list['birth_date'];?></th>
            <th name="adress"><?php echo $list['Adress'];?></th>
            <th name="number"><?php echo $list['Phone_Number'];?></th>
            <th name="service"><?php echo $list['Service'];?></th>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </table>
    <!-- <script>
        let users = [
            <?php foreach ($forUsers as $list)
            { name: "", lastName: "", date: , address: , number: , service: },
            ?>
            ];
        function myfunction(){
            var selectElmt = document.getElementById("listClass");
            var selectTbody = document.getElementById("Tbody");
            var selectServcie = document.getElementById("Service");
            var valeurSelectionnee = selectElmt.options[selectElmt.selectedIndex].value;
            var textselectionne = selectElmt.options[selectElmt.selectedIndex].text;
            var list = <?php echo json_encode($forUsers);?>;


            if (valeurSelectionnee === "123"){
                console.log(list)
                //document.getElementById("Service").innerHTML = valeurSelectionnee;
            }

            document.getElementById("Service").innerHTML = valeurSelectionnee;
        }
    </script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>