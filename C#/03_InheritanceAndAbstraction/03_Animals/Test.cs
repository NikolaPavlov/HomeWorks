using System;
using System.Collections.Generic;
using System.Linq;

namespace _03_Animals
{
    class Test
    {
        static void Main()
        {
            // Array of animals
            var animals = new Animal[]
            {
                new Dog("sharo", 7, Gender.Male),
                new Dog("killer", 3, Gender.Male),
                new Cat("botushku", 1, Gender.Male),
                new Frog("plumber", 1, Gender.Female),
                new Frog("grreny", 2, Gender.Male),
                new Kitten("chick", 4),
                new Tomcat("dudw", 3)
            };
            
            // Calculate the average age of each kind of animals
            var averageAge = from an in animals
                group an by new
                {
                    GroupName = an.GetType().Name
                }
                into gender select new
                {
                    gender.Key.GroupName,
                    AvarageAge = gender.Average(an => an.Age)
                };

                foreach (var animal in averageAge)
                {
                    Console.WriteLine(String.Format("Group: {0}, AvarageAge: {1:0.00}.", animal.GroupName, animal.AvarageAge));
                }
        }
    }
}
