/*
 * Created by SharpDevelop.
 * User: hp
 * Date: 02/03/2022
 * Time: 15:17
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;

namespace tugasno2
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
			MessageBox.Show ("Nama Anda  : " + this.nama.Text + "\n" +
			                 "NIM Anda    : " + this.kelas.Text + "\n" +
			                 "Kelas Anda  : " + this.nim.Text + "\n" +
			                 "Mata Kuliah : " + this.matkul.Text);
		}
	}
}
