<?php

class Articles
{
    public function getArticles(int $limit = 10)
    {
        $query = "SELECT * FROM articles ORDER BY created_at DESC LIMIT %d";
        $query = sprintf($query, $limit);

        return $this->executeSql($query);
    }

    private function executeSql(string $sql)
    {
        $db = new DbConnect();
        return mysqli_query($db->getConnection(), $sql);
    }
}