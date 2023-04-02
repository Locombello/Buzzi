package jspJavaFiles;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;

public class GestioneStudenti {

	private Connection conn;
	
	public String inserisciStudente(String nome, String cognome, double voto) throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String queryFind = """
				SELECT id
				FROM studenti
				WHERE nome = ? AND cognome = ?
				""";
		PreparedStatement ps1 = conn.prepareStatement(queryFind);
		ps1.setString(1, nome);
		ps1.setString(2, cognome);
		ResultSet rs = ps1.executeQuery();
		
		if (rs.getRow() == 0) return "<h1>Studente gia' inserito</h1>";
		
		ps1.close();
		
		String queryInsert = """
				INSERT INTO studenti(nome, cognome, voto)
				VALUES (?, ?, ?);
				""";		
		PreparedStatement ps2 = conn.prepareStatement(queryInsert);
		ps2.setString(1, nome);
		ps2.setString(2, cognome);
		ps2.setDouble(3, voto);
		
		int updates = ps2.executeUpdate();
		
		ps2.close();
		conn.close();
		
		if (updates > 0) return "<h1>Studente inserito correttamente</h1>";
		return "<h1>Errore: studente non inserito</h1>";
	}
	
	public String mostraStudenti() throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String querySelect = """
				SELECT nome, cognome, voto
				FROM studenti
				ORDER BY voto DESC;
				""";
		PreparedStatement ps = conn.prepareStatement(querySelect);
		
		ResultSet rs = ps.executeQuery();
		ResultSetMetaData rsmd = rs.getMetaData();
		
		StringBuilder str = new StringBuilder("<table style=\"border:1px solid;width: 50%\"><tr>");
		for (int i = 1; i <= rsmd.getColumnCount(); i++) {
	        str.append("<th style=\"border:1px solid\">").append(rsmd.getColumnName(i)).append("</th>");
	    }
		str.append("</tr>");
		while (rs.next()) {
			str.append("<tr>");
		    for (int i = 1; i <= rsmd.getColumnCount(); i++) {
		        str.append("<td style=\"border:1px solid\">").append(rs.getString(i)).append("</td>");
		    }
		    str.append("</tr>");
		}
		str.append("</table>");
		
		ps.close();
		conn.close();
		
		return str.toString();
	}
	
	public String cercaStudenti(double voto) throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String querySearch = """
				SELECT nome, cognome, voto
				FROM studenti
				WHERE voto >= ?
				ORDER BY cognome;
				""";
		PreparedStatement ps = conn.prepareStatement(querySearch);
		ps.setDouble(1, voto);
		
		ResultSet rs = ps.executeQuery();
		ResultSetMetaData rsmd = rs.getMetaData();
		
		StringBuilder str = new StringBuilder("<table style=\"border:1px solid;width: 50%\"><tr>");
		for (int i = 1; i <= rsmd.getColumnCount(); i++) {
			str.append("<th style=\"border:1px solid\">").append(rsmd.getColumnName(i)).append("</th>");
		}
		str.append("</tr>");
		while (rs.next()) {
			str.append("<tr>");
			for (int i = 1; i <= rsmd.getColumnCount(); i++) {
				str.append("<td style=\"border:1px solid\">").append(rs.getString(i)).append("</td>");
			}
			str.append("</tr>");
		}
		str.append("</table>");

		ps.close();
		conn.close();

		return str.toString();
	}
	
}
