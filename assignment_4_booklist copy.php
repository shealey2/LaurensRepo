<!DOCTYPE HTML>
<html>

<head>
    <title>Assignment 4 - Booklist</title>
</head>

<body>
<?php

    //*****Posting Form Data

    $find_keyword = $_POST['find_keyword'];
    $sort_order = $_POST['sort'];

    $booklist_array = array(); //creates new empty array

    //*****Loading Array From Text File

    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    $filename = $DOCUMENT_ROOT.'data/'.'booklist.txt';

    if (!file_exists($filename))  //*****IF FILE DOES NOT EXIST
    {
        print "<strong>Booklist file is missing.</strong>";
        exit;
    }

    $lines_in_file = count(file($filename));

    $fp = fopen($filename, 'r');

    for ($ii = 1; $ii <= $lines_in_file; $ii++) //gets, trims, and creates array from file data
    {
        $line = fgets($fp);
        $book = trim($line);
        array_push($booklist_array, $book);
    }
    fclose($fp); //closes file
    sort($teamMembers); //sorts array data (alphabetical)

    print $find_keyword
    print $booklist_array


    // $pos = strpos($book, $find_keyword);

    // if ($pos === false)
    // {
    //         //RETURN RESULTS FOR NO KEYWORD
    // }

    // else
    // {
    //     //IF STATEMENT FOR kEYWORD SEARCH PLUS RADIO BUTTON IS SELECTED IN ASCENDING ORDER 
    //     {
    //         //XXXXX
    //     }

    //     //ELSE STATEMENT FOR KEYWORD SEARCH PLUS RADIO BUTTON IN DESCENDING ORDER
    //     {
    //         //XXXXX
    //     }
    // }
    


    // }

    // fclose($fp);


    // //**If Empty */

    // if (!empty($keyword))
    // {
    //     print "<h2>Current Titles </h2><br />";
    //     print "<h3>(Sorted in Alphabetical Order)</h3>"
    // }

    // //**
    // //Page for No Keyword
    // //**

    // <h1>Current Titles</h1>

    // <h3>(Sorted in Alphabetical Order)</h3>
    // displayFile($filename);

    // function displayTable($filename)
    // {
    //     $myTable = "\n<table border='1'>";

    //     $myTable .= "<tr>";
    //     $myTable .= "<th>Title</th>";
    //     $myTable .= "<th>Type</th>";
    //     $myTable .= "<th>ISBN</th>";
    //     $myTable .= "</tr>\n\n";

    //     $line_ctr = 0;

    //     $fp = fopen($booklist, "r"); 

    //     if ($fp)
    //     {
    //         while (true)
    //         {
    //             $line = fgets($fp);

    //             if (feof($fp))
    //             {
    //                 break;
    //             }

    //             $line_ctr++;

    //             $line_ctr_remainder = $line_ctr % 2;

    //             if ($line_ctr_remainder == 0)
    //             {
    //                 $style = "style='background-color: #FFFFCC;'";
    //             } 

    //             else
    //             {
    //                 $style = "style='background-color: white;'";
    //             }

    //             list($title, $type, $isbn) = explode('*', $line);

    //             $myTable .= "<tr $style>";
    //                 $myTable .= "<td>".$title."</td>";
    //                 $myTable .= "<td>".$type."</td>";
    //                 $myTable .= "<td>".$isbn."</td>";
    //             $myTable .="</tr>\n";        
    //         }

    //         fclose($fp);

    //         $myTable .= "</table>";

    //         $rtn = array($line_ctr, $myTable);
    //     }

    //     else
    //     {
    //         $rtn = array()
    //     }
    // }
?>

</body>
</html>