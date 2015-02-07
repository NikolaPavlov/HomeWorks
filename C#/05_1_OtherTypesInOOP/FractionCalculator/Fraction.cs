namespace FractionCalculator
{
    using System;

    struct Fraction
    {
        private long numerator;
        private long denominator;
  
        // Constructor
        public Fraction(long numerator, long denominator)
            : this()
        {
            this.Numerator = numerator;
            this.Denominator = denominator;
        }

        // Prop
        public long Numerator { get; set; }

        public long Denominator
        {
            get
            {
                return this.denominator;
            }
            set
            {
                if (value == 0)
                {
                    throw new ArgumentException("The denominator can't be zero!");
                }
                this.denominator = value;
            }
        }


        public static Fraction operator + (Fraction a, Fraction b)
        {
            long newNumerator = a.Numerator * b.Denominator + b.Numerator * a.Denominator;
            long newDenominator = a.Denominator * b.Denominator;
            return new Fraction(newNumerator, newDenominator);
        }

        public static Fraction operator - (Fraction a, Fraction b)
        {
            long newNumerator = a.Numerator * b.Denominator - b.Numerator * a.Denominator;
            long newDenominator = a.Denominator * b.Denominator;
            return new Fraction(newNumerator, newDenominator);
        }

        public override string ToString()
        {
            return ((double)this.Numerator / this.Denominator).ToString();
        }
    }
}
