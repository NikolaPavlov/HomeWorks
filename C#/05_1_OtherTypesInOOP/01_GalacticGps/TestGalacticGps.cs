namespace _01_GalacticGps
{
    using System;

    class TestGalacticGps
    {
        static void Main()
        {
            Location home = new Location(18.037986, 28.870097, Planet.Earth);
            Console.WriteLine(home.ToString());

            // Enum keys are integer numbers, planet++ return next planet in the enum
            Console.WriteLine("\n");
            home.Planet++;
            Console.WriteLine(home.ToString());
        }
    }
}
