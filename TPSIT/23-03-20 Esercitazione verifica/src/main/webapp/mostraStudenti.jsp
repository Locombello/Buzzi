<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="jsp_version.*" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<%
		out.print("Mostra studenti");
		QueryDB queryDB = new QueryDB();
	%>
	<%= queryDB.mostraStudenti() %>
</body>
</html>