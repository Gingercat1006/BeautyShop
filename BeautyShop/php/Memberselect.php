<?php
    require_once "Abstract.php"

    class Memberselect extends Abstract{
        $sql = "
            SELECT
                MemberNo,
                CONCAT(
                    RubyName,
                    '：',
                    MemberName,
                    ' 様 '
                ) AS MemberInfo,
            IFNULL(Tel, 'なし') AS tel
            FROM
                M_Member
            ORDER BY
                RubyName
            ";
        try{
            $stmt = $dbh->query($sql);
            foreach($stmt as $row){
                print("<option value='" . $row["MemberNo"] . "'>" . $row["MemberInfo"] . $row["tel"] . "</option>")
            }
        }
    }
?>