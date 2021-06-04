<?php

function checkForm(array $post): array
{
    $errors = [];

    foreach ($post as $key => $value) {
        $key = $key === 'content' ? 'message' : $key;
        if ($value === '') {
            $errors[] = "Le " . $key . " doit être renseigné";
        }
    }

    return $errors;
}
