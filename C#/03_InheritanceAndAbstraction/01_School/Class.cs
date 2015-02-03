using System;
using System.Collections.Generic;
using System.Linq;

namespace _01_School
{
    class Class : School
    {
        public string textId;
        List<Teacher> teachers = new List<Teacher>();

        // Prop
        public string TextId
        {
            get
            {
                return this.textId;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("TextId for Class can't be null or empty!"); 
                }
                this.textId = value;
            }
        }

        // Constructors
        public Class(string textId, string details = null) 
            : base(details)
        {
            this.TextId = textId;
        }

        public Class(string textId, List<Teacher> teachers, string details = null)
            : this(textId, details)
        {
            this.teachers = teachers;
        }

        // Method for add teacher on the fly
        public void AddTeacher(Teacher teacher)
        {
            this.teachers.Add(teacher);
        }

        // To String
        public override string ToString()
        {
            string str = "";
            str += "Class Uniq ID: " + this.TextId + "\n";
            str += "Teachers for class with class id: " + this.TextId + ":\n";

            foreach (Teacher teacher in this.teachers)
            {
                str += teacher.Name + "\n";     
            }

            if (base.Details != null)
            {
                str += "Details about this class:" + base.Details; 
            }

            return str;
        }
    }
}
