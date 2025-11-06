<?php

    function metricValues($metric_val){

        global $con;

        $query = "SELECT 
                        Metric_val_desc, 
                        Metric_Q_desc 
                    FROM 
                        metric_values 
                    WHERE 
                        Metric_val_no = '".$metric_val."' 
                        AND Status = 1 
                    LIMIT 1 ";

        $fetch = mysqli_query($con, $query);

        $count = mysqli_num_rows($fetch);

        $metric_val_desc = NULL;
        $metric_q_desc   = NULL;

        if($count > 0){

            $row = mysqli_fetch_assoc($fetch);
    
            $metric_val_desc = $row['Metric_val_desc'];
            $metric_q_desc   = $row['Metric_Q_desc'];
        }

        return array(
            'MetricDesc' => $metric_val_desc,
            'MetricQDesc' => $metric_q_desc
        );
    }
?>