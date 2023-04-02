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
		out.print("Cerca studenti per voto superiore a: " + request.getParameter("voto"));
		QueryDB queryDB = new QueryDB();
	%>
	<%= queryDB.cercaStudenti(Double.valueOf(request.getParameter("voto"))) %>
</body>
</html>