<ul class="list-group list-group-flush">
    <?php for($i=0;$i<count($this->books);$i++){ ?>
        <li class="list-group-item"><?php echo $this->books[$i]["title"]; echo " ".$this->books[$i]["author"]; ?></li>
    <?php } ?>
    </ul>
</table>