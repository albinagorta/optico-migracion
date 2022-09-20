<?php

    const DBDATAMART = 'opticore_datamart';
    public static function getAllProcesos($params)
    {
        $var=$params['fecha'],
        try {
			return dbSelect(                
                "
                SELECT
                x1.fecha,
                x1.id_ticket_proceso,
                x1.nombre_ticket_proceso,
                SUM(x1.terminado_hoy) as terminado_hoy,
                SUM(x1.terminado_acumulado) as terminado_acumulado,
                SUM(x1.pendiente_hoy) as pendiente_hoy,
                SUM(x1.pendiente_acumulado) as pendiente_acumulado,
                SUM(x1.creado) as creado
                FROM
                (	SELECT
                    ".$var." AS fecha,
                 	tp.nombre_ticket_proceso,
                 	tpv.id_ticket_proceso,
                    IF(tt.estado_ticket = 0 AND DATE(tt.fh_fin) = ".$var.", 1 ,0) AS terminado_hoy,
                 	IF(tt.estado_ticket = 0 AND DATE(tt.fh_crea) < ".$var.", 1 ,0) AS terminado_acumulado,
                    IF(tt.estado_ticket = 1 AND DATE(tt.fh_crea) = ".$var.", 1 ,0) AS pendiente_hoy,
                 	IF(tt.estado_ticket = 1 AND DATE(tt.fh_crea) < ".$var.", 1 ,0) AS pendiente_acumulado,
                 	IF(DATE(tt.fh_crea) = ".$var.", 1 ,0) AS creado
                    FROM ".DATABASETICKET.".tic_ticket tt
                 	JOIN ".DATABASETICKET.".tic_ticket_proceso_version tpv ON tpv.id_ticket_proceso_version=tt.id_ticket_proceso_version
                 	JOIN ".DATABASETICKET.".tic_ticket_proceso tp ON tp.id_ticket_proceso=tpv.id_ticket_proceso
                    )x1
                GROUP BY x1.id_ticket_proceso
                "
                // ,
                // array(
                //     $params['fecha'],
                //     $params['fecha'],
                //     $params['fecha'],
                //     $params['fecha']
                // )
            );
		}
		catch(Exception $e){
			$GLOBALS["dberror"]=$e->getMessage();
			return false;
		}
    }

    $getAllProcesos = getAllProcesos();
    die(json_encode($getAllProcesos));

    // public static function insertavgUser($params){
    //     return dbExecute(
    //     "
        // INSERT INTO ".DBDATAMART.".est_dataticket_general (fecha,id_ticket_proceso,nombre_ticket_proceso,
        // terminado_hoy,terminado_acumulado,pendiente_hoy,pendiente_acumulado,creado)
        // values (?,?,?,?,?,?,?,?)
    //     "
    //     ,
    //     array(
    //         $params['fecha'],
    //         $params['id_ticket_proceso'],
    //         $params['nombre_ticket_proceso'],
    //         $params['terminado_hoy'],
    //         $params['terminado_acumulado'],
    //         $params['pendiente_hoy'],
    //         $params['pendiente_acumulado'],
    //         $params['creado']
    //         )
    //     );
    // }
