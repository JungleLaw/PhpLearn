<html>
<?php

/**
 * Created by PhpStorm.
 * User: Law
 * Date: 2017/4/23
 * Time: 12:47
 */
class Object
{
    public $name;
    public $id;
    public $account;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

}

?>
<body>
<form action="oop2.php" method="post"/>
<?php
$object1 = new Object();
$object1->setName("set");
$object1->id = "1";
$object1->account = "accouynt";
echo "name = " . $object1->name . ",id = " . $object1->id . ",account = " . $object1->account;
?>
</body>
</html>