package javaClasses;

import java.sql.Connection;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.sql.ResultSetMetaData;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

public class CatalogHandler {
	
	private Connection conn;
	
	private static String printTable(ResultSet rs, ResultSetMetaData rsmd) throws SQLException {
		StringBuilder str = new StringBuilder("<table class=\"table\"<tr>");
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
		
		return str.toString();
	}
	
	public List<String> getProdotti() throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String querySelect = """
				SELECT nome
				FROM prodotti;
				""";
		PreparedStatement ps = conn.prepareStatement(querySelect);
		
		ResultSet rs = ps.executeQuery();
		ResultSetMetaData rsmd = rs.getMetaData();
		
		List<String> list = new ArrayList<>();
		
		while (rs.next()) {
			for (int i = 1; i <= rsmd.getColumnCount(); i++) {
		        list.add(rs.getString(i));
		    }
		}
		
		return list;
	}
	
	public String mostraProdotti() throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String querySelect = """
				SELECT nome, prezzo, quantita
				FROM prodotti
				ORDER BY nome;
				""";
		PreparedStatement ps = conn.prepareStatement(querySelect);
		
		ResultSet rs = ps.executeQuery();
		ResultSetMetaData rsmd = rs.getMetaData();
		
		String str = printTable(rs, rsmd);
		
		ps.close();
		conn.close();
		
		return str.toString();
	}
	
	public String cercaProdotti(double prezzo) throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String querySearch = """
				SELECT nome, prezzo, quantita
				FROM prodotti
				WHERE prezzo <= ?
				ORDER BY prezzo;
				""";
		PreparedStatement ps = conn.prepareStatement(querySearch);
		ps.setDouble(1, prezzo);
		
		ResultSet rs = ps.executeQuery();
		ResultSetMetaData rsmd = rs.getMetaData();
		
		String str = printTable(rs, rsmd);
		
		ps.close();
		conn.close();
		
		return str.toString();
	}
	
	public String aggiornaProdotto(String nome, double nuovaQuantita) throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		String queryUpdate = """
				UPDATE prodotti
				SET quantita = ?
				WHERE nome = ?
				""";
		PreparedStatement ps1 = conn.prepareStatement(queryUpdate);
		ps1.setDouble(1, nuovaQuantita);
		ps1.setString(2, nome);
		
		int updates = ps1.executeUpdate();
		
		String querySelect = """
				Select nome, prezzo, quantita
				FROM prodotti
				WHERE nome = ?
				""";
		PreparedStatement ps2 = conn.prepareStatement(querySelect);
		ps2.setString(1, nome);
		
		ResultSet rs = ps2.executeQuery();
		ResultSetMetaData rsmd = rs.getMetaData();
		
		String str = printTable(rs, rsmd);
		
		ps1.close();
		ps2.close();
		conn.close();
		
		if (updates > 0) return "<h3>Prodotto aggiornato correttamente</h3><br />" + str;
		return "<h3>Errore: prodotto non esistente</h3>";		
	}
	
}
