<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
<%@ page import="javaClasses.CatalogHandler" %>    
<%	CatalogHandler ch = new CatalogHandler(); 
	String nome = request.getParameter("nome");
	double nuovaQuantita = Double.valueOf(request.getParameter("quantita")); %>
    
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<title>Insert title here</title>
	</head>
	<body class="container">
		<h1 class="mt-5">Aggiornamento prodotto</h1><hr />
		<%= ch.aggiornaProdotto(nome, nuovaQuantita) %>
		<br /><br />
		<a href="index.jsp" id="indietro">
			<button class="btn btn-primary">Indietro</button>
		</a>
	</body>
</html>