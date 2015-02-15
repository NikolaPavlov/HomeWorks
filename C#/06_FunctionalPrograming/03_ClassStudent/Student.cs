namespace _03_ClassStudent
{
    using System;
    using System.Collections.Generic;
    using System.Text;

    class Student
    {
        private string firstName;
        private string lastName;
        private int age;
        private int facultyNumber;
        private string phone;
        private string email;
        private IList<int> marks;
        private int groupNumber;

        // Constructor
        public Student(string firstName, string lastName, int age, int facultyNumber, string phone,
            string email, IList<int> marks, int groupNumber)
        {
            this.FirstName = firstName;
            this.LastName = lastName;
            this.Age = age;
            this.FacultyNumber = facultyNumber;
            this.Phone = phone;
            this.Email = email;
            this.Marks = marks;
            this.GroupNumber = groupNumber;
        }

        // Prop
        #region Properties
        public string FirstName
        {
            get
            {
                return this.firstName;
            }
            set
            {
                Validator.CheckForNullOrEmptyString(value, "FirstName");
                this.firstName = value;
            }
        }

        public string LastName
        {
            get
            {
                return this.lastName;
            }
            set
            {
                Validator.CheckForNullOrEmptyString(value, "LastName");
                this.lastName = value;
            }
        }

        public int Age
        {
            get
            {
                return this.age;
            }
            set
            {
                Validator.CheckForNegativeOrZero(value, "Age");
                this.age = value;
            }
        }

        public int FacultyNumber
        {
            get
            {
                return this.facultyNumber;
            }
            set
            {
                Validator.CheckForNegativeOrZero(value, "FacultyNumber");
                this.facultyNumber = value;
            }
        }

        public string Phone
        {
            get
            {
                return this.phone;
            }
            set
            {
                Validator.CheckForNullOrEmptyString(value, "Phone");
                this.phone = value;
            }
        }

        public string Email
        {
            get
            {
                return this.email;
            }
            set
            {
                Validator.CheckForNullOrEmptyString(value, "Email");
                this.email = value;
            }
        }

        public IList<int> Marks
        {
            get
            {
                return this.marks;
            }
            set
            {
                Validator.CheckForNull(value, "Marks");
                this.marks = value;
            }
        }

        public int GroupNumber
        {
            get
            {
                return this.groupNumber;
            }
            set
            {
                Validator.CheckForNegativeOrZero(value, "Group number");
                this.groupNumber = value;
            }
        }
        #endregion

        // Methods
        public override string ToString()
        {
            // Return only first and second name, I can't give this stupid problems alot of my time!
            // Proper way is to make diferent return for every Problem...
            StringBuilder sb = new StringBuilder();
            sb.Append(this.FirstName + " " + this.LastName);
            return sb.ToString();
        }
    }
}
