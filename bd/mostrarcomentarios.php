<?php
 require_once('conexao.php');
    
    $query_coments = ("SELECT usuario, coment, data_cmt, hora_cmt FROM post_coments ORDER BY id DESC");
    $query_coments = $pdo->prepare ($query_coments);
    $query_coments -> execute();
    
    while ($row_coments = $query_coments->fetch(PDO::FETCH_ASSOC)):
        extract($row_coments);
        ?>
        
        <div class="coments-box">
                <div class="coments-box-username"> 
                    <img src="../../img/user-pick.png" title="User Pick" class="coments-box-image">
                    <?php echo $usuario ?> 
                </div> 

                <div class="coments-box-coment"> <?php echo $coment ?>  </div> 

                <div class="coments-box-data"> 
                    <img src="../../img/user-clock.svg" title="Clock" class="coments-box-image-clock">    
                    <?php echo $data_cmt .' às '. $hora_cmt ?> 
                </div> 
        </div>
        <?php
    endwhile;