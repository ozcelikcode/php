<?php
            include("ayar.php");

            $veri = $vt->prepare("select * from makaleler order by id desc");
            $veri->execute();
            
            while($yeni = $veri->fetch(PDO::FETCH_ASSOC)) {
                echo "
                <li>
                  <a href='sayfa.php?p=".$yeni["id"]."'>".$yeni["baslik"]."</a>
                </li>
                ";
              }

        ?>