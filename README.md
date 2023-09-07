# Tp3_CharleboisAntoine
Voici un site web qui utilise nginx comme equilibreur/repartiteur et qui deploie 2 conteneur apache dans le quel on y trouve 2 site web qui se connecte a la base de donner mariaDB

Le repartiteur Nginx redirige vers un des deux serveur web apache.
Ensuite Les serveur web apache communique avec php afin de charger la connection au serveur mariadb et affiche le resultat sur la page web du site.


# Commande pour lancer le projet
note: assurer vous de modifier votre fichier etc/hosts pour pouvoir appeller tp3.com ou www.tp3.com

- lancer les conteneurs
  ``` docker compose up --build -d ```
  
- utiliser les logs pour verifier que tout fonctionne
``` docker compose logs ```

- verifier les ports ouverts
``` ss -tnap ```

- note: vous pouvez ajouter grep | port
afin de verifier un port specifique

- pour arreter le projet et nettoyer 
``` docker compose down --rmi local -v ```

