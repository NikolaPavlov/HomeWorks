    import java.io.BufferedReader;
    import java.io.FileReader;
    import java.io.IOException;
     
    public class _08_SumNumbersFromATextFile {
     
            public static void main(String[] args) {
     
                    try {
                            FileReader fileReader = new FileReader("problem8.txt");
                            BufferedReader bufferReader = new BufferedReader(fileReader);
                            int sum = 0;
                            String str;
                            while ((str = bufferReader.readLine()) != null) {
                                    sum += Integer.parseInt(str);
                            }
                            System.out.println(sum);
                            bufferReader.close();
     
                    } catch (IOException e) {
                            System.out.println("IOException!");
                    }
     
            }
     
    }

