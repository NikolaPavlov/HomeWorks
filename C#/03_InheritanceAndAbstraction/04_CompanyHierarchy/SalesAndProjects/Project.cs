using System;

namespace _04_CompanyHierarchy.SalesAndProjects
{
    class Project
    {
        private string projectName;
        private string projectStartDate; // validation in the property!
        private string details;
        private string state; // open or closed

        // Prop
        public string ProjectName
        {
            get
            {
                return this.projectName;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Project name can't be null or empty!"); 
                }
                this.projectName = value;
            }
        }
        public string ProjectStartDate
        {
            get
            {
                return this.projectStartDate;
            }
            set
            {
                DateTime tempDate = new DateTime();
                if (DateTime.TryParse(Convert.ToString(value), out tempDate))
                {
                    this.projectStartDate = value;
                }
                else
                {
                    throw new ArgumentException("The date isn't valid, give correct date please!");
                }
            }
        }
        public string Details
        {
            get
            {
                return this.details;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Details can't be null or empty!"); 
                }
                this.details = value;
            }
        }
        public string State
        {
            get
            {
                return this.state;
            }
            set
            {
                if (value == "Open" || value == "Closed")
                {
                    this.state = value; 
                }
                else
                {
                    throw new ArgumentException("Project state should be Open or Closed!");
                }
            }
        }

        // Constructor
        public Project(string progectName, string projectStartDate, string details, string state)
        {
            this.ProjectName = progectName;
            this.ProjectStartDate = projectStartDate;
            this.Details = details;
            this.State = state;
        }

        // Close project method
        public void CloseProject()
        {
            this.State = "Closed";
        }

        // To String
        public override string ToString()
        {
            return string.Format("Project name: {0}, Start date: {1}, Details: {2}, State: {3}",
                this.ProjectName, this.ProjectStartDate, this.Details, this.State);
        }
    }
}
