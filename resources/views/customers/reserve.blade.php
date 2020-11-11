<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Reservation Form</title>

    <link href="/css/reservation.css" rel="stylesheet">
</head>
<body>
    <div class="selectedslot">
        
    </div>
    <div class="formcontainer">
        <h2>Reserve parking area</h2>

        <form action="/confirmation" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label for="cname">Name</label></td>
                    <td><input type="text" name="cname" id="cname"/></td>
                </tr>

                <tr>
                    <td><label for="cnic">NIC Number</label></td>
                    <td><input type="text" name="cnic" id="cnic"/></td>
                </tr>

                <tr>
                    <td><label for="cemail">Email</label></td>
                    <td><input type="email" name="cemail" id="cemail"/></td>
                </tr>

                <tr>
                    <td><label for="cmobile">Mobile Number</label></td>
                    <td><input type="text" name="cmobile" id="cmobile"/></td>
                </tr>

                <tr>
                    <td><label for="carno">Car Number</label></td>
                    <td><input type="text" name="carno" id="carno"/></td>
                </tr>

                <tr>
                    <td><label for="carbrand">Car Brand</label></td>
                    <td><input type="text" name="carbrand" id="carbrand"/> </td>
                </tr>
            </table>
            <input type="submit" value="Submit Form" class="submitbtn">
        </form>
    </div>
</body>
</html>