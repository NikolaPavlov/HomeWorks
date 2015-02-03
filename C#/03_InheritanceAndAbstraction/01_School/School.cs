namespace _01_School
{
    // abstract class School give Details to all classes AWsome,
    // what a magic

    abstract public class School
    {
        private string details = null;

        public string Details { get; set; }

        public School(string details)
        {
            this.Details = details; 
        }
    }
}
