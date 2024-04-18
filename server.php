<?php

/*
 2 - Quindi il nostro file server.php ad esempio diventa un end point che con axios chiamiamo per recuperare questi dati e usarli (ovvio tra back end e front end ci deve essere un accordo su che cosa si chiede e cosa si riceve per questo esistono le documentazioni).
3 - Significa che il server.php leggerà il file dischi.json (un domani potrà essere un database o altro lìimportante che poi restituisce i dati sempre nella maniera accordata cosi il front end continua a funzionare, dove li prende e come li elabora i dati al front end non interesserà affinche rimangono uguali)
E sempre il server.php avrà i giusti accorgimenti per restituire i dati in formato in cui axios li vuole e cioè json e qui vi ho dato un suggerimento che completa l'esercizio quindi lavorate!
 */

$string = file_get_contents('./assets/dischi.json');

$dischi = json_decode($string, true);

header("Content-Type: application/json");
echo json_encode($dischi);
?>