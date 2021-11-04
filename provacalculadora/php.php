<?php

session_start();

if (isset($_POST['operator'])) {
    $_SESSION['operator'] = $_POST['operator'];
}

if (isset($_POST['value'])) {
    if ($_SESSION['value'] && $_SESSION['operator']) {
        $_SESSION['valor'] = $_SESSION['valor'] . $_POST['value'];
    } else if ($_SESSION['value']) {
        $_SESSION['value'] = $_SESSION['value'] . $_POST['value'];
    } else {
        $_SESSION['value'] = $_POST['value'];
    }
}

if (isset($_POST['limpar'])) {
    $_SESSION['value'] = '';
    $_SESSION['valor'] = '';
    $_SESSION['operator'] = '';
    $result = '';
} else if (isset($_POST['resultado'])) {
    switch($_SESSION['operator'])
    {
        case '+':
            $result = $_SESSION['value'] + $_SESSION['valor'];
                $_SESSION['value'] = '';
                $_SESSION['valor'] = '';
                $_SESSION['operator'] = '';
            break;
        case '-':
            $result = $_SESSION['value'] - $_SESSION['valor'];
            $_SESSION['value'] = '';
            $_SESSION['valor'] = '';
            $_SESSION['operator'] = '';
            break;
        case '*':
            $result = $_SESSION['value'] * $_SESSION['valor'];
            $_SESSION['value'] = '';
            $_SESSION['valor'] = '';
            $_SESSION['operator'] = '';
            break;
        case '/':
            $result = $_SESSION['value'] / $_SESSION['valor'];
            $_SESSION['value'] = '';
            $_SESSION['valor'] = '';
            $_SESSION['operator'] = '';
            break;
        default:
            $result = 'ERRO';
    }
} else {
    $value = $_SESSION['value'] ?: '';
    $operator = $_SESSION['operator'] ?: '';
    $valor = $_SESSION['valor'] ?: '';
    $result = $value . $operator . $valor;
}
?>