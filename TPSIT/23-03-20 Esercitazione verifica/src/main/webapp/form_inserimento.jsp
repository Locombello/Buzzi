<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Inserimento utente</title>
</head>
<body>
	<form action="inserimento.jsp" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome">
	
		<label for="cognome">Cognome:</label>
		<input type="text" id="cognome" name="cognome">
	
		<label for="voto">Voto:</label>
		<input type="range" min="0" max="10" step="0.5" id="voto" name="voto" oninput="this.nextElementSibling.value = this.value">
		<output></output>
	
		<button type="submit">Inserisci</button>
	</form>
	<br />
	<a href="mostraStudenti.jsp"><button>Mostra studenti</button></a>
	<a href="form_cercaStudenti.jsp"><button>Cerca studenti per voto</button></a>
</body>
</html>