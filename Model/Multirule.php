<?php

App::uses('MultithemeAppModel', 'Multitheme.Model');

class Multirule extends MultithemeAppModel
{
    var $_create_query = 'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                         title VARCHAR(50),
                         ';
}