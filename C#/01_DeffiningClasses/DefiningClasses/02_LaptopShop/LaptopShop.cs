using System;

    class LaptopShop
    {
        static void Main()
        {
            // My laptop has only mandatory params
            Laptop myLaptop = new Laptop("Lainovo", 1222);
            // Laptop acer has model price + battery
            Laptop acer = new Laptop(model: "acer matitude", price: 11, 
                batteryDescription: "some components", batteryLifeInHours: 4);
            // Laptop toshiba has all params
            Laptop toshiba = new Laptop(
                model: "mahiba",
                price: 1111,
                manufacture: "toshiba",
                processor: "i7",
                ram: 16,
                graphicsCard: "awsome GPU",
                hdd: "Baracuda",
                screen: "mate screen",
                batteryDescription: "awsome battery pack",
                batteryLifeInHours: 12);
            Console.WriteLine(myLaptop.ToString());
            Console.WriteLine(acer.ToString());
            Console.WriteLine(toshiba.ToString());

            //You should check for errors with unvalid constructor :) Damn laptops;
        }
    }
