## H03		10		Materiaux de toiture

SELECT count(*) as totalType ,H03 as typeToiture,  ID02 as communes from feuil GROUP BY typeToiture,  communes;

## H04		11		Materiaux murs exterieurs

SELECT count(*) as totalType ,H03 as typeToiture,  ID02 as communes from feuil GROUP BY typeToiture,  communes;

H05		12		Matériaux pavement

SELECT count(*) as totalType ,H05 as materiauxPavament,  ID02 as communes from feuil GROUP BY H05,  ID02;


Quel est le principal  mode d’approvision-nement en eau dans ce  ménage ?

## H06		13		Mode d'approvisionnement en eau

SELECT count(*) as totalType ,H06 as modeApprovisionement,  ID02 as commune from feuil GROUP BY H06,  ID02;


Quel est le principal mode d’éclairage utilisé dans ce ménage ?

## H07		14		Mode d'éclairage


II PREMIERE QUESTION
====================
- nombre de deces par ZD,Province,commune,colline ....

ID01	1	Province
select sum(HDEATH) AS nbre_deces from  hlsample WHERE ID01=1;
ID02	2	Commune
select sum(HDEATH) AS nbre_deces from  hlsample WHERE ID02=1;
ID03	3	Colline
select sum(HDEATH) AS nbre_deces from  hlsample WHERE ID03=1;
ID05	4	Zone de dénombrement
select sum(HDEATH) AS nbre_deces from  hlsample WHERE ID05=1;


- nbre de chommage  par ..... (nkuko kwohejuru)

ID01	1	Province
select count(P23) from  hlsample WHERE p23=3 AND ID01=1;
ID02	2	Commune
select count(P23) from  hlsample WHERE p23=3 AND ID02=1;
ID03	3	Colline
select count(P23) from  hlsample WHERE p23=3 AND ID03=1;
ID05	4	Zone de dénombrement
select count(P23) from  hlsample WHERE p23=3 AND ID05=1;


- nbre de natalite par ...  (nkuko kwohejuru)
============================================ 

ID01	1	Province

select sum(P28M) as total_garcon,sum(P28F) as total_fille ,sum(P28F + P28M) as total from hlsample WHERE ID01=1;

ID02	2	Commune

select sum(P28M) as total_garcon,sum(P28F) as total_fille ,sum(P28F + P28M) as total from hlsample WHERE ID02=1;

ID03	3	Colline

select sum(P28M) as total_garcon,sum(P28F) as total_fille ,sum(P28F + P28M) as total from hlsample WHERE ID03=1;

ID05	4	Zone de dénombrement

select sum(P28M) as total_garcon,sum(P28F) as total_fille ,sum(P28F + P28M) as total from hlsample WHERE ID05=1;



- nbre d'handicap par type d'handicap par ZD .........  (nkuko kwohejuru)




Variable	Position	Etiquette

ID01	1	Province
ID02	2	Commune
ID03	3	Colline
ID05	4	Zone de dénombrement
ID07	5	Habitation
ID08	6	Ménage

ID09	7	N° Questionnaire
P01		8	Numéro d'ordre
P02		9	Sexe
P03		10	Situation de résidence
P04		11	Lien de parenté
P05M	12	Mois de naissance
P05Y	13	Année de naissance
P06		14	Age en années
P07		15	Enregistrement a l'etat civil
P08		16	Lieu de naissance
P09		17	Nationalité actuelle
P10		18	Durée de résidence
P11		19	Dernier lieu de résidence
P12		20	Résidence il ya 5 ans
P13		21	Lieu de résidence avant octobre 1993
P14		22	Religion
P15		23	Handicap majeur
P16		24	Cause du handicap
P17		25	Survie des parents :Père
P18		26	Survie des parents :Mère
P19		27	Fréquentation scolaire et préscolaire
P20		28	Niveau d'instruction
P21		29	Aptitude à lire et écrire
P22		30	Diplôme le plus élevé obtenu
P23		31	Situation d'activité
P24		32	Emploi exercé
P25		33	Statut dans l'emploi
P26		34	Branche d'activité
P27		35	Etat matrimonial
P28M	36	Naissances vivantes : Masculin
P28F	37	Naissances vivantes : Féminin
P29M	38	Survivants : Masculin
P29F	39	Survivants : Féminin
P30M	40	Naissances vivantes des 12 derniers mois : Masculin
P30F	41	Naissances vivantes des 12 derniers mois : Féminin
P31M	42	Survivants des 12 derniers mois : Masculin
P31F	43	Survivants des 12 derniers mois : Féminin
URPOPUL	44	Milieu de résidence
HP06	45	Age
HLMEN	46	Type de ménage
ID06A	47	Milieu de vie
P21L	48	Langue d'alphabétisation
P24A	49	Emploi exercé
P26A	50	Branche d'activité
H01		51	Type d'habitation
H02		52	Nombre de pièces à usage d'habitation
H03		53	Materiaux de toiture
H04		54	Materiaux murs exterieurs
H05		55	Matériaux pavement
H06		56	Mode d'approvisionnement en eau
H07		57	Mode d'éclairage
H08		58	Source d'énergie pour la cuisson
H09		59	Type de lieu d'aisance
H10		60	Mode d'évacuation des déchets ménagers
H11		61	Mode d'évacuation des eaux usées
H12		62	Titre d'occupation de la maison
H13A	63	Radio
H13B	64	Tétévision
H13C	65	Radio et Télévision
H13D	66	Connexion internet
H13E	67	Autre information
H13F	68	Aucun information
H14A	69	Telephone fixe
H14B	70	Telephone mobile
H14C	71	Telephones fixe et mobile
H14D	72	Internet
H14E	73	Autre communication
H14F	74	Aucun communication
H15A	75	Véhicule
H15B	76	Moto
H15C	77	Velo
H15D	78	Sans moyen de transport
H16A	79	Gros betail
H16B	80	Moutons et chevres
H16C	81	Porcs
H16D	82	Volailles
H16E	83	Lapins
H16F	84	Possession de betail
H17		85	Possession terre
HDEATH	86	Nombre de décès les 12 derniers mois
HEMIG	87	Nombre de départs à l'étranger depuis octobre 93
HIMIG	88	Nombre de retours depuis août 2000
HINT	89	Qualité de la personne ayant répondu
ID06	90	Milieu
TYPMEN	91	Type de ménage
HAB00	92	vide habit
URHABIT	93	Milieu de résidence
P02CM	94	Sexe du CM
P06CM	95	Age du CM
P14CM	96	Religion du CM
P15CM	97	Handicap majeur du CM
P16CM	98	Cause du handicap CM
P20CM	99	Niveau d'instruction du CM
P21CM	100	Alphabétisation du CM
P22CM	101	Dernier diplôme du CM
P23CM	102	Situation d'activité du CM
P24CM	103	Emploi exercé par le CM
P25CM	104	Statut du CM dans l'emploi
P26CM	105	Branche d'activité du CM
P27CM	106	Etat matrimonial du CM




