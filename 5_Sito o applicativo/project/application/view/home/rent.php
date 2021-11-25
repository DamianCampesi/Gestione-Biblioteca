<ul class="list-group list-group-flush">
    <?php for($i=0;$i<count($this->rent);$i++){ ?>
        <li class="list-group-item"><?php echo $this->rent[$i]["title"]; ?></li>
    <?php } ?>
    </ul>
</table>