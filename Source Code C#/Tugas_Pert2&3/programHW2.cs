using System;

namespace BelajarCSHARP
{
	class programHW2
	{
		static void Main(string[] args)
		{
			Console.Write("Nama kamu siapa? ");
			
			string nama = Console.ReadLine();
			Console.WriteLine("Nama kamu "+nama);
			
			Console.Write("Press any key to continue . . . ");
			Console.ReadKey(true);
		}
	}
}