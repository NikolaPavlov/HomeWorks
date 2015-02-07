namespace _01_GalacticGps
{
    using System;

    public struct Location
    {
        public Location(double latitude, double longitude, Planet planet) 
            : this()
        {
            this.Latitude = latitude;
            this.Longitude = longitude;
            this.Planet = planet;
        }

        public double Latitude { get; set; }
        public double Longitude { get; set; }
        public Planet Planet { get; set; }

        public override string ToString()
        {
            return string.Format("Latitude: {0}\nLongitude: {1}\nPlanet: {2}",
                this.Latitude, this.Longitude, this.Planet);
        }
    }
}
