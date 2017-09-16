<?php

function from(DateTime $date)
{
    //
    // YOUR CODE GOES HERE
    //
    // $duration = new DateInterval('PT1000000000S');
    // return DateTimeImmutable::createFromMutable($date)->add($duration);
    $date = clone $date;
    $date->add(new DateInterval('PT1000000000S'));

    return $date;
    
}
