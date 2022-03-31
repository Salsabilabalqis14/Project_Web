using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data.SqlClient;

namespace Pertemuan6
{
	class Koneksi
	{
		public SqlConnection GetConn(){
			SqlConnection Conn = new SqlConnection();
			Conn.ConnectionString = "Data Source=LAPTOP-622UOQQQ; initial catalog=Kasir; integrated security=true";
			return Conn;
		}
	}
}
