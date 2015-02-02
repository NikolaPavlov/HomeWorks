using System;

abstract class Human
{
    private string firstName;
    private string lastName;

    // Prop
    public string FirstName
    {
        get
        {
            return this.firstName;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentException("First name can't be empty or null!");
            }
            this.firstName = value;
        }
    }

    public string LastName
    {
        get
        {
            return this.firstName;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentException("Second name can't be empty or null!");
            }
            this.lastName = value;
        }
    }
    
    // Constructor
    public Human(string firstName, string lastName)
    {
        this.FirstName = firstName;
        this.LastName = lastName;
    }

    // To String
    public override string ToString()
    {
        return this.firstName + " " + this.lastName;
    }
}