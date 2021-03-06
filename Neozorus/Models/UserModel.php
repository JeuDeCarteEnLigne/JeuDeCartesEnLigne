<?php
class UserModel extends CoreModel{

	/*retourne la liste complète des identifiants
	**/
	public function getLoginList(){
		$req = 'SELECT u_id, u_mail, u_mdp FROM user';
		return $this->makeSelect($req);
	}

	/**
	 * recupere la l'id de la langue associé à un utilisateur
	 * @param  int $idUser identifiant de l'utilisateur
	 * @return int         identifiant de la langue
	 */
	public function getLanguageFor($idUser){
		$sql = 'SELECT u_langue_fk FROM user WHERE u_id=:id';
		$params = array('id'=>$idUser);
		$request = $this->makeSelect($sql,$params);

		$language = array();
		foreach ($request as $key => $value) {
			$language[] = $value['u_langue_fk'];
		}
		if(isset($language[0]) && is_numeric($language[0])){
			return $language[0];
		}
		return 1;
	}

/************************************Enregistrement dans la base de données*****************************************/

	public function enregistrement($tab = array()){
		$e = '';
		$param = ['nom' => $tab['nom'],
			'prenom' => $tab['prenom'],
			'date_naissance' => $tab['date_naissance'],
			'mail' => $tab['mail'],
			'mdp' => password_hash($tab['mdp'], PASSWORD_DEFAULT),
			'question' => $tab['question'],
			'reponse' => $tab['reponse'],
			'offre' => (empty($tab['offre']) ? '0' : '1'),
			'langue' => 1,
			'pseudo' => $tab['pseudo']];
		$req = 'INSERT INTO `user` (u_nom, u_prenom, u_dateNaissance, u_mail, u_mdp, u_question, u_reponse, u_offre,u_pseudo, u_langue_fk) VALUES (:nom,:prenom,:date_naissance,:mail,:mdp,:question,:reponse,:offre,:pseudo,:langue);';
		try{
			$res = $this->makeStatement($req,$param);
		}catch(PDOexception $e){}
		return $e;
	}

	public function getPseudo($id){
		$req = 'SELECT u_pseudo FROM user WHERE u_id = :id';
		$param = [ 'id' => $id ];
		return $this->makeSelect($req, $param)[0];
	}
}
