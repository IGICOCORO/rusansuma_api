Questionnaire menage ordinaire
========================================================================
Nombre de menages avec "0" deces:(D1a=2 & D1b=0)
------------------------------------------------------------------------
D1a=2	=> s'il y a eu des décès dans ce ménage "Nombre"
D1b=0	=> pas eu des décès dans ce ménage "0"

-------------------------------------------------------------------------
Nombre de menages avec "0" deces / Nombre de menages : % (D1a=2 et D1b=0)
-------------------------------------------------------------------------
D1a=2	=> s'il y a eu des décès dans ce ménage "Nombre"
D1b=0	=> pas eu des décès dans ce ménage "0"

-----------------------------------------------------------------------------------------
Nombre de menages avec "0" deces de femmes de 10 ans et plus : 
[ (D1a=2 & D1b=0) ou ( (D1b # 0 ) & (D2=1)  ) ou  ( (D1b # 0 ) & (D2=2)  )  & (P06< 10) ]
-----------------------------------------------------------------------------------------

D1a=2	=> s'il y a eu des décès dans ce ménage "Nombre"
D1b=0	=> pas eu des décès dans ce ménage "0"
D1b # 0	=> s'il y a eu des décès dans ce ménage "Nombre"
D2=1	=> Le sexe du décédé "1.Masculin"
D2=2	=> Le sexe du décédé "2. Féminin"
P06< 10	=> Si lâge en années révolues de (NOM) est supérieur à 10

-----------------------------------------------------------------------------------------
Nombre de menages avec "0" décès de femmes de 10 ans et plus / Nombre de menages : 
 %  [ (D1a=2 & D1b=0) ou ( (D1b # 0 ) & (D2=1)  ) ou  ( (D1b # 0 ) & (D2=2)  )  & (P06< 10) ]
-----------------------------------------------------------------------------------------

D1a=2	=> s'il y a eu des décès dans ce ménage "Nombre"
D1b=0	=> pas eu des décès dans ce ménage "0"
D1b # 0	=> s'il y a eu des décès dans ce ménage "Nombre"
D2=1	=> Le sexe du décédé "1.Masculin"
D2=2	=> Le sexe du décédé "2. Féminin"
P06< 10	=> Si lâge en années révolues de (NOM) est supérieur à 10


-----------------------------------------------------------------------------------------
Nombre de menages avec "0" décès maternel de femmes de 10 ans et plus : 
 [ (D1a=2 & D1b=0) ou ( (D1b # 0 ) & (D2=1)  ) ou  ( (D1b # 0 ) & (D2=2)  )  & (P06< 10)  ou  ( (D1b # 0 ) & (D2=2)  & (P06 >= 10) & (D7=2) ) ]
-----------------------------------------------------------------------------------------

D1a=2	=> s'il y a eu des décès dans ce ménage "Nombre"
D1b=0	=> pas eu des décès dans ce ménage "0"
D1b # 0	=> s'il y a eu des décès dans ce ménage "Nombre"
D2=1	=> Le sexe du décédé "1.Masculin"
D2=2	=> Le sexe du décédé "2. Féminin"
P06< 10	=> Si lâge en années révolues de (NOM) est inférieur à 10
P06 >= 10 => Si lâge en années révolues de (NOM) est supérieur ou égale à 10
D7=2	=> la cause de son décès est : Assassinat /crimes /Empoisonnement/Sorcellerie/Maladie/Accident/Suicide/NSP " 2. Non"

-----------------------------------------------------------------------------------------
Nombre de menages avec "0" deces maternel de femmes de 10 ans et plus (M1): 
 [ (D1a=2 & D1b=0) ou ( (D1b # 0 ) & (D2=1)  ) ou  ( (D1b # 0 ) & (D2=2)  )  & (P06< 10)  ou  ( (D1b # 0 ) & (D2=2)  & (P06 >= 10) & (D7=2) ) ]
-----------------------------------------------------------------------------------------

D1a=2	=> s'il y a eu des décès dans ce ménage "Nombre"
D1b=0	=> pas eu des décès dans ce ménage "0"
D2=2	=> Le sexe du décédé "2. Féminin"
D1b # 0	=> s'il y a eu des décès dans ce ménage "Nombre"
P06< 10	=> Si lâge en années révolues de (NOM) est inférieur à 10
P06 >= 10 => Si lâge en années révolues de (NOM) est supérieur ou égale à 10
(M1)	=> Module 1

-----------------------------------------------------------------------------------------
Nombre de menages avec "0" deces maternel de femmes de 10 ans et plus / Nombre de menages (M2): 
 %  [ (D1a=2 & D1b=0) ou ( (D1b # 0 ) & (D2=1)  ) ou  ( (D1b # 0 ) & (D2=2)  )  & (P06< 10)  ou  ( (D1b # 0 ) & (D2=2)  & (P06 >= 10) & (D7=2) ) ]
-----------------------------------------------------------------------------------------

All variables are already done above

-----------------------------------------------------------------------------------------
Nombre de menages avec "0" deces maternel de femmes de 10 ans et plus (M3): 
  [ (D1a=2 & D1b=0) ou ( (D1b # 0 ) & (D2=1)  ) ou  ( (D1b # 0 ) & (D2=2)  )  & (P06< 10)  ou  ( (D1b # 0 ) & (D2=2)  & (P06 >= 10) & ( D4 # 1) & ( D5 # 1) & ( D6 # 1) ) ]
-----------------------------------------------------------------------------------------

D4 # 1	=> Décès lie a la grossesse : la réponse est "2. Non"
D5 # 1	=> Décès lie a laccouchement : la réponse est "2. Non"
D6 # 1	=> Décès dans les 6 semaines suivant laccouchement, suite a une cause liee a la grossesse ou a l'accouchement : la 	   réponse est "2. Non"

-----------------------------------------------------------------------------------------
Nombre de menages avec "0" deces maternel de femmes de 10 ans et plus / Nombre de menages (M4): 
  %   [ (D1a=2 & D1b=0) ou ( (D1b # 0 ) & (D2=1)  ) ou  ( (D1b # 0 ) & (D2=2)  )  & (P06< 10)  ou  ( (D1b # 0 ) & (D2=2)  & (P06 >= 10) & ( D4 # 1) & ( D5 # 1) & ( D6 # 1) ) ]
-----------------------------------------------------------------------------------------

All variables are already done above 

-----------------------------------------------------------------------------------------
Nombre de personne avec situation de résidence non déclarée /Population: 
  % P04c = ND
-----------------------------------------------------------------------------------------
===============Demo Queries form localhost Using data census 2008========================

1) Type d'habitation Par commune
----------------------------------------------------
SELECT ID02 Cummune,SUM(ID08) AS "Nombre Menage", 
CASE
	WHEN H01 =1 THEN "Urbain"
	WHEN H01 =2 THEN "Rural"
END AS "Localité"

FROM feuil GROUP BY ID02; 

2) Nombre de pièces à usage d'habitation par Commune
----------------------------------------------------
SELECT ID02 Cummune,SUM(H02) AS "Nombre de pièces" FROM feuil1 GROUP BY ID02; 

3) Nombre de Maison à Materiaux:  [H03]de toiture par Commune,[H04]Matériaux pavement
 Q: En quels matériaux est la toiture ? 
------------------------------------------------------

SELECT ID02 Cummune,SUM(ID08) AS "Nombre Menage par commune", 
CASE
	WHEN H03 =1 THEN "Tôle"
	WHEN H03 =2 THEN "Tuile locale"
	WHEN H03 =3 THEN "Tuile /Ardoise industrielles"
	WHEN H03 =4 THEN "Béton"
	WHEN H03 =5 THEN "Cartons / sheeting"
	WHEN H03 =6 THEN "Paille "
	WHEN H03 =7 THEN "Autres  "
END AS "Materiaux de toiture"

FROM feuil1 GROUP BY ID02; 

4) [H04] Matériaux murs exterieurs
   Q: Avec quel type de matériaux les murs extérieurs de cette maison sont-ils construits?
------------------------------------------------------------------------------------------

SELECT ID02 Cummune,ID08 AS "Nombre Menage par commune", H04, 
	CASE H04 
    	WHEN 1 THEN "Bois/pisé non cimenté" 
        WHEN 2 THEN "Bois/pisé/cimenté" 
        WHEN 3 THEN "Briques adobes" 
        WHEN 4 THEN "Briques cuites" 
        WHEN 5 THEN "Blocs ciment / Béton" 
        WHEN 6 THEN "Pierres" 
        WHEN 7 THEN "Planches" 
        WHEN 8 THEN "Plastique/sheeting/Cartons " 
        WHEN 9 THEN "Autres" 
     END Materiaux_de_toiture 
   FROM feuil GROUP BY ID02 ORDER BY ID02

SELECT 
    customerName, 
    orderCount,
    CASE orderCount
	WHEN 1 THEN 'One-time Customer'
        WHEN 2 THEN 'Repeated Customer'
        WHEN 3 THEN 'Frequent Customer'
        ELSE 'Loyal Customer'
	end customerType
FROM
    cte
ORDER BY customerName;

4) [H05] Matériaux pavement
-----------------------------------------






