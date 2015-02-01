using System;
using System.Collections.Generic;
using System.Linq;

namespace _01_School
{
    class Teacher : People
    {
        List<Discipline> disciplines = new List<Discipline>();

        // Constructors
        public Teacher(string name)
            : base(name)
        {
        }

        public Teacher(string name, List<Discipline> disciplines) 
            : base(name)
        {
            this.disciplines = disciplines;
        }

        // Method for add disciplines on the fly
        public void AddDiscipline(Discipline discipline)
        {
            this.disciplines.Add(discipline);
        }

        // ToString
        public override string ToString()
        {
            string str = "";
            str += "Teacher: " + base.Name + "\n";
            str += base.Name + " teach these disciplines:" + "\n";
            foreach (Discipline discipline in disciplines)
            {
                str += discipline.DisciplineName + "\n";
            }

            return str;
        }
    }
}
