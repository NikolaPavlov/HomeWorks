using System;

public class Battery
{
    private string batteryDescription = "undefined";
    private double batteryLifeInHours = 0; 

    // Battery properties
    public string BatteryDescription
    {
        get
        {
            return this.batteryDescription;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentNullException("battery description can't be empty");
            }
            else
            {
                this.batteryDescription = value;
            }
        }
    }
    public double BatteryLifeInHours
    {
        get
        {
            return this.batteryLifeInHours;
        }
        set
        {
            if (value < 0)
            {
                throw new ArgumentException("battery life should be positive integer number"); 
            }
            else
            {
                this.batteryLifeInHours = value;
            }
        }
    }

    // Battery constructor
    public Battery(string batteryDescription, int batteryLifeInHours)
    {
        this.batteryDescription = batteryDescription;
        this.BatteryLifeInHours = batteryLifeInHours;
    }

    // override ToString()
    public override string ToString()
    {
        string answer = "";
        if (batteryDescription != "undefined")
        {
            answer += "batteryDescription: " + batteryDescription;
        }
        if (batteryLifeInHours != 0)
        {
            answer += " / batteryLife: " + batteryLifeInHours;
        }
        return answer;
    }
}