using System;

/*Define a class Computer that holds name, several components and price. 
 * The components (processor, graphics card, motherboard, etc.) should be objects of class Component,
 * which holds name, details (optional) and price. 
⦁	Define several constructors that take different sets of arguments. Use proper variable types.
 * Use properties to validate the data. Throw exceptions when improper data is entered.
⦁	Add a method in the Computer class that displays the name, each of the components' name and 
 * price and the total computer price. The total price is the sum of all components' price. 
 * Print the prices in BGN currency format.
⦁	Create several Computer objects, sort them by price, and print them on the console using 
 * the created display method. */

using System;
using System.Collections.Generic;
using System.Linq;
class PcCatalog
{
    static void Main()
    {
        Componet boxPC = new Componet(name: "Box", price: 55.20m, details: "444cm x 222cm x 111cm");
        Componet motherboard = new Componet(name: "Motherboard ASROCK FM2A88X Extreme6+", price: 188.40m);
        Componet hdd = new Componet(name: "Hdd SEAGATE 2T, ES.3, SATA III", price: 330m, details: "Capacity: 2 TB");
        Componet procesor = new Componet(name: "Processor Intel Core I3-4340", price: 316.80m);
        Componet graficsCard = new Componet(name: "Gpu PALIT GeForce GT 610", price: 80.40m, details: "Gpu ram: 1 GB");
        Componet ram = new Componet(name: "Ram ADATA 2X4GB", price: 171.60m, details: "Description: 2X4G DDR3");
        Componet discSSD = new Componet(name: "Hdd A-DATA 128GB SSD", price: 127.20m, details: "Description: Multi-Level Cell (MLC) NAND Flash Memory, 2.5 inch");
        Componet blower = new Componet(name: "Cooler COOLERMASTER Blade Master 80", price: 16.80m);
        Componet power = new Componet(name: "PSU FD 750W INTEGRA BLACK", price: 157.20m, details: "Description: Multi-Level Cell (MLC) NAND Flash Memory, 2.5 inch");
        Computer computer1 = new Computer(
        name: "Frankenstein",
        boxPC: boxPC,
        motherboard: motherboard,
        hdd: hdd,
        procesor: procesor,
        graficsCard: graficsCard,
        ram: ram
        );
        Computer computer2 = new Computer("Lainovo", boxPC, motherboard, hdd, procesor, graficsCard, ram, discSSD, blower, power);
        Computer computer3 = new Computer("Acer", boxPC, motherboard, hdd, procesor, graficsCard, ram, discSSD);
        List<Computer> computers = new List<Computer>() { computer2, computer1, computer3, computer1 };
        computers = computers.OrderBy(computer => computer.Price).ToList();
        foreach (var computer in computers)
        {
            computer.writeToConsole();
            Console.WriteLine();
        }
    }
}
