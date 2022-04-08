<?php
/**
 * Ce script est composé de fonctions d'exploitation des données
 * détenues pas le SGBDR MySQL utilisées par la logique de l'application.
 *
 * C'est le seul endroit dans l'application où a lieu la communication entre
 * la logique métier de l'application et les données en base de données, que
 * ce soit en lecture ou en écriture.
 *
 * PHP version 7
 *
 * @category  Database_Access_Function
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

/**
 *  Les fonctions dépendent d'une connection à la base de données,
 *  cette fonction est déportée dans un autre script.
 */
require_once 'connect-db.php';

/**
 * Obtenir la liste de tous les pays référencés d'un continent donné
 *
 * @param string $continent le nom d'un continent
 * 
 * @return array tableau d'objets (des pays)
 */
function getCountriesByContinent($continent)
{
    // pour utiliser la variable globale dans la fonction
    global $pdo;
    $query = 'SELECT * FROM Country WHERE Continent = :cont;';
    $prep = $pdo->prepare($query);
    // on associe ici (bind) le paramètre (:cont) de la req SQL,
    // avec la valeur reçue en paramètre de la fonction ($continent)
    // on prend soin de spécifier le type de la valeur (String) afin
    // de se prémunir d'injections SQL (des filtres seront appliqués)
    $prep->bindValue(':cont', $continent, PDO::PARAM_STR);
    $prep->execute();
    // var_dump($prep);  pour du debug
    // var_dump($continent);

    // on retourne un tableau d'objets (car spécifié dans connect-db.php)
    return $prep->fetchAll();
}

function getCapital($id)
{
    global $pdo;

    if(empty($id))
    {
        echo("PAS DE CAPITALE");
    }
    else
    {
        $query = "SELECT city.Name FROM city WHERE id = :id ;";
        $prep = $pdo->prepare($query);
        $prep->bindValue(':id', $id, PDO::PARAM_STR);
        $prep->execute();
        return $prep->fetch()->Name;
    }
    
}

/**
 * Obtenir la liste des pays
 *
 * @return liste d'objets
 */
function getAllCountries()
{
    global $pdo;
    $query = 'SELECT * FROM Country;';
    return $pdo->query($query)->fetchAll();
}

function deleteCompte($id)
  {
    global $pdo;
    $query = "DELETE FROM compte WHERE idcompte = :id ;";
    try 
    {
	    $prep = $pdo->prepare($query);
	    $prep->bindValue(':id', $id);
	    $prep->execute();
    }
    catch ( Exception $e ) 
    {
	    die ("erreur dans la requete ".$e->getMessage());
    }    
  }

  function getAuthentification($login,$pass)
  {
    global $pdo;
    $query = "SELECT * FROM compte where login=:login and password=:pass";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':pass', $pass);
    $prep->execute();
    // on vérifie que la requête ne retourne qu'une seule ligne

    if($prep->rowCount() == 1)
    {
      $result = $prep->fetch();
      return $result;
    }
    else
      return false;
  }

  function ajoutCompte()
  {
    global $pdo;
    $login=$_POST['login'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $requete = "INSERT INTO compte (login, password, role) VALUES(:login, :password, :role)";
    $query = $pdo->prepare($requete);
    $query->bindValue(':login', $login, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':role', $role, PDO::PARAM_STR);
    $query->execute(array(':login'=>$login, ':password'=>$password, ':role'=>$role));
    echo '<font color="red">Le compte a bien été ajouté</font>';
  } 

  function remplaceEspace($nom){
    global $pdo;
    for($i=0;$i<=strlen($nom)-1;$i++){
        if($nom[$i] == ' ' ){
            $nom[$i] = '_';
        }
        elseif($nom[$i]==","){
            $nom=' ';
        }
    } 
    return $nom;
}
function getDetailsPays($id)
{
    global $pdo;
    $query = 'SELECT Name, Continent, Region, IndepYear, Population, LifeExpectancy, GNP, LocalName, GovernmentForm, HeadOfState, Capital FROM Country where id = :id;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $id, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchALL();
}

?>
