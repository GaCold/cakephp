<html>
<body>
    <?php
    echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled'));
    echo " | ".$this->Paginator->numbers()." | "; 
    echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled'));
    echo " Page ".$this->Paginator->counter(); 
    ?>
    <?php
    if($data==NULL){
        echo "<h2>Dada Empty</h2>";
    }else{
        echo "<table>
        <tr>
        <td>id</td>
        <td>Title</td>
        <td>Des</td>
        </tr>";
        foreach($data as $item){
            echo "<tr>";
            echo "<td>".$item['Book']['id']."</td>";
            echo "<td><a href='' >".$item['Book']['title']."</a></td>";
            echo "<td>".$item['Book']['description']."</td>";echo "</tr>";
        }
    }
    ?>
</body>
</html>P