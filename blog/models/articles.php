<?php

    function articles_all($link) {    // Формируем запрос
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
    // Извлекаем данные из БД
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }

?>