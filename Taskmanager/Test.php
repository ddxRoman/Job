<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .placeholder-form {
	box-sizing: border-box;
	width: 320px;
	margin: 20px auto;
}
.placeholder-container {
	position: relative;
	width: 100%;
	margin-bottom: 20px;
}
.placeholder-container input {
	background-color: #FFF;
	border: 2px solid #BFE2FF;
	box-sizing: border-box;
	color: #000;
	font-size: 16px;
	line-height: 16px;  
	height: 50px;
	outline: 0;
	padding: 0 20px;
	width: 100%;
}
.placeholder-container label {
	color: #000;
	font-family: Verdana, sans-serif;   
	background-color: #FFF;
	font-size: 16px;
	line-height: 16px;
	padding: 5px 10px;
	pointer-events: none;
	position: absolute;
	transition: all 200ms;
	top: 12px;
	left: 10px;
	background-color: #FFF;
}
.placeholder-container input:focus + label,
.placeholder-container input:not(:placeholder-shown) + label{
	top: -10px;
	left: 10px;
    font-size: 11px; 
    background-color: #BFE2FF;
	padding: 2px 10px;
}
    </style>
    

<div class="placeholder-form">
    <div class="placeholder-container">
        <input type="text" placeholder=" " />
        <label>Фамилия</label>
    </div>
    <div class="placeholder-container">
        <input type="text" placeholder=" " />
        <label>Имя</label>
    </div>
    <div class="placeholder-container">
        <input type="text" placeholder=" " />
        <label>Отчество</label>
    </div>      
</div>
</body>
</html>