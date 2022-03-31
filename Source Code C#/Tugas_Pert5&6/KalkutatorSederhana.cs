/*
 * Created by SharpDevelop.
 * User: hp
 * Date: 18/03/2022
 * Time: 10:45
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;

namespace Pertemuan5
{
	/// <summary>
	/// Description of MainForm.
	/// </summary>
	public partial class MainForm : Form
	{
		public MainForm()
		{
			//
			// The InitializeComponent() call is required for Windows Forms designer support.
			//
			InitializeComponent();
			
			//
			// TODO: Add constructor code after the InitializeComponent() call.
			//
		}
		
		void Button1Click(object sender, EventArgs e)
		{
			if (string.IsNullOrEmpty(textBox1.Text) || string.IsNullOrEmpty(textBox2.Text))
				{
					MessageBox.Show("Angka 1 dan Angka 2 tidak boleh kosong!!");
				}
			else 
				{
					// Untuk Tambah
					int a, b, c;
					a = int.Parse(this.textBox1.Text);
					b = int.Parse(this.textBox2.Text);
					c = a + b;
					this.LBLhasil.Text = c.ToString();
				}
		}
		
		void Button2Click(object sender, EventArgs e)
		{
			if (string.IsNullOrEmpty(textBox1.Text) || string.IsNullOrEmpty(textBox2.Text))
				{
					MessageBox.Show("Angka 1 dan Angka 2 tidak boleh kosong!!");
				}
			else 
				{
					// Untuk Kurang
					int a, b, c;
					a = int.Parse(this.textBox1.Text);
					b = int.Parse(this.textBox2.Text);
					c = a - b;
					this.LBLhasil.Text = c.ToString();
				}	
		}
		
		void Button3Click(object sender, EventArgs e)
		{
			if (string.IsNullOrEmpty(textBox1.Text) || string.IsNullOrEmpty(textBox2.Text))
				{
					MessageBox.Show("Angka 1 dan Angka 2 tidak boleh kosong!!");
				}
			else 
				{
					// Untuk Tambah
					int a, b, c;
					a = int.Parse(this.textBox1.Text);
					b = int.Parse(this.textBox2.Text);
					c = a * b;
					this.LBLhasil.Text = c.ToString();
				}			
		}
		
		void Button4Click(object sender, EventArgs e)
		{
			if (string.IsNullOrEmpty(textBox1.Text) || string.IsNullOrEmpty(textBox2.Text))
				{
					MessageBox.Show("Angka 1 dan Angka 2 tidak boleh kosong!!");
				}
			else 
				{
					// Untuk Tambah
					int a, b, c;
					a = int.Parse(this.textBox1.Text);
					b = int.Parse(this.textBox2.Text);
					c = a / b;
					this.LBLhasil.Text = c.ToString();
				}			
		}
		
		void Button5Click(object sender, EventArgs e)
		{
			// Untuk kosongkan data
			textBox1.Clear();
			textBox2.Clear();
			LBLhasil.Text="";
		}
	}
}
