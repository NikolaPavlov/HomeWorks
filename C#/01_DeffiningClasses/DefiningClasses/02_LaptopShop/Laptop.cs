using System;
/*
Define a class Laptop that holds the following information about a laptop device: model, manufacturer, processor, RAM, 
 * graphics card, HDD, screen, battery, battery life in hours and price.
⦁	The model and price are mandatory. All other values are optional.
⦁	Define two separate classes: a class Laptop holding an instance of class Battery.
⦁	Define several constructors that take different sets of arguments (full laptop + battery information or only part of it). 
 * Use proper variable types.
⦁	Add a method in the Laptop class that displays information about the given instance
⦁	Tip: override the ToString() method
⦁	Put validation in all property setters and constructors. String values cannot be empty, and numeric data cannot be negative. 
 * Throw exceptions when improper data is entered. */

public class Laptop
{
    private string model; // mandatory
    private string manufacture;
    private string processor;
    private int? ram;
    private string graphicsCard;
    private string hdd;
    private string screen;
    private double price; // mandatory

    // Getters and Setters
    public string Model
    {
        get
        {
            return this.model;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentNullException("model name can't be empty!");
            }
            else
            {
                this.model = value;
            }
        }
    }
    public string Manufacture
    {
        get
        {
            return this.manufacture;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentException("manufacture name can't be empty!"); 
            }
            else
            {
                this.manufacture = value;
            }
        }
    }
    public string Processor
    {
        get
        {
            return this.processor;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentNullException("processor name can't be empty");
            }
            else
            {
                this.processor = value;
            }
        }
    }
    public int? Ram
    {
        get
        {
            return this.ram;
        }
        set
        {
            if (value >= 0 || value == null)
            {
                this.ram = value; 
            }
            else
            {
                throw new ArgumentException("ram number should be positive int number");
            }
        }
    }
    public string GraphicsCard
    {
        get
        {
            return this.graphicsCard;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentNullException("graphics card name can't be empty"); 
            }
            else
            {
                this.graphicsCard = value;
            }
        }
    }
    public string Hdd
    {
        get
        {
            return this.hdd;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentNullException("hard disk name can't be empty"); 
            }
            else
            {
                this.hdd = value;
            }
        }
    }
    public string Screen
    {
        get
        {
            return this.screen;
        }
        set
        {
            if (string.IsNullOrEmpty(value))
            {
                throw new ArgumentNullException("screen name can't be empty"); 
            }
            else
            {
                this.screen = value;
            }
        }
    }
    public Battery Battery { get; set; }
    public double Price
    {
        get
        {
            return this.price;
        }
        set
        {
            if (value > 0)
            {
                this.price = value; 
            }
            else
            {
                throw new ArgumentException("price should be positive number");
            }
        }
    }

    // Constructors (I decide to make just one with optional params)
    public Laptop(
        string model,
        double price,
        string manufacture = "undefined", 
        string processor = "undefined", 
        int? ram = null, 
        string graphicsCard = "undefined",
        string hdd = "undefined", 
        string screen = "undefined", 
        string batteryDescription = "undefined",
        int batteryLifeInHours = 0)
    {
        this.Model = model;
        this.Price = price;
        this.Manufacture = manufacture;
        this.Processor = processor;
        this.Ram = ram;
        this.GraphicsCard = graphicsCard;
        this.Hdd = hdd;
        this.Screen = screen;
        this.Battery = new Battery(batteryDescription, batteryLifeInHours);

    }

    // Override ToString()
    public override string ToString()
    {
        string answer = "";
        answer += new string('-', 20) + "\n";
        answer += FieldToString("model", this.model);
        answer += FieldToString("price", this.price);
        answer += FieldToString("manufacture", this.manufacture);
        answer += FieldToString("procesor", this.processor);
        answer += FieldToString("ram", this.ram);
        answer += FieldToString("graphics card", this.graphicsCard);
        answer += FieldToString("hdd", this.hdd);
        answer += FieldToString("screen", this.screen);
        if (Battery.BatteryDescription != "undefined" || Battery.BatteryLifeInHours != 0)
        {
            answer += FieldToString("Battery", this.Battery);
        }
        

        return answer;
    }
    private string FieldToString(string field, object value)
    {
        if (value == null || value == "undefined")
        {
            return null; 
        }
        return field + ": " + value.ToString() + "\n";
    }
}