namespace _01_StringBuilderExtension
{
    using System;
    using System.Text;
    using System.Collections.Generic;

    public static class SbExtension
    {
        public static string Substring(this StringBuilder sb, int start, int length)
        {
            string str = sb.ToString();
            str = str.Substring(start, length);
            return str;
        }

        public static StringBuilder RemoveText(this StringBuilder sb, string text)
        {
            sb.Replace(text, "");
            return sb;
        }

        public static void AppendAll<T>(this StringBuilder sb, IEnumerable<T> collection)
        {
            foreach (var element in collection)
            {
                sb.Append(element.ToString());
            }
        }
    }
}
