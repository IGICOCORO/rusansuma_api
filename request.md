## H03		10		Materiaux de toiture

SELECT count(*) as totalType ,H03 as typeToiture,  ID02 as communes from feuil GROUP BY typeToiture,  communes;

## H04		11		Materiaux murs exterieurs

SELECT count(*) as totalType ,H03 as typeToiture,  ID02 as communes from feuil GROUP BY typeToiture,  communes;