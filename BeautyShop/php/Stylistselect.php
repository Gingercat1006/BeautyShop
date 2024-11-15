<?php
    require_once "Abstract.php"

    class Memberselect extends Abstract{
        $sql = "
            SELECT 
                StylistNo,
                StylistName,
                RankCD
            FROM Stylist
            ORDER BY RankCD
            ";
        try{
            $stmt = $dbh->query($sql);
            foreach($stmt as $row){
                print("<option value='" . $row["StylistNo"] . "'>" . $row["StylistName"] . " " . $row["RankCD"] . "</option>")
            }
        }
    }
?>