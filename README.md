# Projet de Localisation et Affichage des Positions GPS en Temps Réel

Ce projet Android permet d'afficher des positions GPS en temps réel sur Google Maps en récupérant les coordonnées via une API. Les données sont actualisées à intervalles réguliers pour afficher les nouvelles positions sous forme de marqueurs sur la carte.

## Fonctionnalités

- Affichage des positions GPS sur une carte Google Maps.
- Récupération des données via une requête HTTP GET à une API PHP.
- Mise à jour automatique de la carte toutes les secondes pour afficher les nouvelles positions.
- Ajout dynamique de marqueurs sur la carte pour chaque nouvelle position récupérée.

## Structure du Projet

- **MainActivity** : Affiche un bouton pour lancer la carte des positions GPS.
- **MapsLocations** : Gère l'affichage des positions sur Google Maps et actualise la carte périodiquement.
- **API utilisée** : Une API PHP qui retourne les coordonnées GPS enregistrées dans une base de données sous forme de tableau JSON.

## Prérequis

- Android Studio
- Connexion Internet pour charger les données de localisation.
- Un serveur local pour héberger l'API PHP et la base de données.
![image](https://github.com/user-attachments/assets/b9a78e35-c30d-4a34-80d2-b73f58e3a04d)


https://github.com/user-attachments/assets/30c8e7c2-962b-46b4-bf31-206d50b305f2
### Permissions requises

Assurez-vous d'avoir les permissions suivantes dans le fichier `AndroidManifest.xml` pour accéder aux services de localisation et à Internet :

```xml
<uses-permission android:name="android.permission.ACCESS_NETWORK_STATE" />

    <uses-permission android:name="android.permission.INTERNET" />
    <uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" />
    <uses-permission android:name="android.permission.ACCESS_COARSE_LOCATION" />
    <uses-permission android:name="android.permission.READ_PHONE_STATE" />




