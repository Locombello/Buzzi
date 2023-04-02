package jsp_version;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;

public class QueryDB {

	Connection conn;
	
	public void inserisciStudente(String nome, String cognome, double voto) throws ClassNotFoundException, SQLException {
		
		conn = DatabaseConnection.initializeDatabase();
		
		PreparedStatement ps = conn.prepareStatement("INSERT INTO STUDENTI VALUE(NULL, ?, ?, ?)");
		
		ps.setString(1, nome);
		ps.setString(2, cognome);
		ps.setDouble(3, voto);
		
		ps.executeUpdate();
		
		ps.close();
		conn.close();
		
	}
	
	public String mostraStudenti() throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		PreparedStatement ps = conn.prepareStatement("SELECT * FROM studenti ORDER BY voto DESC");
		
		ResultSet rs = ps.executeQuery("SELECT * FROM studenti ORDER BY voto DESC");
		ResultSetMetaData rsmd = rs.getMetaData();
		
		int columnsNumber = rsmd.getColumnCount();
		String str = "<br />";
		while (rs.next()) {
		    for (int i = 1; i <= columnsNumber; i++) {
		        if (i > 1) str += ",  ";
		        String columnValue = rs.getString(i);
		        str += rsmd.getColumnName(i) + " " + columnValue;
		    }
		    str += ("<br />");
		}
		ps.close();
		conn.close();
		return str;
	}
	
	public String cercaStudenti(double voto) throws ClassNotFoundException, SQLException {
		conn = DatabaseConnection.initializeDatabase();
		
		PreparedStatement ps = conn.prepareStatement("SELECT * FROM studenti WHERE voto >=" + voto + " ORDER BY cognome");
		
		ResultSet rs = ps.executeQuery("SELECT * FROM studenti WHERE voto >=" + voto + " ORDER BY cognome");
		ResultSetMetaData rsmd = rs.getMetaData();
		
		int columnsNumber = rsmd.getColumnCount();
		String str = "<br />";
		while (rs.next()) {
		    for (int i = 1; i <= columnsNumber; i++) {
		        if (i > 1) str += ",  ";
		        String columnValue = rs.getString(i);
		        str += rsmd.getColumnName(i) + " " + columnValue;
		    }
		    str += ("<br />");
		}
		ps.close();
		conn.close();
		return str;
	}

}
