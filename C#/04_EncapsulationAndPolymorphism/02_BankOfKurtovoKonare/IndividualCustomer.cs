namespace _02_BankOfKurtovoKonare
{
    using System;
    using System.Text.RegularExpressions;

    class IndividualCustomer : Customer
    {
        private int egn;

        // Constructor
        public IndividualCustomer(string customerName, int egn)
            : base(customerName)
        {
            this.Egn = egn;
        }

        // Prop
        public int Egn
        {
            get
            {
                return this.egn;
            }
            set
            {
                if (!Regex.IsMatch(Convert.ToString(value), @"\d{10}"))
                {
                    throw new ArgumentException("Individual customer egn should be exactly 10 digits long!");
                }
                this.egn = value;
            }
        }
    }
}
