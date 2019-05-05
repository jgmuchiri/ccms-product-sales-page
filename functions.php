<?php
function centsToDollars($value)
{
    return number_format(($value / 100), 2, '.', ' ');
}