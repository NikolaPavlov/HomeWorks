namespace _02_BankOfKurtovoKonare
{
    using System;

    class DepositAccount : Account, IWithdrawable
    {
        // Constructor
        public DepositAccount(Customer customer, decimal balance, decimal interestRate)
            : base(customer, balance, interestRate)
        {
        }

        // Methods
        public override decimal CalcInterest(int months)
        {
            if (this.Balance < 1000)
            {
                return 0; 
            }
            else
            {
                return (this.Balance * (1 + (this.InterestRate / 100) * months)) - this.Balance;
            }
        }

        public void WithdrawMoney(decimal sum)
        {
            if (this.Balance - sum < 0)
            {
                throw new ArgumentException("Insufficent balance, balance is always 0 or more!"); 
            }
            else
            {
                this.Balance -= sum;
            }
        }
    }
}
