namespace _02_BankOfKurtovoKonare
{
    using System;
    using System.Text.RegularExpressions;

    class CompanyCustomer : Customer
    {
        private string bulstat;

        // Constructor
        public CompanyCustomer(string customerName, string bulstat)
            : base(customerName)
        {
            this.Bulstat = bulstat;
        }

        // Prop
        public string Bulstat
        {
            get
            {
                return this.bulstat;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Company name can't be null or empty!"); 
                }
                this.bulstat = value;
            }
        }
    }
}
