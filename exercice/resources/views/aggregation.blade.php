<html>
    <body>
        <div>
            <?php
                while($agg->hasnext()) {
                    echo get_class($agg->next());
                }
            ?>
        </div>
    </body>
</html> 