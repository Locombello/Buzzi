<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
<%@ page import="jspJavaFiles.GestioneStudenti" %>
   
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Inserisci studente</title>
</head>
<body>
	<% GestioneStudenti gestioneStudenti = new GestioneStudenti();
	String nome = request.getParameter("nome");
	String cognome = request.getParameter("cognome");
	double voto = Double.valueOf(request.getParameter("voto")); %>
	<%= gestioneStudenti.inserisciStudente(nome, cognome, voto) %>
</body>
</html>