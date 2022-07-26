SELECT * FROM (
	    SELECT CITY, MIN(CHAR_LENGTH(CITY))
	    FROM STATION
	    GROUP BY CITY
	    ORDER BY 2 ASC, 1 ASC
	    LIMIT 1
) AS A
UNION ALL
SELECT * FROM (
	    SELECT CITY, MAX(CHAR_LENGTH(CITY))
	    FROM STATION
	    GROUP BY CITY
	    ORDER BY 2 DESC, 1 DESC
	    LIMIT 1
) AS B;
