using System;

public static class Validation
{
    public static void CheckForNullOrEmptyString(string value, string argumentName)
    {
        if (string.IsNullOrEmpty(value))
        {
            throw new ArgumentException("the argument {0} couldn't be empty or null dude!", argumentName);
        }
    }

    public static void CheckForNegativeOrZero(object value, string argumentName)
    {
        if ((decimal)value <= 0)
        {
            throw new ArgumentException("The {0} argument couldn't be negative dude!", argumentName); 
        }
    }

    public static void CheckForEmptyString(string value, string argumentName)
    {
        if (value == "")
        {
            throw new ArgumentException("The argument {0} couldn't be empty dude!", argumentName);
        }
    }
}