[20:18] Mikael Very
Exercice Comiti - Le Devis

Comiti est un logiciel mutualisé permettant aux clubs de digitaliser leur gestion, et dont le modèle

économique repose sur un abonnement.

Voici le cahier des charges d’une fonction permettant de ressortir le prix TTC à l’année de

l’abonnement, et qui sera utilisée pour générer un devis. Le calcul du prix se base sur trois

paramètres :

- Le nombre d’adhérents du club

- Le nombre de sections désirées (la section est un découpage du club en plus petites entités pour

faciliter la gestion, séparer les responsables ou encore séparer les paiements)

- La fédération dont le club est membre

Le prix se calcule dans un premier temps sur le nombre d’adhérent :

- De 0 à 100 -> 10€/mois HT

- De 101 à 200 -> 0.10€/adhérent/mois HT

- De 201 à 500 -> 0.09€/adhérent/mois HT

- De 501 à 1000 -> 0.08€/adhérent/mois HT

- A partir de +1000 -> 70€ HT par tranche de 1000 adhérents (une tranche entamée est une tranche

comptée)

- Au-dessus de 10000 -> 1000€/mois HT

Le prix pour les sections est simple : 5€/section/mois HT, et une section est offerte si le club possède

plus de 1000 adhérents.

Enfin, selon la fédération un avantage est obtenu :

- Fédération de Natation (“N”) -> 3 sections offertes

- Fédération de Gymnastique (“G”) -> 15% de réduction sur le cout des adhérents

- Fédération de Basketball (“B”) -> 30% de réduction sur le cout des sections

- Autre fédération -> aucun avantage

Note : la TVA appliquée dans notre situation est de 20%.

-------------------------------------------------------------------------------------------------------------------------------------

Bonus

Au dernier moment, le chef de projet rajoute une fonctionnalité supplémentaire à 5 jours de la

livraison du produit.

Les sections vont porter des numéros allant de 1 à n, n étant le nombre de sections désirées. Si le

numéro de la section est un multiple du mois en cours, alors son prix passe à 3€/mois HT.

En cas de sections offertes, la consigne est d’offrir en priorité les sections à plein tarif, si applicable,

avant d’offrir les sections à tarif préférentiel.