<?php

/**
 * Get the base path
 *
 * @param string $path
 * @return string
 */
<<<<<<< HEAD
=======

>>>>>>> 48863831af1e001615470ae6c5723e2194c3f35b
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}


/**
 * Load a view
 *
 * @param string $name
 * @return void
 */
<<<<<<< HEAD
function loadView($name, $data = [])
{

    $viewPath =  basePath("App/views/{$name}.view.php");
    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View {$name} not found.";
=======

function loadView($name)
{
    $viewPath =  basePath("views/{$name}.view.php");
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '{$name} not found!'";
>>>>>>> 48863831af1e001615470ae6c5723e2194c3f35b
    }
}


/**
<<<<<<< HEAD
 * Load a partial
=======
 * Load a partial directory
>>>>>>> 48863831af1e001615470ae6c5723e2194c3f35b
 *
 * @param string $name
 * @return void
 */
<<<<<<< HEAD
function loadPartial($name = '')
{

    $partialPath = basePath("App/views/partials/{$name}.php");
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "View {$name} not found.";
    }
}

/**
 * Inspect a value
=======

function loadPartial($name)
{
    $partialPath = basePath("views/partials/{$name}.php");


    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '{$name} not found!'";
    }
}

// DEUGGING PURPOSES
/**
 * Inspect a value(s)
>>>>>>> 48863831af1e001615470ae6c5723e2194c3f35b
 *
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
<<<<<<< HEAD
    echo '<pre>';
}


/**
 * Inspect a value and die
=======
    echo '</pre>';
}

/**
 * Inspect a value(s) and die
>>>>>>> 48863831af1e001615470ae6c5723e2194c3f35b
 *
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
<<<<<<< HEAD
    echo '<pre>';
}

/**
 * Format salary
 *
 * @param string $salary
 * @return string $formattedSalary
 */
function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
=======
    echo '</pre>';
>>>>>>> 48863831af1e001615470ae6c5723e2194c3f35b
}
