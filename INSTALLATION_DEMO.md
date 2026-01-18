# Guide d'Installation - Association Tivaouane (Démo Client)

## 🎯 Configuration de la Base de Données

### Étape 1: Accès à phpMyAdmin
1. Connectez-vous à phpMyAdmin avec vos identifiants :
   - **Serveur** : gen9397.com
   - **Base de données** : u930078015_Association
   - **Utilisateur** : u930078015_Endtoend

### Étape 2: Création des Tables
1. Dans phpMyAdmin, sélectionnez la base `u930078015_Association`
2. Cliquez sur l'onglet "SQL"
3. Copiez et exécutez le contenu du fichier `database_setup.sql`
4. Vérifiez que toutes les tables ont été créées

### Étape 3: Insertion des Données de Démo
1. Toujours dans l'onglet "SQL"
2. Copiez et exécutez le contenu du fichier `demo_data.sql`
3. Vérifiez que les données ont été insérées

## 🚀 Configuration Laravel

### Étape 4: Configuration .env
Votre fichier `.env` est déjà configuré avec :
```
DB_CONNECTION=mysql
DB_HOST=92.113.16.49
DB_PORT=3306
DB_DATABASE=u930078015_Association
DB_USERNAME=u930078015_Endtoend
DB_PASSWORD=Endtoend2002@
```

### Étape 5: Test de l'Application
```bash
php artisan serve
```

## 👤 Comptes de Démonstration

### Administrateur
- **Email** : admin@gen9397.com
- **Mot de passe** : password

### Utilisateurs Test
- **Email** : moussa.diop@email.com | **Mot de passe** : password
- **Email** : fatou.sall@email.com | **Mot de passe** : password
- **Email** : ibrahima.fall@email.com | **Mot de passe** : password

## 📋 Fonctionnalités Démo

✅ **Gestion des Utilisateurs**
- Inscription/Connexion
- Profils membres
- Administration

✅ **Gestion des Événements**
- Création d'événements
- Inscriptions
- Calendrier

✅ **Système de Blog**
- Articles/Actualités
- Gestion de contenu

✅ **Interface Premium**
- Design moderne
- Responsive
- Couleurs institutionnelles

## 🔧 Dépannage

Si la connexion à la base distante ne fonctionne pas :
1. Vérifiez que votre IP est autorisée
2. Contactez l'hébergeur pour activer les connexions externes
3. Utilisez phpMyAdmin pour les opérations de base de données

## 📞 Support
Pour toute question technique, contactez l'équipe de développement.