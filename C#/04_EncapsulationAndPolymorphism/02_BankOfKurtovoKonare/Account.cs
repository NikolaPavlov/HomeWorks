namespace _02_BankOfKurtovoKonare
{
    using System;

    public abstract class Account
    {
        private Customer customer;
        private decimal balance;
        private decimal interestRate;

        // Constructor
        public Account(Customer customer, decimal balance, decimal interestRate)
        {
            this.Customer = customer;
            this.Balance = balance;
            this.InterestRate = interestRate;
        }

        // Prop
        public Customer Customer
        {
            get
            {
                return this.customer;
            }
            private set
            {
                this.customer = value;
            }
        }

        public decimal Balance
        {
            get
            {
                return this.balance;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Balance can't be negative number!"); 
                }
                this.balance = value;
            }
        }

        public decimal InterestRate
        {
            get
            {
                return this.interestRate;
            }
            set
            {
                if (value < 0 || value > 100)
                {
                    throw new ArgumentException("Interest rate shoud be given in percentage 0%-100%!");
                }
                this.interestRate = value;
            }
        }

        // Methods
        public void DepositMoney(decimal sum)
        {
            this.Balance += sum;
        }

        abstract public decimal CalcInterest(int months);
    }
}
