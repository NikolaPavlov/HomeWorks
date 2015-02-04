using System;
using System.Collections.Generic;

namespace mines
{
    public class Minesweeper
    {
        public class ScoreBoard
        {
            private int points;

            public string PlayeName { get; set; }
            public int Points { get; set; }

            public ScoreBoard()
            {
            }

            public ScoreBoard(string playerName, int points)
            {
                this.PlayeName = playerName;
                this.Points = points;
            }
        }

        private static void Main()
        {
            string controlMenuTarget = string.Empty;
            char[,] field = createPlayField();
            char[,] bombs = placeBombs();
            int scoreCounter = 0;
            bool hitBomb = false;
            List<ScoreBoard> topPlayers = new List<ScoreBoard>(6);
            int row = 0;
            int col = 0;
            bool flag = true;
            const int maxScore = 35;
            bool flagTwo = false;

            do
            {
                if (flag)
                {
                    Console.WriteLine(
                        "Hajde da igraem na “Mini4KI”. Probvaj si kasmeta da otkriesh poleteta bez mini4ki."
                        + " Komanda 'top' pokazva klasiraneto, 'restart' po4va nova igra, 'exit' izliza i hajde 4ao!");
                    CreatePlayedFIeld(field);
                    flag = false;
                }

                Console.Write("Daj row i col : ");
                controlMenuTarget = Console.ReadLine().Trim();

                if (controlMenuTarget.Length >= 3)
                {
                    if (int.TryParse(controlMenuTarget[0].ToString(), out row) && 
                        int.TryParse(controlMenuTarget[2].ToString(), out col) && 
                        row <= field.GetLength(0) && col <= field.GetLength(1))
                    {
                        controlMenuTarget = "turn";
                    }
                }

                switch (controlMenuTarget)
                {
                    case "top":
                        scoreBoard(topPlayers);
                        break;
                    case "restart":
                        field = createPlayField();
                        bombs = placeBombs();
                        CreatePlayedFIeld(field);
                        hitBomb = false;
                        flag = false;
                        break;
                    case "exit":
                        Console.WriteLine("4a0, 4a0, 4a0!");
                        break;
                    case "turn":
                        if (bombs[row, col] != '*')
                        {
                            if (bombs[row, col] == '-')
                            {
                                PlayerTurnNow(field, bombs, row, col);
                                scoreCounter++;
                            }

                            if (maxScore == scoreCounter)
                            {
                                flagTwo = true;
                            }
                            else
                            {
                                CreatePlayedFIeld(field);
                            }
                        }
                        else
                        {
                            hitBomb = true;
                        }

                        break;
                    default:
                        Console.WriteLine("\nGreshka! nevalidna Komanda\n");
                        break;
                }

                if (hitBomb)
                {
                    CreatePlayedFIeld(bombs);
                    Console.Write("\nHrrrrrr! Umria gerojski s {0} to4ki. " + "Daj si nickName: ", scoreCounter);
                    string nickName = Console.ReadLine();
                    ScoreBoard currPlayer = new ScoreBoard(nickName, scoreCounter);
                    if (topPlayers.Count < 5)
                    {
                        topPlayers.Add(currPlayer);
                    }
                    else
                    {
                        for (int i = 0; i < topPlayers.Count; i++)
                        {
                            if (topPlayers[i].Points < currPlayer.Points)
                            {
                                topPlayers.Insert(i, currPlayer);
                                topPlayers.RemoveAt(topPlayers.Count - 1);
                                break;
                            }
                        }
                    }

                    topPlayers.Sort((ScoreBoard r1, ScoreBoard r2) => r2.PlayeName.CompareTo(r1.PlayeName));
                    topPlayers.Sort((ScoreBoard r1, ScoreBoard r2) => r2.Points.CompareTo(r1.Points));
                    scoreBoard(topPlayers);

                    field = createPlayField();
                    bombs = placeBombs();
                    scoreCounter = 0;
                    hitBomb = false;
                    flag = true;
                }

                if (flagTwo)
                {
                    Console.WriteLine("\nBRAVOOOS! Otvri 35 kletki bez kapka kryv.");
                    CreatePlayedFIeld(bombs);
                    Console.WriteLine("Daj si imeto, batka: ");
                    string playerName = Console.ReadLine();
                    ScoreBoard currPlayerPoints = new ScoreBoard(playerName, scoreCounter);
                    topPlayers.Add(currPlayerPoints);
                    scoreBoard(topPlayers);
                    field = createPlayField();
                    bombs = placeBombs();
                    scoreCounter = 0;
                    flagTwo = false;
                    flag = true;
                }
            }
            while (controlMenuTarget != "exit");
            Console.WriteLine("Made in Bulgaria - Uauahahahahaha!");
            Console.WriteLine("AREEEEEEeeeeeee.");
            Console.Read();
        }

        private static void scoreBoard(List<ScoreBoard> currPlayerPoints)
        {
            Console.WriteLine("\nTo4KI:");

            if (currPlayerPoints.Count > 0)
            {
                for (int i = 0; i < currPlayerPoints.Count; i++)
                {
                    Console.WriteLine("{0}. {1} --> {2} kutii", i + 1, currPlayerPoints[i].PlayeName, currPlayerPoints[i].Points);
                }

                Console.WriteLine();
            }
            else
            {
                Console.WriteLine("prazna klasaciq!\n");
            }
        }

        private static void PlayerTurnNow(char[,] field, char[,] bombs, int row, int col)
        {
            char placeOfBomb = Points(bombs, row, col);
            bombs[row, col] = placeOfBomb;
            field[row, col] = placeOfBomb;
        }

        private static void CreatePlayedFIeld(char[,] board)
        {
            int rows = board.GetLength(0);
            int cols = board.GetLength(1);
            Console.WriteLine("\n    0 1 2 3 4 5 6 7 8 9");
            Console.WriteLine("   ---------------------");
            for (int i = 0; i < rows; i++)
            {
                Console.Write("{0} | ", i);
                for (int j = 0; j < cols; j++)
                {
                    Console.Write(string.Format("{0} ", board[i, j]));
                }

                Console.Write("|");
                Console.WriteLine();
            }

            Console.WriteLine("   ---------------------\n");
        }

        private static char[,] createPlayField()
        {
            const int boardRows = 5;
            const int boardColumns = 10;
            char[,] board = new char[boardRows, boardColumns];

            for (int i = 0; i < boardRows; i++)
            {
                for (int j = 0; j < boardColumns; j++)
                {
                    board[i, j] = '?';
                }
            }

            return board;
        }

        private static char[,] placeBombs()
        {
            int rows = 5;
            int cols = 10;
            char[,] playningField = new char[rows, cols];

            for (int i = 0; i < rows; i++)
            {
                for (int j = 0; j < cols; j++)
                {
                    playningField[i, j] = '-';
                }
            }

            List<int> randomBombPlaces = new List<int>();
            while (randomBombPlaces.Count < 15)
            {
                Random random = new Random();
                int bomb = random.Next(50);
                if (!randomBombPlaces.Contains(bomb))
                {
                    randomBombPlaces.Add(bomb);
                }
            }

            foreach (int place in randomBombPlaces)
            {
                int col = place / cols;
                int row = place % cols;
                if (row == 0 && place != 0)
                {
                    col--;
                    row = cols;
                }
                else
                {
                    row++;
                }

                playningField[col, row - 1] = '*';
            }

            return playningField;
        }

        private static void CalculatePoints(char[,] field)
        {
            int cols = field.GetLength(0);
            int rows = field.GetLength(1);

            for (int i = 0; i < cols; i++)
            {
                for (int j = 0; j < rows; j++)
                {
                    if (field[i, j] != '*')
                    {
                        char currPoints = Points(field, i, j);
                        field[i, j] = currPoints;
                    }
                }
            }
        }

        private static char Points(char[,] board, int row, int col)
        {
            int currCount = 0;
            int rows = board.GetLength(0);
            int cols = board.GetLength(1);

            if (row - 1 >= 0)
            {
                if (board[row - 1, col] == '*')
                {
                    currCount++;
                }
            }

            if (row + 1 < rows)
            {
                if (board[row + 1, col] == '*')
                {
                    currCount++;
                }
            }

            if (col - 1 >= 0)
            {
                if (board[row, col - 1] == '*')
                {
                    currCount++;
                }
            }

            if (col + 1 < cols)
            {
                if (board[row, col + 1] == '*')
                {
                    currCount++;
                }
            }

            if ((row - 1 >= 0) && (col - 1 >= 0))
            {
                if (board[row - 1, col - 1] == '*')
                {
                    currCount++;
                }
            }

            if ((row - 1 >= 0) && (col + 1 < cols))
            {
                if (board[row - 1, col + 1] == '*')
                {
                    currCount++;
                }
            }

            if ((row + 1 < rows) && (col - 1 >= 0))
            {
                if (board[row + 1, col - 1] == '*')
                {
                    currCount++;
                }
            }

            if ((row + 1 < rows) && (col + 1 < cols))
            {
                if (board[row + 1, col + 1] == '*')
                {
                    currCount++;
                }
            }

            return char.Parse(currCount.ToString());
        }
    }
}