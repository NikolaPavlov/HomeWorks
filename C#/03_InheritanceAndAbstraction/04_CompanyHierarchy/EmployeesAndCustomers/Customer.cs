using System;

namespace _04_CompanyHierarchy.EmployeesAndCustomers
{
    class Customer : Person, ICustomer
    {
        private decimal netPurchaseAmount;

        // Prop
        public decimal NetPurchaseAmount
        {
            get
            {
                return this.netPurchaseAmount;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Purchase amount should be positive decimal number!");
                }
                this.netPurchaseAmount = value;
            }
        }

        // Constructor
        public Customer(int id, string firstName, string lastName, decimal netPurchaseAmount)
            : base(id, firstName, lastName)
        {
            this.NetPurchaseAmount = netPurchaseAmount;
        }

        // To String
        public override string ToString()
        {
            return base.ToString() + " Purchase amount: " + this.NetPurchaseAmount;
        }
    }
}
