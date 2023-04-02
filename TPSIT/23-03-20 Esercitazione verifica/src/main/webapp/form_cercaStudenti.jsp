<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<form action="cercaStudenti.jsp" method="POST">
		<label for="voto">Voto:</label>
		<input type="range" min="0" max="10" step="0.5" id="voto" name="voto" oninput="this.nextElementSibling.value = this.value">
		<output></output>
	
		<button type="submit">Cerca</button>
	</form>
</body>
</html>