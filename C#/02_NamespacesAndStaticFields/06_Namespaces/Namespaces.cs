using System;
// using alias for more complexity be awsome, 
// don't allow anyone to understand your code

using g2d = _06_Namespaces.Geometry.Geometry2D;
using g3d = _06_Namespaces.Geometry.Geometry3D;
using gUI = _06_Namespaces.Geometry.GeometruUI;
using gS = _06_Namespaces.Geometry.Storage;

class Test
{
    static void Main()
    {
        // this test worked before added aliases 
        //Console.WriteLine(Circle.Test());

        // test after added aliases
        Console.WriteLine(g2d.Circle.Test());
    }
}