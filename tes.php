
<!DOCTYPE html>
<html>
<head>

<style>
#konten {
	width:400px;
	padding: 19px;
	margin: 0 auto;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	box-shadow: 0 1px 2px rgba(0,0,0,.05);	
}

.normal-select, #biaya {
	background: transparent;
	padding: 5px;
	font-size: 14px;
	line-height: 1;
	border:1px solid #CCC;
	border-radius: 0;
	height: 34px;
	-webkit-appearance: none;
	border-radius:3px;
}

.normal-select {
	width:258px;
}

#biaya {
	width:100px;
}

table td {
	vertical-align:middle;
}
</style>
<script language="javascript" src="jquery.js"></script>
<script>
$(document).ready(function() {
	$('#kota').change(function() { 
		var kota = $(this).val();
		var status="";
		$.ajax({
			type: 'GET', 
			url: 'http://api.openweathermap.org/data/2.5/weather',
			data: 'q=' + kota + '&appid=6d7a47ad9bb9d571d0fce216c890fea6', 
			success: function(data) { 
			console.log(data);
				$('#status').html(data.data); 
			}
		});
    });




});
</script>
</head>
<body>
<div id="konten">
<form method="get">
<table>
<tr>
	<td valign=top></td><td>  
    	<select name="kota" id="kota" class="normal-select">
        <option selected>- Pilih Kota -</option>
        <option value="jakarta">jakarta</option>
		<option value="bandung">Bandung</option>
		<option value="tangerang">tangerang</option>
      	</select>
   	</td>
	<td><input type="submit" name="status_update" value="go" class="form-control"></td>
</tr>

<tr>
	<td></td>
    <td><input type="hidden" id="status">
	</td>
</tr>
</table>
</form>
</div>
</body>
</html>