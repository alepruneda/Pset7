<div>
<table class="table table-condensed">
    <?php
    ("<tr>");
         echo("<th>Symbol</th>");
         echo("<th>Shares</th>");
         echo("<th>Name</th>");
         echo("<th>Price</th>");
         echo("<th>TOTAL</th>");
    print("</tr>");
    
        foreach ($positions as $position)
        {
            ("<tr>");
            echo("<td class\"text-left\">" . $position["symbols"] . "</td>");
            echo("<td class\"text-left\">" . $position["shares"] . "</td>");
            echo("<td class\"text-left\">" . $position["name"] . "</td>");
            echo("<td class\"text-left\">$" . $position["price"] . "</td>");
            echo("<td class\"text-left\">$" . $position["total"] . "</td>");
            echo("</tr>");
        }
    ?>
</table>
</div>