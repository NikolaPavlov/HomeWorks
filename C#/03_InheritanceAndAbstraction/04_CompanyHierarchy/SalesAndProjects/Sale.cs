using System;

namespace _04_CompanyHierarchy.SalesAndProjects
{
    class Sale
    {
        private string productName;
        private string date; // using string for date, but i will make the validation in the Property!
        private decimal price;

        // Prop
        public string ProductName
        {
            get
            {
                return this.productName;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Product name can't be null or empty!"); 
                }
                this.productName = value;
            }
        }

        // Didn't have time to create ultimate date validation,
        // this should do the job! 
        public string Date
        {
            get
            {
                return this.date;
            }
            set
            {
                DateTime tempDate = new DateTime();
                if (DateTime.TryParse(Convert.ToString(value), out tempDate))
                {
                    this.date = value; 
                }
                else
                {
                    throw new ArgumentException("The date isn't valid, give correct date please!");
                }
            }
        }

        public decimal Price
        {
            get
            {
                return this.price;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Price should be positive integer number!"); 
                }
                this.price = value;
            }
        }

        // Constructor
        public Sale()
        {
        }

        public Sale(string productName, string dt, decimal price)
        {
            this.ProductName = productName;
            this.Date = dt;
            this.Price = price;
        }

        // To String
        public override string ToString()
        {
            return string.Format("Product name: {0}, Date: {1}, Price: {2}",
                this.ProductName, this.Date, this.Price);
        }

    }
}
