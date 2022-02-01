<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
	</script>
	<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <div class="plateau">

    </div>
    <table>
		<tr>
			<td class="bordure" draggable="true"><img src="./img/noire-tour.png" /></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/noir-cheval.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/noir-fou.png"></td>
			<td class="bordure" draggable="true"><img src="./img/noire-dame.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/noir-roi.png"></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/noir-fou.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/noir-cheval.png"></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/noire-tour.png"/></td>
			</tr>
		<tr>
			<td class="bordure case-noire" draggable="true"><img src="./img/noir-pion.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/noir-pion.png"></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/noir-pion.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/noir-pion.png"></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/noir-pion.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/noir-pion.png"></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/noir-pion.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/noir-pion.png"> </td>
		</tr>

		<tr>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
		</tr>
		<tr>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
		</tr>
		<tr>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
		</tr>
		<tr>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
			<td class="bordure" draggable="true"><p>blank</p></td>
			<td class="bordure case-noire" draggable="true"><p>blank</p></td>
		</tr>
		<tr>
			<td class="bordure" draggable="true"><img src="./img/blanc-pion.png"/></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/blanc-pion.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/blanc-pion.png"/></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/blanc-pion.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/blanc-pion.png"/></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/blanc-pion.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/blanc-pion.png"/></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/blanc-pion.png"/></td>
		</tr>
		<tr>
			<td class="bordure case-noire" draggable="true"><img src="./img/blanc-tour.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/blanc-cheval.png"/></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/blanc-fou.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/blanc-dame.png"/></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/blanc-roi.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/blanc-fou.png"/></td>
			<td class="bordure case-noire" draggable="true"><img src="./img/blanc-cheval.png"/></td>
			<td class="bordure" draggable="true"><img src="./img/blanc-tour.png"/></td>
		</tr>
		</table>
    </main>
</body>
<script src="script.js"></script>
</html>