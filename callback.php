<?php 
use Run\Model\DataPDO;
use Run\Model\User;
use Run\Security\Security;
use Run\Model\Bulletin;
require('./src/Security/security.class.php');
require('./src/Model/User.class.php');
require('./src/Model/Bulletin.class.php');
require('./src/Model/Database.class.php');
$connect = new DataPDO();
$user = new User();
$filter= new Security();
$bulletin = new Bulletin();


$allUser = $connect->exePrepaQuery($user->getAllUser());
$matieres =$connect->exePrepaQuery($bulletin->allmatiere());




