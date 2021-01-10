<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DZ_Elenskaya</title>
</head>
<body style="background: #E4E1D0; margin: 5% 30%; ">		
	<div style="background: #F5F5F5; width: 550px;">	
		<form action="result.php" style="padding: 20px;  width: 500px;">
			<label>Введите ФИО:<br>
			<input type="text" name="user" required="" style="margin-bottom: 18px;"><br></label>
	
			<label>Введите пароль:<br>
			<input type="password" name="password" required=""  style="margin-bottom: 18px;"></label><br>
	
			<label>Какой диск вы хотите получить?<br>
				<input type="radio" name="disk" value="CD" checked style="margin-top: 13px;">CD<br>
				<input type="radio" name="disk" value="DVD" style="margin-bottom: 18px;">DVD<br>	
			</label>
			
			<label>Какие обучающие курсы вы хотите 	увидеть на диске?<br>
				<input type="checkbox" name="courses[]" value="	Photoshop" checked style="margin-top: 13px;">Курсы по Фотошопу<br>
				<input type="checkbox" name="courses[]" value="	Dreamweaver">Курсы по Adobe Dreamweaver<br>
				<input type="checkbox" name="courses[]" value="PHP" style="margin-bottom: 18px;">Курсы по PHP<br>			
			</label>
	
			<label for="delivery">Выберете способ доставки:<br>
				<select name="delivery"  style="margin-top: 13px; margin-bottom: 20px;" >
					<option value="срочной">Срочная</option>
					<option value="стандартной">Стандартная</option>
				</select><br>
			</label>
	
			<label>Введите адрес для доставки:<br>
				<textarea id="adress" name="adress" rows="6" style="margin-bottom: 11px; width: 357px;"></textarea><br> 
			</label>					
			
			<button  style="margin: 0 25px 15px 0;">Сделать заказ</button>
			<button type="reset">Отмена</button>
		</form>
	</div>

</body>
</html>