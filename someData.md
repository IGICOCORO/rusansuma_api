
Le nombre de menages avec 0 deces de femmes de 10 et plus 

P05Y	13	Année de naissance
HP06		AGE < 10 HP06
P02		9	Sexe  => 2 FEMME
HDEATH 		DECES !=  0



P23	31	Situation d'activité
============================
1	Occupé
2	Recherche Premier Emploi
3	Chômeur
4	Elève/Etudiant
5	Femme au foyer
6	Rentrier
7	Retraité
8	Invalide
9	Autre

AIMERIE PATRICK

P27		35	Etat matrimonial
P28M	36	Naissances vivantes : Masculin
P28F	37	Naissances vivantes : Féminin
P29M	38	Survivants : Masculin
P29F	39	Survivants : Féminin
P30M	40	Naissances vivantes des 12 derniers mois : Masculin
P30F	41	Naissances vivantes des 12 derniers mois : Féminin
P31M	42	Survivants des 12 derniers mois : Masculin
P31F	43	Survivants des 12 derniers mois : Féminin

============================================== 




WHEN 0 THEN "Sans handicap"
WHEN 1 THEN "Aveugle"
WHEN 2 THEN "Sourd"
WHEN 3 THEN "Muet"
WHEN 4 THEN "Sourd/muet"
WHEN 5 THEN "Infirme des membres inférieurs"
WHEN 6 THEN "Infirme des membres supérieurs"
WHEN 7 THEN "Déficience mentale"
WHEN 8 THEN "Autre handicap"

