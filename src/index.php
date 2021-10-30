<?php

//Creation du personnage
if (isset($_POST['creer']) && isset($_POST['personnageNom'])) {
    switch ($_POST['personnageType']) {
        case 'magicien' :
            $perso = new Magicien(['nom' => $_POST['personnageNom']]);
            break ;
        case 'guerrier' :
            $perso = new Guerrier(['nom' => $_POST['personnageNom']]);
            break ;
        default :
            $message = 'Vous devez choisir entre un Magicien ou un Guerrier';
            unset($perso);
            break;
    } 
    
    // Si le personnage est valide => création du personnage
    if(isset($perso))
    {
        if (!$perso->validName())
        {
            $message = 'Le nom choisi n\'est pas valide.';
            unset($perso);
        }
        
        elseif ($manager->ifPersonnageExist($perso->getNom()))
        {
            $message = 'Le nom du personnage est déjà utilisé.';
            unset($perso);
        }
        
        else
        {
            $manager->addPersonnage($perso);
            $message = 'Le personnage est créé.';
        }
    }
    
    else {
        
        if ($perso->toBeAsleep()) {
            echo 'Un magicien vous a endormi ! Vous allez vous réveiller dans ' . $perso->reveil() . '.';
        }   
        
        else {
            foreach ($persos as $onePerson) {
                echo '<a href="?frapperUnPersonnage=' . $onePerson->getId() . '">' . htmlspecialchars($onePerson->getNom()) . '</a> (Dégats : ' . $onePerson->getDegats() . ' - type : ' . $onePerson->getType() . ')';
                
                if ($perso->getType() == 'magicien') {
                    echo ' - <a href="?envouter=' . $onePerson->getId() . '">Lancer un sort</a>';
                }
            }
        }
    }
}

if (empty($persos)) {
    echo 'Il n\'y aucun adversaire';
}



//Each scenario text
/* switch ($retour)
{
    case Characters::HIMSELF :
        $message = 'Mais...Pourquoi tu veux te frapper !';
        
        break;

    case Characters::NO_MANA :
        $message = "Tu n\'as plus de mana";
        break;
    
    case Characters::CHARACTER_HIT :
        $message = 'Le personnage a bien été frappé';
        
        $manager->updateCharacters($perso);
        $manager->updateCharacters($persoAFrapper);
        
        break;
    
    case Characters::CHARACTER_DEAD :
        $message = 'Vous avez tué ce personnage !';
        
        $manager->updateCharacters($perso);
        $manager->deleteCharacters($persoAFrapper);
        
        break;

    case Characters::HYPNOTISED :
        $message = 'Vous vous êtes endormi...Vous ne pouvez plus agir pendant 15 secondes...';

        break;
    
    case Characters::CHARACTER_ASLEEP :
        $message = 'Vous êtes endormi et ne pouvez pas frapper un adversaire';
        
        break;
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/css?f[]=sentient@200,201,300,301,400,401,500,501,700,701&display=swap" rel="stylesheet">
    <title>Small Game - Fight</title>
    <style>
    body {
        font-family: 'Sentient', serif;
        color: black;
    }

    h1 {
        text-align: center;
    }

    .container {
        height: 60vh;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
        align-items: center;
    }

    button {
        font-family: 'Sentient', serif;
        background-color: navy;
        color: white;
        border: solid navy 2px;
    }
    </style>
</head>

<body>
    <h1>Fighting Club</h1>
    <div class="container">
        <div class="joueur">
            <form action="" method="post">
                <label for="name">Joueur 1</label>
                <input type="text" id="name" maxlength="20" placeholder="Entrez votre pseudo">
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <label for="personnageType" class="col-xs-12 col-sm-4 col-md-3 control-label">Type du personnage : </label>
                    <select class="form" name="personnageType">
                        <option value="magicien">Magicien</option>
                        <option value="guerrier">Guerrier</option>
                    </select>
                    <input type="submit" value = "Créer ce personnage" name="personnageType" />
                </div>
                
                <button>Play</button>
            </form>
        </div>
        <fieldset>
            <legend>Mes informations</legend>
            <!-- <p>
                Nom : <?= htmlspecialchars($perso->getNom()) ?><br>
                Dégâts : <?= $perso->getDegats() ?><br>
                Type : <?= ucfirst($perso->getType()) ?><br>
            </p> -->
        </fieldset>
    </div>
</body>
</html>