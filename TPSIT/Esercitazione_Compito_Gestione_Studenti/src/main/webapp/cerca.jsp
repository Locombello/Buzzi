<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
<%@ page import="jspJavaFiles.GestioneStudenti" %>
   
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Cerca studenti</title>
</head>
<body>
	<% double voto = Double.valueOf(request.getParameter("voto"));
	GestioneStudenti gestioneStudenti = new GestioneStudenti(); %>
	<h1>Studenti con voto maggiore o uguale a <%= voto %></h1>
	<%= gestioneStudenti.cercaStudenti(voto) %>
</body>
</html>