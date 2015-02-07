namespace _02_BankOfKurtovoKonare
{
    using System;

    class MortgageAccount : Account
    {
        // Constructor
        public MortgageAccount(Customer customer, decimal balance, decimal interestRate)
            : base(customer, balance, interestRate)
        {
        }

        // Methods
        public override decimal CalcInterest(int months)
        {
            // IndividualCustomer no interest for the first 6 months
            if (this.Customer.GetType().Name == "IndividualCustomer")
            {
                if (months - 6 <= 0)
                {
                    return 0;
                }
                else
                {
                    return (this.Balance * (1 + (this.InterestRate / 100) * (months - 6))) - this.Balance;
                }
            }
            // CompanyCustomer half interest for first 12 months then full interest
            else
            {
                if (months - 12 <= 0)
                {
                    return ((this.Balance * (1 + (this.InterestRate / 100) * (months))) - this.Balance) / 2;
                }
                else
                {
                    int monthsWithFullInterest = months - 12;
                    decimal interest = ((this.Balance * (1 + (this.InterestRate / 100) * 12)) - this.Balance) / 2;
                    interest += (this.Balance * (1 + (this.InterestRate / 100) * monthsWithFullInterest)) - this.Balance;
                    return interest;
                }
            }

        }
    }
}
