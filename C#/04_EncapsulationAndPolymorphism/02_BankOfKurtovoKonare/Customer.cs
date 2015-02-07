namespace _02_BankOfKurtovoKonare
{
    using System;

    public abstract class Customer
    {
        private string customerName;

        // Constructor
        public Customer(string customerName)
        {
            this.CustomerName = customerName;
        }

        // Prop
        public string CustomerName
        {
            get
            {
                return this.customerName;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Customer name can't be empty!");
                }
                this.customerName = value;
            }
        }
    }
}
