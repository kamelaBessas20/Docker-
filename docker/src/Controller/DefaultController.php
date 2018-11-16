<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\DBAL\Driver\Connection;

class DefaultController extends Controller
{
    public function index(Connection $db)
    {
        dump($db->fetchAll('SELECT * FROM mysql'));
    }
}