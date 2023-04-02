package servlet_version;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import jsp_version.DatabaseConnection;

@WebServlet("/TestConnessione")
public class TestConnessione extends HttpServlet {
	private static final long serialVersionUID = 1L;

    public TestConnessione() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		try {
			Connection conn = DatabaseConnection.initializeDatabase();
			visualizzaStato("Connesione al database ok", response);
			inserimento(request, conn);
			visualizzaStato("Inserimento nel database ok", response);
		} catch (ClassNotFoundException | SQLException e) {
			visualizzaStato("Problemi di connessione al database", response);
		}
	}
	
	protected void inserimento(HttpServletRequest request, Connection conn) throws ClassNotFoundException, SQLException{
			PreparedStatement ps = conn.prepareStatement("INSERT INTO STUDENTI VALUE(NULL, ?, ?, ?)");
			
			ps.setString(1, request.getParameter("nome"));
			ps.setString(2, request.getParameter("cognome"));
			ps.setDouble(3, Double.valueOf(request.getParameter("voto")));
			
			ps.executeUpdate();
			
			ps.close();
			conn.close();
	}


	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

		doGet(request, response);
	}
	
	protected void visualizzaStato(String messaggio, HttpServletResponse response) throws IOException {
		PrintWriter out = response.getWriter();
		out.print("<html><body>" + messaggio + "</body></html>");
	}

}
