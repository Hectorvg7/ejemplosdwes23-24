<?php
    $respuestas = ["Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no", "No lo tengo claro", "Seguro que sí", "Yo diría que sí", "Ni de coña nano"];

    $pregunta = $_POST["pregunta"];

    print_r("<b>".$pregunta."</b>");
    print_r("<br>".$respuestas[random_int(0,8)]);