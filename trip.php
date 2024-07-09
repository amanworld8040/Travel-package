<?php
if (isset($_POST['sub'])) {
    $con = mysqli_connect("localhost", "root", "", "college");
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $nop = $_POST['nop'];
    $date = $_POST['date'];
    $nod = $_POST['nod'];
    $sql = "INSERT INTO `tripdetails`(`trip_id`, `name`, `phone`, `email`, `address`, `country`, `nop`, `date`, `nod`) VALUES ('','$name',$phone,'$email','$address','$country','$nop','$date','$nod')";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo "<script>
            alert('Trip Booked');
        </script>";
    } else {
        echo "<script>
            alert('An unwanted error occured!!');
        </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trip.css">
    <title>Book A Trip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(travel.jpg);
            /* background-color: blue; */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 20%;
            opacity: 70%;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
  
    <form action="#" method="post" >
        <label for="name" >Name: </label><input type="text" name="name"><br>
        <label for="phone">Phone: </label><input type="number" name="phone"><br>
        <label for="email">Email: </label><input type="email" name="email"><br>
        <label for="addres">Address: </label><input type="text" name="address"><br>
        <label for="country">Country: </label>
        <select name="country" id="">
            <option value="Indonesia">Indonesia</option>
            <option value="China">China</option>
            <option value="Russia">Russia</option>
            <option value="Nepal">Nepal</option>
        </select><br>
        <label for="nop">No. of person: </label><input type="number" name="nop"><br>
        <label for="date">Date: </label><input type="date" name="date"><br>
        <label for="nod">No. of days: </label><input type="number" name="nod"><br>
        <input type="submit" name="sub">
    </form>
  
</body>

</html>