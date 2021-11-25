<ul class="list-group list-group-flush">
    <?php for($i=0;$i<count($this->rating);$i++){ ?>
        <li class="list-group-item"><?php echo $this->rating[$i]["title"]; echo " valutazione: ".$this->rating[$i]["valutazione"]; ?></li>
    <?php } ?>
    </ul>
</table>