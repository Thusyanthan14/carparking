<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Page</title>
    <link href="parking_style.css" rel="stylesheet" type="text/css">

</head>
<body>

    <table border="1" style="margin: auto; margin-top:60px;">
        <tr style="border-bottom:150px;">
            <td> <img src="/images/car_active.png" id="Imageclick1" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick1').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P1';"></td>
            <td> <img src="/images/car_active.png" id="Imageclick2" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick2').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P2';"></td>
            <td> <img src="/images/car_active.png" id="Imageclick3" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick3').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P3';"></td>
            <td> <img src="/images/car_active.png" id="Imageclick4" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick4').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P4';"></td>
            <td><img src="/images/car_active.png" id="Imageclick5" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick5').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P5';"></td>
            <td><img src="/images/car_active.png" id="Imageclick6" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick6').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P6';"></td>
            <td><img src="/images/car_active.png" id="Imageclick7" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick7').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P7';"></td>
            <td><img src="/images/car_active.png" id="Imageclick8" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick8').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P8';"></td>
            <td><img src="/images/car_active.png" id="Imageclick9" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick9').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P9';"></td>
            <td><img src="/images/car_active.png" id="Imageclick10" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick10').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P10';"></td>
        </tr>
        <tr>
            <td colspan=10 style="font-size: 60px;">THIS WAY TO PARKING AREA</td>
        </tr>
        <tr>
            <td><img src="/images/car_active.png" id="Imageclick11" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick11').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P11';"></td>
            <td><img src="/images/car_active.png" id="Imageclick12" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick12').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P12';"></td>
            <td><img src="/images/car_active.png" id="Imageclick13" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick13').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P13';"></td>
            <td><img src="/images/car_active.png" id="Imageclick14" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick14').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P14';"></td>
            <td><img src="/images/car_active.png" id="Imageclick15" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick15').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P15';"></td>
            <td><img src="/images/car_active.png" id="Imageclick16" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick16').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P16';"></td>
            <td><img src="/images/car_active.png" id="Imageclick17" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick17').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P17';"></td>
            <td><img src="/images/car_active.png" id="Imageclick18" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick18').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P18';"></td>
            <td><img src="/images/car_active.png" id="Imageclick19" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick19').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P19';"></td>
            <td><img src="/images/car_active.png" id="Imageclick20" style="width: 80px; height: 150px;" onclick="document.getElementById('Imageclick20').src='/images/car_deactive.png'; document.getElementById('display').value='You Selected P20';"></td>
        </tr>
    </table>
    <input type="text" id="display" style="height: 30px; font-size: 45px; border: none; text-transform: uppercase; color: rgb(41, 83, 40); margin-top: 60px; margin-left: 60px;">
    <a href="/reserve"><button type="submit" value="Submit" style="padding: 15px; font-size: 20px; float: right; margin-right: 60px; margin-top:60px;background-color: greenyellow; border: none; border-radius: 15px;">PROCEED</button></a>

</body>
</html>