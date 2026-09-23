<?php
$file="first.txt";
$content="A quick brown fox jumps over the lazy dog";
if(file_exists($file))
    {
        $fp=fopen($file,"r");
        $data=fread($fp,filesize($file));
        readfile($file);
        echo $data;
        if(fwrite($fp,$content))
        {
            echo "File written successfully";
        }
        else
        {
            echo "File writing failed";
        }

        if(rename($file,"second.txt"))
        {
            echo "File renamed successfully";
        }
        else
        {
            echo "File renaming failed";
        }
        fclose($fp);
    }
    else
    {
        echo "File does not exist";
    }
?>
