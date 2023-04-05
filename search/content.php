<div class="columns">
    <div class="column is-12-desktop is-12-mobile" style="width: 10%">
        <span class="dropdown-content is-small">
            <select name="orde" id="orde" class="buttona" onchange="order_by(); return false;" style="font-family: Roboto; border:1px solid #CCCCCC; color:#2a2727; font-weight: 800">
            <?php if ($order == 'ORDER BY date ASC') { ?>
            <option selected="true" disabled="disabled">Date</option>
            <option value="ORDER-BY-title-ASC">Title</option>
            <?php } if ($order == 'ORDER BY title ASC') { ?>
            <option selected="true" disabled="disabled">Title</option>
            <option value="ORDER-BY-date-ASC">Date</option>
            <?php } ?>
            </select>
        </span>
    </div>

    <div class="column is-10-desktop is-12-mobile">
        <?php
        $res = $conn->query($sql);

        while($row = $res->fetch_assoc()) {
            $id=$row['id'];
            $url=$row['url'];
            $company=$row['company'];
            $name=$row['title'];
            $desc=$row['desc'];
        
        ?>

    <div class="columns is-multiline is-mobile" style="border-bottom: 11px solid #f6f7f8; backgroud: white; margin-bottom:10px;">
        <div class="column is-12-mobile has-text-left" style="border-bottom: 1px solid #e3e2e2; margin-left:0px; background-color: #e2e1e1">
        <h3><a target="_blank" href="<?php echo $url; ?>" style="font-weight:600; letter-spacing:0.1px;"><?php echo $name; ?></a></h3>
        <div class="res_desc">
            <?php echo $desc; ?><br /><em><?php echo $company ?></em>
        </div>
        </div>
        </div>

        <?php
        }
        ?>
    </div>
</div>