package jspJavaFiles;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;

public class GestioneStudenti {

	private Connection conn;
	
	public void inserisciStudente(String nome, String cognome, double voto) throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String queryInsert = "INSERT INTO studenti(nome, cognome, voto)"
						   + "VALUES (?, ?, ?)";		
		PreparedStatement ps = conn.prepareStatement(queryInsert);
		ps.setString(1, nome);
		ps.setString(2, cognome);
		ps.setDouble(3, voto);
		
		ps.executeUpdate();
		
		ps.close();
		conn.close();
	}
	
	public String mostraStudenti() throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String querySelect = "SELECT nome, cognome, voto"
						   + "FROM studenti"
						   + "ORDER BY nome DESC";
		PreparedStatement ps = conn.prepareStatement(querySelect);
		
		ResultSet rs = ps.executeQuery(querySelect);
		ResultSetMetaData rsmd = rs.getMetaData();
		
		StringBuilder sb = new StringBuilder("");
		sb.append("<table>");

		int columnCount = rsmd.getColumnCount();
		// writing headers
		sb.append("<tr>");
		for (int i = 1; i <= columnCount; i++) {
			sb.append("<th>" + rsmd.getColumnName(columnCount) + "</th>");
		}
		sb.append("</tr>");
		
		while (rs.next()) {
			// writing data
			sb.append("<tr>");
			for (int i = 1; i <= columnCount; i++) {
				sb.append("<th>" + rsmd.getColumnName(columnCount) + "</th>");
			}
			sb.append("</tr>");
		}
		
		sb.append("</table");
		
		return sb.toString();
	}
	
}
