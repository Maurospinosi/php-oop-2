<?php
 class User{
     public $name;
     public $lastname;
     public $mail;
    /* FUNZIONE NORMALE (stabilisce il tipo di pass in base all'età*/
    function setEta($eta){
        if($eta <=20){
             $this->pass= "Premium";
        }else if ($eta > 20 && $eta <=50){
            $this->pass= "Gold";
        }else{
            $this->pass= "Bronze";
        }
    }
    public function getEta(){
        return $this->pass;
    }

    /* FUNZIONE CONSTRUCT*/ 
    public function __construct($_lastname, $_mail, $_password){
        $this->lastname =$_lastname;
        $this->mail =$_mail;
        $this->password =$_password;
    }
}

 $user1 = new User("Cannavacciuolo","tonino@gmail.com", "toninchef");
 $user1->name = "Antonio";
/*  $user1->lastname = "Cannavacciuoplo";
 $user1->mail = "tonino@gmail.com"; */
 $user1->setEta(10);

 $user2 = new User("Kratos", "kraty@hotmail.com","ragnarock");
 $user2->name = "Michele";
/*  $user2->lastname = "Kratos";
 $user2->mail = "kraty@hotmail.com"; */
 $user2->setEta(32);

 $user3 = new User("trump", "dick@gmail.com","messico");
 $user3->name = "donald";
/*  $user3->lastname = "trump";
 $user3->mail = "dick@gmail.com"; */
 $user3->setEta(19);

 $user4 = new User("Nondevemorire", "giallo@virgilio.com","come finisce il libro");
 $user4->name = "Miseri";
/*  $user4->lastname = "Nondevemorire";
 $user4->mail = "giallo@virgilio.com"; */
 $user4->setEta(79);

 $users = [$user1, $user2, $user3, $user4];
 /* ---------------------------------------------------------------- */

class Vote extends User{
    public $number;

}

 $user_1 = new Vote("Cannavacciuoplo","tonino@gmail.com", "toninchef");
 $user_1->name = "Antonio";
/*  $user_1->lastname = "Cannavacciuoplo";
 $user_1->mail = "tonino@gmail.com"; */
 $user_1->setEta(10);
 $user_1->number = "332-4567896";

 $user_2 = new Vote("Kratos", "kraty@hotmail.com", "ragnarock");
 $user_2->name = "Kratos";
/*  $user_2->lastname = "Kratos";
 $user_2->mail = "kraty@hotmail.com"; */
 $user_2->setEta(32);
 $user_2->number = "392-4564321";


 $user_3 = new Vote("trump", "dick@gmail.com", "messico");
 $user_3->name = "donald";
/*  $user_3->lastname = "trump";
 $user_3->mail = "dick@gmail.com"; */
 $user_3->setEta(19);
 $user_3->number = "321-6312098";

 $user_4 = new Vote("Nondevemorire", "giallo@virgilio.com", "come finisce il libro");
 $user_4->name = "Miseri";
/*  $user_4->lastname = "Nondevemorire";
 $user_4->mail = "giallo@virgilio.com"; */
 $user_4->setEta(79);
 $user_4->number = "393-2896543";

 $users_1 = [$user_1, $user_2, $user_3, $user_4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe User</title>
</head>
<body>
<h2>Tabella padre</h2>
<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th> 
        <th>Mail</th>
    </tr>

    <?php foreach($users as $user) {?>
        <tr>
            <td><?php echo $user->name ?></td>
            <td><?php echo $user->lastname ?></td>
            <td><?php echo $user->mail ?></td>
        </tr>
    <?php }?>
</table>

<h2>Tabella figlia</h2>
<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th> 
        <th>Mail</th>
        <th>Number</th>
        <th>Password</th>
    </tr>
    <?php foreach($users_1 as $user) {?>
        <tr>
            <td><?php echo $user->name ?></td>
            <td><?php echo $user->lastname ?></td>
            <td><?php echo $user->mail ?></td>
            <td><?php echo $user->number ?></td>
            <td><?php echo $user->password ?></td>
        </tr>
    <?php }?>
</table>

</body>
</html>