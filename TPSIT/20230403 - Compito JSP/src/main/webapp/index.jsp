<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    
<%@ page import="javaClasses.CatalogHandler" %>
<%@ page import="java.util.ArrayList" %>
<%@ page import="java.util.List" %>
<% 	CatalogHandler ch = new CatalogHandler();
	List<String> list = ch.getProdotti(); %>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<title>Gestione Catalogo</title>
	</head>
	<body class="container">
		<h1 class="mt-5">Catalogo prodotti</h1><hr />
		
		<h3>Aggiorna prodotto</h3>
		<form action="aggiorna.jsp" method="POST">
			<div class="form-group">
				<label for="nome">Nome:</label>
				<select class="form-select" id="nome" name="nome">
					<% for (String s:list) { %>
						<option value="<%= s %>"><%= s %></option>
					<% } %>
				</select><br />
			</div>
		
			<label for="voto">Quantità:</label>
			<input type="number" class="form-control" id="quantita" name="quantita" required><br />

			<button type="submit" class="btn btn-primary">Aggiorna</button>
		</form><hr />
		
		<h3>Cerca prodotti</h3>
		<form action="cerca.jsp" method="GET">
			<label for="voto">Prezzo:</label>
			<input type="number" class="form-control" id="prezzo" name="prezzo" required><br />

			<button type="submit" class="btn btn-primary">Cerca</button>
		</form>
		<hr />
		
		<h3>Mostra prodotti</h3><br />
		<a href="mostra.jsp" id="mostra">
			<button class="btn btn-primary">Mostra</button>
		</a><hr />
	</body>
</html>