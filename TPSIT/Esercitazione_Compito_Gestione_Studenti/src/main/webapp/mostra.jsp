<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
<%@ page import="jspJavaFiles.GestioneStudenti"%>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Mostra studenti</title>
</head>
<body>
	<h1>Studenti registrati</h1>
	<% GestioneStudenti gs = new GestioneStudenti(); %>
	<%= gs.mostraStudenti() %>
</body>
</html>