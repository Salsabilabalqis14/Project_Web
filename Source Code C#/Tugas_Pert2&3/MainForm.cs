using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;

namespace tugaspert3
{
	public partial class MainForm : Form
	{
		double harga, jumlah;
		public MainForm()
		{
			InitializeComponent();
		}
		
		void PilihClick(object sender, EventArgs e)
		{
			if(tiket.Text == "Binjai-Medan"){
				harga = 5000;
				txtharga.Text= "5000";
			} else if(tiket.Text == "Medan-Binjai"){
				harga = 5000;
				txtharga.Text= "5000";
			} else if(tiket.Text == "Binjai-Kuala Bingai"){
				harga = 4000;
				txtharga.Text= "4000";
			} else if(tiket.Text == "Kuala Bingai-Binjai"){
				harga = 4000;
				txtharga.Text= "4000";
			} else if(tiket.Text == "Medan-Tebing Tinggi"){
				harga = 20000;
				txtharga.Text= "20000";
			} else if(tiket.Text == "Medan-Siantar"){
				harga = 35000;
				txtharga.Text= "35000";
			}
		}
		
		void HitungClick(object sender, EventArgs e)
		{
			jumlah = double.Parse(txtjumlah.Text);
			double total = harga * jumlah;
			txttotal.Text = total.ToString();
		}
		
		void ResetClick(object sender, EventArgs e)
		{
			tiket.Text = "Binjai-Medan";
			txtharga.Text = "";
			txtjumlah.Text = "";
			txttotal.Text = "";		
		}
	}
}
