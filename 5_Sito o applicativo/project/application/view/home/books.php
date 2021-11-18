<a href="<?php echo URL ?>home/viewBooks">ciao</a>
<table>
    <?php for($i=0;$i<count($this->books);$i++){ ?>
        <tr>
            <td><?php echo $this->books[$i]["id"]; ?></td>
            <td><?php echo $this->books[$i]["title"]; ?></td>
            <td><?php echo $this->books[$i]["author"]; ?></td>
        </tr>
    <?php } ?>
</table>