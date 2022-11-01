SELECT s.sportsman_name AS name, COUNT(sportsman_id) AS participation FROM sportsmans s
JOIN results r ON s.id = sportsman_id
GROUP BY s.sportsman_name
ORDER BY participation DESC
LIMIT 5;