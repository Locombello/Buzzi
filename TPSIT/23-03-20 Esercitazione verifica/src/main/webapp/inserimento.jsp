<%@page import="java.sql.PreparedStatement"%>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="jsp_version.*" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>AAA</title>
</head>
<body>
	<%
		
		QueryDB queryDB = new QueryDB();
		queryDB.inserisciStudente(request.getParameter("nome"), request.getParameter("cognome"), Double.valueOf(request.getParameter("voto")));
		out.print("Studente inserito");
	%>
	
	<%= "Nome: " + request.getParameter("nome") %>
</body>
</html>