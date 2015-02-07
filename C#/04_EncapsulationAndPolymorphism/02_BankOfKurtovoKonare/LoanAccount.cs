namespace _02_BankOfKurtovoKonare
{
    using System;

    class LoanAccount : Account
    {
        // Constructor
        public LoanAccount(Customer customer, decimal balance, decimal interestRate)
            : base(customer, balance, interestRate)
        {
        }

        // Methods
        public override decimal CalcInterest(int months)
        {
            // Individual customer no interest for the first 2 months
            if (this.Customer.GetType().Name == "IndividualCustomer")
            {
                if (months - 3 <= 0)
                {
                    return 0;
                }
                else
                {
                    return (this.Balance * (1 + (this.InterestRate / 100) * (months - 3))) - this.Balance;
                }
            }
            // CompanyCustomer no interest for the first 2 months
            else
            {
                if (months - 2 <= 0)
                {
                    return 0; 
                }
                else
                {
                    return (this.Balance * (1 + (this.InterestRate / 100) * (months - 2))) - this.Balance;
                }
            }
        }
    }
}
