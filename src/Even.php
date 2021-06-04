<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function parityCheck()
{
    line('Welcome to the Brain Game!');
    line('');
    $name = prompt('May I have your name?');
    line('');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $winNumber = 3;
    for ($i = 0; $i < $winNumber; $i++) {
        $randomNumbers = rand(1, 100);
        line("Question - %s", $randomNumbers);
        $answer = prompt('Your answer');
        $evenNumber = $randomNumbers % 2 === 0 ? 'yes' : 'no';
        if ($answer === $evenNumber) {
            line('Correct!');
        } else {
            line("$answer is wrong answer. Correct answer was $evenNumber");
            line("Let's try again, $name");
        }
    }
    line("You WIN!!! Сongratulations, $name!");
    return;
}
