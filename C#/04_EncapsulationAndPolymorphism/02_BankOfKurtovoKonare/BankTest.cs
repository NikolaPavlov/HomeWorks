namespace _02_BankOfKurtovoKonare
{
    using System;

    class BankTest
    {
        static void Main()
        {
            // *Interest Rate is in percentage 0% - 100%

            CompanyCustomer ood = new CompanyCustomer("dsk", "sdffs23232");
            IndividualCustomer me = new IndividualCustomer("me", 1234512345);
            
            // Create and test different types of accounts
            LoanAccount loanAcc = new LoanAccount(me, 100, 5);
            LoanAccount loanAccCompany = new LoanAccount(ood, 1000, 2);
            DepositAccount depositAcc = new DepositAccount(me, 1100, 1);
            MortgageAccount mortgageAcc = new MortgageAccount(me, 100, 5);
            //Console.WriteLine(loanAcc.CalcInterest(3));
            loanAccCompany.DepositMoney(1000);
            //Console.WriteLine(loanAccCompany.CalcInterest(3));
            //Console.WriteLine(depositAcc.CalcInterest(1));
            //Console.WriteLine(mortgageAcc.CalcInterest(7));
            depositAcc.WithdrawMoney(100);
            //Console.WriteLine(depositAcc.Balance);
        }
    }
}
